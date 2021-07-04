@extends('layouts.contentLayoutMaster')

@section('title','Learning Management System')
{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/editors/quill/quill.snow.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/css/pages/app-email.css')}}">
@endsection

{{-- sidebar page icluded --}}

@section('content')
<!-- email app overlay -->
    <div class="content-area-wrapper">
      <div class="sidebar-left">
        <div class="sidebar">
<div class="sidebar-content email-app-sidebar d-flex">
  <!-- sidebar close icon -->
  <span class="sidebar-close-icon">
    <i class="bx bx-x"></i>
  </span>
  <!-- sidebar close icon -->
  <div class="email-app-menu">
    <div class="form-group form-group-compose">
    </div>
    <div class="sidebar-menu-list">
      <!-- sidebar menu  -->
      <div class="list-group list-group-messages">
        <a href="javascript:void(0);" class="list-group-item pt-0 active" id="inbox-menu">
          <div class="fonticon-wrap d-inline mr-25">
            <i class="livicon-evo"
              data-options="name: chevron-right-double.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
            </i>
          </div>CRM System1
        </a>
        <a href="javascript:void(0);" class="list-group-item pt-0" id="inbox-menu">
          <div class="fonticon-wrap d-inline mr-25">
            <i class="livicon-evo"
              data-options="name: chevron-right-double.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
            </i>
          </div>CRM System2
        </a>
        <a href="javascript:void(0);" class="list-group-item pt-0" id="inbox-menu">
          <div class="fonticon-wrap d-inline mr-25">
            <i class="livicon-evo"
              data-options="name: chevron-right-double.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
            </i>
          </div>CRM System3
        </a>
        <a href="javascript:void(0);" class="list-group-item pt-0" id="inbox-menu">
          <div class="fonticon-wrap d-inline mr-25">
            <i class="livicon-evo"
              data-options="name: chevron-right-double.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
            </i>
          </div>CRM System4
        </a>
        
      </div>
      <!-- sidebar menu  end-->

      
    </div>
  </div>
</div>
</div>
</div>
<div class="content-right">
  <div class="content-wrapper">
<div class="content-body card-body">
                <form class="form-validate" method="POST" action="{{route('users-store')}}">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-12 col-sm-12">
                      <div class="form-group">
                        <div class="controls">
                            <label>Type</label>
                            <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="bsradio" id="radio1" checked="" data-id="radio1">
                                                    <label for="radio1">API</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="bsradio" id="radio2" data-id="radio2" >
                                                    <label for="radio2">Database</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                    </ul>
                            
                            
                        </div>
                      </div>
                  </div>
                  <div class="col-12 col-sm-6 api">
                      <div class="form-group">
                        <div class="controls">
                            <label>API Key</label>
                            <input type="text" class="form-control" placeholder="API Key"
                                value=""
                                name="apikey">
                        </div>
                      </div>
                    </div>
                  <div class="col-12 col-sm-6 api">
                      <div class="form-group">
                        <div class="controls">
                            <label>Endpoint</label>
                            <input type="text" class="form-control" placeholder="Endpoint"
                                value=""
                                name="endpoint">
                        </div>
                      </div>
                    </div>
                  <div class="col-12 col-sm-12 db">
                      <div class="form-group">
                        <div class="controls">
                            <label>Type</label>
                            <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="dbradio" id="dbradio1" checked="">
                                                    <label for="dbradio1">Mysql</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="dbradio" id="dbradio2" >
                                                    <label for="dbradio2">Pgsql</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="dbradio" id="dbradio3" >
                                                    <label for="dbradio3">Sybase</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="dbradio" id="dbradio4" >
                                                    <label for="dbradio4">Oracle</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="dbradio" id="dbradio5" >
                                                    <label for="dbradio5">Mssql</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                    </ul>
                            
                            
                        </div>
                      </div>
                  </div>
                  <div class="col-12 col-sm-6 db">
                      <div class="form-group">
                        <div class="controls">
                            <label>Host</label>
                            <input type="text" class="form-control" placeholder="Host"
                                value=""
                                name="host">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username"
                                value=""
                                name="username">
                        </div>
                      </div>
                    </div>
                  <div class="col-12 col-sm-6 db">
                      <div class="form-group">
                        <div class="controls">
                            <label>Database Name</label>
                            <input type="text" class="form-control" placeholder="Database Name"
                                value=""
                                name="dbname">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password"
                                value=""
                                name="password">
                        </div>
                      </div>
                    </div>
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                      <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                        changes</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                </div>
            </form>
  </div>
</div>
  </div>
</div>
<div class="app-content-overlay"></div>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
@endsection

@section('page-scripts')
<script type="text/javascript">
$(document).ready(function() {
  $('.db').hide();
    $(':radio').change(function (event) {
    var id = $(this).data('id');
    if(id=='radio1'){
      $('.api').show();
      $('.db').hide();
    }
    else if(id=='radio2'){
      $('.api').hide();
      $('.db').show();
    }
});
});
</script>
@endsection
