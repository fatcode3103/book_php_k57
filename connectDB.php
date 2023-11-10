<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "k57_mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";


    function getBooksData($conn) {
        global $conn;

        $sqlGetAllBook = "SELECT * FROM sach";
        $resAllBook = $conn->query($sqlGetAllBook);
        $books = [];

        if ($resAllBook->num_rows > 0) {
            while ($row = $resAllBook->fetch_assoc()) {
                $books[] = $row;
            }
        }

        return $books;
    };

    $allBook = getBooksData($conn);
?>