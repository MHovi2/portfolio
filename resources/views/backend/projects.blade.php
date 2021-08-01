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
                            <form action="projects" method="POST">
                                @csrf
                                <input type="text" class="form-control" name='id' hidden>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Projects
                                        Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="projectName">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="clintName">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Languages</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="languages">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview
                                        Link</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="previewLink">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control p-2" name="image">
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit & Delete Project</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                <div class="custom-checkbox custom-checkbox-table custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Project Name</th>
                                            <th>Client Name</th>
                                            <th>Language</th>
                                            <th>Preview Link</th>
                                            <th>Imagr</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($info as $info)
                                            <tr>
                                                <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="checkbox-1">
                                                        <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $info['project_name'] }}</td>
                                                <td>{{ $info['clint_name'] }}</td>
                                                <td>{{ $info['language'] }}</td>
                                                <td>{{ $info['preview_link'] }}</td>
                                                <td>
                                                    <div class="badge badge-success">{{ $info['image'] }}</div>
                                                </td>
                                                <td><a href="{{ 'showProject/' . $info['id'] }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger pl-2">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
