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
      <h3>DB Management System</h3>
    </div>
  </div>
</div>
@if(!empty($successMsg))
  <div class="alert alert-success"> {{ $successMsg }}</div>
@endif
<div class="card">
  <div class="card-body">
    <ul class="nav nav-tabs mb-2" role="tablist">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center active" id="available-tab" data-toggle="tab" href="#available" aria-controls="first" role="tab" aria-selected="true">
          <i class="bx bxs-component mr-25"></i><span class="d-none d-sm-block">Available Dumb</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center" id="new_connection-tab" data-toggle="tab" href="#new_connection" aria-controls="periodic" role="tab" aria-selected="false">
          <i class="bx bx-server mr-25"></i><span class="d-none d-sm-block">New Connection</span>
        </a>
      </li>
    </ul>
    <div class="tab-content shadow-none">
      <div class="tab-pane active fade show" id="available" aria-labelledby="available-tab" role="tabpanel">        
        <div class="list-group">
          @foreach($folders as $folder)
          @php
          $foldername = str_replace('dbms/', '', $folder);
          @endphp
          <a href="{{route('sourcedata-dbqualitylevel',$foldername)}}" class="list-group-item list-group-item-action">{!! $foldername !!}</a>
          @endforeach
        </div>
      </div>
      <div class="tab-pane" id="new_connection" aria-labelledby="new_connection-tab" role="tabpanel">
        <div class="row">
          <div class="col-12">
            <h6 class="py-50">DB Connection Details</h6>
          </div>
          <div class="col-12">
            <form class="form-validate setupForm" method="POST" action="{{route('connectdbmsystem')}}">
              {{ csrf_field() }}
              <div class="row">
                
                  <div class="col-12 col-sm-12 db">
                      <div class="form-group">
                        <div class="controls">
                            <label>Type</label>
                            <select class="form-control" name="type" required="">
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
                                name="host" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="controls">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username"
                                value=""
                                name="username" required="">
                        </div>
                      </div>
                    </div>
                  <div class="col-12 col-sm-6 db">
                      <div class="form-group">
                        <div class="controls">
                            <label>Database Name</label>
                            <input type="text" class="form-control" placeholder="Database Name"
                                value=""
                                name="dbname" required="">
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
                  <button type="submit" name="action" value="test" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Test Connection</button>
                  <button type="submit" name="action" value="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                  <button type="reset" class="btn btn-light">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="divider divider-dashed">
            <div class="divider-text"><i class="bx bx-time-five"></i></div>
          </div>
        <div class="row">
          <div class="col-12">
            <h6 class="py-50">DB Connection Scheduler Details</h6>
          </div>
          <div class="col-12">
            <form class="form-validate scheduleForm" method="POST" action="#">
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
                  <div class="tab-content shadow-none">
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
                        <button type="reset" class="btn btn-light">Reset</button>
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
                        <button type="reset" class="btn btn-light">Reset</button>
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
  </div>
</div>
  <div class="app-content-overlay"></div>
  @endsection

  {{-- vendor scripts --}}
  @section('vendor-scripts')
  @endsection

  @section('page-scripts')
  <script type="text/javascript">

</script>
@endsection
