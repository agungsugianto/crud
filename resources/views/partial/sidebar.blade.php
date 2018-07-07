<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="image">
          <img src="{{asset ('assets/dist/img/user2-160x160.jpg')}}"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <li class="nav-item dropdown"><a href="http://www.instagram.com/biebel/" class="d-block">Agung Sugiyanto
          
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li></a></div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Universitas
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="beranda" class="nav-link active">
                  <i class="nav-icon fa fa-home"></i>
                  <p>Beranda</p>
                </a>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="fakultas" class="nav-link active">
                  <i class="fa fa-circle-o-notch nav-icon"></i>
                  <p>Fakultas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kategori" class="nav-link active">
                  <i class="fa fa-newspaper-o nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="galeri" class="nav-link active">
                  <i class="fa fa-picture-o nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>