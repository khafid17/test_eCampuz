<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$aplikasi = ["gtAkademik", "gtFinansi", "gtPerizinan", "eCampuz", "eOviz"];
$tampildata = count($aplikasi);

$i = 0;
while ($i < $tampildata)
{
    echo $aplikasi[$i] ."<br />";
    $i++;
}
?>
</body>
</html>