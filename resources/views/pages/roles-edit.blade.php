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
            <h3>Edit Role</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{asset('roles/list')}}"> Back</a>
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
        <form class="form-validate" method="POST" action="{{route('roles-update',$role->id)}}">
          {{ csrf_field() }}
            <div class="row">
              <div class="col-12 col-sm-12">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $role->name }}" placeholder="Role name">
                  </div>
              </div>
              <div class="col-12 col-sm-12">
                  <div class="form-group">
                    <label>Permissions</label>
                    <div class="row">
                      @foreach($permission as $value)
                    <div class="col-12 col-sm-3">
                          <div class="checkbox"><input type="checkbox" name="permission[]"
                                        id="{{$value->id}}"  @if(in_array($value->id, $rolePermissions)) 'checked' @endif class="checkbox-input" >
                            <label for="{{$value->id}}">{{ $value->name }}</label>
                          </div>
                        </div>
                    @endforeach
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                  changes</button>
                <button type="reset" class="btn btn-light">Cancel</button>
            </div>
          </form>
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
<script src="{{asset('resources/js/scripts/pages/app-roles.js')}}"></script>
@endsection
