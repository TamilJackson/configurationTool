@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Apiset Add')
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
            <h3>Create New API</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{asset('apiset/list')}}"> Back</a>
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
            <form class="form-validate" method="POST" action="{{route('apiset-store')}}">
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
                            <label>Product</label>
                        <select class="form-control select2" name="product_id" id="product_id">
                          <option value="">Select Product</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                            <label>Group name</label>
                        <input type="text" class="form-control" placeholder="Name"
                                value=""
                                name="group_name">
                        </div>
                      </div>
                  </div><div class="col-12 col-sm-6">
                      <div class="form-group">
                        <div class="controls">
                            <label>System</label>
                        <select class="form-control select2" name="system_id" id="system_id">
                          <option value="">Select System</option>
                          @foreach ($systems as $key => $system)
                            <option value="{{$system->id}}">{{$system->name}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                            <label>Values to replace</label>
                            <input type="text" class="form-control" placeholder="Name"
                                value=""
                                name="values_to_replace">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="is_active" placeholder="Status">
                            <option value="1">Active</option>
                            <option value="0">Banned</option>
                        </select>
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
<script type="text/javascript">
  $('#system_id').on('change', function() {
      console.log();
        $('#product_id').empty()
        $.ajax({
            url: `/systems/`+this.value+`/products`,
            success: data => {
                data.products.forEach(product =>
                    $('#product_id').append(`<option value="${product.id}">${product.name}</option>`)
                )
            }
        })
    })
</script>
@endsection
