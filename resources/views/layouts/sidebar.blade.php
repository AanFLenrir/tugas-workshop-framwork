<nav class="sidebar sidebar-offcanvas">
    <ul class="nav">

        <li class="nav-item {{ request()->is('kategori*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kategori.index') }}">
                <span class="menu-title">Kategori</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('buku*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('buku.index') }}">
                <span class="menu-title">Buku</span>
            </a>
        </li>

    </ul>
</nav>
