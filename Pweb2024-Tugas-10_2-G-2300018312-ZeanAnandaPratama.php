<!DOCTYPE html>
<html>

<head>
    <title>for bersarang</title>
</head>

<body>
    <pre>
<?php
$tinggi = 5;
for ($baris = 1; $baris <= $tinggi; $baris++) {
    for ($i = 1; $i <= $tinggi - $baris; $i++) {
        echo " ";
    }
    for ($j = 1; $j <= (2 * $baris - 1); $j++) {
        echo "*";
    }
    echo "\n";
}
?>
    </pre>
</body>

</html>