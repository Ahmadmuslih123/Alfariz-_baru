<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>AlFariz Tranz</title>
    {{-- judul --}}
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/Loga A.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

</head>

<body>
    <!--header section start -->
    <div id="index.html" class="header_section">
        <div class="container">
            {{--  --}}
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"><a href="{{ route('home') }}"><img src="images/Af.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="{{ route('home') }}">Beranda</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#armada">Jenis Armada</a></li>
                            <li><a href="#paket">Jenis Perjalanan</a></li>
                            <li><a href="#contact">Kontak</a></li>
                            <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="overlay-content">
                                    <a href="index.html">Beranda</a>
                                    <a href="#about">Tentang</a>
                                    <a href="#armada">Jenis Armada</a>
                                    <a href="#paket">Jenis Perjalanan</a>
                                    <a href="#contact"></a>
                                </div>
                            </div>

                    </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section">
        <div class="container-fluid">
            <div id="main_slider" class="carousel slide mt-5" data-ride="carousel">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @php
                                    $a = 0;
                                @endphp
                                @foreach ($beranda as $key => $item)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $a++ }}"
                                        class="{{ $key == 0 ? 'active' : '' }}">
                                    </li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($beranda as $key => $home)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('beranda/' . $home->image) }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact_bg">
                            <div class="input_main">
                                <div class="container">
                                    <h2 class="request_text">Your everyday travel partner</h2>
                                    <form action="{{ route('pesan') }}" method="POST">
                                        @csrf
                                        {{-- memproteksi data dari serangan  --}}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" class="email-bt" placeholder="Nama Penyewa"
                                                        name="nama_penyewa">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="email-bt" placeholder="Titik Jemput"
                                                        name="titik_jemput">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="email-bt" placeholder="Titik Tujuan"
                                                        name="titik_tujuan">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="" class="ml-2">
                                                        Tanggal Keberangkatan
                                                    </label>
                                                    <input type="date" class="email-bt"
                                                        placeholder="Tanggal Keberangkatan" name="tanggal_berangkat">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="" class="ml-2">
                                                        Tanggal Kepulangan
                                                    </label>
                                                    <input type="date" class="email-bt"
                                                        placeholder="Tanggal Kepulangan" name="tanggal_pulang">
                                                </div>
                                            </div>
                                            <div class="col-12 mr-3 ml-3 mb-5">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Example select</label>
                                                    <select class="form-control" id="exampleFormControlSelect1"
                                                        name="armada">
                                                        {{-- perulangan --}}
                                                        @foreach ($armada as $bus_2)
                                                            <option value="{{ $bus_2->tittle }}">
                                                                {{ $bus_2->tittle }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <style>
                                                    .nice-select {
                                                        display: none;
                                                    }

                                                </style>
                                            </div>
                                            <div class="col-12">
                                                <div class="send_bt"><button type="submit"
                                                        class="btn btn-danger float-right">Pesan
                                                        Sekarang</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- banner section end -->
    <!-- our armada section start -->
    <div id="armada" class="armada_section layout_padding">
        <div class="container">
            <h1 class="our_text">Jenis <span style="color: red;">Armada</span></h1>
            <div class="armada_section_2">
                <div class="row">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($armada as $bus)
                        <div class="col-sm-4">
                            <div class="bus_main">
                                <div class="round_1">0{{ $i++ }}</div>
                                <h2 class="carol_text">{{ $bus->tittle }}</h2>
                                <p class="reader_text">Tempat Duduk<br>
                                    Konfigurasi seat {{ $bus->seat }} dengan jumlah seat sebanyak
                                    {{ $bus->kapasitas }} </p>
                                <div class="images_2"><img src="{{ asset('images/' . $bus->image) }}"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- our armada section end -->
    <!-- why ride section start -->
    <div id="paket" class="ride_section layout_padding">
        <div class="container">
            <div class="ride_main">
                <h1 class="ride_text">Jenis <span style="color: red;">Perjalanan</span></h1>
            </div>
        </div>
    </div>
    <div class="ride_section_2 layout_padding">
        @foreach ($perjalanan as $key => $wisata)
            @if ($key % 2 === 0)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="image_3"><img src="{{asset('perjalanan/'.$wisata->image)}}"></div>
                        </div>
                        <div class="col-sm-8">
                            <h1 class="cabe_text">{{$wisata->tittle}}</h1>
                            <p class="long_textt">{{$wisata->deskripsi}}</p>
                            <div class="book_bt"><a href="#">PESAN
                                    SEKARANG</a></div>
                        </div>
                    </div>
                </div>
            @else
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="secure_text">{{$wisata->tittle}}</h1>
                            <p class="long_text_2">{{$wisata->deskripsi}}</p>
                            <div class="book_bt_2"><a href="#">PESAN SEKARANG</a></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="image_3"><img src="{{asset('perjalanan/'.$wisata->image)}}"></div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>
    <!-- why ride section end -->
    <!-- location section start -->
    <div id="about" class="armada_section layout_padding">
        <div class="container">
            <h1 class="our_text">Tentang <span style="color: red;">AlFariz</span></h1>
            <div class="armada_section_2">
                <div class="row">
                    <p class="tentang">{{ $tentang->about }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- download section end -->
    <!-- section footer start -->
    <div class="section_footer ">
        <div class="container">
            <div id="contact" class="footer_section_2">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="account_text">Alamat</h2>
                        <p class="ipsum_text">{{ $tentang->alamat }}</p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="account_text">Links</h2>
                        <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a
                                    href="#">Beranda</span></a></div>
                        <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a
                                    href="#about">Tentang</span></a></div>
                        <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a
                                    href="#armada">Jenis Armada</span></a></div>
                        <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a
                                    href="#paket">Jenis Perjalanan</span></a></div>
                        <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a
                                    href="#contact">Kontak</span></a></div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="account_text">Follow Us</h2>
                        <div class="image-icon"><img src="images/fb-icon.png"><span class="fb_text"><a
                                    href="tel:{{ $tentang->kontak }}">Kontak</a></span></div>
                        <div class="image-icon"><img src="images/instagram-icon.png"><span
                                class="fb_text"><a href="{{ $tentang->instagram }}">Instagram</a></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <h2 class="adderess_text">Google Maps</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.968574106975!2d109.47324111487428!3d-7.357419294690744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6555c74c09332d%3A0x6a554a9a56775ed1!2sBus%20Pariwisata%20Alfariz%20Trans!5e0!3m2!1sid!2sid!4v1642400745688!5m2!1sid!2sid"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- section footer end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright">2021 All Rights Kelompok Alya Aulia</p>
        </div>
    </div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</body>

</html>
