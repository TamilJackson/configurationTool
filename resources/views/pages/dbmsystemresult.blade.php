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
<section class="users-view">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Database Type:</td>
                <td>{{ $schema['type'] }}</td>
              </tr>
              <tr>
                <td>Database Name:</td>
                <td>{{ $schema['database'] }}</td>
              </tr>
              <tr>
                <td>Database Username:</td>
                <td>{{ $schema['username'] }}</td>
              </tr>
              <tr>
                <td>Database Password:</td>
                <td>*********</td>
              </tr>             
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </div>

  @foreach($schema['schema'] as $schemadata)
   <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12">
          <h5 class="mb-1"><i class="bx bx-table"></i> Table Name : {{$schemadata['table_name']}}</h5>
          <div class="table-responsive">
              <table class="table mb-0">
                  <thead>
                      <tr>
                          <th>Column</th>
                          <th>Type</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($schemadata['fields'] as $field)
                      <tr>
                          <td>{{$field['Field']}}</td>
                          <td>{{$field['Type']}}</td>
                          <td><i class="bx bx-edit-alt"></i></td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      </div>
    </div>
    @endforeach



  </div>
</section>
<!-- users edit ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script type="text/javascript">
$(document).ready(function() {
  //     $("#saveAndSchedule").click(function(){
  //     $('.setupForm').hide();    
  //     $('.scheduleForm').show();    
  // });
});
</script>
@endsection
