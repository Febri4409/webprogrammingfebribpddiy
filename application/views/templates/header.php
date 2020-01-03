<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <!-- MY JAVA SCRIPT -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <script src="<?= base_url(); ?>assets/js/jquery-3.4.1.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <title><?php echo $judul; ?></title>




    <style type="text/css">
        @media screen and (min-width: 768px) {

            .dropdown:hover .dropdown-menu,
            .btn-group:hover .dropdown-menu {
                display: block;
            }

            .dropdown-menu {
                margin-top: 0;
            }

            .dropdown-toggle {
                margin-bottom: 2px;
            }

            .navbar .dropdown-toggle,
            .nav-tabs .dropdown-toggle {
                margin-bottom: 0;
            }
        }

        ul li a:hover {
            color: #23055A !important;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown, .btn-group").hover(function() {
                var dropdownMenu = $(this).children(".dropdown-menu");
                if (dropdownMenu.is(":visible")) {
                    dropdownMenu.parent().toggleClass("open");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#tombol").click(function() {
                $(this).after('<p>Kamu Sedang Belajar jQuery</p>');
            });
            $("#tombil").click(function() {
                $(this).after('<p>Ini tombil</p>');
            });
        });
    </script>
</head>

<!-- Navbar top menu dengan dropdown hover -->

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url(); ?>home">
            <img src="<?= base_url(); ?>assets/lay/pic/icon.png" width="159" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Beranda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url(); ?>beranda">Berita</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url(); ?>halpengumuman">Pengumuman</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bisnis
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ikhtisar Keuangan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laporan Tahunan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laporan Triwulan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laporan Bulanan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laporan GCG</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laporan Pelaksanaan Tata Kelola</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Simpanan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Kredit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Layanan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Sejarah</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Visi dan Misi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pemegang Saham</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dewan Komisaris</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Direksi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pemimpin Divisi/SKAI</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lokasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">ATM</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Kantor</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Karir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Syariah</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
    </nav>


</body>

</html>