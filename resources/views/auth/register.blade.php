<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registrasi - PeduliLindungi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="bg-gradient-primary" style="background-color: rgb(31,101,153);margin-top: 0;">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="p-5">
                    <div class="text-center"><a href="login"><img src="assets/img/icon-02.png" style="margin-bottom: -32px;margin-top: -47px;"></a>
                        <h4 class="text-dark mb-4">Registrasi</h4>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="user">
                        @csrf
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <label>*note: masukkan nama depan dan nama belakang sesuai KTP atau Kartu Keluarga. JIka nama lebih dari dua kata, dapat dipisahkan menjadi dua.</label><br>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" id="first_name" placeholder="First Name" name="first_name" minlength="1" value="{{ old('first_name') }}" required autofocus></div>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif

                            <div class="col-sm-6">
                                <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" id="last_name" placeholder="Last Name" name="last_name" minlength="1" value="{{ old('last_name') }}" required></div>
                            </div>

                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif

                        
                        
                        
                        <div class="form-group">
                            <input class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}" id="tempat_lahir" aria-describedby="Tempat Kelahiran" placeholder="Tempat Kelahiran" name="tempat_lahir" minlength="1" required></div>
                        
                        @if ($errors->has('tempat_lahir'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif

                        <div class="form-group">
                            <input class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" id="nik" aria-describedby="nik" placeholder="NIK" name="nik" minlength="12" required></div>

                        @if ($errors->has('nik'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nik') }}</strong>
                            </span>
                        @endif
                        <p>*note: bulan dan tanggal lahir didapatkan dari NIK. Jika NIK dan TTL berbeda, maka akan digunakan yang terdapat pada NIK.<br></p>


                        <div class="form-group">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" aria-describedby="Email" placeholder="Email Address" name="email" value="{{ old('email') }}" required></div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0" style="margin-right: -428px;width: 591px;">
                                <input class="form-control{{ $errors->has('region_code') ? ' is-invalid' : '' }}" id="region_code" placeholder="Kode Area" name="region_code" minlength="1" value="+62" style="width: 82px;margin-right: 94px;"></div>
                                @if ($errors->has('region_code'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('region_code') }}</strong>
                                    </span>
                                @endif


                            <div class="col-sm-6" style="margin-right: 0px;margin-left: 10px;">
                                <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" id="mobile" placeholder="No. HP" name="mobile" minlength="1" style="width: 910px;padding-right: 0px;margin-right: 0px;" required></div>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="form-group">
                            <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" type="text" id="alamat" aria-describedby="alamat" placeholder="Alamat" name="alamat" multiple="" minlength="1" value="{{ old('address') }}"></div>


                            @if ($errors->has('alamat'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                            @endif

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id="password" placeholder="Password" name="password" minlength="8"></div>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                            <div class="col-sm-6"><input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" id="password_confirmation" placeholder="Ulangi Password" name="password_confirmation" minlength="1"></div>


                            @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <hr>

                        
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="tos_agreement" name="tos_agreement" required><label class="form-check-label">Saya menerima segala isi syarat penggunaan dan kebijakan privasi dari aplikasi atau layanan ini</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="email_agreement" name="subscription"><label class="form-check-label">Kirimi saya email mengenai penyebaran COVID-19</label></div>
                        <label for="cars">Saya adalah:</label>
                        <select name="role" id="role">
                            <option value="user">Pengguna</option>
                            <option value="faskes">Faskes</option>
                            <option value="admin">Admin</option>
                        </select>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="margin-top: 16px;">{{ __('Daftar') }}</button></form>
                    </form>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>

@section('footer_scripts')
    @if(config('settings.reCaptchStatus'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
@endsection

</body>


</html>