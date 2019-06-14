@extends('layouts.master')

@section('title')
edit Patient
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Patient</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
					</div>
		<form method="post" action="{{url('patients/edit/'.$patient->id)}}" enctype="multipart/form-data">
		@csrf
		<div class="body">
            <div class="row clearfix">
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="first_name" class="form-control" value="{{$patient->first_name}}" required="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="last_name" class="form-control" value="{{$patient->last_name}}" required="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="phone_no" class="form-control" value="{{$patient->phone_no}}" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">                            
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="age" class="datepicker form-control" value="{{$patient->age}}" required="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="address" class="form-control" value="{{$patient->address}}"required="">
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="occupation" class="form-control" value="{{$patient->occupation}}" required="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" name="gender" required="">
                            <option value="{{$patient->gender}}">{{$patient->gender}}</option>
                            <option value="">--Edit Gender --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>                            
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="email" name="email" class="form-control" value="{{$patient->email}}" required="">
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row clearfix">                            
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            @if($patient->picture)
                            <img src="{{url($patient->picture)}}">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-raised g-bg-cyan">update</button>
                    <button type="submit" class="btn btn-raised">Cancel</button>
                </div>
            </div>
        </div>
    </form>
	</div>
</div>
</div>


       <!--  <div class="row clearfix">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h2>Registration Information <small>Description text here...</small> </h2>						
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Doctor Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Staff on Duty">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Ward No.">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">                               
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
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
		</div> -->        
    </div>
</section>
@endsection