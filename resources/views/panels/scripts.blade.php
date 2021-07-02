
    <!-- BEGIN: Vendor JS-->
    <script>
        var assetBaseUrl = "{{ asset('') }}";
    </script>
    <script src="{{asset('resources/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('resources/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{asset('resources/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{asset('resources/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <script src="{{asset('resources/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('resources/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('resources/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('resources/vendors/js/pickers/pickadate/picker.date.js')}}"></script>

    <script src="{{asset('resources/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('resources/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('resources/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('resources/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('resources/js/scripts/navs/navs.js')}}"></script>

    <!-- BEGIN: Page Vendor JS-->
    @yield('vendor-scripts')
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    @if($configData['mainLayoutType'] == 'vertical-menu')
    <script src="{{asset('resources/js/scripts/configs/vertical-menu-light.js')}}"></script>
    @else
    <script src="{{asset('resources/js/scripts/configs/horizontal-menu.js')}}"></script>
    @endif
    <script src="{{asset('resources/js/core/app-menu.js')}}"></script>
    <script src="{{asset('resources/js/core/app.js')}}"></script>
    <script src="{{asset('resources/js/scripts/components.js')}}"></script>
    <script src="{{asset('resources/js/scripts/footer.js')}}"></script>
    <script src="{{asset('resources/js/scripts/customizer.js')}}"></script>
    <script src="{{asset('resources/assets/js/scripts.js')}}"></script>
    <!-- END: Theme JS-->


    <!-- BEGIN: Page JS-->
    @yield('page-scripts')
    <!-- END: Page JS-->
