@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Users Edit')
{{-- vendor styles --}}
@section('vendor-styles')

@endsection

{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/css/pages/app-users.css')}}">
@endsection

@section('content')
<!-- users edit start -->
<div class="row">
    <div class="col-12 mb-1">
        <div class="float-left">
            <h3>Create New User</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{asset('users/list')}}"> Back</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
<section class="users-edit">
  <div class="card">
    <div class="card-body">
            <!-- users edit media object ends -->
            <!-- users edit account form start -->
            <form class="form-validate" method="POST" action="{{route('users-store')}}">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name"
                                value=""
                                name="name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                            <label>E-mail</label>
                            <input type="email" class="form-control" placeholder="Email"
                                value=""
                                name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone"
                                value=""
                                name="phone">
                        </div>
                      </div>
                  </div>
                  <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label>Role</label>
                        <select class="form-control select2" name="roles[]" multiple>
                          @foreach ($roles as $key => $role)
                            <option value="{{$role}}">{{$role}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" placeholder="Status">
                            <option value="1">Active</option>
                            <option value="0">Banned</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="********">
                      </div>
                  </div>
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                      <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                        changes</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                </div>
            </form>
            <!-- users add account form ends -->
      </div>
    </div>
  </div>
</section>
<!-- users edit ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('resources/js/scripts/pages/app-users.js')}}"></script>
@endsection
