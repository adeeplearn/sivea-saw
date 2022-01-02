<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/')}}" class="brand-link">
    <img src="{{asset('assets/img/logo.png')}}" alt="Sivea Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SIVEA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/img/amongus.webp')}}" style="height: 50px; width: 50px;" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->dosen->nama_dosen ?? 'Administrator'}}</a>
        @if(Auth::user()->role == 'admin')
        <span class="badge badge-warning">{{Auth::user()->role}}</span>
        @elseif(Auth::user()->role == 'penilai')
        <span class="badge badge-light">{{Auth::user()->role}}</span>
        @endif
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        @if(Auth::user()->role == 'admin'))
        <li class="nav-item">
          <a href="{{url('dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tv"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('prodis')}}" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>
              Program Studi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('matakuliahs')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Mata Kuliah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('criteriaweights')}}" class="nav-link">
            <i class="nav-icon fas fa-cube"></i>
            <p>
              Kriteria
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('subcriterias')}}" class="nav-link">
            <i class="nav-icon fas fa-dice"></i>
            <p>
              Sub Kriteria
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('criteriaratings')}}" class="nav-link">
            <i class="nav-icon fas fa-cubes"></i>
            <p>
              Rating Kriteria
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="{{url('alternatives')}}" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Alternative & Score
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="{{route('logout')}}" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
        <li class="nav-header">Import</li>
        <li class="nav-item">
          <a href="{{url('data')}}" class="nav-link">
            <i class="nav-icon fas fa-file-import"></i>
            <p>
              Data Import
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('data')}}" class="nav-link">
            <i class="nav-icon fas fa-file-import"></i>
            <p>
              Users Import
            </p>
          </a>
        </li>
        @endif
        @if(Auth::user()->role == 'penilai')
        <li class="nav-item">
          <a href="{{url('home')}}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('polling')}}" class="nav-link">
            <i class="nav-icon fas fa-pencil-alt"></i>
            <p>
              Isi Polling Asisten
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('kritik/isi')}}" class="nav-link">
            <i class="nav-icon fas fa-pencil-alt"></i>
            <p>
              Isi Kritik dan Saran FA
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('logout')}}" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
        @endif
        <li class="nav-header">Result</li>
        <li class="nav-item">
          <a href="{{url('alternatives')}}" class="nav-link">
            <i class="nav-icon fas fa-poll"></i>
            <p>
              Alternative & Score
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="{{url('decision')}}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Decision Matrix
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('normalization')}}" class="nav-link">
            <i class="nav-icon far fa-chart-bar"></i>
            <p>
              Normalization
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('rank')}}" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>
              Rank
            </p>
          </a>
        </li>
      </ul> -->
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
