$(document).ready(function() {
    function initializeDataTable(Etable) {
        $(Etable).DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "paginate": {
                    "previous": "Prev",
                    "next": "Next"
                },
                "lengthMenu": "Show _MENU_ entries"
            },
            "lengthMenu": [5, 10, 25, 50]
        });
    }

    // Initialize DataTables for all specified tables
    initializeDataTable('#expenses-table-monthly');
    initializeDataTable('#expenses-table-weekly');
    initializeDataTable('#expenses-table-today');
    initializeDataTable('#expenses-table-all');
});
