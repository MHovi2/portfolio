@extends('backend.layout')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>SKILLS</h4>
                        </div>

                       <form method="POST" action="{{route('skills')}}">

                        @csrf

                        <div class="card-body">




                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>HTML</label>

                                    <center>
                                        <span id="html_show"></span>
                                    </center>
                                    <input id="html" name="html" type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>CSS</label>

                                    <center>
                                        <span id="css_show"></span>
                                    </center>
                                    <input id="css" name="css" type="range" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>JavaScript</label>

                                    <center>
                                        <span id="js_show"></span>
                                    </center>
                                    <input id="js" name="js" type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>PHP</label>

                                    <center>
                                        <span id="php_show"></span>
                                    </center>
                                    <input id="php" name="php" type="range" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>Laravel</label>

                                    <center>
                                        <span id="laravel_show"></span>
                                    </center>
                                    <input id="laravel" name="laravel" type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>JQuery</label>

                                    <center>
                                        <span id="jquery1_show"></span>
                                    </center>
                                    <input id="jquery1" name="jquery1" type="range" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4 mx-4">
                                <div class="col-md-6">
                                    <label>Word Press</label>

                                    <center>
                                        <span id="wp_show"></span>
                                    </center>
                                    <input id="wp" name="wp" type="range" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Bootstrap</label>

                                     <center>
                                        <span id="bstrap_show"></span>
                                    </center>
                                    <input id="bstrap" name="bstrap" type="range" class="form-control">
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
