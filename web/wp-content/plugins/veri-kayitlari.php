<?php
/**
 * Plugin Name: Veri Kayıtları
 *
 * @package EklentiPaketi
 */


 // Yönetilebilir Kitap sayfası hazırlama
function yonetilirKitapSayfasiYap() {

	$etiketler = array(

		'name' => 'Kitaplar',
		'singular_name' => 'Kitap',
		'add_new' => 'Yeni Kitap',
		'all_items' => 'Okuduğum Kitaplar',
		'add_new_item' => 'Okuduğun Yeni Kitabı Ekle',
		'new_item' => 'Yeni Kitap',
		'edit_item' => 'Kitabı Düzenle',
		'view_item' => 'Kitabı Gör',
		'search_items' => 'Kitabı Ara',
		'not_found' => 'Kitap Bulunamadı',
		'not_found_in_trash' => 'Çöp Kutusunda Kitap Bulunamadı',
		'parent_item_colon' => 'Kitap Üst Dizini:'

	);

	$argumanlar = array(

		'labels' => $etiketler,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array(

			'slug' => 'okudugum-kitaplar'

		),
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(

			'title',
			'thumbnail'

		),
		//'taxonomies' => array('category'),
		'menu_position' => 100,
		'exclude_from_search' => false,
		'show_in_admin_bar' => true,
		'menu_icon' => 'dashicons-book'

	);

	register_post_type('kitap', $argumanlar);

}
add_action('init', 'yonetilirKitapSayfasiYap');


// Her bir yönetilebilir sayfaya özel kategoriler ekleme
function kitapKategorizeEt() {

	// Yeni hiyerarşik kategori ekle
	$etiketler = array(

		'name' => 'Kitap Kategorileri',
		'singular_name' => 'Kitap Kategorisi',
		'search_items' => 'Kategori Ara',
		'all_items' => 'Bütün Kategoriler',
		'parent_item' => 'Kategori Üst Dizini',
		'parent_item_colon' => 'Kategori Üst Dizini:',
		'edit_item' => 'Kategori Düzenle',
		'update_item' => 'Kategori Güncelle',
		'add_new_item' => 'Kategori Ekle',
		'new_item_name' => 'Yeni Kategori İsmi',
		'menu_name' => 'Kategoriler'

	);

	$argumanlar = array(

		'hierarchical' => true,
		'labels' => $etiketler,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'kitaplar')

	);

	register_taxonomy('kitaplar', array('kitap'), $argumanlar);
	// array('kitap')'taki kitap yukarıdaki register_post_type('kitap', $argumanlar) fonksiyonundaki kitapla aynı olmalıdır.


	// Yeni hiyerarşik olmayan kategori ekle
	register_taxonomy('yazarlar', 'kitap', array(

		'label' => 'Yazarlar',
		'rewrite' => array('slug' => 'yazarlar'),
		'hierarchical' => false

	));

}
add_action('init', 'kitapKategorizeEt');


// Kitaplar yönetici sayfası bilgi kutuları (meta box) oluşturma
function kitapBilgiKutusuEkle() {

	add_meta_box('kitapBilgikutusu', 'Okumuş Olduğun Kitabın...', 'kitapBilgiKutusuIcerigiEkle', 'kitap');

}
add_action('add_meta_boxes','kitapBilgiKutusuEkle');

function kitapBilgiKutusuIcerigiEkle($gonderi) { //gonderi = post

	wp_nonce_field('kitapVerisiKaydet', 'kitapBilgiKutusu');

	$sayfaSayisiDegeri = get_post_meta($gonderi->ID, 'sayfaSayisiAnahtari', true);
	$basimYiliDegeri = get_post_meta($gonderi->ID, 'basimYiliAnahtari', true);
	$hatirlamaBasimYiliDegeri = get_post_meta($gonderi->ID, 'hatirlamaBasimYiliAnahtari', true);
	$tarihDegeri = get_post_meta($gonderi->ID, 'tarihAnahtari', true);
	$hatirlamaTarihDegeri = get_post_meta($gonderi->ID, 'hatirlamaTarihAnahtari', true);
	$puanDegeri = get_post_meta($gonderi->ID, 'puanAnahtari', true);
	$kitapAciklamaDegeri = get_post_meta($gonderi->ID, 'kitapAciklamaAnahtari', true);
	$kitapYorumDegeri = get_post_meta($gonderi->ID, 'kitapYorumAnahtari', true);

	$basimYiliHatirlama = isset( $hatirlamaBasimYiliDegeri ) ? esc_attr( $hatirlamaBasimYiliDegeri ) : '';
	$tarihHatirlama = isset( $hatirlamaTarihDegeri ) ? esc_attr( $hatirlamaTarihDegeri ) : '';

	?>

	<p>

		<label for="sayfaSayisiAnahtari" style="bold:">Sayfa Sayısı:</label>
		<input type="number" name="sayfaSayisiAnahtari" value="<?= $sayfaSayisiDegeri ?>">

	</p>

	<p>

		<label for="basimYiliAnahtari">Basım Yılı:</label>
		<input type="number" name="basimYiliAnahtari" value="<?= $basimYiliDegeri ?>">
		<input type="checkbox" name="hatirlamaBasimYiliAnahtari" value="Hatırlamıyorum" <?php checked( $basimYiliHatirlama, 'Hatırlamıyorum' ); ?>> Hatırlamıyorum / Bilinmiyor

	</p>

	<p>

		<label for="tarihAnahtari">Bitiş Tarihi:</label>
		<input type="date" name="tarihAnahtari" value="<?= $tarihDegeri ?>">
		<input type="checkbox" name="hatirlamaTarihAnahtari" value="Hatırlamıyorum" <?php checked( $tarihHatirlama, 'Hatırlamıyorum' ); ?>> Hatırlamıyorum

	</p>

	<p>

		<label for="puanAnahtari">Puan Sıralaması:</label><br>
		<input type="radio" name="puanAnahtari" value="1" <?php checked(1, $puanDegeri, true); ?>> Çok Düşük <br>
		<input type="radio" name="puanAnahtari" value="2" <?php checked(2, $puanDegeri, true); ?>> Düşük <br>
		<input type="radio" name="puanAnahtari" value="3" <?php checked(3, $puanDegeri, true); ?>> Orta <br>
		<input type="radio" name="puanAnahtari" value="4" <?php checked(4, $puanDegeri, true); ?>> Yüksek <br>
		<input type="radio" name="puanAnahtari" value="5" <?php checked(5, $puanDegeri, true); ?>> Çok Yüksek

	</p>

	<p>

		<label for="puanAnahtari">Kitap Açıklaması:</label><br>
		<textarea name="kitapAciklamaAnahtari" rows="6" cols="100"><?= $kitapAciklamaDegeri ?></textarea>

	</p>

	<p>

		<label for="puanAnahtari">Kitap Hakkındaki Yorumum:</label><br>
		<textarea name="kitapYorumAnahtari" rows="6" cols="100"><?= $kitapYorumDegeri ?></textarea>

	</p>

	<?php
}

function kitapVerisiKaydet($gonderiID) {

	$sayfaSayisiVerilerim = esc_html($_POST['sayfaSayisiAnahtari']);  //sanitize'la dene
	$basimYiliVerilerim = esc_html($_POST['basimYiliAnahtari']);
	$hatirlamaBasimYiliVerilerim = esc_html($_POST['hatirlamaBasimYiliAnahtari']);
	$tarihVerilerim = esc_html($_POST['tarihAnahtari']);
	$hatirlamaTarihVerilerim = esc_html($_POST['hatirlamaTarihAnahtari']);
	$puanVerilerim = esc_html($_POST['puanAnahtari']);
	$kitapAciklamaVerilerim = esc_html($_POST['kitapAciklamaAnahtari']);
	$kitapYorumVerilerim = esc_html($_POST['kitapYorumAnahtari']);

	if (!isset($_POST['kitapBilgiKutusu'])) {

		return;

	}

	if (!wp_verify_nonce($_POST['kitapBilgiKutusu'], 'kitapVerisiKaydet')) {

		return;

	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {

		return;

	}

	if (!current_user_can('edit_post', $gonderiID)) {

		return;

	}

	if (isset($sayfaSayisiVerilerim) && $sayfaSayisiVerilerim != '') {

		update_post_meta($gonderiID, 'sayfaSayisiAnahtari', $sayfaSayisiVerilerim);

	}

	if (isset($basimYiliVerilerim) && $basimYiliVerilerim != '') {

		update_post_meta($gonderiID, 'basimYiliAnahtari', $basimYiliVerilerim);

	}

	if (isset($hatirlamaBasimYiliVerilerim) && $hatirlamaBasimYiliVerilerim != '') {

		update_post_meta($gonderiID, 'hatirlamaBasimYiliAnahtari', $hatirlamaBasimYiliVerilerim);

	} else {

		delete_post_meta($gonderiID, 'hatirlamaBasimYiliAnahtari');

	}

	if (isset($_POST['tarihAnahtari']) && ($_POST['tarihAnahtari'] != '')) {

		update_post_meta($gonderiID, 'tarihAnahtari', $tarihVerilerim);

	}

	if (isset($hatirlamaTarihVerilerim) && $hatirlamaTarihVerilerim != '') {

		update_post_meta($gonderiID, 'hatirlamaTarihAnahtari', $hatirlamaTarihVerilerim);

	} else {

		delete_post_meta($gonderiID, 'hatirlamaTarihAnahtari');

	}

	if (isset($_POST['puanAnahtari']) && ($_POST['puanAnahtari'] != '')) {

		update_post_meta($gonderiID, 'puanAnahtari', $puanVerilerim);

	}

	if (isset($_POST['kitapAciklamaAnahtari']) && ($_POST['kitapAciklamaAnahtari'] != '')) {

		update_post_meta($gonderiID, 'kitapAciklamaAnahtari', $kitapAciklamaVerilerim);

	}

	if (isset($_POST['kitapYorumAnahtari']) && ($_POST['kitapYorumAnahtari'] != '')) {

		update_post_meta($gonderiID, 'kitapYorumAnahtari', $kitapYorumVerilerim);

	}

}
add_action('save_post', 'kitapVerisiKaydet');


// Yönetici sayfasındaki Kitaplar'ın içerisindeki kitapların sıralanması
function yoneticiSayfasiKitapSirala( $query ) {
    // Hiç bir şey yapma
    if( ! $query->is_main_query() || 'kitap' != $query->get( 'post_type' )  )
        return;

    //-------------------------------------------
    // Sıralamanın yapıldığı alan
    //-------------------------------------------

    $query->set( 'meta_key', 'tarihAnahtari' );
    $query->set( 'orderby',  array(
	    'tarihAnahtari' => 'DESC', // Önce kitabın bitirme traihini göze al.
	    'menu_order' => 'ASC'	   // Daha sonra menünün kendi sırası, yani kitabın yükleme sırasını
    ) );
    $query->set( 'order',  'DESC' );

}

is_admin() && add_action( 'pre_get_posts', 'yoneticiSayfasiKitapSirala', 999999999 );


// Yönetilebilir Galeri sayfası hazırlama
function yonetilirGaleriSayfasiYap() {

	$etiketler = array(

		'name' => 'Galeri',
		'singular_name' => 'Fotoğraf',
		'add_new' => 'Yeni Fotoğraf',
		'all_items' => 'Galeri',
		'add_new_item' => 'Yeni Ekle',
		'new_item' => 'Yeni Fotoğraf',
		'edit_item' => 'Fotoğrafı Düzenle',
		'view_item' => 'Fotoğrafı Gör',
		'search_items' => 'Fotoğrafı Ara',
		'not_found' => 'Fotoğraf Bulunamadı',
		'not_found_in_trash' => 'Çöp Kutusunda Fotoğraf Bulunamadı',
		'parent_item_colon' => 'Fotoğraf Üst Dizini:'

	);

	$argumanlar = array(

		'labels' => $etiketler,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array(

			'slug' => 'galeri'

		),
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(

			'title',
			'thumbnail'

		),

		'menu_position' => 101,
		'exclude_from_search' => false,
		'show_in_admin_bar' => true,
		'menu_icon' => 'dashicons-format-gallery'

	);

	register_post_type('galeri', $argumanlar);

}
add_action('init', 'yonetilirGaleriSayfasiYap');


// Her bir yönetilebilir sayfaya özel kategoriler ekleme
function galeriKategorizeEt() {

	// Yeni hiyerarşik kategori ekle
	$etiketler = array(

		'name' => 'Albümler',
		'singular_name' => 'Albüm',
		'search_items' => 'Albüm Ara',
		'all_items' => 'Bütün Albümler',
		'parent_item' => 'Albüm Üst Dizini',
		'parent_item_colon' => 'Albüm Üst Dizini:',
		'edit_item' => 'Albümü Düzenle',
		'update_item' => 'Albümü Güncelle',
		'add_new_item' => 'Albüm Ekle',
		'new_item_name' => 'Yeni Albüm İsmi',
		'menu_name' => 'Albümler'

	);

	$argumanlar = array(

		'hierarchical' => true,
		'labels' => $etiketler,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'album')

	);

	register_taxonomy('album', array('galeri'), $argumanlar);

}
add_action('init', 'galeriKategorizeEt');


// Yönetici sayfasındaki Galeri ve Kitaplar kısımlarının kolonlarına resimlerin eklenmesi
function resimKolonuOlustur($kolonlar) {

	$yeniKolon = $kolonlar;
	array_splice( $yeniKolon, 1 ); //İlk kolondan sonraki kolona koymak için
	$yeniKolon['resim'] = 'Resim';
	return array_merge( $yeniKolon, $kolonlar );

}
add_filter('manage_galeri_posts_columns', 'resimKolonuOlustur');
add_filter('manage_kitap_posts_columns', 'resimKolonuOlustur');


function resimKolonunuAyarla($kolon) {

	switch ($kolon) {

		case 'resim' :

			the_post_thumbnail('thumbnail');

		break;

	}

}
add_action('manage_galeri_posts_custom_column', 'resimKolonunuAyarla');
add_action('manage_kitap_posts_custom_column', 'resimKolonunuAyarla');


// Yönetici sayfası Resim kolonu genişliğini ayarlama
function galeriResimKolonuGenisliginiAyarla() {
?>

    <style>

        .column-resim {
            width: 15%;
        }

    </style>

<?php
}
add_action('admin_head', 'galeriResimKolonuGenisliginiAyarla'); //head etiketinin için CSS'lerimizi koyduk

// Yönetilebilir Durum Mesajı sayfası hazırlama
function yonetilirDurumMesajiSayfasiYap() {

	$etiketler = array(

		'name' => 'Durum Mesajları',
		'singular_name' => 'Durum Mesajı',
		'add_new' => 'Yeni Durum Mesajı',
		'all_items' => 'Durum Mesajları',
		'add_new_item' => 'Yeni Ekle',
		'new_item' => 'Yeni Durum Mesajı',
		'edit_item' => 'Durum Mesajını Düzenle',
		'view_item' => 'Durum Mesajını Gör',
		'search_items' => 'Durum Mesajını Ara',
		'not_found' => 'Durum Mesajı Bulunamadı',
		'not_found_in_trash' => 'Çöp Kutusunda Durum Mesajı Bulunamadı',
		'parent_item_colon' => 'Durum Mesajı Üst Dizini:'

	);


	$argumanlar = array(

		'labels' => $etiketler,
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 102,
		'supports' => array(

			'title',
			'editor'

		),
		'menu_icon' => 'dashicons-format-status'

	);

	register_post_type('durum_mesaji', $argumanlar);

}

add_action('init', 'yonetilirDurumMesajiSayfasiYap');


function yeniDurumMesajiKolonlariOlustur($kolonlar) {

	$yeniKolon = array(

		'title' => 'Başlık',
		'yorum' => 'Yorumlar',
		'date' => 'Tarih'

	);

	return $yeniKolon;

}

// Aşağıdaki add_filter ve add_action fonksiyonlarının ilk parametresi içerisindeki register_post_type değişkenine dikkat et!!!
add_filter('manage_durum_mesaji_posts_columns', 'yeniDurumMesajiKolonlariOlustur');


function durumMesajiKolonlariniDuzelt($kolon) {

	if ($kolon == 'yorum') {

		the_excerpt();

	}

}

add_action('manage_durum_mesaji_posts_custom_column', 'durumMesajiKolonlariniDuzelt', 10, 1); // 10 varsayılan öncelik sırası, 2 parametre adedi



// Admin sayfasına İletişim sayfasından gönderilen mesajların bölümünü oluşturmak
function mesajlariOlustur() {

	$etiketler = array(

		'name' => 'Mesajlar',
		'singular_name' => 'Mesaj',
		'all_items' => 'Tüm Mesajlar',
		'edit_item' => 'Mesajı Düzenle',
		'view_item' => 'Mesajı Gör',
		'search_items' => 'Mesajı Ara',
		'not_found' => 'Mesaj Bulunamadı',
		'not_found_in_trash' => 'Çöp Kutusunda Mesaj Bulunamadı',
		'menu_name' => 'Mesajlar',
		'search_items' => 'Mesajı Ara',
		'name_admin_bar' => 'Mesaj'

	);

	$argumanlar = array(

		'labels' => $etiketler,
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 103,
		'supports' => array(

			'title',
			'editor'

		),
		'menu_icon' => 'dashicons-email-alt'


	);

	register_post_type('mesaj', $argumanlar);

}
add_action('init', 'mesajlariOlustur');


function yeniMesajKolonlariOlustur($kolonlar) {

	$yeniKolon = array(

		'title' => 'Adı ve Soyadı',
		'mesaj' => 'Mesaj',
		'eposta' => 'E-Posta',
		'date' => 'Tarih'

	);

	return $yeniKolon;

}
add_filter('manage_mesaj_posts_columns', 'yeniMesajKolonlariOlustur');


function mesajKolonlariniDuzelt($kolon, $mesajID) {

	switch ($kolon) {

		case 'mesaj' :

			the_excerpt();

		break;

		case 'eposta' :

			$eposta  = get_post_meta($mesajID, '_epostaAnahtari', true);
			echo '<a href="mailto:'.$eposta.'">'.$eposta.'</a>';

		break;

	}

}
add_action('manage_mesaj_posts_custom_column', 'mesajKolonlariniDuzelt', 10, 2); // 10 varsayılan öncelik sırası, 2 parametre adedi



// İletişim admin sayfası bilgi kutuları (meta box) oluşturma
function epostaBilgiKutusuEkle() {

	add_meta_box('epostabilgikutusu', 'E-posta Alanı', 'epostaBilgiKutusuIcerigiEkle', 'mesaj', 'side', 'high');

}

function epostaBilgiKutusuIcerigiEkle($gonderi) { //gonderi = post

	wp_nonce_field('epostaVerisiKaydet', 'epostaBilgiKutusu');

	$deger = get_post_meta($gonderi->ID, '_epostaAnahtari', true);

	echo '<label for="epostaBilgiAlani">E-posta Adresi: </label>';
	echo '<input type="email" id="epostaBilgiAlani" name="epostaBilgiAlani" value="'.esc_attr($deger).'" size="25" >';

}
add_action('add_meta_boxes', 'epostaBilgiKutusuEkle');

function epostaVerisiKaydet($gonderiID) {

	if (!isset($_POST['epostaBilgiKutusu'])) {

		return; // Buradan sonra devam etme anlamında

	}

	if (!wp_verify_nonce($_POST['epostaBilgiKutusu'], 'epostaVerisiKaydet')) {

		return;

	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {

		return;

	}

	if (!current_user_can('edit_post', $gonderiID)) {

		return;

	}

	if (!isset($_POST['epostaBilgiAlani'])) {
		return;

	}

	$verilerim = sanitize_text_field($_POST['epostaBilgiAlani']);
	update_post_meta($gonderiID, '_epostaAnahtari', $verilerim);

}
add_action('save_post', 'epostaVerisiKaydet');


// Admin sayfasındaki Yazılar (Bloglar) kısmında Yazar Kolonunu Kaldırma
function yazarKolonunuKaldir( $kolonlar ) {

    unset($kolonlar['author']);
    return $kolonlar;

  }

  function kolonKaldirmayiBaslat() {

    add_filter( 'manage_posts_columns' , 'yazarKolonunuKaldir' );

  }

  add_action( 'admin_init' , 'kolonKaldirmayiBaslat' );



  // Yıldızlarla Puan Durumu Gösterme
  function puanGoster($yildiz) {

      if ($yildiz == 1) {

          echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>';

      }

      elseif ($yildiz == 2) {

          echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>';

      }

      elseif ($yildiz == 3) {

          echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>';

      }

      elseif ($yildiz == 4) {

          echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>';

      }

      elseif ($yildiz == 5) {

          echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';

      }

  }
