<div class="br-logo"><a href=""><span>[</span><i>Bothor </i>Factory <span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
  <label class="sidebar-label pd-x-10 mg-t-20 op-3"></label>
  <ul class="br-sideleft-menu">
    <li class="br-menu-item">
      <a href="{{route('admin.admin.home')}}" class="br-menu-link active">
        <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
        <span class="menu-item-label">Dashboard</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

    <li class="br-menu-item">
      <a href="{{route('admin.admin.showcategroy')}}" class="br-menu-link">
        <i class="menu-item-icon icon  fa fa-list-alt "></i>
        <span class="menu-item-label">Categroy</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

    <li class="br-menu-item">
      <a href="{{route('admin.admin.showproduct')}}" class="br-menu-link">
        <i class="menu-item-icon icon  fas fa-shopping-cart"></i>
        <span class="menu-item-label">Product</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

    <li class="br-menu-item">
      <a href="{{route('admin.admin.show')}}" class="br-menu-link">
        <i class="menu-item-icon icon  fas fa-user-tie"></i>
        <span class="menu-item-label">Admin</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

    <li class="br-menu-item">
      <a href="{{route('admin.admin.contact')}}" class="br-menu-link">
        <i class="menu-item-icon icon  fas fa-file-signature"></i>
        <span class="menu-item-label">Contact</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

    <li class="br-menu-item">
      <a href="{{route('admin.admin.edit')}}" class="br-menu-link">
        <i class="menu-item-icon icon  fas fa-user-cog"></i>
        <span class="menu-item-label">Profile</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
  </ul><!-- br-sideleft-menu -->

 
    


  <div class="info-list">
    <div class="info-list-item">
      <div>
      </div>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
      </div>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
      </div>
    </div><!-- info-list-item -->
  </div><!-- info-list -->

  <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
  <div class="br-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="">
        <i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
  </div><!-- br-header-left -->
  <div class="br-header-right">
    <nav class="nav">

      <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
          <span class="logged-name hidden-md-down">{{Auth::guard('admins')->user()->name}}</span>
          <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
          <span class="square-10 bg-success"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-250">
          <div class="tx-center">
            <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
            <h6 class="logged-fullname">{{Auth::guard('admins')->user()->name}}</h6>
            <p>{{Auth::guard('admins')->user()->email}}</p>
          </div>
          <hr>
          <ul class="list-unstyled user-profile-nav">
          
            <li>
              <a class="dropdown-item" href="{{route('login.logout')}}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                <i class="icon fas fa-power-off"></i> Sign Out</a></li>
            <form id="logout-form" action="{{route('login.logout')}}" method="POST" style="display: none;">
              @csrf
            </form>
          </ul>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </nav>
  </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->
</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->