<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Employee Info</title>
     <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="jumbotron">
                <center><h1><u>Employee Info</u></h1></center>
                <a class="btn btn-warning" href="{{ route('export')}}">Export</a>_______________________________________________________________________________________________________________________________________________
                <a class="btn btn-success pull-right" href="{{ route('employees_form')}}"> Create New Employee</a>
                
            </div>
        </div>
    </div>
   
   
    <table class="table table-hover table-responsive">
        <tr bgcolor="#e5ff00">
            <th></th>
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Education Qualification</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Resume</th>
            <th>Action</th>
        </tr>
         @foreach ($employees as $employee)
        <tr>
            <th>{{++$i}}</th>
        	<td> <img src="{{ asset('employee/' . $employee->photo)}}" width="60px;" height="60px;" class="img-circle" alt="Cinque Terre"></td>
        	<td>{{ $employee->firstname }}</td>
        	<td>{{ $employee->lastname }}</td>
        	<td>{{ $employee->date_of_birth }}</td>
        	<td>{{ $employee->education_qualification }}</td>
        	<td>{{ $employee->address }}</td>
        	<td>{{ $employee->email }}</td>
        	<td>{{ $employee->phone }}</td>
        	<td><a href="employee/resumes/{{$employee->resume}}" target="_blank">{{$employee->resume}}</a></td>
            <td><a href="form/{{$employee->id}}"><img src="{{ asset('public/edit.svg')}}"alt="image"></a>
            <a href="view/{{$employee->id}}"><img src="{{ asset('public/view.svg')}}"alt="image"></a>
            <a href="/employee/delete/{{$employee->id}}"><img src="{{ asset('public/delete.svg')}}"alt="image"></a>
            </td>
        </tr>
       @endforeach
    </table>
</body> 
</html>
