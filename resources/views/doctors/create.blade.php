@extends('layouts.master')
@section('title')
Doctors create
@endsection

@section('content')
<section class="content">
<div class="container-fluid">
<div class="block-header">
<h2>Add Doctor</h2>
<small class="text-muted">Welcome to Swift application</small>
</div>
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="card">
<div class="header">
<h2>Basic Information <small>Description text here...</small> </h2>
<ul class="header-dropdown m-r--5">
<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
	<ul class="dropdown-menu pull-right">
		<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
		<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
		<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
	</ul>
</li>
</ul>
</div>
<div class="body">
	<form method="post" action="{{url('doctors/create')}}" enctype="multipart/form-data">
	@csrf
<div class="row clearfix">
<div class="col-sm-6">
    <div class="form-group">
        <div class="form-line">
            <input type="text" name="title" class="form-control" placeholder="Title" required="">
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <div class="form-line">
            <input type="text" name="name" class="form-control" placeholder="Name" required="">
        </div>
    </div>
</div>
</div>
<div class="row clearfix">

<!-- <div class="col-sm-3">
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="datepicker form-control" placeholder="Date of Birth">
        </div>
    </div>
</div> -->

<div class="col-sm-3">
    <div class="form-group drop-custum">
        <select class="form-control show-tick" name="gender" required="">
            <option value="">-- Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
</div>
<div class="col-sm-3">
    <div class="form-group">
        <div class="form-line">
            <input type="text" name="speciality" class="form-control" placeholder="Speciality" required="">
        </div>
    </div>
</div>
<div class="col-sm-3">
    <div class="form-group">
        <div class="form-line">
            <input type="text" name="phone_no" class="form-control" placeholder="Phone" required="">
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <div class="form-line">
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="">
        </div>
    </div>
</div>
<!-- <div class="col-sm-6">
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" placeholder="Website URL">
        </div>
    </div>
</div>

 --><div class="col-sm-12">
    <div class="form-group">
        <div class="form-line">
            <input type="file" name="picture" class="form-control no-resize" required=""></input>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
    <button type="submit" class="btn btn-raised">Cancel</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
    
    </div>
</section>

@endsection
