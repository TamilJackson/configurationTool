@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Products List')
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
            <h3>API Set</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{asset('apiset/add')}}"> Add New API</a>
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
                <th>api</th>
                <th>system</th>
                <th>product</th>
                <th>status</th>
                <th>edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $apiset)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $apiset->api }}</td>
                <td>{{ $apiset->system->name }}</td>
                <td>{{ $apiset->product->name }}</td>
                <td>
                @if($apiset->is_active)
                <span class="badge badge-light-success">Active</span>
                @else
                <span class="badge badge-light-danger">Deactivated</span>
                @endif
              </td>
                <td><a href="{{route('apiset-edit',$apiset->id)}}"><i class="bx bx-edit-alt"></i></a></td>
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
