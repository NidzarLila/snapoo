<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pendaftaran SnapOsnap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{asset('register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('register/css/style.css')}}">
</head>

<body>

    <div class="wrapper" style="background-image: url({{asset('register/images/bg-registration-form-2.jpg')}});">

        <div class="inner">
            <form action="{{route('register.simpan') }}" method="POST" id="regForm">
                {{ csrf_field() }}
                <h3>Form Registrasi Pelanggan</h3>

                <div class="form-wrapper">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
                    @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-wrapper">
                    <label class="small mb-1" for="inputusername">Username</label>
                    <input class="form-control py-4" id="inputusername" type="text" name="username" placeholder="Masukkan username" />
                    @if ($errors->has('username'))
                    <span class="error">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
                    @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" class="form-control">
                    @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                    @error('password_confirmation')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                    
                </div>
                <button>Register Now</button>
                <div class="card-footer text-center">
                    <div class="small">
                        <a href="{{route('loginn')}}">Sudah Punya Akun? Login!</a>
                    </div>
                </div>
            </form>
        </div>

    </div>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>