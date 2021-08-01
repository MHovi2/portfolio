@extends('backend.layout')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Projects</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('update.project') }}" method="POST">
                                @csrf
                                <input type="text" class="form-control" name='id' hidden value="{{ $info['id'] }}">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Projects
                                        Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="projectName"
                                            value="{{ $info['project_name'] }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="clintName"
                                            value="{{ $info['clint_name'] }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Languages</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="languages"
                                            value="{{ $info['languages'] }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview
                                        Link</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="previewLink"
                                            value="{{ $info['preview_link'] }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control p-2" name="image"
                                            value="{{ $info['image'] }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">Publish</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
