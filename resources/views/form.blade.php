<!DOCTYPE html>
<html>
<head>
  <title>Add Employee</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>


<form method="post" action="{{route('save_employees')}}" enctype="multipart/form-data">
 @csrf
 <div class="container">

 <div class="jumbotron">

 <input type="hidden" name="id" value="{{$employee->id}}">

 <div class="form-group">
  <label class="col-md-4 text-right">First Name</label>
  <div class="col-md-8">
   <input type="text" name="first_name" class="form-control input-lg" value="{{$employee->firstname}}" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Last Name</label>
  <div class="col-md-8">
   <input type="text" name="last_name" class="form-control input-lg"  value="{{$employee->lastname}}"/>
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Date of Birth</label>
  <div class="col-md-8">
   <input type="date" name="dob" class="form-control input-lg"  value="{{$employee->date_of_birth}}"/>
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Education Qualification</label>
  <div class="col-md-8">
   <input type="text" name="education_qualification" class="form-control input-lg"  value="{{$employee->education_qualification}}"/>
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Address</label>
  <div class="col-md-8">
   <input type="text" name="address" class="form-control input-lg" value="{{$employee->address}}"/>
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Email</label>
  <div class="col-md-8">
   <input type="email" name="email" class="form-control input-lg" value="{{$employee->email}}"/>
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Contact Number</label>
  <div class="col-md-8">
   <input type="text" name="phone" class="form-control input-lg" value="{{$employee->phone}}"/>
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Select Profile Image</label>
  <div class="col-md-8">
   <input type="file" name="photo" value="{{$employee->photo}}"/> <img src="{{ asset('employee/' . $employee->photo)}}" width="100px;" height="100px;" alt="image" />
  </div>
 </div>
 <br /><br /><br />
  <div class="form-group">
  <label class="col-md-4 text-right">Resume</label>
  <div class="col-md-8">
   <input type="file" name="resume" value="{{$employee->resume}}"/>{{$employee->resume}}
  </div>
 </div>
 <br /><br /><br />
 <div class="form-group text-center">
  <a href="{{ route('list_employees') }}" class="btn btn-danger">Back</a>
  <input type="submit" name="add" class="btn btn-primary" value="Submit" />
 </div>
</div>
</div>
</form>
</body>
</html>


