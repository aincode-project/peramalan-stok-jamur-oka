<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://4.bp.blogspot.com/-pG7YD-PeMoM/V3y4VophEqI/AAAAAAAACxg/S01SA3ULzcgCp8kYxYu0_y-CyoqER4JbwCLcB/s200/logo.jpg" alt="JamurOka Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Jamur Oka</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('storage/' . Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('profile.index') }}" class="d-block">{{ Auth::user()->name }}</a>
          <a href="{{ route('profile.index') }}">{{ Auth::user()->hak_akses }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item @if (Request::is('user*') || Request::is('stok*') || Request::is('penjualan'))
              menu-open
            @endif">
            <a href="#" class="nav-link @if (Request::is('user*') || Request::is('stok*') || Request::is('penjualan*'))
                    active
                @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('stok.index') }}" class="nav-link {{ Request::is('stok*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Stok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penjualan.index') }}" class="nav-link {{ Request::is('penjualan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if (Request::is('peramalan*') || Request::is('prediksi-stok*'))
                    menu-open
                @endif">
            <a href="#" class="nav-link @if (Request::is('peramalan*') || Request::is('prediksi-stok*'))
                    active
                @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Peramalan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('peramalan.index') }}" class="nav-link {{ Request::is('peramalan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Peramalan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('prediksi-stok.index', 0) }}" class="nav-link {{ Request::is('prediksi-stok*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peramalan Stok</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if (Request::is('laporanPenjualan*') || Request::is('laporanStok*'))
                menu-open
            @endif">
            <a href="#" class="nav-link @if (Request::is('laporanPenjualan*') || Request::is('laporanStok*'))
                    active
                @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('laporanStok.index', 0) }}" class="nav-link {{ Request::is('laporanStok*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Stok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('laporanPenjualan.index', 0) }}" class="nav-link {{ Request::is('laporanPenjualan*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
