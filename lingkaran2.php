<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$r = $_REQUEST['jari-jari'];

$luas =  $r * $r * 22/7;

?>


<?php
if ($r == "") {
    echo "<b>Jari-Jari Wajib Diisi . . .!</b><br />";
    }

if ($r !="")  {
    $luas =  $r * $r * 22/7;
?>
<p>jari-jari  : <?php echo "<b>".$r."</b>"; ?></p>
<p>Luas : <?php echo "<b>".$luas."</b>"; ?></p>
<?php
}
?>
</body>
</html>