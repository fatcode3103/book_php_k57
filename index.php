<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- connect database -->
    <?php include 'connectDB.php';?>
    <div class="app">
        <!-- form -->
        <form action="./addBook.php" method="POST">
            <div class="info-item">
                <label>Mã sách</label>
                <input name="bookId" type="text"/>
            </div>
            <div class="info-item">
                <label>Tên sách</label>
                <input name="bookName" type="text"/>
            </div>
            <div class="info-item">
                <label>Tác giả</label>
                <input name="authorName" type="text"/>
            </div>
            <div class="info-item">
                <label>Nhà xuất bản</label>
                <input name="publishingCompany" type="text"/>
            </div>
            <div class="info-item">
                <label>Giá</label>
                <input name="price" type="text"/>
            </div>
            <div class="info-item">
                <label>Thể loại</label>
                <select name="genre">
                    <option hidden selected>Chọn thể loại</option>
                    <?php
                        if(!empty($allGenre)){
                            foreach ($allGenre as $genre) {
                                echo "<option>{$genre['tenloai']}</option>";
                            }
                        }else{
                            echo "Genre is empty !";
                        }
                    ?>
                </select>
            </div>
            <button type="submit">Thêm mới</button>
        </form>
        <!-- data table -->
        <div>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã sách</th>
                    <th>Tên sách</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Giá</th>
                    <th>Thể loại</th>
                </tr>
                    <?php
                        if (!empty($allBook)) {
                            $id = 0;
                                foreach ($allBook as $book) {
                                    $id++;
                                    echo "<tr>";
                                    echo "<td>{$id}</td>";
                                    echo "<td>{$book['masach']}</td>";
                                    echo "<td>{$book['tensach']}</td>";
                                    echo "<td>{$book['tacgia']}</td>";
                                    echo "<td>{$book['nhaxuatban']}</td>";
                                    echo "<td>{$book['gia']}</td>";
                                    echo "<td>{$book['theloai']}</td>";
                                    echo "</tr>";
                                }
                        } else {
                            echo "Không có dữ liệu sách.";
                        }
                    ?>
            </table>
            
        </div>
    </div>

</body>
</html>