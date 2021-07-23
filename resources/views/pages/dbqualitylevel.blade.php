@extends('layouts.contentLayoutMaster')

@section('title','Learning Management System')
{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/editors/quill/quill.snow.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/css/pages/app-user.css')}}">
@endsection

{{-- sidebar page icluded --}}

@section('content')
<section id="default-breadcrumb">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="margin-bottom:0">
                        <li class="breadcrumb-item"><a href="{{route('sourcedata-dbmsystem')}}">DB Management System</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$folder}}</li>
                    </ol>
                  </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- email app overlay -->
<section id="stacked-pill">
  <div class="row">
    <div class="col-sm-12">
      <div class="card bg-transparent shadow-none border">
        <div class="card-body">
          <div class="row pills-stacked">
            <div class="col-md-3 col-sm-12">
              <ul class="nav nav-pills flex-column text-center text-md-left">
                <li class="nav-item">
                  @php
                  $i=1;
                  $active='active';
                  @endphp
                  @foreach($dataset as $data)
                  @php
                  $filename = str_replace($client_id.'/dbms/'.$folder.'/dataset', '', $data);
                  $filename = str_replace('.json', '', $filename);
                  $tablename = str_replace('/', '', $filename);
                  if($i!=1)
                  $active='';
                  @endphp
                  <a class="nav-link {{$active}}" id="stacked-pill-{{$i}}" data-toggle="pill" href="#vertical-pill-{{$i}}" aria-expanded="true">{!! $tablename !!}</a>
                  @php
                  $i++;
                  @endphp
                  @endforeach
                </li>
              </ul>
            </div>
            <div class="col-md-9 col-sm-12">
              <div class="tab-content">
                  @php
                  $i=1;
                  $active='active';
                  @endphp
                  @foreach($dataset as $data)
                  @php
                  $filename = str_replace($client_id.'/dbms/'.$folder.'/dataset', '', $data);
                  $filename = str_replace('.json', '', $filename);
                  $tablename = str_replace('/', '', $filename);
                  if($i!=1)
                  $active='';
                  @endphp
                <div role="tabpanel" class="tab-pane {{$active}}" id="vertical-pill-{{$i}}" aria-labelledby="stacked-pill-{{$i}}"
                aria-expanded="true">
                    <!-- table view data start -->
                    <section id="table-success">
                        <div class="card">
                            <!-- rules start -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-primary bg-lighten-1 p-1">
                                            <h4 class="card-title white">Table Rules </h4>
                                            <a class="heading-elements-toggle">
                                                <i class='bx bx-dots-vertical font-medium-3'></i>
                                            </a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li>
                                                        <a data-action="collapse" class="rotate white">
                                                            <i class="bx bx-chevron-down"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-action="close" class="white">
                                                            <i class="bx bx-x"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content collapse pt-2" style="background: #fff;">
                                            <div class="card-body p-0">
                                                 <!-- rules form start -->
                                                <form class="form-validate" method="POST" action="#">
                                                  {{ csrf_field() }}
                                                    <div class="row">
                                                      <div class="col-sm-6">
                                                          <div class="form-group">
                                                            <label>Select Rules</label>
                                                            <select class="form-control" name="rules" placeholder="Rules">
                                                                <option value="1">Generic Rules</option>
                                                                <option value="0">Custom Rule 1</option>
                                                            </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <div class="form-group">
                                                            <label>Apply to all data</label>                      
                                                            <div class="custom-control custom-switch mr-2 mb-1">
                                                                <input type="checkbox" class="custom-control-input" checked id="customSwitch17">
                                                                <label class="custom-control-label" for="customSwitch17">
                                                                    <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                                                    <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <a href="{{route('sourcedata-rules')}}" class="btn btn-light-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 float-left">New Rule</a>
                                                          <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 float-right" data-toggle="modal" data-target="#default">Save</button>
                                                      </div>
                                                    </div>
                                                </form>
                                                <!-- rules form ends -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rules end -->

                            <!--Basic Modal -->
                            <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="myModalLabel1">Rules</h3>
                                            <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                                                <i class="bx bx-x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="mb-0">
                                                Sit back and relax! It will take 24 hours time to apply your rules
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Ok</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- datatable start -->
                            <hr>
                          <div class="card-header p-1">
                                <!-- head -->
                                <h5 class="card-title">Quality Levels</h5>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0 d-flex align-items-center">
                                        <!-- <li class="ml-2"><button class="btn btn-light-primary" data-toggle="modal" data-target="#xlarge">View Data</button></li> 
                                        <li class="ml-2"><button class="btn btn-light-primary">Table Rules</button></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive">

                                @php
                                $json = json_decode(file_get_contents(storage_path('app/'.$client_id.'/dbms/'.$folder.'/metadata/schema_'.$tablename.'.json')),true);
                                @endphp
                                <table id="table-extended-success" class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Column</th>
                                            <th>Discovered Type</th>
                                            <th>Expected Type</th>
                                            <th>Acceptance Level</th>
                                            <th>DQ Audit Score</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($json as $field)
                                          <tr>
                                              <td>{{$field['Field']}}</td>
                                              <td>{{$field['Type']}}</td>
<!--                                               @php
                                              $json = json_decode(file_get_contents(storage_path('app/'.$client_id.'/dbms/'.$folder.'/dataset/'.$tablename.'/columnset/'.$field['Field'].'.json')),true);
                                              @endphp -->
                                              <td></td>
                                              <td>100%</td>
                                              <td></td>
                                              <td><a href="javascript:void(0);" data-toggle="modal" data-target="#xlarge"><i class="bx bx-edit-alt mr-1"></i></a></td>
                                          </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- datatable ends -->
                            <hr>
                                                    <!-- Info table about action starts -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-primary bg-lighten-1 p-1">
                                            <h4 class="card-title white">View Data </h4>
                                            <a class="heading-elements-toggle">
                                                <i class='bx bx-dots-vertical font-medium-3'></i>
                                            </a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li>
                                                        <a data-action="collapse" class="rotate white">
                                                            <i class="bx bx-chevron-down"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-action="expand" class="white">
                                                            <i class="bx bx-fullscreen"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-action="close" class="white">
                                                            <i class="bx bx-x"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content collapse pt-2" style="background: #fff;">
                                            <div class="card-body p-0">
                                                <!-- Zero configuration table -->
                                                <section id="basic-datatable">
                                                  <div class="card">
                                                      <div class="card-body card-dashboard p-0 ">
                                                          <div class="table-responsive">
                                                              <table class="table zero-configuration" id="users-list-datatable">
                                                                @php
                                                                $json = json_decode(file_get_contents(storage_path('app/'.$client_id.'/dbms/'.$folder.'/dataset/'.$tablename.'/rowset.json')),true);

                                                                @endphp
                                                                  <thead>
                                                                      <tr>
                                                                        @php
                                                                        $j=1;
                                                                        foreach ($json as $person) {
                                                                        foreach ($person as $key => $value) {
                                                                            if($j==1)
                                                                            echo '<th>' . $key . '</th>';
                                                                        }   
                                                                        $j++;       
                                                                        }
                                                                        @endphp
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>

                                                                    @php
                                                                    foreach ($json as $person) {
                                                                        echo '<tr>';
                                                                        // each key/value of that record
                                                                        foreach ($person as $key => $value) {
                                                                            echo '<td>' . $value . '</td>';
                                                                        }
                                                                        echo '</tr>';                                                                           
                                                                    }
                                                                    @endphp
                                                                  </tbody>
                                                              </table>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </section>
                                                <!--/ Zero configuration table -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Info table about action Ends -->
                        </div>
                    </section>
                    <!-- table view data ends -->
                </div>
                  @php
                  $i++;
                  @endphp
                  @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Extra Large Modal -->
<div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-l">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel16">Edit quality level</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Expected Type</label>
                                <select name="expectedType" class="form-control">
                                    <option value="String">String</option>
                                    <option value="Integer">Integer</option>
                                    <option value="Date">Date</option>
                                    <option value="Timestamp">Timestamp</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="eventLocation12">Acceptance Level</label>
                                <input name="level" class="form-control" value="99%">
                            </div>
                        </div>
                    </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Save</span>
                </button>
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
    $('.zero-configuration').DataTable();
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
  $(".email-application").find(".list-group-messages a,.list-group-labels a").on('click', function () {
    var $this = $(this);
    $primary = "#5A8DEE";
    if ($(".email-application").find('.list-group-messages a,.list-group-labels a').hasClass('active')) {
      $(".email-application").find('.list-group-messages a,.list-group-labels a').removeClass('active');
      $this.addClass("active");
// live icon change when active state
$(".list-group-messages a").siblings().find(".livicon-evo").updateLiviconEvo({
  strokeColor: '#475f7b'
});
$this.find(".livicon-evo").updateLiviconEvo({
  strokeColor: $primary
});
}
});
</script>
@endsection
