@extends('backend.layout')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>INFOS</h4>
                        </div>

                       <form method="POST" action="{{route('skills')}}">

                        @csrf

                        <div class="card-body">




                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input type="range" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>Age</label>

                                    <center>
                                        <span id="age_show"></span>
                                    </center>
                                    <input id="age" name="age" type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Address</label>

                                    <center>
                                        <span id="address_show"></span>
                                    </center>
                                    <input id="address" type="range" class="form-control" id="Address">
                                </div>
                            </div>
                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>Phone</label>

                                    <center>
                                        <span id="address_show"></span>
                                    </center>
                                    <input type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="range" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>Nationality</label>

                                    <center>
                                        <span id="address_show"></span>
                                    </center>
                                    <input type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Skype</label>
                                    <input type="range" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4 mx-4">
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Publish</button>
                                </div>
                            </div>
                        </div>

                       </form>
                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection
