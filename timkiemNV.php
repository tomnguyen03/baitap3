<?php
    if (isset($_POST["submit"])) {
        $idnv = $_POST["input"];
    }
    $link = mysqli_connect("172.18.0.2", "root", "root", "DULIEU1");
    $result = $link->query("SELECT * FROM `nhanvien` WHERE IDNV = '$idnv'"); 
    $link->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Tìm kiếm thông tin nhân viên theo ID</h2>
    
    <div class="table-wrapper">
        <div class="form">
            <form action="" method="POST">
                <input type="text" name="input" placeholder="Nhap IDNV">
                <button name="submit">Submit</button>
            </form>
        </div>
        <table class="fl-table">
            <thead>
            <tr>
                <th>ID Nhân Viên</th>
                <th>Họ Và Tên</th>
                <th>ID Phòng Ban</th>
                <th>Địa Chỉ</th>
            </tr>
            </thead>
            <tbody>

                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $idnv = $row["IDNV"];
                            $hoten = $row["hoten"];
                            $idpb = $row["IDPB"];
                            $diachi = $row["diachi"];
                            echo
                            "
                            <tr>
                                <td>$idnv</td>
                                <td>$hoten</td>
                                <td>$idpb</td>
                                <td>$diachi</td>
                            </tr>
                            ";
                        }
                    }
                ?>         
            <tbody>
        </table>
    </div>
</body>
</html>