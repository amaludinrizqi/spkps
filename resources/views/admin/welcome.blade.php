
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SISTEM PENDUKUNG KEPUTUSAN PELANGGARAN SISWA SMK NURUL ISLAM LARANGAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{ asset('public/main.css') }}" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="d-flex h-100 justify-content-center align-items-center">
            <div class="mx-auto app-login-box col-md-4">
                <div class="modal-dialog w-100 mx-auto">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="h5 modal-title text-center">
                                <div class="app-logo" align="center">
                                    <img src="{{asset ('public/assets/images/poltek.png')}}" float="center"> 
                                </div>
                                <h4 class="mt-2">
                                    <span>SISTEM PENDUKUNG KEPUTUSAN PELANGGARAN SISWA SMK NURUL ISLAM LARANGAN</span>
                                </h4>
                            </div>
                            
                            @auth("admin")
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    Anda sudah login. silahkan klik <a href="{{ url('home/admin') }}">Masuk</a>
                                </div>
                            @else 
                            
                            <form method="POST" action="{{ url('login/admin') }}">
                            @csrf
                                <div class="col-sm-12">
                                <div class="divider"></div>   
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label for="exampleEmail" class="col-sm-6 col-form-label">Kata sandi</label>
                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="col-md-12">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary btn-lg mb-2 ">Masuk</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src=" {{ asset('public/assets/scripts/main.js') }}"></script>

</body>
</html>



