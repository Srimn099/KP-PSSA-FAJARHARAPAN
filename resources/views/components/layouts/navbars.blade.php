<header class="navbars">
    <div class="nabars-top">
        <span class="nabars-logo">FAJAR HARAPAN</span>
        <ul class="nabars-top-menu">
            <li class="active">
                <a href="#">
                    <img src="{{ asset('assets/images/users/1.png') }}" alt="logo">
                    <span>User</span>
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
                <a href="{{ url('/akun') }}">
                    <i class="bi bi-person-circle"></i>
                    <span>Akun</span>
                </a>
            </li>
        </ul>
    </div>
</header>
