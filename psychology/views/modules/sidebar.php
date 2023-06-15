<aside class="main-sidebar sidebar-light-orange elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-orange ">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Psychology 1.8</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/angie.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie Suarez</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="/PHP/pshycology-master/psychology/" class="nav-link ">
              <i class="nav-icon far fa-user"></i>
              <p>
                home
              </p>
            </a>
          </li>

               <li class="nav-item">
            <a href="/PHP/pshycology-master/psychology/users" class="nav-link <?php if($routesArray[4] == "users"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP/pshycology-master/psychology/interviews" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Clinic History
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP/pshycology-master/psychology/interviews" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                interviews
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP/pshycology-master/psychology/psychologys" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                psychologys
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/PHP/pshycology-master/psychology/treatment" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                treatment
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>