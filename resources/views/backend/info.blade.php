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
                    <div class="form-group row mb-4 mx-4">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4 mx-4">
                        <div class="col-md-6">
                            <label>Age</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Address</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4 mx-4">
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4 mx-4">
                        <div class="col-md-6">
                            <label>Nationality</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Skype</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4 mx-4">
                        <div class="col-md-6">
                            <label>Languages</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Freelance</label>
                            <select class="form-control">
                                <option>-- Choose One --</option>
                                <option>Availabel</option>
                                <option>Unavailable</option>
                                <option>Comming Soon</option>
                              </select>
                        </div>
                    </div>

                  <div class="form-group row mb-4 mx-4">
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary">Publish</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
@endsection
