@extends('layouts.contentLayoutMaster')

@section('title','Learning Management System')
{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/editors/quill/quill.snow.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('resources/css/plugins/forms/wizard.css')}}">
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
                        <li class="breadcrumb-item"><a href="{{route('sourcedata-lms')}}">Learning Management System</a></li>
                        <li class="breadcrumb-item"><a href="{{route('sourcedata-lms')}}">Canvas Instructure Cloud</a></li>
                        <li class="breadcrumb-item"><a href="{{route('sourcedata-qualitylevel')}}">424-Canvas-07_14_2021</a></li>
                        <li class="breadcrumb-item"><a href="{{route('sourcedata-qualitylevel')}}">Courses</a></li>
                        <li class="breadcrumb-item active" aria-current="page">New Rule</li>
                    </ol>
                  </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- vertical Wizard start-->
<section id="vertical-wizard">
    <div class="card">
        <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-12">
                  <div class="form-group">
                    <label>Rule Name</label>
                    <input class="form-control" name="rule_name" placeholder="Rule Name">
                  </div>
              </div>
            </div>
        </div>
        <div class="card-header">
            <h4 class="card-title">Table Rules</h4>
        </div>
        <div class="card-body">
            <form action="#" class="wizard-vertical">
                <!-- step 1 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:list.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">Unique</span>
                        <small class="text-muted">Setup table unique field.</small>
                    </span>
                </h3>
                <!-- step 1 end-->
                <!-- step 1 content -->
                <fieldset class="pt-0">
                    <h6 class="pb-50">Select table unique field</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="mr-2">Columns :</label>
                                <div class="c-inputs-stacked">
                                    <div class="d-inline-block mr-2">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox1">
                                                <label for="checkbox1">Course_id</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="d-inline-block mr-2">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox2">
                                                <label for="checkbox2">Course_description</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="d-inline-block">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox3">
                                                <label for="checkbox3">Course_name</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 1 content end-->
                <!-- step 2 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:narrow-screen.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">table label</span>
                        <small class="text-muted">Choose your table labels.</small>
                    </span>
                </h3>
                <!-- step 2 end-->
                <!-- step 2 content -->
                <fieldset class="pt-0">
                    <h6 class="py-50">Setup Your Table Labels</h6>
                    <div class="row">
                        <div class="col-sm-6">                     
                            <div class="form-group">
                                <label>Primary Table</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch10">
                                    <label class="custom-control-label" for="customSwitch10">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div>                         
                            <div class="form-group">
                                <label>Select Lookup Column</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value="Column_id">Column_id</option>
                                    <option value="Column_description">Column_description</option>
                                    <option value="Column_name">Column_name</option>
                                </select>
                            </div>         
                        </div>
                        <div class="col-sm-6">                         
                            <div class="form-group">
                                <label>Lookup Table</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch11">
                                    <label class="custom-control-label" for="customSwitch11">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label>Table Name</label>
                                <input type="text" class="form-control" placeholder="Table Name">
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <button class="btn btn-icon rounded-circle btn-primary" type="button" data-repeater-create="">
                                <i class="bx bx-plus"></i>
                            </button>
                            <span class="ml-1 font-weight-bold text-primary">ADD NEW</span>
                        </div>
                    </div>
                </fieldset>
                <!-- step 2 content end-->
                <!-- section 3 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:sort.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">Relations</span>
                        <small class="text-muted">add relationship.</small>
                    </span>
                </h3>
                <!-- section 3 end-->
                <!-- step 3 content -->
                <fieldset class="pt-0">
                    <h6 class="py-50">Set relationships</h6>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Table</label>
                                <select name="delivery" class="form-control">
                                    <option value="">Select a Table</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="eventLocation12">Column</label>
                                <select name="preferreddelivery" class="form-control">
                                    <option value="">Select a Column</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label></label>                         
                                <div class="c-inputs-stacked">
                                    <div class="d-inline-block">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox4">
                                                <label for="checkbox4"></label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>   
                        </div>  
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Table</label>
                                <select name="delivery" class="form-control">
                                    <option value="">Select a Table</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="eventLocation12">Column</label>
                                <select name="preferreddelivery" class="form-control">
                                    <option value="">Select a Column</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label></label>                         
                                <div class="c-inputs-stacked">
                                    <div class="d-inline-block">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox5">
                                                <label for="checkbox5"></label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>   
                        </div>                   
                        <div class="col-12 mb-2">
                            <button class="btn btn-icon rounded-circle btn-primary" type="button" data-repeater-create="">
                                <i class="bx bx-plus"></i>
                            </button>
                            <span class="ml-1 font-weight-bold text-primary">ADD NEW</span>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Self Parent Child Join</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch12">
                                    <label class="custom-control-label" for="customSwitch12">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div> 
                        </div>
                    </div>
                </fieldset>
                <!-- step 3 content end-->
                <!-- step 4 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:morph-add-remove.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">Transformations</span>
                        <small class="text-muted">Pivot/Unpivot Data.</small>
                    </span>
                </h3>
                <!-- step 4 end-->
                <!-- step 4 content -->
                <fieldset class="pt-0">
                    <h6 class="py-50">Pivot Data</h6>
                    <div class="row">
                        <div class="col-sm-6">                                                   
                            <div class="form-group">
                                <label>Select Column</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value="Column_id">Column_id</option>
                                    <option value="Column_description">Column_description</option>
                                    <option value="Column_name">Column_name</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-sm-6">                         
                            <div class="form-group">
                                <label>Pivot after all the transformation on the column</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch13">
                                    <label class="custom-control-label" for="customSwitch13">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>                  
                        <div class="col-12 mb-2">
                            <button class="btn btn-icon rounded-circle btn-primary" type="button" data-repeater-create="">
                                <i class="bx bx-plus"></i>
                            </button>
                            <span class="ml-1 font-weight-bold text-primary">ADD NEW</span>
                        </div>
                    </div>
                    <hr>
                    <h6 class="py-50">Unpivot Data</h6>
                    <div class="row">                 
                        <div class="col-12 col-sm-12">
                          <div class="form-group">
                            <label>Unpivoted Column Name</label>
                            <input class="form-control" name="unpivoted_column_name" placeholder="Unpivoted Column Name">
                          </div>
                      </div>
                        <div class="col-sm-4">                                                   
                            <div class="form-group">
                                <label>Select Column</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value="Column_id">Column_id</option>
                                    <option value="Column_description">Column_description</option>
                                    <option value="Column_name">Column_name</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-sm-4">                                                   
                            <div class="form-group">
                                <label>Select Column</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value="Column_id">Column_id</option>
                                    <option value="Column_description">Column_description</option>
                                    <option value="Column_name">Column_name</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-sm-4">                         
                            <div class="form-group">
                                <label>Unpivot all</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch14">
                                    <label class="custom-control-label" for="customSwitch14">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>                  
                        <div class="col-12 mb-2">
                            <button class="btn btn-icon rounded-circle btn-primary" type="button" data-repeater-create="">
                                <i class="bx bx-plus"></i>
                            </button>
                            <span class="ml-1 font-weight-bold text-primary">ADD NEW</span>
                        </div>
                    </div>
                </fieldset>
                <!-- step 4 content end-->
            </form>
        </div>
        <div class="card-header">
            <h4 class="card-title">Column Rules</h4>
        </div>
        <div class="card-body">
            <form action="#" class="wizard-vertical">
                <!-- step 1 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:gear.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">Data Validation</span>
                        <small class="text-muted">Setup validation for the data.</small>
                    </span>
                </h3>
                <!-- step 1 end-->
                <!-- step 1 content -->
                <fieldset class="pt-0">
                    <h6 class="pb-50">Data Integrity</h6>
                    <div class="row">
                        
                        <div class="col-sm-6">                     
                            <div class="form-group">
                                <label>Empty / Null</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch15">
                                    <label class="custom-control-label" for="customSwitch15">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div>                         
                            <div class="form-group">
                                <label>Pattern Match</label>
                                <input type="text" class="form-control" placeholder="Pattern Match">
                            </div>         
                        </div>
                        <div class="col-sm-6">                         
                            <div class="form-group">
                                <label>Negative</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch16">
                                    <label class="custom-control-label" for="customSwitch16">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label>Range</label>
                                <div class="col-12">
                                    <div class="row">
                                        <input type="text" class="form-control col-sm-6" placeholder="Start">
                                        <input type="text" class="form-control col-sm-6" placeholder="End">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 1 content end-->
                <!-- step 1 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:swap-horizontal.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">Data Object Types</span>
                        <small class="text-muted">Setup Data Object for the data.</small>
                    </span>
                </h3>
                <!-- step 1 end-->
                <!-- step 1 content -->
                <fieldset class="pt-0">
                    <h6 class="pb-50">Data Object Types</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="mr-2">Data Object :</label>
                                <div class="c-inputs-stacked">
                                    <div class="d-inline-block mr-2">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox11">
                                                <label for="checkbox11">Abstract Entity</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="d-inline-block mr-2">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox12">
                                                <label for="checkbox12">Physical Entity</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="d-inline-block">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox13">
                                                <label for="checkbox13">Behavior</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="d-inline-block">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox14">
                                                <label for="checkbox14">Static Property</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="d-inline-block">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox15">
                                                <label for="checkbox15">Measurement</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="d-inline-block">
                                        <fieldset>
                                            <div class="checkbox pb-1">
                                                <input type="checkbox" class="checkbox__input" id="checkbox16">
                                                <label for="checkbox16">Event</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Entity Experiencing the Event</label>
                                <select name="delivery" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Start Date and Time</label>
                                <select name="delivery" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="eventLocation12">Entity State or Location</label>
                                <select name="preferreddelivery" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>End Date and Time</label>
                                <select name="delivery" class="form-control">
                                    <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 1 content end-->
                <!-- step 2 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:morph-add-remove.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">Transformations</span>
                        <small class="text-muted">Stitch/Unstitch Data.</small>
                    </span>
                </h3>
                <!-- step 2 end-->
                <!-- step 2 content -->
                <fieldset class="pt-0">
                    <h6 class="py-50">Stitch Transformations</h6>
                    <div class="row">                 
                        <div class="col-12 col-sm-12">
                          <div class="form-group">
                            <label>Stitched Column Name</label>
                            <input class="form-control" name="stitched_column_name" placeholder="Stitched Column Name">
                          </div>
                      </div>
                        <div class="col-sm-4">                                                   
                            <div class="form-group">
                                <label>Select Column</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value="Column_id">Column_id</option>
                                    <option value="Column_description">Column_description</option>
                                    <option value="Column_name">Column_name</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-sm-2">                                                   
                            <div class="form-group">
                                <label>Separator</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value=".">.</option>
                                    <option value=",">,</option>
                                    <option value="-">-</option>
                                    <option value="/">/</option>
                                    <option value="_">_</option>
                                </select>
                            </div> 
                        </div>  
                        <div class="col-sm-4">                                                   
                            <div class="form-group">
                                <label>Select Column</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value="Column_id">Column_id</option>
                                    <option value="Column_description">Column_description</option>
                                    <option value="Column_name">Column_name</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-sm-2">                         
                            <div class="form-group">
                                <label>Stitch</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch17">
                                    <label class="custom-control-label" for="customSwitch17">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>                  
                        <div class="col-12 mb-2">
                            <button class="btn btn-icon rounded-circle btn-primary" type="button" data-repeater-create="">
                                <i class="bx bx-plus"></i>
                            </button>
                            <span class="ml-1 font-weight-bold text-primary">ADD NEW</span>
                        </div>
                    </div>
                    
                    <hr>
                    <h6 class="py-50">Unstitch Transformations</h6>
                    <div class="row">
                        <div class="col-sm-4">                                                   
                            <div class="form-group">
                                <label>Select Column</label>
                                <select class="custom-select form-control" id="lookup" name="lookup">
                                    <option value="Column_id">Column_id</option>
                                    <option value="Column_description">Column_description</option>
                                    <option value="Column_name">Column_name</option>
                                </select>
                            </div>                                                    
                            <div class="form-group">
                                <label>Split Column Name</label>
                                <input class="form-control" name="colname" placeholder="Split Column Name">
                            </div> 
                        </div>
                        <div class="col-sm-4">                                                   
                            <div class="form-group">
                                <label>Regular Expression</label>
                                <input class="form-control" name="expression" placeholder="Regular Expression">
                            </div>                                                    
                            <div class="form-group">
                                <label>Split Column Name</label>
                                <input class="form-control" name="colname" placeholder="Split Column Name">
                            </div> 
                        </div>
                        <div class="col-sm-4">                         
                            <div class="form-group">
                                <label>Split</label>                         
                                <div class="custom-control custom-switch mr-2 mb-1">
                                    <input type="checkbox" class="custom-control-input" checked id="customSwitch13">
                                    <label class="custom-control-label" for="customSwitch13">
                                        <span class="switch-icon-left"><i class="bx bx-check"></i></span>
                                        <span class="switch-icon-right"><i class="bx bx-x"></i></span>
                                    </label>
                                </div>
                            </div> 
                        </div>                  
                        <div class="col-12 mb-2">
                            <button class="btn btn-icon rounded-circle btn-primary" type="button" data-repeater-create="">
                                <i class="bx bx-plus"></i>
                            </button>
                            <span class="ml-1 font-weight-bold text-primary">ADD NEW</span>
                        </div>
                    </div>
                    
                </fieldset>
                <!-- step 2 content end-->
                <!-- section 3 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:square.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">Aggregations</span>
                        <small class="text-muted">add your aggregations.</small>
                    </span>
                </h3>
                <!-- section 3 end-->
                <!-- step 3 content -->
                <fieldset class="pt-0">
                    <h6 class="py-50">Aggregations</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Default Aggregation</label>
                                <select name="delivery" class="form-control">
                                    <option value="">Select Default Aggregation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="eventLocation12">Optional Dimention to display</label>
                                <select name="preferreddelivery" class="form-control">
                                    <option value="">Select Optional Dimention</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 3 content end-->
                <!-- step 4 -->
                <h3>
                    <span class="fonticon-wrap mr-1">
                        <i class="livicon-evo" data-options="name:loader-9.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                    </span>
                    <span class="icon-title">
                        <span class="d-block">lookup transformation</span>
                        <small class="text-muted">Setup lookup.</small>
                    </span>
                </h3>
                <!-- step 4 end-->
                <!-- step 4 content -->
                <fieldset class="pt-0">
                    <h6 class="py-50">Lookup</h6>                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Lookup Type</label>
                                <select name="delivery" class="form-control">
                                    <option value="">Select Lookup Type</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="eventLocation12">Lookup Category</label>
                                <select name="preferreddelivery" class="form-control">
                                    <option value="">Select Lookup Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>If not found in lookup</label>
                                <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="bsradio" id="radio1" checked>
                                                    <label for="radio1">Retain original value</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="bsradio" id="radio2">
                                                    <label for="radio2">Replace with</label>
                                                    <input class="form-control" name="replacewith" placeholder="">
                                                </div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2 mb-1">
                                            <fieldset>
                                                <div class="radio">
                                                    <input type="radio" name="bsradio1" id="radio3" >
                                                    <label for="radio3">Failed the job</label>
                                                </div>
                                            </fieldset>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </fieldset>
                <!-- step 4 content end-->
            </form>
        </div>
    </div>
</section>
<!-- vertical Wizard end-->
<!-- email app overlay -->
<div class="app-content-overlay"></div>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('resources/vendors/js/extensions/jquery.steps.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('resources/js/scripts/forms/wizard-steps.js')}}"></script>
<script type="text/javascript">

</script>
@endsection
