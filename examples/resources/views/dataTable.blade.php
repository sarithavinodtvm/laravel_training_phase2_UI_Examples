<html>
<body>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
<link href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css" rel="stylesheet">

<script>
    $(document).ready(function() {
       $('#dataTable1').DataTable({
            processing: true,
            serverSide: true,
            ajax: "data-tables-data",
            columns: [
                { data: 'dist_id'},
                { 
                    data: 'dist_name',
                    render: function(column2, type, row) {
                        return `<a href="/findDistrictById/${column2}" >${column2}</a>`;
                    }
                },
                { data: 'dist_id',
                    render: function(id, type, row) {
                        return `<button><a href="/editDistrictById/${id}" >Edit</a></buttton>`;
                    }
                },
            ]
        });
    });
</script>

    <table id="dataTable1" >
    <thead>
    <tr>
        <th>Slno</th>
        <th>District ID</th>
        <th>District Name</th>
        <th>Action</th>
    </tr>
</thead>
    </table>

</body>
</html>    