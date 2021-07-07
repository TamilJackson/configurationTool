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
      <a href="{{route('users-edit',$user->id)}}" class="btn btn-sm btn-primary mr-1">Edit</a>
      <a href="{{route('users-list')}}" class="btn btn-sm btn-primary">Back</a>
    </div>
  </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Name:</td>
                <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <td>Role:</td>
                <td>
                  @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                       <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                  @endif
                </td>
              </tr>
              <tr>
                <td>Email:</td>
                <td>{{ $user->email }}</td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td>{{ $user->phone }}</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td>@if($user->status)
                <span class="badge badge-light-success">Active</span>
                @else
                <span class="badge badge-light-danger">Deactivated</span>
                @endif</td>
              </tr>
              <tr>
                <td>Registered:</td>
                <td>{{ $user->created_at }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card data ends -->

</section>
<!-- users view ends -->
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('resources/js/scripts/pages/app-users.js')}}"></script>
@endsection
