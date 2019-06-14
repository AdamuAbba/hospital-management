@extends('layouts.master')

@section('title')
delete Patient
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Delete Patient</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
				
					</div>
		<form method="post" action="{{url('patients/delete/'.$patient->id)}}" enctype="multipart/form-data">
		@csrf
		<div class="body">
            <div class="row clearfix">
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            {{$patient->first_name}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            {{$patient->last_name}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            {{$patient->phone_no}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">                            
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            {{$patient->age}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            {{$patient->address}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            {{$patient->gender}}
                        </div>
                    </div>
                </div>                            
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            {{$patient->email}}
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
                    <button type="submit" class="btn btn-raised g-bg-cyan">delete</button>
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