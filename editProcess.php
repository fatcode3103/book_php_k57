<!-- editProcess.php -->
<?php
include("./connectDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookId = $_POST['bookId'];
    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $publishingCompany = $_POST['publishingCompany'];
    $price = $_POST['price'];
    $genre = $_POST['genre'];

    $updateInfoInDB = "UPDATE sach SET tensach = '$bookName', tacgia = '$authorName', nhaxuatban = '$publishingCompany', 
                       gia = '$price', theloai = '$genre' WHERE masach = '$bookId'";

    if ($conn->query($updateInfoInDB) === TRUE) {
        echo "Update book successful.";
    } else {
        echo "Error updating book: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
