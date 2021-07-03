/*=========================================================================================
    File Name: app-users.js
    Description: Users page
    --------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {

    // variable declaration
    var usersTable;
    var usersDataArray = [],
    form = $('.form-validate');

    // datatable initialization
    if ($("#users-list-datatable").length > 0) {
        usersTable = $("#users-list-datatable").DataTable({
            responsive: true,
            'columnDefs': [
                {
                    "orderable": false,
                    "targets": [0]
                }]
        });
    }

});
