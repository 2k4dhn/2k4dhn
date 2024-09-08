<form action="get.php" method = "get">
    <label for="get">Tên sách</label>
    <input type="text" name ="sach">
    <label for="get">Tên tác giả</label>
    <input type="text" name = "name">
    <label for="get">Nhà xuất bản</label>
    <input type="text" name = "nhaxuatban">
    <label for="get">Năm xuất bản</label>
    <input type="text" name = "namxuatban">

    <button type = "submit" name = "dangnhap">Gửi</button>

    
</form>

<?php 
    if(isset($_GET['dangnhap'])){
        $tenSach = $_GET['sach'];
        $tenTacGia = $_GET['name'];
        $nhaXuatBan = $_GET['nhaxuatban'];
        $namXuatBan = $_GET['namxuatban'];
        echo "<h2>Thông tin sách đã nhập:</h2>";
        echo "Tên sách: " . htmlspecialchars($tenSach) . "<br>";
        echo "Tên tác giả: " . htmlspecialchars($tenTacGia) . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($nhaXuatBan) . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($namXuatBan) . "<br>";

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