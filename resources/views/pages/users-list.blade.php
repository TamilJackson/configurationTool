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
            <h3>Users</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{asset('users/add')}}"> Add New User</a>
        </div>
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
                <th>s. no.</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>role</th>
                <th>status</th>
                <th>edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $user)
              <tr>
                <td>{{ ++$i }}</td>
                <td><a href="{{route('users-view',$user->id)}}">{{ $user->name }}</a> </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                  @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                       <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                  @endif
                </td>
                <td>
                @if($user->status)
                <span class="badge badge-light-success">Active</span>
                @else
                <span class="badge badge-light-danger">Deactivated</span>
                @endif
              </td>
                <td><a href="{{route('users-edit',$user->id)}}"><i class="bx bx-edit-alt"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $data->render() !!}
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
<script src="{{asset('resources/js/scripts/pages/app-users.js')}}"></script>
@endsection
