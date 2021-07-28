@extends('backend.layout')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Social Media Links</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($info as $info)
                                <form action="social-links" method="POST">
                                    @csrf
                                    <input type="text" class="form-control" name="id" value="{{ $info['id'] }}" hidden>
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facebook</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="link1"
                                                value="{{ $info['link1'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="link2"
                                                value="{{ $info['link2'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Github</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="link3"
                                                value="{{ $info['link3'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dribbble</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="link4"
                                                value="{{ $info['link4'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Publish</button>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
