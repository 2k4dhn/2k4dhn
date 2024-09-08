<form action="" method="post">
    Tên sách: <input type="text" name="book_name">
    Tên tác giả: <input type="text" name="author_name">
    Nhà xuất bản: <input type="text" name="publisher">
    Năm xuất bản: <input type="text" name="publish_year">
    <button type="submit">Gửi</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookName = $_POST["book_name"];
    $authorName = $_POST["author_name"];
    $publisher = $_POST["publisher"];
    $publishYear = $_POST["publish_year"];

    echo "Tên sách: $bookName<br>";
    echo "Tác giả: $authorName<br>";
    echo "Nhà xuất bản: $publisher<br>";
    echo "Năm xuất bản: $publishYear<br>";
}
?>
<button style="
    width: 70px;
    background-color: rgba(218, 210, 210, 0.3);
    border: 3px solid black;
    cursor: pointer;
    height: 70px;
    border-radius: 10px;
    border: none;
    display: inline-block;
    position: fixed;
    right: 0px;
    bottom: 0px;"
>
    <a href="http://nguyen1711dhn.rf.gd/">
    <img src="anh/home1.png" style="width: 60%;"></a>
</button>