<nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex">
    <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="#">KOLEKSI BUKU</a>
    </div>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link">
                {{ Auth::user()->name }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
