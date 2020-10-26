<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'book_catalog');    
            
    if(!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } 

function createNewBook() {
    if(isset($_POST['submit'])) {
        global $connection;
        $isbn = $_POST['isbn'];
        $name = $_POST['name'];
        $author = $_POST['author'];

        $isbn = mysqli_real_escape_string($connection, $isbn);
        $name = mysqli_real_escape_string($connection, $name);
        $author = mysqli_real_escape_string($connection, $author);

        
        $query = "INSERT INTO books (isbn, name, author) VALUES ('$isbn', '$name', '$author')";
        
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed');
        }
    }
}

function readRows() {
    global $connection;
    $query = "SELECT * FROM books";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query Failed');
    }

    while($row = mysqli_fetch_array($result)) {
        $isbn = $row['isbn'];
        $name = $row['name'];
        $author = $row['author'];
        $id = $row['id'];

        echo "<tr>";
        echo "<td style='display:none;' scope='col'>" . $id . "</td>";
        echo "<td scope='col'>" . $isbn . "</td>";
        echo "<td scope='col'>" . $name . "</td>";
        echo "<td scope='col'>" . $author . "</td>";
        echo "<td> <a href='#' class='updateBtn'> Edit </button>  <a href='#' class='removeBtn'> Remove </button>  ";
        echo "</tr>";
    }
}

function updateBook() {
    if(isset($_POST['update'])) {
        global $connection;

        $id = $_POST['updateid'];
        $isbn = $_POST['isbn'];
        $name = $_POST['name'];
        $author = $_POST['author'];

        $isbn = mysqli_real_escape_string($connection, $isbn);
        $name = mysqli_real_escape_string($connection, $name);
        $author = mysqli_real_escape_string($connection, $author);

        $query = "UPDATE books SET isbn = '$isbn', name = '$name', author = '$author' WHERE id='$id'";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Failed");
        }
    }
}

function deleteBook() {
    if(isset($_POST['delete'])) {
        global $connection;
        $id = $_POST['deleteid'];

        $query = "DELETE FROM books WHERE id='$id'";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Failed" . mysql_error($connection));
        }
    }
}

?>