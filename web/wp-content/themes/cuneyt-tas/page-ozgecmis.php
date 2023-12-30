<?php

get_header();

if (have_posts()) :

	while (have_posts()) : the_post();
?>

	<div class="ozSol sutun-6">

		<h2>Genel Bilgiler</h2>
		<ul class="profil">

			<li class="satir"><label class="proBaslik sutun-4">Memleketim ve Yaşadığım Şehir:</label><span class="proBilgi sutun-8">Çorum/Merkez</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Diller:</label><span class="proBilgi sutun-8">Türkçe (Ana Dil Seviyesi)<br>İngilizce (Yazma ve okuma = B1 Seviyesi, Konuşma ve dinleme = A2 Seviyesi)</span></li>
			<li class="satir"><label class="proBaslik sutun-4">İlgi Alanlarım:</label><span class="proBilgi sutun-8">Sinema, Kitap, Ev Hayvanları Bakımı, Bitki Yetiştirme, Koleksiyon, Bisiklet, Elektronik</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Sürücü Belgesi:</label><span class="proBilgi sutun-8">B Sınıfı (2007)</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Medenî Durumum:</label><span class="proBilgi sutun-8">Evli ve 1 Çocuk Babası</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Dinî İnancım:</label><span class="proBilgi sutun-8">İslâm</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Tuttuğum Takım:</label><span class="proBilgi sutun-8">Yok</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Sigara ve Alkol Kullanımı:</label><span class="proBilgi sutun-8">Kullanmıyorum</span></li>

		</ul>
		<h2>İş Deneyimleri</h2>
		<ul class="basliklar">

			<li>

				<div class="deneyim satir">

					<h3 class="baslik sutun-6">Web Geliştiricisi</h3>
					<span class="periyot sutun-6">Ocak 2022 - Ağustos 2023</span>

				</div>

				<h4 class="isAdi">

					<i class="fa fa-suitcase"></i>
					<a href="https://www.invicti.com/" target="_blank">Invicti Security</a>

				</h4>
				<p>Web uygulama güvenliği alanında global lider olan ABD merkezli şirketin iki ürünü <a href="https://www.invicti.com/" target="_blank">Invicti</a> ve <a href="https://www.acunetix.com/" target="_blank">Acunetix</a>'in WordPress tabanlı web sitelerinden sorumluydum. Burada yaptığım işler özetle şu şekildedir:</p>
				<p> - Verilen Figma tasarımlarına göre özelleştirilmiş Gutenberg blokları ile mobil uyumlu yeni sayfalar oluşturma ve güncelleme<br>
					- Sitelerde bulunan hataların giderilmesi<br>
					- Gutenberg blokları ve şablonları (pattern) oluşturma<br>
					- Eski Invicti web sitesinin .NET'ten WordPress'e geçirilmesi projesinde görev alınması<br>
					- Invicti web sitesinin marka değiştirme kapsamında yeniden güncellenmesi<br>
					- Lighthouse skorlarının yükseltilmesi<br>
					- Gerekli dokümantasyonların yapılması</p>
				<p><b>Kullandığım Araçlar: </b>WordPress, Gutenberg, Advanced Custom Fields (ACF), PHP, Laravel Blade, JavaScript, SASS, Tailwind CSS, GitLab, Figma, Jira, Confluence, TeamCity, Scrum</p>

			</li>

			<li>

				<div class="deneyim satir">

					<h3 class="baslik sutun-6">WordPress Geliştiricisi</h3>
					<span class="periyot sutun-6">Ocak 2021 - Ocak 2022</span>

				</div>

				<h4 class="isAdi">

					<i class="fa fa-suitcase"></i>
					<a href="https://www.rewiresecurity.co.uk/" target="_blank">Rewire Security</a>

				</h4>
				<p>GPS izleme ve telematik alanında teknolojiler üreten İngiltere merkezli şirketin ana <a href="https://www.rewiresecurity.co.uk/" target="_blank">web sitesinden</a> ve Slovakya’daki Avrupa satış ofisinin e-ticaret web sitesi olan <a href="https://gpslive.sk/" target="_blank">GPSLive</a>'dan sorumluydum. Burada yaptığım işler özetle şu şekildedir:</p>
				<p> - Ana sitenin yeni tasarım ile yeniden geliştirilmesi<br>
					- GPSLive Slovakya sitesinin geliştirilmesi ve çoklu dil desteğinin verilmesi<br>
					- Bu iki sitenin bakımı, hata düzeltmeleri ve güncellenmeleri</p>
				<p><b>Kullandığım Araçlar: </b>WordPress, WooCommerce, WPBakery, WPML ile Çoklu Dil Desteği, SCSS, JavaScript, jQuery, WordPress Hooks, WordPress Shortcodes, Mobil Uyumluluk, Adobe XD</p>

			</li>

			<li>

				<div class="deneyim satir">

					<h3 class="baslik sutun-6">Web Geliştiricisi</h3>
					<span class="periyot sutun-6">Mayıs 2017 - Kasım 2020</span>

				</div>

				<h4 class="isAdi">

					<i class="fa fa-suitcase"></i>
					<a href="https://www.twelve12.com" target="_blank">Twelve12</a>

				</h4>
				<p>Şirketin web geliştirme departmanında PHP ve WordPress kullanarak web sitesi geliştirme ve bakımlarından sorumluydum. Burada yaptığım işler özetle şu şekildedir:</p>
				<p> - Yaklaşık 60 müşterinin Figma/Photoshop’ta tasarlanmış web sitelerinin geliştirilmesi<br>
					- Bu web sitelerin bakım ve güncellemelerinin yapılması<br>
					- Sitelerin akıllı telefon, tablet, masaüstü ve büyük ekran versiyonlarının geliştirilmesi<br>
					- Sitelerin ACF kullanılarak düzenlenebilir ve dinamik hale getirilmesi<br>
					- "Staging" ortamında ön testlerin yapılması<br>
					- Şirket websitelerinin bakımı ve geliştirilmesi<br>
					- Tasarıma göre HTML e-posta taslakları geliştirme<br>
					- Sitelerin WCAG (Erişilebilirlik [Accessibility]) uyumlu hale getirilmesi</p>
				<p><b>Kullandığım Araçlar: </b>WordPress, WooCommerce, Advanced Custom Fields (ACF), PHP, MySQL, JavaScript, jQuery, HTML, CSS, SCSS, Mobil Uyumluluk, Web Erişilebilirliği (WCAG), Gulp, Figma/Photoshop, Git/GitHub/Bitbucket, Bootstrap, Zurb Foundation</p>

			</li>
			<li>

				<div class="deneyim satir">

					<h3 class="baslik sutun-6">Bilgi Teknolojileri Uzman Yardımcısı</h3>
					<span class="periyot sutun-6">Aralık 2015 - Şubat 2016</span>

				</div>

				<h4 class="isAdi">

					<i class="fa fa-suitcase"></i>
					<a href="https://www.greyder.com/" target="_blank">Greyder</a>

				</h4>
				<p>Çorum Merkez ve İskilip Greyder fabrikalarının sunucu ve bilgisayarlarının bakım ve onarımı, ülke genelindeki mağazalara uzaktan teknik destek gibi işlerden sorumluydum. </p>

			</li>
			<li>

				<div class="deneyim satir">

					<h3 class="baslik sutun-6">Stajyer</h3>
					<span class="periyot sutun-6">Ağustos 2014</span>

				</div>

				<h4 class="isAdi">

					<i class="fa fa-suitcase"></i>
					<a href="http://corumeah.saglik.gov.tr/" target="_blank">Hitit Üniversitesi Eğitim ve Araştırma Hastanesi Bilgi İşlem Birimi</a>

				</h4>
				<p>Birimler arası ağ kablolama ve teknik destek gibi alanlarda çalıştım.</p>

			</li>
			<li>
				<div class="deneyim satir">

					<h3 class="baslik sutun-6">Stajyer</h3>
					<span class="periyot sutun-6">Haziran 2014 - Temmuz 2014</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-suitcase"></i>
					<a href="http://www.corum.gov.tr/bilgi-islem-sube-mudurlugu" target="_blank">Çorum Valiliği Bilgi İşlem Müdürlüğü</a>

				</h4>
				<p> Sunucuya Windows Server 2008 işletim sisteminin kurulumunun öğrenilmesi; DNS, DHCP ve Active Directory kurulumu, Labris UTM-52 Güvenlik Cihazının Kontrolü, IP Dağıtma gibi işlemler yaptım. </p>

			</li>
			<li>

				<div class="deneyim satir">

					<h3 class="baslik sutun-6">Stajyer</h3>
					<span class="periyot sutun-6">Temmuz 2013 - Ağustos 2013</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-suitcase"></i>
					<a href="http://www.osoa.com.tr/" target="_blank">OSOA Yazılım ve Danışmanlık</a>

				</h4>
				<p> C# programlama dili üzerine çalışarak bununla ilgili uygulamalar yaptım.</p>

			</li>

		</ul>
		<h2>Eğitim Bilgileri</h2>
		<ul class="basliklar">

			<li>

				<div class="satir">

					<h3 class="baslik sutun-6">Üniversite (Lisans)</h3>
					<span class="periyot sutun-6">2010 - 2015</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-graduation-cap"></i>
					<a href="http://bil.muh.firat.edu.tr/" target="_blank">Fırat Üniversitesi Mühendislik Fakültesi Bilgisayar Mühendisliği Bölümü</a>

				</h4>
				<p>Yarım dönem gecikmeli olarak bitirdim. Mezuniyet puanım 4'lük sisteme göre 2.38'dir.</p>
				<div class="dersBolumu">

					<h5 class="dersler"><i class="fa fa-book"></i>DERSLER</h5>

					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">1. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Fizik-1</li>
						<li>Matematik-1</li>
						<li>Bilgisayar Mühendisliği için Elektrik Devreleri</li>
						<li>Algoritma ve Programlama-1</li>
						<li>Matematik-2</li>
						<li>Algoritma ve Programlama-2</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">2. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Meslekî İngilizce-1</li>
						<li>Lineer Cebir</li>
						<li>Meslekî İngilizce-2</li>
						<li>Sayısal İşaret İşleme</li>
						<li>Olasılık ve İstatistik</li>
						<li>Diferansiyel Denklemler</li>
						<li>Bilgisayar Bilimi için Ayrık Yapılar</li>
						<li>Sayısal Kontrol</li>
						<li>Sistem Teorisi</li>
						<li>Sayısal Tasarım</li>
						<li>Bilgisayar Organizasyonu ve Tasarımı</li>
						<li>Sayısal Elektronik Laboratuvarı</li>
						<li>Veri Yapıları</li>
						<li>Sayısal Yöntemler</li>

					</ul>
					<div class="temizle"></div>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">3. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Programlama Dilleri</li>
						<li>Ekonomi</li>
						<li>İşletim Sistemleri</li>
						<li>Veritabanı Sistemleri</li>
						<li>Yazılım Mühendisliği</li>
						<li>Bilgisayarlı Grafik</li>
						<li>Bilgisayar Ağları</li>
						<li>Meslekî Uygulama-1</li>
						<li>Mikroişlemciler</li>
						<li>Biçimsel Diller ve Otomata Teorisi</li>
						<li>Algoritma Analizi</li>

					</ul>
					<div class="temizle"></div>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">4. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Endüstri Sosyolojisi</li>
						<li>Duyarga Ağları</li>
						<li>Bilgisayar Mimarisi</li>
						<li>Bilgisayar Sistemleri Laboratuvarı</li>
						<li>Robotik</li>
						<li>Gömülü Sistem Tasarımı</li>
						<li>Bitirme Projesi</li>
						<li>Yönetim Sosyolojisi</li>
						<li>Derleyici Tasarımı</li>
						<li>Benzetim ve Modelleme</li>
						<li>İnternet Programlama</li>
						<li>Meslekî Uygulama-2</li>
						<li>Bilgisayar Mühendisliğinde Tasarım</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->

				</div> <!-- dersBolumu sonu  -->

			</li>
			<li>

				<div class="satir">

					<h3 class="baslik sutun-6">Üniversite (Lisans - Terk)</h3>
					<span class="periyot sutun-6">2008 - 2010</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-graduation-cap"></i>
					<a href="https://egitim.amasya.edu.tr/bolumler/matematik-ve-fen-bilimleri-egitimi-bolumu/fen-bilgisi-egitimi-anabilim-dali.aspx" target="_blank">Amasya Üniversitesi Eğitim Fakültesi Fen Bilgisi Öğretmenliği Bölümü</a>

				</h4>
				<p>2. sınıfın sonunda yeniden ÖSS'ye girip diğer bölümü kazandığımdan okulu bıraktım. Aşağıda öğrenim gördüğüm süre içerisinde başarılı olup geçtiğim dersler listelenmiştir.</p>
				<div class="dersBolumu">

					<h5 class="dersler"><i class="fa fa-book"></i>DERSLER</h5>

					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">1. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Genel Fizik Laboratuvarı-1</li>
						<li>Genel Kimya Laboratuvarı-1</li>
						<li>Eğitim Bilimine Giriş</li>
						<li>Atatürk İlkeleri ve İnkılap Tarihi-1</li>
						<li>Türkçe-1: Yazılı Anlatım</li>
						<li>Genel Fizik-2</li>
						<li>Genel Fizik Laboratuvarı-2</li>
						<li>Genel Kimya-2</li>
						<li>Genel Kimya Laboratuvarı-2</li>
						<li>Eğitim Psikolojisi</li>
						<li>Atatürk İlkeleri ve İnkılap Tarihi-2</li>
						<li>Türkçe-2: Sözlü Anlatım</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">2. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Bilgisayar-1</li>
						<li>İngilizce-1</li>
						<li>Genel Biyoloji-1</li>
						<li>Genel Biyoloji Laboratuvarı-1</li>
						<li>Öğretim İlke ve Yöntemleri</li>
						<li>İngilizce-2</li>
						<li>Genel Biyoloji-2</li>
						<li>Genel Biyoloji Laboratuvarı-2</li>
						<li>Modern Fiziğe Giriş</li>
						<li>Bilgisayar-2</li>
						<li>Meslekî İngilizce</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->

				</div> <!-- dersBolumu sonu  -->

			</li>
			<li>

				<div class="satir">

					<h3 class="baslik sutun-6">Lise</h3>
					<span class="periyot sutun-6">2003 - 2007</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-graduation-cap"></i>
					<a href="http://corumfatihanadolulisesi.meb.k12.tr/" target="_blank">Çorum Fatih Lisesi (Yabancı Dil Ağırlıklı)</a>

				</h4>
				<p>Süper lise olarak da adlandırılan İngilizce ağırlıklı liseydi. Lise 2. sınıfta Fen Bilimleri (Sayısal) alanını seçtim. Mezuniyet puanım 100'lük not sistemine göre 83'tür.</p>
				<div class="dersBolumu">

					<h5 class="dersler"><i class="fa fa-book"></i>DERSLER</h5>

					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">Hazırlık Sınıfı</h6>
					<ul class="ders sutun-10">

						<li>Türkçe</li>
						<li>İngilizce</li>
						<li>Beden Eğitimi</li>
						<li>Müzik</li>
						<li>Bilgisayar</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">1. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türk Dili ve Edebiyatı</li>
						<li>Din Kültürü ve Ahlak Bilgisi</li>
						<li>Tarih</li>
						<li>Coğrafya</li>
						<li>Matematik</li>
						<li>Biyoloji</li>
						<li>Fizik</li>
						<li>Kimya</li>
						<li>Sağlık Bilgisi</li>
						<li>İngilizce</li>
						<li>Beden Eğitimi</li>
						<li>Bilgisayar</li>
						<li>Müzik</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">2. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türk Dili ve Edebiyatı</li>
						<li>Din Kültürü ve Ahlak Bilgisi</li>
						<li>Tarih</li>
						<li>Millî Güvenlik</li>
						<li>İngilizce</li>
						<li>Biyoloji</li>
						<li>Fizik</li>
						<li>Kimya</li>
						<li>Matematik</li>
						<li>Geometri</li>
						<li>Kimya Uygulamaları</li>
						<li>Fizik Uygulamaları</li>
						<li>Analitik Geometri</li>
						<li>Beden Eğitimi</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">3. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türk Dili ve Edebiyatı</li>
						<li>Din Kültürü ve Ahlak Bilgisi</li>
						<li>Türkiye Cumhuriyeti İnkılap Tarihi ve Atatürkçülük</li>
						<li>Felsefe</li>
						<li>Biyoloji</li>
						<li>Fizik</li>
						<li>Kimya</li>
						<li>Matematik</li>
						<li>Biyoloji Uygulamaları</li>
						<li>Kimya Uygulamaları</li>
						<li>Geometri</li>
						<li>Analitik Geometri</li>
						<li>İngilizce</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->

				</div> <!-- dersBolumu sonu  -->

			</li>
			<li>

				<div class="satir">

					<h3 class="baslik sutun-6">İlköğretim</h3>
					<span class="periyot sutun-6">1998 - 2003</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-graduation-cap"></i>
					<a href="http://corummimarsinanortaokulu.meb.k12.tr/" target="_blank">Çorum Mimar Sinan İlköğretim Okulu</a>

				</h4>
				<p>4. sınıftan ortaokul 3. sınıfın sonuna kadar da bu okulda öğrenim gördüm. 1998 yılında, 8 yıllık eğitime geçilince eski okulum kapanmış ve bu okula taşınmıştık.</p>
				<div class="dersBolumu">

					<h5 class="dersler"><i class="fa fa-book"></i>DERSLER</h5>

					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">4. - 5. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türkçe</li>
						<li>Matematik</li>
						<li>Fen Bilgisi</li>
						<li>Sosyal Bilgiler</li>
						<li>İngilizce</li>
						<li>Din Kültürü ve Ahlak Bilgisi</li>
						<li>Resim-İş</li>
						<li>Müzik</li>
						<li>Beden Eğitimi</li>
						<li>İş Eğitimi</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">6. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türkçe</li>
						<li>Matematik</li>
						<li>Fen Bilgisi</li>
						<li>Sosyal Bilgiler</li>
						<li>İngilizce</li>
						<li>Din Kültürü ve Ahlak Bilgisi</li>
						<li>Resim-İş</li>
						<li>Müzik</li>
						<li>Beden Eğitimi</li>
						<li>İş Eğitimi</li>
						<li>Trafik ve İlk Yardım Eğitimi</li>
						<li>Tarım</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">7. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türkçe</li>
						<li>Matematik</li>
						<li>Fen Bilgisi</li>
						<li>Sosyal Bilgiler</li>
						<li>Vatandaşlık ve İnsan Hakları Eğitimi</li>
						<li>İngilizce</li>
						<li>Din Kültürü ve Ahlak Bilgisi</li>
						<li>Resim-İş</li>
						<li>Müzik</li>
						<li>Beden Eğitimi</li>
						<li>İş Eğitimi</li>
						<li>Tarım</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->
					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">8. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türkçe</li>
						<li>Matematik</li>
						<li>Fen Bilgisi</li>
						<li>Vatandaşlık ve İnsan Hakları Eğitimi</li>
						<li>Türkiye Cumhuriyeti İnkılap Tarihi ve Atatürkçülük</li>
						<li>İngilizce</li>
						<li>Din Kültürü ve Ahlak Bilgisi</li>
						<li>Resim-İş</li>
						<li>Müzik</li>
						<li>Beden Eğitimi</li>
						<li>İş Eğitimi</li>
						<li>Trafik ve İlk Yardım Eğitimi</li>
						<li>Tarım</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->

				</div> <!-- dersBolumu sonu  -->

			</li>
			<li>

				<div class="satir">

					<h3 class="baslik sutun-6">İlkokul</h3>
					<span class="periyot sutun-6">1995 - 1998</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-graduation-cap"></i>
					Çorum Millî Eğitim Vakfı İlkokulu

				</h4>
				<p>1. sınıftan 3. sınıfın sonuna kadar bu okuldaydım.</p>
				<div class="dersBolumu">

					<h5 class="dersler"><i class="fa fa-book"></i>DERSLER</h5>

					<div class="sinifBolumu satir">

					<h6 class="sinif sutun-2">1. - 2. - 3. Sınıf</h6>
					<ul class="ders sutun-10">

						<li>Türkçe</li>
						<li>Matematik</li>
						<li>Hayat Bilgisi</li>
						<li>Resim-İş</li>
						<li>Müzik</li>
						<li>Beden Eğitimi</li>

					</ul>

					</div> <!-- sinifBolumu sonu  -->

				</div> <!-- dersBolumu sonu  -->

			</li>
			<li>

				<div class="satir">

					<h3 class="baslik sutun-6">Ana Sınıfı</h3>
					<span class="periyot sutun-6">1994 - 1995</span>

				</div>
				<h4 class="isAdi">

					<i class="fa fa-graduation-cap"></i>
					Çorum Millî Eğitim Vakfı İlkokulu

				</h4>

			</li>

		</ul>

	</div> <!-- iceriğin sol tarafının sonu -->

	<div class="ozSag sutun-6">

		<h2>Yetenekler</h2>
		<h3 class="yetBaslik">WordPress Bileşenleri</h3>
		<ul class="basliklar">

			<li class="satir">

				<span class="yetenek sutun-8">WordPress</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Tema Geliştirme</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Eklenti Geliştirme</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Çoklu Dil Desteği (WPML)</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">WooCommerce</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Advanced Custom Fields (ACF)</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Arama Motoru Optimizasyonu (SEO)</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Gutenberg Blokları</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Sayfa/Şablon Oluşturucular (WPBakery vb.)</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">WordPress Hooks (Filters & Actions)</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>

		</ul>
		<h3 class="yetBaslik">Ön Yüz (Front-End)</h3>
		<ul class="basliklar">

			<li class="satir">

				<span class="yetenek sutun-8">HTML</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">CSS</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">SCSS</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">PostCSS</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Tailwind CSS</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Flowbite</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Bootstrap</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Mobil Uyumluluk</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">JavaScript</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">jQuery</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Astro</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Nuxt</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Laravel Blade</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Gulp / Laravel Mix</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Web Erişilebilirliği (WCAG)</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">W3 Doğrulama (Validation)</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">HTML E-posta Geliştirme</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>

		</ul>
		<h3 class="yetBaslik">Arka Yüz (Back-End)</h3>
		<ul class="basliklar">

			<li class="satir">

				<span class="yetenek sutun-8">PHP</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">SQL/MySQL</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>

		</ul>

		<h3 class="yetBaslik">Araçlar</h3>
		<ul class="basliklar">

			<li class="satir">

				<span class="yetenek sutun-8">Git</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Github</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">GitLab</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Bitbucket</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Figma</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Adobe XD</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Adobe Photoshop</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Visual Studio Code</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Asana</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Jira</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">Docker</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">TeamCity</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>

		</ul>
		<h3 class="yetBaslik">Elektronik</h3>
		<ul class="basliklar">

			<li class="satir">

				<span class="yetenek sutun-8">Arduino</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>
			<li class="satir">

				<span class="yetenek sutun-8">ESP32</span>
				<span class="seviye sutun-4">
					<i class="fa fa-tint fa-lg dolu"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
					<i class="fa fa-tint fa-lg bos"></i>
				</span>

			</li>

		</ul>
		<h3 class="yetBaslik">Diğer</h3>
		<p>Aşağıda çoğunlukla okulda ve stajda öğrenip, bir daha alan değiştirince kullanmadığım teknolojileri sıralayacağım. Bu teknolojilere olan yetkinlik düzeylerim başlangıç düzeyinde veya yüksek olmasına rağmen zamanla kullanmayınca azalmıştır.</p>
		<ul class="basliklar">

			<li class="satir">

				<span class="yetenek sutun-12">Java, JSP, PIC Assembly, MIPS Assembly, MATLAB, VHDL, C#, Lisp, Prolog, Netbeans, Eclipse, MPLAB, Adobe Dreamweaver, Microsoft Visual Studio 2010, Clisp, MySQL Workbench, SQL Server 2005, Microchip PIC, Proteus, Electronics Workbench, XBee, Opnet, Duyarga (Sensör) Ağları, OpenGL</span>

			</li>
		<h2>Sınavlar</h2>
		<ul class="basliklar">

		<li>

			<div class="deneyim satir">

				<h3 class="ozBilgi sutun-8"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>KPSS (Ortaöğretim)</h3>
				<span class="tarih sutun-4">Eylül 2008</span>

			</div>

			<div class="sinavNotu satir">

				<p class="sutun-3">Puan:</p>
				<p class="sutun-9">77</p>

			</div>
			<p>KPSS P94 puan türü belirtilmektedir.</p>

		</li>
		<li>

			<div class="deneyim satir">

				<h3 class="ozBilgi sutun-8"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ÖSS</h3>
				<span class="tarih sutun-4">Haziran 2010</span>

			</div>

			<div class="sinavNotu satir">

				<p class="sutun-3">YGS Puanı:</p>
				<p class="sutun-9">454</p>

			</div>
			<div class="sinavNotu satir">

				<p class="sutun-3">LYS Puanı:</p>
				<p class="sutun-9">412</p>

			</div>
			<p>YGS-1 ve MF-2 puan türlerinde "alanında" yerleştirme puanım belirtilmektedir.</p>

		</li>
		<li>

			<div class="deneyim satir">

				<h3 class="ozBilgi sutun-8"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>GUYS</h3>
				<span class="tarih sutun-4">Kasım 2015</span>

			</div>

			<div class="sinavNotu satir">

				<p class="sutun-3">Puan:</p>
				<p class="sutun-9">68</p>

			</div>
			<p>Gelir İdaresi Başkanlığının açmış olduğu Gelir Uzman Yardımcılığı Sınavı. Bu sınavdan geçmek için 70 alınması gerekiyorken 2 puanla kaçırmıştım.</p>

		</li>
		<li>

			<div class="deneyim satir">

				<h3 class="ozBilgi sutun-8"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ALES</h3>
				<span class="tarih sutun-4">Mayıs 2016</span>

			</div>

			<div class="sinavNotu satir">

				<p class="sutun-3">Puan:</p>
				<p class="sutun-9">74</p>

			</div>
			<p>ALES Sayısal Puanı belirtilmektedir.</p>

		</li>
		<li>

			<div class="deneyim satir">

				<h3 class="ozBilgi sutun-8"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>KPSS (Lisans)</h3>
				<span class="tarih sutun-4">Mayıs 2016</span>

			</div>

			<div class="sinavNotu satir">

				<p class="sutun-3">Puan:</p>
				<p class="sutun-9">88</p>

			</div>
			<p>KPSS P3 puan türü belirtilmektedir.</p>

		</li>
		<li>

			<div class="deneyim satir">

				<h3 class="ozBilgi sutun-8"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>YDS</h3>
				<span class="tarih sutun-4">Eylül 2016</span>

			</div>

			<div class="sinavNotu satir">

				<p class="sutun-3">Puan:</p>
				<p class="sutun-9">37</p>

			</div>
			<p>YDS'den başarılı sayılabilmek için en az 50 puan almak gerekiyor. Önceki sene çalışmadan girdiğim sınavdan 36 almıştım. Bu sene yaklaşık 1 hafta dil bilgisi çalıştıktan sonra 1 soru daha fazla doğru cevaplandırarak 37 puana yükseltmeyi başardım. </p>

		</li>

	</ul>

	<h2>Sertifikalar</h2>
	<ul class="basliklar">

		<li>

			<div class="deneyim satir">

				<h3 class="ozBilgi sutun-8"><i class="fa fa-certificate" aria-hidden="true"></i><a href="http://www.akinsoft.com.tr/" target="_blank">Akınsoft</a></h3>
				<span class="tarih sutun-4">Aralık 2011</span>

			</div>
			<p>Katılım Sertifikası</p>

			<p><ul>

				<li>- Akınsoft Firma Profili</li>
				<li>- Bilişimin İş Hayatındaki Önemi</li>
				<li>- Akınsoft'ta Kariyer Olanakları</li>

			</ul></p>

		</li>

	</ul>

	<h2>Askerlik Bilgileri</h2>
	<ul class="profil">

		<li><h3 class="ozBilgi" style="color: grey; border-bottom: none"><i class="fa fa-flag" aria-hidden="true" style="margin-right: 5px"></i>Acemilik Dönemi</h3>

			<li class="satir"><label class="proBaslik sutun-4">Eğitim Birliği:</label><span class="proBilgi sutun-8">İstihkam Okulu ve Eğitim Merkezi Komutanlığı</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Şehir:</label><span class="proBilgi sutun-8">İzmir/Narlıdere</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Giriş Tarihi:</label><span class="proBilgi sutun-8">3 Kasım 2016</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Ayrılış Tarihi:</label><span class="proBilgi sutun-8">25 Kasım 2016</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Kuvvet:</label><span class="proBilgi sutun-8">Kara Kuvvetleri Komutanlığı</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Ordu:</label><span class="proBilgi sutun-8">Ege Ordusu Komutanlığı (4. Ordu)</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Tabur:</label><span class="proBilgi sutun-8">2. Eğitim Taburu</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Bölük:</label><span class="proBilgi sutun-8">1. Temel Eğitim Bölüğü</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Takım:</label><span class="proBilgi sutun-8">2. Takım</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Manga:</label><span class="proBilgi sutun-8">7. Manga</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Sınıf:</label><span class="proBilgi sutun-8">İstihkam</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Rütbe:</label><span class="proBilgi sutun-8">Er</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Tertip:</label><span class="proBilgi sutun-8">365. Kısa Dönem</span></li>

		</li>

	</ul>

	<ul class="profil">

		<li><h3 class="ozBilgi" style="color: grey; border-bottom: none"><i class="fa fa-flag" aria-hidden="true" style="margin-right: 5px"></i>Ustalık Dönemi</h3>

			<li class="satir"><label class="proBaslik sutun-4">Esas Birliği:</label><span class="proBilgi sutun-8">1. Motorlu Piyade Tugayı Taşkısığı Komutan Yardımcılığı Elmasağa Cephaneliği</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Şehir:</label><span class="proBilgi sutun-8">Sakarya/Adapazarı</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Giriş Tarihi:</label><span class="proBilgi sutun-8">27 Kasım 2016</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Ayrılış Tarihi:</label><span class="proBilgi sutun-8">18 Nisan 2017</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Kuvvet:</label><span class="proBilgi sutun-8">Kara Kuvvetleri Komutanlığı</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Ordu:</label><span class="proBilgi sutun-8">Ege Ordusu Komutanlığı (4. Ordu)</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Tabur:</label><span class="proBilgi sutun-8">1. Motorlu Piyade Taburu</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Bölük:</label><span class="proBilgi sutun-8">Karargâh ve Karargâh Bölüğü</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Takım:</label><span class="proBilgi sutun-8">Emniyet ve Muhafız Takım Komutanlığı</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Sınıf:</label><span class="proBilgi sutun-8">Piyade</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Rütbe:</label><span class="proBilgi sutun-8">Er</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Nöbet Sayısı:</label><span class="proBilgi sutun-8">82 (3 tanesi 1'er saat, diğerleri 2'şer saat)</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Silah Cinsi:</label><span class="proBilgi sutun-8">G3</span></li>
			<li class="satir"><label class="proBaslik sutun-4">Görevler:</label><span class="proBilgi sutun-8">Telsiz-Telefon İşletmeni, Silahlık Görevlisi, Görüntü İzleme Uzmanı</span></li>

		</li>

	</ul>

	</div> <!-- iceriğin sağ tarafının sonu -->

<?php

	endwhile;

else :

	echo "<p>İçerik bulunamadı.</p>";

endif;

get_footer();

?>
