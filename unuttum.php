

<?php
include("vtayar.php");
?>

<?php
$harf="qwertyuopasdfghjklzxcvbnm123456789QWERTYUIOPASDFGHJKLZXCVBNM";
$yeniharf=str_shuffle($harf);
$sayi=rand(9,15);

$gonderilensifre=substr($yeniharf,0,$sayi);

header("Content-type:text/html;charset=utf-8");
if($_POST){

    $eposta=$_POST["txteposta"];
    $sorgu="SELECT * FROM musteri WHERE email='$eposta'";
    $tablo=$baglan->query($sorgu);
    $cek=$tablo->fetch(PDO::FETCH_ASSOC);
    if($cek>0){




       $konu="Şifreniz ".$gonderilensifre;

$title=$_SERVER["HTTP_HOST"]." Şifremi Unuttum";


        $gonder=mail($eposta,$title,$konu);
        if($gonder){

            echo  "Şifreniz Mail Adresinize Gönderildi";

            $sorgu="Update musteri set sifre='$gonderilensifre' where email='$eposta'";
            $tablo=$baglan->query($sorgu);






        }
        else
        {
            echo " Bir Şeyler Ters Gitti";

        }

    }
    else{

        echo "Sistemde bu eposta adresi bulunmamaktadır";
    }

}


?>

<form id="form1" name="form1" method="post" action=""><table border='1'>
        <tr><td>E-Posta Adresiniz:</td>
            <td><input type="text" name="txteposta" id="txteposta" />
            </td>
        </tr>

        <tr><td colspan="2">
                <input type="submit" name="btngonder" id="btngonder" value="Gönder"  />

            </td></tr>

    </table>
</form>
