<html>
<head>
    <title>ej 9-1</title>
</head>
<body>
<form action="ej9-2.php" method="get">
    <?php
    $a = $_GET["texto1"];
    $b = $_GET["texto2"];
    $c = $_GET["texto3"];
    echo "<input type='hidden' name='texto1' value='$a'>";
    echo "<input type='hidden' name='texto2' value='$b'>";
    echo "<input type='hidden' name='texto3' value='$c'>";
    ?>
    <input type="text" name="texto4">
    <br>
    <input type="text" name="texto5">
    <br>
    <input type="text" name="texto6">
    <br>
    <input type="submit">
</form>
</body>
</html>