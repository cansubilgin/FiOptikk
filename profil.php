
<?php
session_start();
if(!isset($_SESSION["id"])){


   
}
?>
<?php
    include("vtayar.php");
?>
<html>
    <body>
        

<?php



$id=$_SESSION["id"];



$sorgu="select * from musteri where id='$id'";

$tablo=$baglan->query($sorgu);

echo "<table border='1'>";
echo "<tr>
		
		<td>AD</td>
		<td>SOYAD</td>
		<td>MAİL</td>
		<td>TELEFON</td>	
		<td>ADRES</td>	
		<td>GÜNCELLE</td>				
	</tr>";

    $kayit=$tablo->fetch(PDO::FETCH_ASSOC);//sıradaki kayıtı oku $kayita aktar
    $guncellelink="<a  href='profilguncelle.php?guncelleid=".$kayit["id"]."'>GÜNCELLE</a>";

    echo "<tr>
	
	<td>" . $kayit["ad"] . "</td>
	<td>" . $kayit["soyad"] . "</td>
	<td>" . $kayit["email"] . "</td>
	<td>" . $kayit["telefon"] . "</td>
	<td>" . $kayit["adres"] . "</td>

<td>".$guncellelink."</td>
	</tr>";

echo "</table>";

	?>
    </body>
</html>