<!DOCTYPE html>
<html>
<head>
  <title>View Employee</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<div class="content-wrap cndn-wrap">
    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-inner">
            <div class="page-header-content-left">
                <div class="page-header-content button-block">
                    
                </div>
                <div class="page-header-content title-block">
                	<a href="{{ route('list_employees') }}" type="button" class="btn-back btn-img"><img class="img-responsive" src="/employee/public/arrow.png" alt="Back" /></a> <center><h1 class="title"><b>Employee Info</b></h1></center>
                </div><!-- Page Header Content -->
            </div><!-- Page Header Content Left -->
        </div><!-- Page Header Inner -->
    </div><!-- Page Header -->
        <input type="hidden" name="id" id="id" value="{{$employee->id}}">
        <!-- Page Main Content -->
        <div class="page-main-content form-content type2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="page-form pb-80">
                            <div class="flex-wrap">
                                <div class="row">
                                    <div class="col-md-6 border-right">
                                        <table class="table-form-list">
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">First Name:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$employee->firstname}}</span>
                                            </tr>
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Last Name:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$employee->lastname}}</span>
                                            </tr>
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Date of Birth:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$employee->date_of_birth}}</span>
                                                </div>
                                            </tr>
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Education Qualification:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$employee->education_qualification}}</span>
                                                </div><!-- Table Form List Wrap -->
                                            </tr>
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Address:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$employee->address}}</span>
                                                </div><!-- Table Form List Control -->
                                            </tr>
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Email ID:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$employee->email}}</span>
                                                </div><!-- Table Form List Control -->
                                            </tr>
                                            <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Contact Number:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content">{{$employee->phone}}</span>
                                                </div><!-- Table Form List Control -->
                                            </tr>
                                             <tr>
                                                <div class="table-form-list-wrap">
                                                    <label class="table-form-list-label">Resume:&nbsp &nbsp</label>
                                                    <span class="table-form-view-content"><a href="/employee/employee/resumes/{{$employee->resume}}" target="_blank">{{$employee->resume}}</a></span>
                                                </div><!-- Table Form List Control -->
                                            </tr>
                                        </table><!-- Table Form List -->
                                    </div><!-- Column -->
                                </div><!-- Row -->
                            </div><!-- Flex Wrap -->
                        </div><!-- Page Form -->
                    </div><!-- Column -->
                    <div class="col-lg-4">
                        <div class="info-wrap">
	<img src="{{ asset('employee/' . $employee->photo)}}" width="200px;" height="200px;" class="img-responsive" alt="Cinque Terre">
                        </div><!-- Info Wrap -->
                    </div><!-- Column -->
                </div><!-- Row -->
            </div><!-- Container -->
        </div><!-- Page Main Content -->
    </form>
</div><!-- Content Wrap -->
	
</body>
</html>

<!-- Content Wrap -->
<style type="text/css">
.table-form-view-content {
    min-width: 0px !important;
}
}
</style>

