<?php
    // connect db
    include("./connectDB.php");

    function handleAddBook ($conn) {
        $bookId = $_POST['bookId'];
        $bookName = $_POST['bookName'];
        $authorName = $_POST['authorName'];
        $publishingCompany = $_POST['publishingCompany'];
        $price = $_POST['price'];
        $genre = $_POST['genre'];
        
        $addInfoToDB = "INSERT INTO sach (masach, tensach, tacgia, nhaxuatban, gia, theloai) 
        VALUES ('$bookId', '$bookName', '$authorName', '$publishingCompany', '$price', '$genre')";
        if ($conn->query($addInfoToDB) === TRUE) {
            echo "Thêm sách thành công";
        } else {
            echo "Lỗi khi thêm sách: " . $conn->error;
        }
    }

    handleAddBook($conn)

?>