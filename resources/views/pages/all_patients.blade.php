@extends('layouts.master')

@section('title')
All patients
@endsection

@section('content')
<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Patients</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            @foreach($patients as $patient)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card all-patients">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 text-center m-b-0">
                                <a href="{{url('patient/'.$patient->url)}}" class="p-profile-pix">
                            @if($patient->picture)
                            <img src="{{url($patient->picture)}}" alt="user" class="img-thumbnail img-fluid">
                            @else
                            <img src="http://via.placeholder.com/130x130" alt="" class="img-thumbnail img-fluid">
                            @endif
                            </a>
                            
                            </div>
                            <div class="col-md-8 col-sm-8 m-b-0">
                                <h5 class="m-b-0"><a href="{{url('patient/'.$patient->url)}}" style="color:#000; text-decoration: none;">{{$patient->first_name}} {{$patient->last_name}}</a></h5> <small>Cardio</small>
                                <address class="m-b-0">
                                    {{$patient->address}}<br>
                                    <abbr title="Phone">P:</abbr> (+234) {{$patient->phone_no}} 
                                </address>
                                <a href="{{url('patients/edit/'.$patient->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{url('patients/delete/'.$patient->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection