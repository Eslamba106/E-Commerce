<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <a href="{{ 'dashboard.category' }}" class="nav-link my-1  active">
                <i class="fa-solid fa-house"></i>
                <p>
                  لوحة التحكم
                  {{-- <i class="right fas fa-angle-left"></i> --}}
                </p>
              </a>


              {{-- <li>
                <a href="javascript:void(0)" class="sidebar-header">
                  <i data-feather="folder"></i>
                  <span>الاقسام</span>
                  <i></i>
                </a>
                <ul class="sidebar-header">
                  <li>
                    <a href="">
                      <i class="fa fa-circle"></i>الأقسام
                    </a>
                  </li>
                </ul>
              </li> --}}

          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
              <i class="fa-regular fa-folder"></i>
              <p>
                الأقسام
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('category') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الأقسام</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('dashboard.products.index') }}" class="nav-link ">
              <i class="fa-solid fa-cart-shopping"></i>
              <p>
                المنتجات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="fa-solid fa-cart-arrow-down"></i>
              <p>
                الطلبات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>


            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-ticket"></i>
                <p>
                  الكوبونات
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link ">
                <i class="fa-solid fa-users"></i>
                <p>
                  اعضاء الموقع
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>







          <a href="{{ route('dashboard.settings.index') }}" class="nav-link my-1 ">
            <i class="fa-solid fa-gear"></i>
            <p>
              اعدادات الموقع
              {{-- <i class="right fas fa-angle-left"></i> --}}
            </p>
          </a>




          {{-- final --}}
          <a href="" class="nav-link my-1">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <p>
              تسجيل الخروج
            </p>
          </a>


          {{-- <a href="register" class="nav-link my-1">
            <i class="fa-solid fa-user-plus"></i>
            <p>
              Register
            </p>
          </a> --}}
        
        </ul>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->


    {{-- <li>
      <a href="javascript:void(0)" class="sidebar-header">
        <i data-feather="gift"></i>
        <span>products</span>
        <i></i>
      </a>
      <ul>
        <li>
          <a href="">
            <i class="">products</i>
          </a>
        </li>
      </ul>
    </li> --}}
  </aside>