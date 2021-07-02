@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Users View')
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/css/pages/app-users.css')}}">
@endsection
@section('content')
<!-- users view start -->
<section class="users-view">
  <!-- users view media object start -->
  <div class="row">
    <div class="col-12 col-sm-7">
    </div>
    <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
      <a href="{{asset('roles/edit')}}" class="btn btn-sm btn-primary">Edit</a>
    </div>
  </div>
  <!-- roles view media object ends -->
  <!-- roles view card data start -->
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-4">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Role Name:</td>
                <td class="users-view-role">Staff</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><span class="badge badge-light-success users-view-status">Active</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-8">
          <div class="table-responsive">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th>Module Permission</th>
                  <th>Read</th>
                  <th>Write</th>
                  <th>Create</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Users</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>No</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Roles</td>
                  <td>No</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>Yes</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- roles view card data ends -->

</section>
<!-- users view ends -->
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('resources/js/scripts/pages/app-roles.js')}}"></script>
@endsection
