
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính trên hai số</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
            <form action="pheptinh.php" method="post">
                <div class="pheptinh">
                    <input type="radio" id="cong" name="pheptinh" value="cong">
                    <label for="cong">Cộng</label>

                    <input type="radio" id="tru" name="pheptinh" value="tru">
                    <label for="tru">Trừ</label>

                    <input type="radio" id="nhan" name="pheptinh" value="nhan">
                    <label for="nhan">Nhân</label>

                    <input type="radio" id="chia" name="pheptinh" value="chia">
                    <label for="chia">Chia</label>
                </div><br>

                <label for="so1">Số thứ nhất:</label><br>
                <input type="number" id="so1" name="so1"><br>
                <label for="so2">Số thứ hai (nếu cần):</label><br>
                <input type="number" id="so2" name="so2"><br><br>

                <input type="submit" value="Tính">
            </form>
        </div>

        <div class="box">
            <h2>KIỂM TRA SỐ</h2>
            <form action="kiemtra.php" method="post">
                <div class="kiemtra">
                    <input type="radio" id="kiemtrachan" name="pheptinh" value="kiemtrachan">
                    <label for="kiemtrachan">Kiểm tra số chẵn/lẻ</label>

                    <input type="radio" id="kiemtrannt" name="pheptinh" value="kiemtrannt">
                    <label for="kiemtrannt">Kiểm tra số nguyên tố</label>
                </div><br>

                <label for="so1">Số cần kiểm tra:</label><br>
                <input type="number" id="so1" name="so1"><br><br>

                <input type="submit" value="Kiểm tra">
            </form>
        </div>
    </div>
    </body>
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
</html>