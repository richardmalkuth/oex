$(function(){
    $("#faculty_id").select2({
        theme: "bootstrap"
    });
    $("#question_set_id").select2({
        theme: "bootstrap"
    });
    $('#start').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: false
    });
    $('#end').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: false
    });
    $("#start").on("dp.change", function (e) {
        $('#end').data("DateTimePicker").minDate(e.date);
    });
    $("#end").on("dp.change", function (e) {
        $('#start').data("DateTimePicker").maxDate(e.date);
    });
        $('#surveys-table').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [[0, "desc"]],
            "ajax": "surveys/data",
            "columns": [
                {data: 'id', name: 'id', visible: false, searchable: false},
                {data: 'title', name: 'title'},
                {data: 'description', name: 'description'},
                {data: 'last_name', name: 'last_name'},
                {data: 'first_name', name: 'first_name', visible: false},
                {data: 'middle_name', name: 'middle_name', visible: false},
                {data: 'expires', name: 'expires'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

});
