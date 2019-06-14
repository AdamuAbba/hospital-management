@extends('layouts.master')

@section('title')
New Patient
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Patient</h2>
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
		<form method="post" action="{{url('add-patients')}}" enctype="multipart/form-data">
		@csrf
		<div class="body">
            <div class="row clearfix">
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="phone_no" class="form-control" placeholder="Phone No." required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">                            
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="age" class="datepicker form-control" placeholder="Age" required="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="address" class="form-control" placeholder="Address" required="">
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="occupation" class="form-control" placeholder="occupation" required="">
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" name="gender" required="">
                            <option value="">-- Gender --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div> 

                 <!-- <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div> -->                           
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">                            
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" name="picture" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                    <button type="submit" class="btn btn-raised">Cancel</button>
                </div>
            </div>
        </div>
    </form>
	</div>
</div>
</div>


        <div class="row clearfix">
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
		</div>        
    </div>
</section>
@endsection