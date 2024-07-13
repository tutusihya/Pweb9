<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    $a = 5;
    $b = 4;

    echo "$a == $b : " . ($a == $b) . "<br>";
    echo "$a != $b : " . ($a != $b) . "<br>";
    echo "$a > $b : " . ($a > $b) . "<br>";
    echo "$a < $b : " . ($a < $b) . "<br>";
    echo "($a == $b) && ($a > $b) : " . (($a != $b) && ($a > $b)) . "<br>";
    echo "($a == $b) || ($a > $b) : " . (($a != $b) || ($a > $b)) . "<br>";
    ?>
</body>
</html>
