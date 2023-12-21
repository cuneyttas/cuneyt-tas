<?php

require get_template_directory().'/dahili/function-admin.php';
require get_template_directory().'/dahili/kuyruk.php';


function kurulum() {

	// Zaman Türkçeleştirmesi
	setlocale(LC_TIME, 'tr_TR.UTF-8');


	// Menü Kaydı
	register_nav_menus(array(

		'primary' => __('Birincil Menü')

	));


	add_theme_support('title-tag');

	// Öne çıkan görsel ekleme özelliğini aktif etmek,(true: resim kesilsin, false: kesilmesin)
	add_theme_support('post-thumbnails');
	add_image_size('ana-resim', 450, 450, true);
	add_image_size('profil', 230, 275, true);
	add_image_size('galeri-liste', 210, 160, true);
	add_image_size('galeri-buyuk', 800, 600, false);
	add_image_size('blog-liste', 240, 180, true);
	add_image_size('blog', 385, 290, false);
	add_image_size('kitap', 205, 250, false);

	// Blog biçimini aktif etmek
	add_theme_support('post-formats', array("aside", "gallery", "link"));

}

add_action('after_setup_theme', 'kurulum');



// Bileşenlerin Kurulumu
function bilesenleriBaslat() {

	register_sidebar( array(

		'name'          => 'Mavi Alan',
		'id'            => 'mavi-alan',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title' => '<span>',
		'after_title' => '</span><hr class="cizgi">'

	));

}

add_action('widgets_init', 'bilesenleriBaslat' );



// Özelleştirmelerin Kurulumu
function ozellestirmeleriBaslat($ozellestirme) {

	$ozellestirme -> add_section('temaRenkleri', array(

		'title' => 'Tema Renkleri',
		'priority' => 30   //Tema özelleştirici kenar çubuğunda görünme önceliği (30 rastgele verildi)

	));

	$ozellestirme -> add_setting('baglantiRengi', array(

		'default' => '#44AADD',
		'transport' => 'refresh'  // Renk seçerken otomatik olarak renkleri değiştirmesi için

	));

	$ozellestirme -> add_setting('blogDugmeRengi', array(

		'default' => '#44AADD',
		'transport' => 'refresh'

	));

	$ozellestirme -> add_control(new WP_Customize_Color_Control($ozellestirme, 'baglantiRengiKontrolu', array(

		'label' => 'Bağlantı Rengi',
		'section' => 'temaRenkleri',
		'settings' => 'baglantiRengi'

	)));

	$ozellestirme -> add_control(new WP_Customize_Color_Control($ozellestirme, 'blogDugmeRengiKontrolu', array(

		'label' => 'Blog Düğme Rengi',
		'section' => 'temaRenkleri',
		'settings' => 'blogDugmeRengi'

	)));

}

add_action('customize_register', 'ozellestirmeleriBaslat' );



// CSS'lerin Özelleştirilmesi
function cssOzellestir() { ?>

	<style type="text/css">

		a:link,
		a:visited {

			color: <?php echo get_theme_mod('baglantiRengi') ?>

		}

		a.buton {

			border-color: <?php echo get_theme_mod('blogDugmeRengi') ?>

		}

	</style>


<?php }

add_action('wp_head', 'cssOzellestir');



// Özelleştirmeyle (Customize) mavi alan ayarları yapma
function maviAlaniOzellestir($ozellestirme) {

	$ozellestirme -> add_section('maviAlan', array(

		'title' => "Mavi Alan Ayarları"

	));

	$ozellestirme -> add_setting('profilResmiDegisimi');
	$ozellestirme -> add_setting('isimDegisimi');
	$ozellestirme -> add_setting('unvanDegisimi');

	$ozellestirme -> add_control(new WP_Customize_Cropped_Image_Control($ozellestirme, 'profilResmiKontrolu', array(

		'label' => 'Profil Resmini Değiştir',
		'section' => 'maviAlan',
		'settings' => 'profilResmiDegisimi',
		'width' => 230,
		'height' => 275

	)));

	// Yönetici sayfasının özelleştirme yerinden kalemle düzeltme yapılmasını sağlar.
    $ozellestirme->selective_refresh->add_partial( 'profilResmiDegisimi', array(

	    'selector' => '#profilResimAlani'

	));

	$ozellestirme->add_control('isimKontrolu', array(

        'label'      => 'İsmini Değiştir',
        'section'    => 'maviAlan',
        'settings'   => 'isimDegisimi'

    ));

    $ozellestirme->selective_refresh->add_partial( 'isimDegisimi', array(

	    'selector' => '#profilIsimAlani'

	));

    $ozellestirme->add_control('unvanKontrolu', array(

        'label'      => 'Unvanını Değiştir',
        'section'    => 'maviAlan',
        'settings'   => 'unvanDegisimi'

    ));

    $ozellestirme->selective_refresh->add_partial( 'unvanDegisimi', array(

	    'selector' => '#profilUnvanAlani'

	));

}

add_action('customize_register', 'maviAlaniOzellestir');


// Kategori getirme fonksiyonu
function kategoriGetir($postID, $kategoriAdi, $ayrac = ', ') {

	$kategorilerDizisi = wp_get_post_terms($postID, $kategoriAdi);

	$kategoriler = "";

	if ($kategorilerDizisi) {

		$i=0;
		foreach ($kategorilerDizisi as $kategori) { $i++;

			if ($i>1) $kategoriler .= $ayrac;
			$kategoriler .='<a href="'.get_term_link($kategori->term_id).'">'.$kategori->name.'</a>';

		}

		return $kategoriler; //En sondaki virgülü kaldırmak için

	}

	return "";

}


// Kısa kod örneği
function cuneytTasiKisalt(){ //Parametre de alabiliyor.

	return "Cüneyt TAŞ";

}

add_shortcode( 'ct', 'cuneytTasiKisalt' );



// Sayfalamalarda önceki tuşun fonksiyonu
function oncekiTusu() {

	$oncekiGonderiNesnesi = get_adjacent_post( '', '', true );
	$oncekiGonderiID = isset( $oncekiGonderiNesnesi->ID ) ? $oncekiGonderiNesnesi->ID : '';
	$oncekiGonderiBaglantisi = get_permalink( $oncekiGonderiID );

	if ($oncekiGonderiID == '') $oncekiGonderiBaglantisi = '#';

	return $oncekiGonderiBaglantisi;

}



// Sayfalamalarda sonraki tuşun fonksiyonu
function sonrakiTusu() {

	$sonrakiGonderiNesnesi = get_adjacent_post( '', '', false );
	$sonrakiGonderiID = isset( $sonrakiGonderiNesnesi->ID ) ? $sonrakiGonderiNesnesi->ID : '';
	$sonrakiGonderiBaglantisi = get_permalink( $sonrakiGonderiID );
	//$next_post_title    = '&raquo;'; // "»" işaretini başlık olarak eklemek istersek kullanırız

	if ($sonrakiGonderiID == '') $sonrakiGonderiBaglantisi = '#';

	return $sonrakiGonderiBaglantisi;

}



// Zaman formatını düzenleme
function zamanDuzenle($zaman) {

	if (strlen($zaman) == 4) {

		return $zaman;

	}

	return strftime( '%e %B %Y', strtotime($zaman) );

}


// Github'tan son versiyon bilgisi alma (Bu kod canlıda düzgün çalışmıyor)
function sonVersiyonuGetir() {

	$ayar = [
	    'http' => [
	        'method' => 'GET',
	        'header' => ['User-Agent: PHP']
	    ]
	];
	$ayarDuzeni = stream_context_create($ayar);
	$json = file_get_contents("https://api.github.com/repos/cuneyttas/cuneyt-tas/releases", false, $ayarDuzeni);
	$veri = json_decode($json, TRUE)[0];

	return $veri['tag_name'];

}
