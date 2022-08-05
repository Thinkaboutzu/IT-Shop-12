<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('template/admin/images/logo.svg') }}" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('template/admin/images/logo-mini.svg') }}" alt="logo" /></a>
</div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
          <img class="img-xs rounded-circle " src="{{ asset('template/admin/images/faces/face15.jpg') }}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">진아</h5>
            <span>Admin</span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php if(isset($page)) { echo "./"; } else { echo "../../"; } ?>index.php">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
   <!-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>ui-features/buttons.php">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>ui-features/dropdowns.php">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>ui-features/typography.php">Typography</a></li>
        </ul>
      </div>
    </li>-->
    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>product/product.php">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Product</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>tyPeproductt/tyPeproductt.php">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Type Product</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>Employee/Employee.php">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">Employee</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>news/news.php">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">News</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>promotion/promotion.php">
        <span class="menu-icon">
          <i class="mdi mdi-contacts"></i>
        </span>
        <span class="menu-title">promotion</span>
      </a>
    </li>
   <!-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-security"></i>
        </span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>samples/blank-page.php"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>samples/error-404.php"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>samples/error-500.php"> 500 </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>samples/login.php"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php if(isset($page)) { echo "pages/"; } else { echo "../"; } ?>samples/register.php"> Register </a></li>
        </ul>
      </div>
    </li>-->
</nav>