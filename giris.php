<?php
		include("vtayar.php");
	?>



<form id="form1" name="form1" method="post" action=""><table border='1'>
        <tr><td>E-MAİL:</td>
            <td><input type="text" name="txtmail" id="txtmail" />
            </td>
        </tr>

        <tr><td>ŞİFRE:</td>
            <td><input type="password" name="txtsifre" id="txtsifre" />
            </td>
       <tr>
	   <td><img src="capthca.php" style="border: 1px solid #525252"><br></td>
		<td><input type="text" name="guvenlik" /> <br /></td>
	    </tr>
		
        <tr>
            <td><a href="unuttum.php" >Şifremi Unuttum</a>
            </td>

            <td>
                <input type="submit" name="btnekle" id="btnekle" value="Giriş"  />
            </tr>

    </table>
</form>


    
    <?php

if(isset($_POST["btnekle"]))
{

    $mail=trim($_POST["txtmail"]);
	$sifre=trim($_POST["txtsifre"]);
	$guvenlik=trim($_POST["guvenlik"]);
session_start();
	if (isset($guvenlik)) {
		if ($guvenlik == $_SESSION['kod']) {
			

    $sorgu="SELECT * FROM musteri WHERE email='$mail' AND sifre='$sifre'";
    $tablo=$baglan->query($sorgu);
    $cek=$tablo->fetch(PDO::FETCH_ASSOC);


    if($tablo->rowCount()>0)
    {
        session_start();
        $_SESSION["id"]=$cek["id"];
        header("location:profil.php");

		
	}
	else{

		echo " HATALIS HATASI";
	}


}
    else


        echo " HATALI GİRİŞ";

}

}

?>

    
 
  	


