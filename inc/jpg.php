<ul id="jpg_ul">
	<?php 
	$sorgu2 = $baglan->query("select * from anasayfaresimleri order by resimId desc",PDO::FETCH_ASSOC);
	if ($sorgu2->rowCount())

	    foreach($sorgu2 as $kayit) {
        echo '<li><img src="inc/dosyalar/'.$kayit["resim"].'"/></li>';
    }
		?>



		</ul>