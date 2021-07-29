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

                        @foreach ($info as $info)
                            <form method="POST" action="{{ route('skills') }}">
                                @csrf
                                <input name="id" type="text" class="form-control" value="{{ $info['id'] }}" hidden>
                                <div class="card-body">
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>HTML</label>

                                            <center>
                                                <span id="html_show">{{ $info['html'] }} %</span>
                                            </center>
                                            <input id="html" name="html" type="range" class="form-control"
                                                value="{{ $info['html'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>CSS</label>

                                            <center>
                                                <span id="css_show">{{ $info['css'] }} %</span>
                                            </center>
                                            <input id="css" name="css" type="range" class="form-control"
                                                value="{{ $info['css'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>JavaScript</label>

                                            <center>
                                                <span id="js_show">{{ $info['js'] }} %</span>
                                            </center>
                                            <input id="js" name="js" type="range" class="form-control"
                                                value="{{ $info['js'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>PHP</label>

                                            <center>
                                                <span id="php_show">{{ $info['php'] }} %</span>
                                            </center>
                                            <input id="php" name="php" type="range" class="form-control"
                                                value="{{ $info['php'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>Laravel</label>

                                            <center>
                                                <span id="laravel_show">{{ $info['laravel'] }} %</span>
                                            </center>
                                            <input id="laravel" name="laravel" type="range" class="form-control"
                                                value="{{ $info['laravel'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>JQuery</label>

                                            <center>
                                                <span id="jquery1_show">{{ $info['jquery1'] }} %</span>
                                            </center>
                                            <input id="jquery1" name="jquery1" type="range" class="form-control"
                                                value="{{ $info['jquery1'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>Word Press</label>

                                            <center>
                                                <span id="wp_show">{{ $info['wp'] }} %</span>
                                            </center>
                                            <input id="wp" name="wp" type="range" class="form-control"
                                                value="{{ $info['wp'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Bootstrap</label>

                                            <center>
                                                <span id="bstrap_show">{{ $info['bstrap'] }} %</span>
                                            </center>
                                            <input id="bstrap" name="bstrap" type="range" class="form-control"
                                                value="{{ $info['bstrap'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Publish</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection
