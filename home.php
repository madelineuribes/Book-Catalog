<?php include "db_functions.php"; ?>
<?php include "modal-create.php"; ?>
<?php include "modal-update.php"; ?>
<?php include "modal-delete.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Catalog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>
<div class="container mt-5 col-12">
        <h1 class="text-center"> Book Catalog <h1>

        <div class=" mr-5 float-right">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-md mb-3 mt-3" data-toggle="modal" data-target="#myModal">Add New Book</button>
        </div>

        <div class="col-12 float-right">
        <!-- Table -->
        <table id="dataTable" class="table table-bordered text-xsmall ml-auto mr-auto">
            <thead>
                <tr>
                <th style='display:none;' scope="col">ID</th>
                <th scope="col">ISBN</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php readRows(); ?>
            </tbody>
        </table>
        </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script src="table.js"></script>

</body>
</html>