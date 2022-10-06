<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - PeduliLindungi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="bg-gradient-primary" style="background-color: rgb(31,101,153);">
    <div class="container">
        <div class="row justify-content-center" style="height: 624px;margin-bottom: 377px;">
            <div class="col-md-9 col-lg-12 col-xl-10" style="height: 460px;margin-top: 160px;">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex" style="height: 362px;"><img src="assets/img/icon-01.png" width="320" height="320" style="margin-left: 80px;margin-top: 15px;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Masuk</h4>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}" class="user" >
                                    @csrf
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        <div class="form-group">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input class="form-control form-control-user" type="email" id="email" aria-describedby="Masukkan email anda" placeholder="Email" name="email"></x-text-input>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                        <x-input-label for="email" :value="__('Password')" />
                                        <x-text-input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password"/></div>

                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                        

                                        <div class="flex items-center justify-end mt-4">
           

                                            <button 
                                                class="btn btn-primary btn-block text-white btn-user" 
                                                type="submit" 
                                                style="background-color: rgb(34,38,41);">
                                                
                                                {{ __('Masuk') }}

                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="justify underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Lupa Password?') }}
                                                </a>
                                            @endif

                                        </div>

                                <hr>
                                <a class="btn btn-primary btn-block text-white btn-user" role="button" style="background-color: rgb(34,38,41);" href="register">Buat Akun Baru</a></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="highlight-clean" style="padding-top: 105px;">
        <div class="container text-left">
            <div class="row">
                <div class="col">
                    <div class="intro">
                        <h2 class="text-center">Apa itu PeduliLindungi?</h2><img src="assets/img/icon-01.png" width="240" style="margin-left: 73px;">
                        <p class="text-justify" style="font-size: 19px;"><br>PeduliLindungi adalah aplikasi yang dikembangkan untuk membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).<br><br>Aplikasi ini mengandalkan partisipasi
                            masyarakat untuk saling membagikan data lokasinya saat bepergian agar penelusuran riwayat kontak dengan penderita COVID-19 dapat dilakukan.<br><br>Pengguna aplikasi ini juga akan mendapatkan notifikasi jika berada di keramaian
                            atau berada di zona merah, yaitu area atau kelurahan yang sudah terdata bahwa ada orang yang terinfeksi COVID-19 positif atau ada Pasien Dalam Pengawasan.<br><br></p>
                    </div>
                </div>
                <div class="col">
                    <div class="intro">
                        <h2 class="text-center">Vaksinasi COVID-19<br></h2><img src="assets/img/syringe-01.png" width="240" style="margin-left: 74px;">
                        <p class="text-justify" style="font-size: 17px;margin-top: 8px;"><br>Pada tahap awal, vaksinasi Covid-19 sudah berhasil diberikan kepada seluruh tenaga kesahatan, asisten tenaga kesehatan, dan mahasiswa yang menjalankan pendidikan profesi kedokteran yang bekerja pada fasilitas pelayanan kesehatan.<br><br>Vaksin
                            tahap kedua juga sudah diberikan kepada lansia, pekerja sektor esensial, dan guru.<br><br>Pemerataan vaksinasi hingga saat ini dilanjutkan untuk masyarakat umum dan terus berjalan hingga berhasil menjangkau seluruh warga negara
                            Indonesia dan warga negara asing yang bertempat tinggal di Indonesia.<br><br>Harapannya dengan upaya pemerataan vaksinasi ini, Indonesia dapat segera bangkit dan terbebas dari penyebaran virus Covid-19.<br><br></p>
                    </div>
                </div>
                <div class="col">
                    <div class="intro">
                        <h2 class="text-center">Cara Kerja</h2><div><iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="PeduliLindungi - Lacak Dari Yang Terdekat" width="100%" height="100%" src="https://www.youtube.com/embed/2hmI15CajEM?autoplay=0&amp;mute=0&amp;controls=0&amp;origin=https%3A%2F%2Fwww.pedulilindungi.id&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;enablejsapi=1&amp;widgetid=1" id="widget2"></iframe></div>
                        <p class="text-justify" style="font-size: 14px;margin-top: 76px;"><br><br>Bagaimana PeduliLindungi bekerja?Pada saat Anda mengunduh PeduliLindungi, sistem akan meminta persetujuan Anda untuk mengaktifkan data lokasi. Dengan kondisi lokasi aktif, maka secara berkala aplikasi akan melakukan identifikasi
                            lokasi Anda serta memberikan informasi terkait keramaian dan zonasi penyebaran COVID-19.<br><br>Hasil tracing ini akan memudahkan pemerintah untuk mengidentifikasi siapa saja yang perlu mendapat penanganan lebih lanjut agar
                            penghentian penyebaran COVID-19 dapat dilakukan. Sehingga, semakin banyak partisipasi masyarakat yang menggunakan aplikasi ini, akan semakin membantu pemerintah dalam melakukan tracing dan tracking.<br><br>PeduliLindungi sangat
                            memperhatikan kerahasiaan pribadi Anda. Data Anda disimpan aman dalam format terenkripsi dan tidak akan dibagikan kepada orang lain. Data Anda hanya akan diakses bila Anda dalam risiko tertular COVID-19 dan perlu segera dihubungi
                            oleh petugas kesehatan.<br><br></p><a class="btn btn-primary" role="button" style="margin-left: 45px;" href="https://www.pedulilindungi.id/kebijakan-privasi-data">Kebijakan Privasi dan Persyaratan</a></div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #ffffff;"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>