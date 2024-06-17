<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ps-3" href="{{ route('index') }}"><img src=" ./assets/img/logo GPI.png" alt=""
                width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 mb-lg-2 flex-grow-1 justify-content-center ps-3">
                <li class="nav-item ps-3">
                    <a class="nav-link {{ Route::currentRouteName() == 'index' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link {{ Route::currentRouteName() == 'produk' ? 'active' : '' }}"
                        href="{{ route('produk') }}">Produk</a>
                </li>
                <li class="nav-item ps-3">
                    <a class="nav-link {{ Route::currentRouteName() == 'transaksi' ? 'active' : '' }}"
                        href="{{ route('transaksi') }}">Transaksi</a>
                </li>
                <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
            </ul>
            <div class="nav-button ps-lg-3 ps-4 pt-auto">
                <a href="{{ route('login') }}">
                    <button class="login-btn pe-4">Masuk</button></a>
                <a href="{{ route('register') }}">
                    <button class="register-btn">Daftar</button></a>
            </div>
        </div>
    </div>
</nav>
