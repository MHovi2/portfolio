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
                        <div class="card-body">
                            @foreach ($info as $info)
                                <form action="info" method="POST">
                                    @csrf
                                    <input type="text" class="form-control" name="id" hidden value="{{ $info['id'] }}">
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="firstName"
                                                value="{{ $info['first_name'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lastName"
                                                value="{{ $info['last_name'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>Age</label>
                                            <input type="number" class="form-control" name="age"
                                                value="{{ $info['age'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $info['address'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" name="phone"
                                                value="{{ $info['phone'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $info['email'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>Nationality</label>
                                            <input type="text" class="form-control" name="nationality"
                                                value="{{ $info['nationality'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Skype</label>
                                            <input type="text" class="form-control" name="skype"
                                                value="{{ $info['skype'] }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mx-4">
                                        <div class="col-md-6">
                                            <label>Languages</label>
                                            <input type="text" class="form-control" name="language"
                                                value="{{ $info['language'] }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Freelance</label>
                                            <select class="form-control" name="freelance">
                                                <option>{{ $info['freelance'] }}</option>
                                                <option value="Availabel">Availabel</option>
                                                <option value="Unavailable">Unavailable</option>
                                                <option value="Comming Soon">Comming Soon</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4 mx-4">
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
