<!-- editForm.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <?php
        include("./connectDB.php");

        if (isset($_GET['bookId'])) {
            $bookId = $_GET['bookId'];

            $sqlEditBook = "SELECT * FROM sach WHERE masach = '$bookId'";
            $resEditBook = $conn->query($sqlEditBook);

            if ($resEditBook->num_rows > 0) {
                $book = $resEditBook->fetch_assoc();
            };
        }

    ?>
    <!-- // form edit -->
    <form action="editProcess.php" method="POST">
        <input type="hidden" name="bookId" value="<?php echo $book['masach']; ?>">
        
        <label for="bookName">Book Name:</label>
        <input type="text" name="bookName" value="<?php echo $book['tensach']; ?>" required><br>
        
        <label for="authorName">Author Name:</label>
        <input type="text" name="authorName" value="<?php echo $book['tacgia']; ?>" required><br>
        
        <label for="publishingCompany">Publishing Company:</label>
        <input type="text" name="publishingCompany" value="<?php echo $book['nhaxuatban']; ?>" required><br>
        
        <label for="price">Price:</label>
        <input type="text" name="price" value="<?php echo $book['gia']; ?>" required><br>
        
        <label for="genre">Genre:</label>
        <input type="text" name="genre" value="<?php echo $book['theloai']; ?>" required><br>
        
        <button type="submit">Update Book</button>
    </form>
</body>
</html>
