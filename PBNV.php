<?php
    $link = mysqli_connect("172.18.0.2", "root", "root", "DULIEU1");
    $PB = $_GET["PB"];
    $result = $link->query("SELECT * FROM `nhanvien` WHERE `IDPB` LIKE '$PB'"); 
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
<h2>Xem thông tin nhân viên</h2>
<div class="table-wrapper">
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