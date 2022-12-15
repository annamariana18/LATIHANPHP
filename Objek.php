<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data Objek</title>
</head>
<body>
    <h2>Tipe Data Objek</h2>
    <?php
    Class Desl
    {
        var $str="Variabel class";
        function sel vars($str)
        {
        $this->str=$str;
        }
    }
    $class=new Desl;
echo $class->sel vars("variabel objek");
echo ("<br>");
echo $class->str;
?>
</body>
</html>