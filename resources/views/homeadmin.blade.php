@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/aguilaraldo1_section_contact.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
<style type="text/css">
.mboh{
bottom:0px;

}

.jnc{
height: 1000px;
background: #475d62 url(../../assets/img/star-sky.jpg);
    background-size: auto auto;
background-size: cover;
position: relative;
}
.crd{
/*transform: translate(-50%, -50%);
position: absolute;*/
/*top: 50%;
left: 50%;*/
/*margin:25% auto;*/
margin-top:20%;
}
.yte {
  position: relative;
  overflow: hidden;
}
.ye {
  position: absolute;
  opacity: 0;
  font-size:150px;
  right: 0;
  top: 0;
}

.jnc{
height: 1000px;
background: #475d62 url(../../assets/img/star-sky.jpg);
    background-size: auto auto;
background-size: cover;
position: relative;

}

.konten{
    width: 650px;
    margin-left: 50px;

}


</style>
@endsection
@extends('layouts.app')
@section('content')
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Jurang.id</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">

                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
                    @guest
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                    @else
                    @if(Auth::User()->level==1)
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/viewTerasi') }}">Data Stok</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Data Pemesanan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Konfirmasi Pembayaran</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Pengiriman</a></li>
                    @endif
                    <li class="nav-item dropdown" role="presentation">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profil') }}">Profil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
<div class="jnc">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 crd">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form action="" method="post">
                    <textarea class="form-control" rows="3"></textarea>
                    <div class="file float-left btn btn-primary yte">Upload<input class="ye" type="file" name="file"/></div>
                    <button type="submit" class="float-right btn btn-primary">Submit</button>
                   </form>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card konten" id="post">
                         <div class="card-header">Terasi Udang</div>
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../../assets/img/terasi-udang.jpg" style="width: 150px; margin-right: 20px;">
                            </div>
                            <div class="col">
                                <p class="card-text"> Yoo Terasi YOOO </p>
                                <p class="card-text">RP 50.000</p>
                                <p class="card-text">MURMER</p>
                            </div>

                        </div>

                            <br>
                             <button type="submit" class="float-left btn btn-primary">Edit</button>
                             <button type="submit" class="float-right btn btn-primary">Hapus</button>
                        </div>

                    </div>
                </div>
        
            </div>
        </div>
        <div class="col-md-4 crd">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1> You are logged in as {{ Auth::user()->name }}! <h1>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<section class="features mboh">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Dirección / Contacto</h2>
                    <p>Morbi non mauris massa. Duis elit mauris, malesuada nec suscipit ac, bibendum sed augue. Maecenas condimentum magna gravida, laoreet nunc sed, euismod sem. </p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-4 icon-feature"><i class="fa fa-map-marker"></i>
                            <p>Dirección </p>
                            <p>lkjlkdjfsdfjsd pofpsdfjñklsdjkljd </p>
                        </div>
                        <div class="col-4 icon-feature"><i class="fa fa-phone"></i>
                            <p>Teléfono </p>
                            <p>6454875340 - 44095834985</p>
                        </div>
                        <div class="col-4 icon-feature"><i class="fa fa-envelope"></i>
                            <p>Correo </p>
                            <p>ejemplo@ejempl.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
