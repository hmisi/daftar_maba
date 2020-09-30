<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    ,<meta name="description" content="Portal Pendaftaran menjadi Anggota HMISI Angkatan <?= date('Y');?>. Mulai Perjalanan Organisasi kamu di HMISI!">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="https://hmisippg.org//assets/img/HMISI.png" type="image/x-icon">
    <title>Form Daftar Anggota HMISI <?= date('Y');?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }

        .register{
            padding: 3%;
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 65%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        label {
            color: rgb(59, 59, 59);
        }

    </style>
</head>

<body>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://hmisippg.org//assets/img/HMISI.png" alt="" />
                <h3>Selamat Datang</h3>
                <p>Mulai Perjalanan Organisasi kamu di HMISI!</p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Daftar sebagai Anggota Baru <br>Angkatan <?= date('Y');?>!</h3>
                        <form class="row register-form" action="{{'/add'}}" method="POST">
                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @if(session('danger'))
                                    <div class="alert alert-danger">
                                        {{ session('danger') }}
                                    </div>
                                @endif

                                @csrf
                            </div>
                            <div class="col-md-6">
                                <label for="">Data Pribadi.</label>

                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Nama Lengkap Kamu! *" value="{{old('name')}}" />
                                    @error('name')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                </div>
                                <div class="form-group">
                                    <input name="npm" type="text" class="form-control" placeholder="NPM Kamu! *" value="{{old('npm')}}" />
                                    @error('npm')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                </div>
                                <div class="form-group">
                                    <input name="cls" type="text" class="form-control" placeholder="Kelas Kamu! *" value="{{old('cls')}}" />
                                    @error('cls')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="">Kontak Pribadi.</label>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email Kamu! *" value="{{old('emai')}}" />
                                    @error('email')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                </div>
                                <div class="form-group">
                                    <input name="wa" type="text" minlength="10" maxlength="15" name="txtEmpPhone"
                                        class="form-control" placeholder="Nomor WA Kamu! *" value="{{old('wa')}}" />
                                        @error('wa')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                </div>

                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Pertanyaan 1</label>
                                <div class="form-group">
                                    <textarea name="q1" type="text" class="form-control" placeholder="Alasan Masuk HMISI? *" rows="5"/>{{old('q1')}}</textarea>
                                    @error('q1')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pertanyaan 2</label>
                                <div class="form-group">
                                    <textarea name="q2" type="text" class="form-control" placeholder="Bagaimana jika kamu telah masuk HMISI, Organisasi ini tidak sesuai dengan ekspetasi kamu? *" rows="5"/>{{old('q2')}}</textarea>
                                    @error('q2')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                </div>
                                <label for="">Pertanyaan 3</label>
                                <div class="form-group">
                                    <textarea name="q3" type="text" class="form-control" placeholder="Apa kelebihan dan kekurangan Kamu? *" rows="5"/>{{old('q3')}}</textarea>
                                    @error('q3')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btnRegister">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <footer class="text-center text-white">
        <p>© Copyright <b>HIMPUNAN MAHASISWA MANAJEMEN INFORMATIKA DAN SISTEM INFORMASI</b>. All Rights Reserved 1.0</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
