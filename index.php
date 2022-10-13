<?php
require("ayar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Corner Cafe </title>
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="slider.js"></script>
    <link rel="shortcut icon" href="img/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #asd {
            font-size: 16px;
        }
    </style>
</head>
<body>
<div id="tus" onclick="tus()"><img id="tus_resim" src="show-menu-icon.png"></div>
<div id="container">
    <div class="header">
        <img id="logo" src="img/logo.png">
        <span id="buyuk_yazi">Büyükçekm<span id="koyu_yazi">ece</span> </span>
        <ul id="menu">
            <li class="liler" id="ilk"><a class="alar" href="">Anasayfa</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <div id="slider">
        <div class="slider">
            <ul>
                <li><a href="#"><img src="11.jpg" alt="" /></a></li>
                <li><a href="#"><img src="22.jpg" alt="" /></a></li>
                <li><a href="#"><img src="33.jpg" alt="" /></a></li>
                <li><a href="#"><img src="44.jpg" alt="" /></a></li>
                <li><a href="#"><img src="55.jpg" alt="" /></a></li>
            </ul>
        </div>
        <div class="sliderButon">
            <a id="onceki" href="#" class="onceki">Önceki</a>
            <a id="sonraki" href="#" class="sonraki">Sonraki</a>
        </div>
    </div>
    <center id="cesit_yazi">Çesitlerimiz<br><img id="tag" src="img/tag-2.png"></center>

    <div id="cesit">
        <div id="sol">
            <center><span id="icecek_baslik">Sıcak ve Soguk İçecekler</span><br><br></center>
            <span class="icecek">Çay
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/çay.png"></span><br><br>
            <span class="icecek">Türk Kahvesi
                &nbsp;&nbsp;
                :<img class="img" src="img/turk-kahvesi-orta.jpg"></span><br><br>
            <span class="icecek">Bitki Çayları
                &nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/cay.png"></span><br><br>
            <span class="icecek">Nescafe
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/nescafe.png"></span><br><br>
            <span class="icecek">Sıcak Çikolata
                 &nbsp;
                :<img class="img" src="img/sıcakcikolata.jpg"></span><br><br>
            <span class="icecek">Cappucuno
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/cappucuno.jpg"></span><br><br>
            <span class="icecek">Cola
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/cola.jpg"></span><br><br>
            <span class="icecek">Fanta
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/fanta.jpg"></span><br><br>
            <span class="icecek">Meyve Suları
                &nbsp;&nbsp;
                :<img class="img" src="img/meyve-suyu.jpg"></span><br><br>
            <span class="icecek">Su
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/su.jpg"></span><br><br>
            <span class="icecek">Meyveli Soda
                &nbsp;
                :<img class="img" src="img/meyveli%20soda.jpg"></span><br><br>
            <span class="icecek">Limonata
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                :<img class="img" src="img/2335_650x433.jpg"></span>

        </div>
        <div id="sag">




            <center><span id="yiyecek_baslik">Yemek Çeşitlerimiz</span></center>






            <?php include ("inc/content.php");//content = açıılır menu olan kısımlar orta kısımlar;?>






        </div>
    </div>
    <div class="clear"></div>
    <div id="alt_kisim">
        <center><span id="foto_galeri">Foto Galeri</span></center>





        <?php include ('inc/jpg.php')?>







        <center><button id="buton" onclick="buton()">Fotoğrafları Gizle<br>
                <span id="asd">(2 Defa tıkla)</span>
            </button></center>
    </div>

    <center><span id="burdayiz">Buradayız!</span></center>
    <center><iframe width="600" height="450" frameborder="0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJo4rQf3tetRQRefbF2mJMP80&key=AIzaSyBLVC39xOTF5dw94z8kA7m8DzhefrjahfI" allowfullscreen></iframe>
    </center>














    <div id="yukari"><a href="" title="Başa Dön"><img id="yukari_img" src="img/yukari.png"></a>
    </div>
    <center><span id="telefon">Telefon Numaramız: &nbsp;&nbsp; 0212 8820123</span></center>


</div>

</div>
<div id="footer">
    <span>Çalışma saatleri</span><br>
    <span>&nbsp;&nbsp;&nbsp;&nbsp;08:00 - 21:00</span><br>
    <span><img class="tik" src="img/tik.png">Nakit ve kredi kartı kabul edilir.</span><br>
    <span><img class="tik" src="img/tik.png">Dış Mekan</span><br>
    <span><img class="tik" src="img/tik.png">Wifi</span><br>
    <span><img class="tik" src="img/tik.png">Kahvaltı</span><br>
</div>
<script src="js.js"></script>
</body>
</html>