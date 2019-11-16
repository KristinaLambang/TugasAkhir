 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel --> 
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        
        <div class="pull-left info" >
          <p><!-- {{ strtoupper(Auth::user()->name) }} -->{{ Auth::user()->name }} {{ Auth::user()->id }}</p>
          <a href="">{{ strtoupper(Auth::user()->level_user) }}</a>
          
        </div>
      </div>
      <!-- search form -->
<!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('home') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> -->

        @if(Auth::user()->level_user == 'siswa')
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-users"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'siswa') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('siswa.index') }}">
            <i class="fa fa-user"></i> <span>Data Siswa</span>
          </a>
        </li>      
        
        @endif

        @if(Auth::user()->level_user == 'walas')
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-users"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'nilaisikap') === 0 ) ? 'active' : '' }}">
              <a href="{{ route('nilaisikap.index') }}">
            <i class="fa fa-file"></i> <span>Nilai Sikap</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'nilaiextrakurikuler') === 0 ) ? 'active' : '' }}">
              <a href="{{ route('nilaiextrakurikuler.index') }}">
            <i class="fa fa-list"></i> <span>Nilai Extrakurikuler</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'absensi') === 0 ) ? 'active' : '' }}">
              <a href="{{ route('absensi.index') }}">
            <i class="fa fa-calendar-o"></i> <span>Absensi</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'laporanleger') === 0 ) ? 'active' : '' }}">
              <a href="{{ route('laporanleger.index') }}">
            <i class="fa fa-book"></i> <span>Leger</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'laporanraport') === 0 ) ? 'active' : '' }}">
              <a href="{{ route('laporanraport.index') }}">
            <i class="fa fa-file-text"></i> <span>Raport</span>
          </a>
        </li>

        @endif

        @if(Auth::user()->level_user == 'guru')
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-users"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'kelassaya') === 0 ) ? 'active' : '' }}">
              <a href="{{ route('kelassaya.index') }}">
            <i class="fa fa-list"></i> <span>Kelas Saya</span>
          </a>
        </li>  

        <li class="{{ (strpos(Route::currentRouteName(), 'laporanleger') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('laporanleger.index') }}">
            <i class="fa fa-book"></i> <span>Laporan Nilai</span>
          </a>
        </li>        
        @endif

        @if(Auth::user()->level_user == 'admin')
        <li class="{{ (strpos(Route::currentRouteName(), 'home') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('home') }}">
            <i class="fa fa-users"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'guruwalas') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('guruwalas.index') }}">
            <i class="fa fa-users"></i> <span>Data Guru Wali Kelas</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'gurumapel') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('gurumapel.index') }}">
            <i class="fa fa-users"></i> <span>Data Guru Mata Pelajaran</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'gurukelas') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('gurukelas.index') }}">
            <i class="fa fa-users"></i> <span>Data Guru Kelas</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'siswa') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('siswa.index') }}">
            <i class="fa fa-user"></i> <span>Data Siswa</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'mapel') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('mapel.index') }}">
            <i class="fa fa-book"></i> <span>Data Mata Pelajaran</span>
          </a>
        </li>  

        <li class="{{ (strpos(Route::currentRouteName(), 'jadwal') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('jadwal.index') }}">
            <i class="fa fa-th-list"></i> <span>Data Jadwal</span>
          </a>
        </li>

        <li class="{{ (strpos(Route::currentRouteName(), 'kelas') === 0 ) ? 'active' : '' }}">
          <a href="{{ route('kelas.index') }}">
            <i class="fa fa-gears"></i> <span>Data Kelas</span>
          </a>
        </li>        
        
      <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('laporanleger.index') }}"><i class="fa fa-circle-o"></i> Leger</a></li>
            <li class="active"><a href="{{ route('laporanraport.index') }}"><i class="fa fa-circle-o"></i> Raport</a></li>
            <li class="active"><a href="{{ route('nilaiextrakurikuler.index') }}"><i class="fa fa-circle-o"></i> Nilai Extrakurikuler</a></li>
            <li class="active"><a href="{{ route('nilaisikap.index') }}"><i class="fa fa-circle-o"></i> Nilai Sikap</a></li>
            <li class="active"><a href="{{ route('laporanabsensi.index') }}"><i class="fa fa-circle-o"></i> Absensi</a></li>
          </ul>
        </li>

        <li>
          <a href="{{ route('tahunajaran.index') }}">
            <i class="fa fa-gears"></i> <span>Tahun Ajaran</span>
          </a>
        </li> 
        @endif

        

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside> -->