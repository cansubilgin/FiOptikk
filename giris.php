
<?php
		include("vtayar.php");
	?>
<html>

<body>
<div class="login-form"><!--login form-->
						<h2>Hesabınıza Giriş Yapın</h2>
						<form  name="form2" method="post">
							<input type="text" placeholder="E-mail Adresiniz" name="txtmail2" id="txtmail2" />
							<input type="password" placeholder="Şifreniz"  name="txtsifre2" id="txtsifre2"/>
                                    <tr>
                    <td><a href="unuttum.php" >Şifremi Unuttum</a>
                    </td>
                            <button type="submit" class="btn btn-default" name="btngiris" id="btngiris">Giriş Yap</button>
						</form>
					</div><!--/login form-->
				</div>

				<?php

if(isset($_POST["btngiris"]))
{

    $mail=$_POST["txtmail2"];
    $sifre=$_POST["txtsifre2"];
    $sorgu="SELECT * FROM musteri WHERE email='$mail' AND sifre='$sifre'";
    $tablo=$baglan->query($sorgu);
    $cek=$tablo->fetch(PDO::FETCH_ASSOC);
    if($tablo->rowCount()>0)
    {
        session_start();
        $_SESSION["id"]=$cek["id"];

		header("location:profil.php");		
    }
    else


        echo " HATALI GİRİŞ";

}



?>

    </body>

</html>
