<?php
global $wp_query;

// Dizideki arama değerini kaldırmak için. Kaldırmamış olsaydık, sayfa başlığını arama sayfası gibi gösteriyor.
unset($wp_query->query_vars['s']);

$args = array_merge( $wp_query->query_vars, array(

	'posts_per_page' => '30',
	'meta_key' => 'tarihAnahtari',
	'orderby' => array(
	    'tarihAnahtari' => 'DESC',
	    'menu_order' => 'ASC'
    ),
	'order' => 'DESC',

));
query_posts( $args );




get_header();

echo "<div class='sutun-12'>";

if (have_posts()) :
?>
<h2>Okumuş Olduğum Kitaplar</h2>

<?php if ( !is_paged() ) { ?>

	<p>Okuduğum her kitap benim kitap koleksiyonumun bir parçasıdır. Beğensem de beğenmesem de o kitabı okuduysam, artık koleksiyonuma yeni bir parça katılmış olur. Başladığım kitabı da bitirmeden yarıda kesmiyorum. Kitaplarımı genelde sesli okuduğumdan dolayı da yavaş bitiriyorum. 2010 yılından itibaren bitirdiğim her kitabın ismini, yazarını, sayfasını, bitirdiğim tarihi gibi özelliklerini bir dokümana kaydetmeye başladım. Bu şekilde koleksiyonuma yeni kitapları eklemek, bende kitap okuma isteğini daha da artırdı. İnternet sitemi yaptıktan sonra da okuduğum bu kitapları sitemde paylaşmaya karar verdim.</p>
	<p>Zamanla bu kitaplara 5 üzerinden puanlar vermeye başladım. Bu puanları; kitapları ne kadar sevdiğime, beklentimi ne kadar karşıladığına, içeriğine, kitabın fiziksel kalitesi, basım hataları gibi kıstaslara göre verdim. Bu yüzden aynı kitabı başka okuyan kişi farklı değerlendirebilir.</p>
	<p>Kitapların resimleri, hangi yayınevi ve kaçıncı baskısını okuduysam bizzat onun resimleridir. Farklı yayınevlerinde ve farklı baskılarda bu resimler değişebilir. Bu resimlerin büyük bölümünü ben okuduğum kitaptan tarayıp da siteye koyuyorum.</p>
	<p>Ayrıca kitaba ve başlığına tıklayarak o kitap hakkında özet bilgiyi bulabilirsiniz. Bu yazılar çoğunlukla okuduğum kitabın arkasındaki yazılardır. Arkasında yazı yoksa da önsözünden veya tanıtım bültenlerinden paylaştım. Bunlara ek olarak kitabın yazarına tıklayarak aynı yazarın başka okuduğum kitaplarının listesini; kategorilere tıklayarak da aynı kategorideki okuduğum diğer tüm kitapları görebilirsiniz.</p>
	<p><b>Şimdi kitap koleksiyonumun parçaları arasında yolculuğa çıkmaya hazır mısınız?</b></p>

<?php } ?>

<ul class="satir kitaplik">

<?php

	while (have_posts()) : the_post();

		get_template_part("icerikler/icerik-kitap");

	endwhile;

?>

</ul>
<div class="temizle"></div>

<?php

	echo "<div class='sayfalama'>".paginate_links()."</div>";

else :
	echo "<p>İçerik bulunamadı.</p>";
endif;

echo "</div>";

get_footer();

?>
