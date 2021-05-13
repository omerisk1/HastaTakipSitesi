<?php
if(isset($_GET["pid"]))
{
    include("vt_ayar.php");
    $sorgu=$vt->prepare('DELETE FROM hastarandevu WHERE tc=?');
    $sonuc=$sorgu->execute([$_GET['pid']]);
    if($sonuc){
        header("Location:doktorEkran.php");

    }
    else
    
        echo("Hasta Bilgileri Silinemedi.");
    
}

?>