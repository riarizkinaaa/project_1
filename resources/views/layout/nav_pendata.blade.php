<nav>
    <div class="main-navbar">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="mainnav">           
        <ul class="nav-menu custom-scrollbar">
          <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="sidebar-main-title">
            <div>
              <h6>Dashboard</h6>
            </div>
          </li>
          <li class="dropdown"><a class="nav-link menu-title" href="/dash_pendata"><i data-feather="home"></i>Dashboard</a>
          </li>
          <li class="sidebar-main-title">
            <div>
              
            </div>
          </li>
          <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Anak</span></a>
            <ul class="nav-submenu menu-content">
                <li><a href="{{ route('dataY.index') }}">Form anak yatim</a></li>
                <li><a href="#">data anak yatim</a></li>
              <li><a href="#">profil</a></li>
              <li><a href="#">rekapan anak yatim</a></li>
              <li><a href="#">kontak person</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Pendidikan</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="{{ route('kelas.index') }}">kelas pendidikan</a></li>
              {{-- <li><a href="tree.html">prestasi formal</a></li> --}}
              <li><a href="/kosong dulu">jenis prestasi</a></li>
              <li><a href="{{ route('pekerja.index') }}">pekerjaan orang tua</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Alamat</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="{{ route('kecamatan.index') }}">Nama kecamatan</a></li>
              <li><a href="{{ route('desa.index') }}">Nama desa</a></li>
              <li><a href="{{ route('dusun.index') }}">Nama Dusun</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Userlog</span></a>
            <ul class="nav-submenu menu-content">
              <li><a href="animate.html">Userlog</a></li>
              <li><a href="scroll-reval.html">role</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
  </nav><br>