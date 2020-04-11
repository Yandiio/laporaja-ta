<!-- Sidebar navigation -->
<!-- SideNav slide-out button -->
<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav fixed" style="background-color: #342ead">
  <ul class="custom-scrollbar">
    <!-- Side navigation links -->
    <li>
      <hr class="white">
      @auth

      <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header"></i> Pengguna</a>
        </li>
        <li><a href="{{url('beranda')}}" class="collapsible-header waves-effect arrow-r"><i class="fas fa-home"></i>
            Beranda</a>
        </li>
        <li><a href="{{route('pengaduan.create')}}" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-edit"></i>Form Pengaduan</a>
        </li>
        <li><a href="{{url('pengaduansaya')}}" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-envelope"></i>Pengaduan Saya</a>
        </li>

        @if ( Auth::user()->role != "Masyarakat")
        <li><a class="collapsible-header"></i> Administrator</a>
        <li><a href="{{url('pengaduan')}}" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-envelope"></i>Laporan Pengaduan</a>
        </li>

        @endif
        @if ( Auth::user()->role != "Masyarakat")
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Data Pengguna
            <i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              @if ( Auth::user()->role == "Admin")
              <li><a href="{{url('pengguna')}}" class="waves-effect">User</a>
              </li> 
              @endif     
              <li><a href="{{url('masyarakat')}}" class="waves-effect">Masyarakat</a>
        </li>
        <li><a href="{{url('petugas')}}" class="waves-effect">Petugas</a>
        </li>
      </ul>
</div>
</li>
@endif
@if ( Auth::user()->role != "Masyarakat")
<li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-database"></i> Data Master
    <i class="fas fa-angle-down rotate-icon"></i></a>
  <div class="collapsible-body">
    <ul>
      <li><a href="{{url('asal')}}" class="waves-effect">Asal</a>
      </li>
      <li><a href="{{url('kategori')}}" class="waves-effect">Kategori</a>
      </li>
      <li><a href="{{url('jenis')}}" class="waves-effect">Jenis</a>
      </li>
    </ul>
  </div>
</li>
@endif

@endauth
</ul>
</li>
<!--/. Side navigation links -->
</ul>
<div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->
<!--/. Sidebar navigation -->