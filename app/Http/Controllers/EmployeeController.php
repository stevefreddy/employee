<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Excel;

class EmployeeController extends Controller
{
    public function list(){
    	$employees = Employee::select(
    		'id','firstname','lastname',DB::raw('DATE_FORMAT(employees.date_of_birth,"%d-%m-%Y") as date_of_birth'),'education_qualification','address','email','phone','photo','resume')->get();
    	return view('/list',compact('employees'))->with('i');
    }
    public function form($id=NULL){
    	if($id){
    		$employee = Employee::where('id',$id)->first();
    	}else{
    		$employee = new Employee;
    	}
    	return view('/form',compact('employee',$employee));
    }
    public function save(Request $request){

    	if($request->id){
    		$employee = Employee::where('id',$request->id)->first();
    	}else{
    		$employee = new Employee;
    	}
    	$employee->firstname = $request->first_name;
    	$employee->lastname = $request->last_name;
    	$employee->date_of_birth = $request->dob;
    	$employee->education_qualification = $request->education_qualification;
    	$employee->address = $request->address;
    	$employee->email = $request->email;
    	$employee->phone = $request->phone;
    	
    	if($request->file('photo')){

    	$image = $request->file('photo');
        $name = time(). '.' . $image->getClientOriginalExtension();
        $image->move('employee/', $name);
        $employee->photo = $name;

    	}
    
     	if($request->file('resume')){

        $resume = $request->file('resume');
        $filename = time(). '.' . $resume->getClientOriginalExtension();
        $resume->move('employee/resumes/', $filename);
        $employee->resume = $filename;

		}

        $employee->save();

       return redirect('/list')->with('success', 'Employee Added');

    }

    public function view($id){

    	$employee = Employee::where('id',$id)->first();
    	return view('/view',compact('employee'));
    }

    public function delete($id){

    	$employee = Employee::where('id',$id)->first();
    	$employee->forceDelete();

    	return redirect('/list');
    }
    public function export(){

       $excel_headers = [
			// 'S.No',
			'First Name',
			'Last Name',
			'Date of Birth',
			'Education Qualification',
			'Address',
			'Email',
			'Contact Number',
		];
		$export_data = array();
		$export_data = Employee::select(
			'firstname',
			'lastname',
			DB::raw('DATE_FORMAT(employees.date_of_birth,"%d-%m-%Y") as dob'),
			'education_qualification',
			'address',
			'email',
			'phone'
		)->get();
			
		$title = "Employee_Report_" . Carbon::now();

		$excel_values = [];

		foreach ($export_data as $key => $export_values) {
			
			$excel_values[] = [
				$export_values['firstname'],
				$export_values['lastname'],
				$export_values['wo_desc'],
				$export_values['dob'],
				$export_values['education_qualification'],
				$export_values['address'],
				$export_values['email'],
				$export_values['phone'],
			];
		}
		
		Excel::create($title, function ($excel) use ($excel_values, $excel_headers) {
			$excel->sheet('Export report', function ($sheet) use ($excel_values, $excel_headers) {
				$sheet->fromArray($excel_values, NULL, 'A1');
				$sheet->row(1, $excel_headers);
				$sheet->row(1, function ($row) {
					$row->setBackground('#c4c4c4');
				});
			});
			$excel->setActiveSheetIndex(0);
		})->download('xlsx');
    }
}
