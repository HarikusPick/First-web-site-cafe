<?php

include ("ayar.php");



if($_POST) {
    $uzanti = explode(".", $_FILES["resim"]["name"]);
    $uzanti = end($uzanti);
    $izinli_uzantilar = ["jpg", "jpeg", "png", "gif"];
    if (in_array($uzanti, $izinli_uzantilar)) { // uzanti kontrolu

        //dosya tipi jpeg olsun

        $aciklama = htmlentities($_POST["aciklama"], ENT_QUOTES); //INJECTIONA YER YOK BABAM

        /*$dosya_adi=$_FILES["resim"]["name"];

        //yeni aad verme yeri

        $uret=array("as","rt","ty","yu","fg");

        $uzanti=substr($dosya_adi,-4,4);

        $sayi_tut=rand(1,10000);

        $yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;*/

        //Dosya yeni adıyla dosyalar klasörüne kaydedilecek

        $kaynak = $_FILES["resim"]["tmp_name"];
        $dosya = $_FILES["resim"]["name"];
        
        if ($_FILES["resim"]["size"] < (1024*1024)) { //1 mb'i gecmesin
            $random = rand(1000,9999);
            //$yeni_isim = $random."_".$dosya;
            $yeni_isim = md5(uniqid($dosya.$random, true)).'.'.$uzanti; //benzersiz isim yarat
            $hedef_dizin = __DIR__."/dosyalar/";
            $hedef = $hedef_dizin.$yeni_isim;
            $gitti = move_uploaded_file($kaynak,$hedef);

            if ($gitti) {
                $sayfa_ekle_sorgu = $baglan->prepare("INSERT INTO anasayfaresimleri SET resim =?, aciklama =?");
                $sayfa_ekle_sorgu->execute(array($yeni_isim, $aciklama));
                if($sayfa_ekle_sorgu)
                    echo 'Dosya başarıyla yüklendi.';
                else
                    echo 'Dosya Yüklenemedi! (SQL_ERR)';
            }
            else
                echo "Dosya yüklenirken bir hata oluştu. (MOVE_ERR)";
        } else
            echo 'Dosya boyutu 1 Mb'."'".'ı geçemez! (MAX_ERR)';
        
    }
    else
        echo 'Yalnızca '.implode(', ', $izinli_uzantilar).' uzantılı dosyalar yüklenebilir. (EXT_ERR)';
}
?>

<form action="" method="post" name="form1" enctype="multipart/form-data">

    <input type="file" name="resim"/><br/>

    <input type="text" name="aciklama"/><br/>

    <input type="submit" name="gonder" value="Kaydet"/>

</form>
</br></br>
<?php

$sorgu2 = $baglan->query("select * from anasayfaresimleri order by resimId desc",PDO::FETCH_ASSOC);
if ($sorgu2->rowCount())
    echo "<table>\n";
    foreach($sorgu2 as $kayit) {
        echo "  <tr>\n    <td>\n      ".'<img src="inc/dosyalar/'.$kayit["resim"].'" width="75" height="75"/>'."\n    </td>\n    <td>\n      <p> >> ".html_entity_decode($kayit["aciklama"])."</p>\n    </td>\n  </tr>\n";
    }
    echo "</table>";

?>