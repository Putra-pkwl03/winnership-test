<nav class="navbar navbar-expand-lg navbar-light">
    <style>
        .nav-link {
            position: relative;
            display: inline-block;
            color: #000;
            /* Warna default teks */
            transition: color 0.3s;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 3px;
            background-color: #198754;
            /* Warna garis saat hover */
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: #198754 !important;
        }

        .nav-link:hover::after {
            width: 100%;
        }
    </style>

    <div class="container">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center me-4">
                <img src="{{ asset('images/logo1.png') }}" alt="Logo 1" class="me-2" style="height: 30px;">
                <!-- <img src="{{ asset('images/logo3.jpeg') }}" alt="Logo 2" class="me-2" style="height: 30px;"> -->
                <img src="{{ asset('images/logo2.jpeg') }}" alt="Logo 3" class="me-2" style="height: 30px;">
            </div>
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3"><a class="nav-link" href="#">Beranda</a></li>
                <li class="nav-item me-3"><a class="nav-link" href="#">Panduan</a></li>
                <li class="nav-item me-3"><a class="nav-link" href="#">Kontak</a></li>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="btn btn-success rounded-pill px-3 py-1 small" href="#">Sign in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>