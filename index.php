<!DOCTYPE html>
<html>
<head>
    <title>Penghitungan Gaji</title>
</head>
<body>
    <?php
    $gaji = 100000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);

    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
</body>
</html>
