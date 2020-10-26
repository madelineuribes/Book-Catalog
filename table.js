// Datatables: multi-column ordering
    $(document).ready( function () {
        $('#dataTable').DataTable({
            "paging":   false,
            "searching":   false,
            "info":     false
        });

    } );

// Show update modal and pass row data
    $(document).ready( function() {
        $('.updateBtn').on('click', function() {
            $('#updateModal').modal('show');

            $tr = $(this).closest("tr");

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#updateid').val(data[0]);
            $('#isbn').val(data[1]);
            $('#name').val(data[2]);
            $('#author').val(data[3]);
        });
    });

// Show delete modal and pass row data
    $(document).ready( function() {
        $('.removeBtn').on('click', function() {
            $('#deleteModal').modal('show');

            $tr = $(this).closest("tr");

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#deleteid').val(data[0]);
            
            var node = document.createTextNode(data[2]);
            document.getElementById('rowName').innerHTML = '';
            var element = document.getElementById("rowName");
            element.appendChild(node);
        });
    });
