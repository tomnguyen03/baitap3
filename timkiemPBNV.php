<?php
    $link = mysqli_connect("172.18.0.2", "root", "root", "DULIEU1");
    $result = $link->query("SELECT * FROM DULIEU1.phongban"); 
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
<h2>Xem thông tin phòng ban</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID Phòng Ban</th>
            <th>Tên Phòng Ban</th>
            <th>Mô Tả</th>
            <th>Chi tiết</th>
        </tr>
        </thead>
        <tbody>

            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $idpb = $row["IDPB"];
                        $tenpb = $row["tenpb"];
                        $mota = $row["Mota"];
                        echo
                        "
                        <tr>
                            <td>$idpb</td>
                            <td>$tenpb</td>
                            <td>$mota</td>
                            <td><a href='PBNV.php?PB=$idpb'>Click</a></td>
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