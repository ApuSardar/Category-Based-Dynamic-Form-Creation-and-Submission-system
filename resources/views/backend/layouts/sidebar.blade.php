  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
            {{-- <li class="nav-item ">
            <a href="{{ route('about.index') }}" class="nav-link @yield('about')">
              <i class="nav-icon fas fa-book"></i>
              <p>
                About us
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('admin/contact*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/contact*')) ? 'active' : '' }}">
              <i class="fa-solid fa-address-card"></i>
              <p>
                Contact
                 <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            </a>
              <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="{{ route('contact.index') }}" class="nav-link @yield('contact.index')">
                  <i class="far fa-circle nav-icon"></i>
                  All Mail
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="{{ route('banner.index') }}" class="nav-link @yield('banner')">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Update Banner
              </p>
            </a>
          </li> --}}
          <li class="nav-item {{ (request()->is('admin/service*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/service*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="{{ route('category.index') }}" class="nav-link @yield('service.index')">
                  <i class="far fa-circle nav-icon"></i>
                  All Category
                </a>
              </li>
              @if (Auth::user()->role==1)
                <li class="nav-item ">
                  <a href="{{ route('category.create') }}" class="nav-link @yield('service.create')">
                    <i class="far fa-circle nav-icon"></i>
                    Create Category
                  </a>
                </li> 
              @endif
          
            </ul>
          </li>
          <li class="nav-item {{ (request()->is('admin/service*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/service*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Create Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="{{ route('category.index') }}" class="nav-link @yield('service.index')">
                  <i class="far fa-circle nav-icon"></i>
                  All Data
                </a>
              </li>
              {{-- @if (Auth::user()->role==1) --}}
                <li class="nav-item ">
                  <a href="{{ route('category.create') }}" class="nav-link @yield('service.create')">
                    <i class="far fa-circle nav-icon"></i>
                    Create Data
                  </a>
                </li> 
              {{-- @endif --}}
          
            </ul>
          </li>
           {{-- <li class="nav-item {{ (request()->is('admin/sellservice*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/sellservice*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sell Service
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="{{ route('sellservice.index') }}" class="nav-link @yield('sellservice.index')">
                  <i class="far fa-circle nav-icon"></i>
                  Total Sell Service
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('sellservice.create') }}" class="nav-link @yield('service.create')">
                  <i class="far fa-circle nav-icon"></i>
                 Sell Service
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item {{ (request()->is('admin/expense*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/expense*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Expense
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="{{ route('expense.index') }}" class="nav-link @yield('expense.index')">
                  <i class="far fa-circle nav-icon"></i>
                  Expense
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('expense.create') }}" class="nav-link @yield('expense.create')">
                  <i class="far fa-circle nav-icon"></i>
                 Create Expense
                </a>
              </li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item ">
              <a href="{{ route('service.index') }}" class="nav-link @yield('service')">
                <i class="fa-brands fa-servicestack"></i>
                <p>
                  Update Service
                </p>
              </a>
          </li>
          <li class="nav-item {{ (request()->is('admin/service_content*')) ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ (request()->is('admin/service_content*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Sevice Content
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="{{ route('service_content.index') }}" class="nav-link @yield('service_content.index')">
                    <i class="far fa-circle nav-icon"></i>
                    All Service Content
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="{{ route('service_content.create') }}" class="nav-link @yield('service_content.create')">
                    <i class="far fa-circle nav-icon"></i>
                    Create Service Content
                  </a>
                </li>
              </ul>
          </li>
           <li class="nav-item ">
              <a href="{{ route('webservice.index') }}" class="nav-link @yield('webservice')">
                <i class="fa-brands fa-edge"></i>
                <p>
                  Update WebService
                </p>
              </a>
          </li>
          <li class="nav-item {{ (request()->is('admin/webservice_content*')) ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ (request()->is('admin/webservice_content*')) ? 'active' : '' }}">
                <i class="fa-duotone fa-paragraph"></i>
                <p>
                  WebSevice Content
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="{{ route('webservice_content.index') }}" class="nav-link @yield('webservice_content.index')">
                    <i class="far fa-circle nav-icon"></i>
                    All WebService Content
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="{{ route('webservice_content.create') }}" class="nav-link @yield('webservice_content.create')">
                    <i class="far fa-circle nav-icon"></i>
                    Create WebService Content
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item ">
              <a href="{{ route('working_process.index') }}" class="nav-link @yield('working_process')">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Update Working Process
                </p>
              </a>
          </li>
          <li class="nav-item {{ (request()->is('admin/workingprocess*')) ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ (request()->is('admin/workingprocess*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Working Process Content
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="{{ route('workingprocess.index') }}" class="nav-link @yield('workingprocess.index')">
                    <i class="far fa-circle nav-icon"></i>
                    All Working Process Content
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="{{ route('workingprocess.create') }}" class="nav-link @yield('workingprocess.create')">
                    <i class="far fa-circle nav-icon"></i>
                    Create Working Process Content
                  </a>
                </li>
              </ul>
          </li> <li class="nav-item ">
              <a href="{{ route('project_area.index') }}" class="nav-link @yield('project_area')">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Update Project Area
                </p>
              </a>
          </li>
          <li class="nav-item {{ (request()->is('admin/projects*')) ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ (request()->is('admin/projects*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Project Content
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="{{ route('projects.index') }}" class="nav-link @yield('projects.index')">
                    <i class="far fa-circle nav-icon"></i>
                    All Project Content
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="{{ route('projects.create') }}" class="nav-link @yield('projects.create')">
                    <i class="far fa-circle nav-icon"></i>
                    Create Project Content
                  </a>
                </li>
              </ul>
          </li> --}}
          <li class="nav-item ">
            <a href="{{ route('generalsetting.index') }}" class="nav-link @yield('generalsetting')">
              <i class="fa-sharp fa-regular fa-gear"></i>
              <p>
                General Setting
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>