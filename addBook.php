<?php
    $bookId = $_POST['bookId'];
    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $publishingCompany = $_POST['publishingCompany'];
    $price = $_POST['price'];
    $genre = $_POST['genre'];

    echo "bookId : {$bookId}". "<br/>";
    echo "bookName : {$bookName}". "<br/>";
    echo "authorName : {$authorName}". "<br/>";
    echo "publishingCompany : {$publishingCompany}". "<br/>";
    echo "price : {$price}". "<br/>";
    echo "genre : {$genre}". "<br/>";
?>