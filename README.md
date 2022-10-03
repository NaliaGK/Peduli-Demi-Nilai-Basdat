<a href="https://github.com/NaliaGK/Peduli-Demi-Nilai-Basdat/issues"><img src="https://img.shields.io/github/issues/NaliaGK/Peduli-Demi-Nilai-Basdat"></a>
<a href="https://github.com/NaliaGK/Peduli-Demi-Nilai-Basdat/blob/main/LICENSE" ><img src="https://img.shields.io/github/license/NaliaGK/Peduli-Demi-Nilai-Basdat"></a>
<a href="https://github.com/NaliaGK/Peduli-Demi-Nilai-Basdat/commits/main"><img src="https://img.shields.io/github/commit-activity/m/NaliaGK/Peduli-Demi-Nilai-Basdat"></a>


<a href="https://github.com/NaliaGK/Peduli-Demi-Nilai-Basdat"><img src="https://github.com/NaliaGK/Peduli-Demi-Nilai-Basdat/tree/main/Bootstrap%20Saves/pla.gif" alt="PeduliLindungi_Reworked" width="1920"/></a><br>
## Tentang PediliLindungi: Reworked

PeduliLindungi: Reworked adalah sebuah aplikasi web atau <i>aplikasi smartphone</i> yang membantu pemerintah dan juga  penduduk Indonesia atau peduduk asing yang sedang menetap di Indonesia untuk melakukan tracing dan pertolongan pertama. Aplikasi ini adalah perbaikan dari aplikasi awal dengan nama yang sama. Dengan aplikasi ini, diharapkan dapat membantu meneliti, menjaga, mencegah penularan virus COVID-19.

## Fitur-fitur yang disediakan

Berbeda dari aplikasi dasarnya, selain dari pelacakan penyebaran, aplikasi ini ditujukan untuk memberikan pengguna kenyamanan dan kemudahan akses untuk mendapatkan pertologan pertama dan informasi mengenai COVID-19  

- Pelacakan (<i>tracing</i>) penyebaran virus COVID-19  
- Informasi terkini mengenai penyebaran virus COVID-19
- Layanan pengobatan jarak jauh
- Pendaftaran layanan booster dan vaksin
- Informasi mengenai rumah sakit terdekat
dan lain-lain. Penjelasan mengenai fitur-fitur dan cara kerja, dapat ditemukan di bab selanjutnya.

## Implementasi, Cara Kerja Aplikasi, dan Fitur yang Tersedia :
<ol>
    <li>Pada saat Pengguna menginstall PeduliLindungi dan membukanya untuk pertama kali, aplikasi akan meminta persetujuan kepada Pengguna untuk mengaktifkan lokasi terkini, kamera, penyimpanan, dan bluetooth dari device terkait.</li>
    <li>Dengan kondisi lokasi pengguna aktif, maka PeduliLindungi akan melakukan penelusuran (tracing) dan pelacakan (tracking) lokasi Pengguna secara berkelanjutan untuk memberikan informasi terkait keramaian lingkungan sekitar, serta status kesehatan pengguna menggunakan kode warna sehingga pengguna dapat mengetahui lokasi mana yang aman atau tidak aman untuk bepergian.</li>
    <li>Aplikasi memberikan kemudahan bagi pengguna yang membutuhkan tes PCR melalui menu booking PCR untuk diarahkan menuju lokasi terdekat yang menyediakan layanan tersebut</li>
    <li>Pada versi terbaru aplikasi akan disediakan Check for covid A.I beta yaitu survey yang dapat diisi oleh pengguna yang merasa ragu dengan status kesehatannya. Pengguna akan diminta memasukkan data-data kesehatan terkini seperti suhu tubuh, saturasi oksigen, keluhan, dan lain-lain. Hasil dari survey tersebut akan dianalisa oleh A.I dan sistem akan memberikan prediksi dari status kesehatan pengguna disertai saran selanjutnya untuk membantu pengguna mengambil langkah selanjutnya.</li>
    <li>Hasil penelusuran dan pelacakan tersebut akan digunakan oleh aplikasi dan Pemerintah Republik Indonesia untuk alat bantu identifikasi individu yang perlu mendapat penanganan lanjutan guna mencegah penyebaran COVID-19 dan penyakit lainnya. Jika pengguna membutuhkan pelayanan rumah sakit secara cepat dan tepat maka dapan menggunakan fitur Find a Hospital untuk mengetahui lokasi rumah sakit terdekat serta kontak yang dapat dihubungi</li>
    <li>Tersedia fitur untuk pelayanan ambulans yang terhubung ke command center kegawatdaruratan dimana saluran tersebut siap menerima respon 24 jam untuk pengguna yang menemukan ataupun mengalami kejadian darurat.</li>
    <li>Pengguna mempunyai kontrol terhadap pengaktifan jenis layanan tertentu seperti rekam medis, riwayat medis, hasil laboratorium, riwayat vaksinasi dan imunisasi, dan fitur lainnya.</li>
    <li>Sebagai langkah untuk mensukseskan program vaksinasi Kementerian Kesehatan Republik Indonesia maka PeduliLindungi memberikan akses informasi terkait lokasi untuk mendapatkan vaksinasi yang  terpercaya dan terdekat dari lokasi pengguna</li>
    <li>Pengguna akan dianggap menyetujui aplikasi PeduliLindungi untuk memproses Data pribadi Pengguna yang berasal dari Fasilitas Pelayanan Kesehatan yaitu platform SATUSEHAT jika Pengguna menekan tombol Berikan Akses, Setuju, Klaim, atau tanda lain yang serupa.</li>
    <li>Pada bagian atas aplikasi terdapat status vaksinasi pengguna yang disesuaikan dengan warna, biru (status normal dan sudah booster), kuning (status normal dan sudah vaksin 2 kali), merah (belum vaksin/sudah vaksin 1 kali), dan hitam (positif covid).</li>
    <li>Pada versi terbaru ini, pengguna tidak perlu meraih ke atas untuk melakukan check-in karena tombol untuk check-in sudah dipindah kebagian bawah agar dapat lebih dekat diraih oleh jari pengguna.  </li>
    <li>Fitur Status Lokasi digunakan untuk mengetahui status pada suatu lokasi berdasarkan warna seperti hijau (zona aman), kuning (zona waspada), merah (zona bahaya), hitam (zona isolasi) berdasarkan jumlah pasien yang terkonfirmasi, suspek, dan kontak.</li>
</ol>

## Desain Model Data Relasional 

Aplikasi ini masih dalam pengembangan, maka aplikasi web di <i>host</i> oleh sistem lokal, ataupun <i>Virtual Private Server</i> yang tersedia. Aplikasi web dibuat berdasarkan framework Laravel, yang dilengkapi oleh sistem basis data MariaDB dengan model data sebagai berikut:

Dalam merancang model data relasi untuk aplikasi ini, dapat terlihat tiga pembagian tabel. Ketiga pembagian tabel tersebut adalah tabel yang berfokus untuk user,  fitur-fitur dan akhirnya sistem vaksinasi yang di kembangkan oleh pemerintah. 

Pada bagian user, semua informasi mengenai perangkat dan pengguna disimpan. Data yang terdapat pada bagian ini biasanya bersifat privat dan sensitif, dan harus direncanakan dengan benar. Pada bagian ini, terdapat tabel user, negara, privasi dan history atau tabel riwayat dimana waktu akses fitur dan penggunaannya tercatat. 

Pada bagian fitur, tabel berisi data-data mengenai fitur-fitur utama aplikasi, mulai dari chatbot sampai dengan alamat fasilitas kesehatan. Tabel ini juga direncanakan untuk berhubungan langsung dengan basis data instansi eksternal lain. Tabel ini sangat penting untuk menjaga kestabilan dan fungsional aplikasi. Tabel-tabel yang terdapat pada bagian ini adalah fasilitas kesehatan, tempat_umum, ambulans, lembaga_mitra, dan daftar_pcr.

Bagian terakhir yaitu bagian pelacakan vaksin dan covid. Tabel-tabel di bagian ini ditujukan untuk berhubungan langsung dengan jaringan basis data pemerintah, khususnya pada pencatatan vaksin dan pelacakan penyebaran covid. Tabel ini penting untuk memberikan user akses ke tempat-tempat umum yang dikunjungi ,seperti mall, fasilitas kesehatan, perpustakaan, dan sebagainya, dan juga mengirimkan timbal balik riwayat lokasi dan akses aplikasi ke basis data pemerintah. Pada bagian ini terdapat tabel tiket_vaksin, sertifikat_vaksin, status_covid, dan riwayat_covid.
## Pengembang
**Supervisor : [Muhammad Noor Fakhruzzaman, S.Kom., M.Sc.](https://github.com/ruzcmc)**<br>

- **[David Kevas J.](https://64robots.com)**
- **[Viola Rosa I. M.](https://www.instagram.com/violarosa.im/)**
- **[Kevin Caesar S.](https://www.instagram.com/kev_simorangkir/)**
- **[Nicholas Juan K. P.](https://github.com/Neek0tine)**
- **[Nalia Graciella Kerrysa](https://github.com/NaliaGK)**

## Contributing

Pull requests are welcome. For major changes, how-to, and in-depth explanation, please contact one of the authors.
## License
<br>
This project is licensed under GNU General Public License v3.0 - see the [LICENSE](https://github.com/NaliaGK/Peduli-Demi-Nilai-Basdat/blob/main/LICENSE) file for details.