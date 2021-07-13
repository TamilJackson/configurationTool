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
    <div class="row">
    <div class="col-12 mb-1">
        <div class="float-left">
            <h3>CRM System</h3>
        </div>
    </div>
</div>
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
          </div>Pipedrive
        </a>
        <a href="javascript:void(0);" class="list-group-item pt-0" id="inbox-menu">
          <div class="fonticon-wrap d-inline mr-25">
            <i class="livicon-evo"
              data-options="name: chevron-right-double.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
            </i>
          </div>Zoho
        </a>
        <a href="javascript:void(0);" class="list-group-item pt-0" id="inbox-menu">
          <div class="fonticon-wrap d-inline mr-25">
            <i class="livicon-evo"
              data-options="name: chevron-right-double.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
            </i>
          </div>Insightly
        </a>
        <a href="javascript:void(0);" class="list-group-item pt-0" id="inbox-menu">
          <div class="fonticon-wrap d-inline mr-25">
            <i class="livicon-evo"
              data-options="name: chevron-right-double.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
            </i>
          </div>Nutshell
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
                <form class="form-validate setupForm" method="POST" action="{{route('users-store')}}">
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
                            <select class="form-control">
                              <option value="mysql">Mysql</option>
                              <option value="mssql">Mssql</option>
                              <option value="pgsql">Pgsql</option>
                              <option value="sybase">Sybase</option>
                              <option value="oracle">Oracle</option>
                            </select>                          
                            
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
                      <button type="button" id="saveAndSchedule" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save and Schedule</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                </div>
            </form>
            <form class="form-validate scheduleForm" style="display:none;" method="POST" action="{{route('users-store')}}">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-12 col-sm-12">
                    <ul class="nav nav-tabs mb-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="first-tab" data-toggle="tab" href="#first" aria-controls="first" role="tab" aria-selected="true">
                                        <i class="bx bx-import mr-25"></i><span class="d-none d-sm-block">First Import Scheduler</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="periodic-tab" data-toggle="tab" href="#periodic" aria-controls="periodic" role="tab" aria-selected="false">
                                        <i class="bx bx-history mr-25"></i><span class="d-none d-sm-block">Periodic Import Scheduler</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade show" id="first" aria-labelledby="first-tab" role="tabpanel">
                                  <div class="row">
                                  <div class="col-12 col-sm-12">
                                  <div class="form-group">
                                  <div class="controls">
                                      <label>Exact Data Beginning</label>
                                      <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control pickadate" placeholder="Select Date">
                                            <div class="form-control-position">
                                                <i class='bx bx-calendar'></i>
                                            </div>
                                        </fieldset>
                                  </div>
                                </div>
                              </div>
                                  <div class="col-12 col-sm-12">
                                  <div class="form-group">
                                  <div class="controls">
                                      <label>Run once at in GMT</label>
                                      <div class="row">
                                      <div class="col-12 col-sm-6">
                                     <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control pickadate" placeholder="Select Date">
                                            <div class="form-control-position">
                                                <i class='bx bx-calendar'></i>
                                            </div>
                                        </fieldset>
                                      </div>
                                        <div class="col-12 col-sm-6">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control pickatime" placeholder="Select Time">
                                            <div class="form-control-position">
                                                <i class='bx bx-history'></i>
                                            </div>
                                        </fieldset>
                                      </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                      <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                                </div>
                                <div class="tab-pane" id="periodic" aria-labelledby="periodic-tab" role="tabpanel">
                                  <div class="row">
                                  <div class="col-12 col-sm-6">
                                  <div class="form-group">
                                  <div class="controls">
                                      <label>Frequency</label>
                                      <select class="form-control">
                              <option value="daily">Daily</option>
                              <option value="weekly">Weekly</option>
                              <option value="monthly">Monthly</option>
                              <option value="weekdays">Week Days</option>
                            </select>  
                                  </div>
                                </div>
                              </div>
                                  <div class="col-12 col-sm-6">
                                  <div class="form-group">
                                  <div class="controls">
                                      <label>Start at GMT</label>
                                      <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control pickatime" placeholder="Select Time">
                                            <div class="form-control-position">
                                                <i class='bx bx-history'></i>
                                            </div>
                                        </fieldset>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                      <button type="button" id="saveAndSchedule" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                                </div>
                              </div>
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
      $("#saveAndSchedule").click(function(){
      $('.setupForm').hide();    
      $('.scheduleForm').show();    
  });
});
</script>
@endsection
