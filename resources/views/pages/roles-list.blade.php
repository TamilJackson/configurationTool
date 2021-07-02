@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Users List')
{{-- vendor styles --}}
@section('vendor-styles')
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/css/pages/app-users.css')}}">
@endsection
@section('content')
<!-- users list start -->
<div class="row">
    <div class="col-12 mb-1">
        <div class="float-left">
            <h3>Roles</h3>
        </div>
        @can('role-create')
        <div class="float-right">
            <a class="btn btn-primary" href="{{asset('roles/add')}}"> Add New Role</a>
        </div>
        @endcan
    </div>
</div>
<section class="users-list-wrapper">
    @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  <div class="users-list-table">
    <div class="card">
      <div class="card-body">
        <!-- datatable start -->
        <div class="table-responsive">
          <table id="users-list-datatable" class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $key => $role)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                @can('role-edit')
                <a href="{{route('roles-edit',$role->id)}}"><i class="bx bx-edit-alt"></i></a>
                @endcan
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>
<!-- users list ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('resources/js/scripts/pages/app-roles.js')}}"></script>
@endsection
