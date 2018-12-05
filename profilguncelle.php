<?php
    include("vtayar.php")
?>
<html>
<body>
<a href="profil.php">Profil</a>
<a href="cikis.php">Çıkış</a>
<?PHP

if(isset($_POST["btnguncelle"]))
{
    $id=$_GET["guncelleid"];
    $ad=$_POST["txtad"];
    $soyad=$_POST["txtsoyad"];
    $sifre=$_POST["txtsifre"];
    $mail=$_POST["txtmail"];

   
        $sorgu="UPDATE musteri SET ad='$ad',soyad='$soyad',sifre='$sifre',email='$mail' WHERE id=$id";
    

    if($baglan->query($sorgu))
    {
        echo "<br><span style='margin-left: 2%;'>$ad İSİMLİ ÜYE GÜNCELLENDİ</span>";
    }
    else
    {
        echo "<br><span style='margin-left: 2%;'>GÜNCELLEME SIRASINDA HATA OLUŞTU !</span>";
    }
}


$id=$_GET["guncelleid"];
$secsorgu="SELECT * FROM musteri WHERE id=$id";
$tablo=$baglan->query($secsorgu);
$kayit=$tablo->fetch();
?>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action=""><table border='1'>
        <tr>
            <td>  AD:</td>

            <td>     <input type="text" name="txtad" id="txtad" value="<?php echo $kayit["ad"]; ?>" /></td>



        </tr>
        <tr><td>SOYAD: </td>

            <td>   <input type="text" name="txtsoyad" id="txtsoyad" value="<?php echo $kayit["soyad"]; ?>" /></td>

        </tr>
        

        <tr><td>ŞİFRE:</td>
            <td><input type="password" name="txtsifre" id="txtsifre" value="<?php echo $kayit["sifre"]; ?>"/>
            </td>
        </tr>
        <tr><td>MAİL:</td>
            <td><input type="text" name="txtmail" id="txtmail" value="<?php echo $kayit["email"]; ?>" />
            </td>
        </tr>
        <tr><td colspan="2">
                <input type="submit" name="btnguncelle" id="btnguncelle" value="GÜNCELLE"  />
            </td></tr>

    </table>
</form>

</body>
</html>    
