<header class="navbars">
    <div class="nabars-top">
        <span class="nabars-logo">FAJAR HARAPAN</span>
        <ul class="nabars-top-menu">
            <li class="active">
                <a href="#">
                    <img src="{{ asset('public/assets/images/users/1.png') }}" alt="logo">
                    <span>{{ Auth::user()->nama }}</span>
                </a>
            </li>
            <li>
                <button class="btn-nav-toggle">
                    <i class="bi bi-list"></i>
                </button>
            </li>
        </ul>
    </div>
    <div class="nabars-bottom-menu">
        <ul class="menu">
            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="bi bi-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/aset') }}">
                    <i class="bi bi-file-earmark-text"></i>
                    <span>Aset</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/siswa') }}">
                    <i class="bi bi-journal-text"></i>
                    <span>Siswa</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/pengelola') }}">
                    <i class="bi bi-journal-text"></i>
                    <span>Pengelola</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/kategori') }}">
                    <i class="bi bi-file-earmark-text"></i>
                    <span>Akun</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/transaksi') }}">
                    <i class="bi bi-journal-text"></i>
                    <span>Transaksi</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-journal-text"></i>
                    <span>Laporan</span>
                </a>
                <ul class="dropdown-menu md:dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ url('laporan/laptransaksi') }}">Laporan Transaksi</a></li>
                    <li><a class="dropdown-item" href="{{ url('laporan/laprapb') }}">Laporan RAPB</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
