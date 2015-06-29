<html>
<head>
<title>KSP2</title>
</head>
<body>
<table border="1">s

<?
$a=1;// до какого чиcла выводить
for($i=1;$i<=$a;$i++){
	echo "Чиcло".$i;
	echo "'Квадрат='".$i*$i."'Куб='".$i*$i*$i.'<br>';
}
/*==================*/
$fin=18;//До какого чиcла риcовать таблицу

for($x=1;$x<=$fin;$x++){
    if($x%2==0) {
        echo '<td> ' . $x . '</td> ';
    }
    else {
        echo '<td bgcolor="#f5f5dc"> ' . $x . '</td> ';
    }
	if($x%5==0){
		echo '<tr>';
	}
}
fe
?>
</table>
</body>
</html>