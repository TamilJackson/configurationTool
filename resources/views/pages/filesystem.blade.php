@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Users Edit')
{{-- vendor styles --}}
@section('vendor-styles')

@endsection

{{-- page styles --}}
@section('page-styles')
@endsection

@section('content')
<section class="users-edit">
  <div class="card">
    <div class="card-body">
            <form class="form-validate" method="POST" action="{{route('users-store')}}">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-12 col-sm-12">
                                            <fieldset class="form-group">
                                                <label for="basicInputFile">Choose File</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" />
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </fieldset>
                  </div>
                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                      <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Upload</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                  </div>
                </div>
            </form>
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
@section('page-scripts')<script type="text/javascript">
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
