{{-- style blade file --}}
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    @if($configData['direction'] === 'ltr')
    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/vendors.min.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/vendors-rtl.min.css')}}">
    @endif
    @yield('vendor-styles')
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/themes/semi-dark-layout.css')}}">
    @if($configData['direction'] === 'rtl')
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/custom-rtl.css')}}">
    @endif
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    @if($configData['mainLayoutType'] == 'horizontal-menu')
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/core/menu/menu-types/horizontal-menu.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/core/menu/menu-types/vertical-menu.css')}}">
    @endif
    @yield('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/plugins/file-uploaders/dropzone.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    @if($configData['direction'] === 'ltr')
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/style.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/style-rtl.css')}}">
    @endif
    <!-- END: Custom CSS-->


    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/vendors/css/file-uploaders/dropzone.min.css')}}">
