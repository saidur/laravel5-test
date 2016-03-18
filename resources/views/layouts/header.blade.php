<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="index2.html" class="logo"><b>Travel </b>Gallery</a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->            
            @if ((General::userLogo() != '') && (file_exists(base_path()."/public/client/".General::userLogo())))
                <img src="/client/{{General::userLogo()}}" class="user-image" alt="{{General::loginName()}}" title="{{General::loginName()}}" />
            @else
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image"/>
            @endif
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">{{General::loginName()}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
                @if ((General::userLogo() != '') && (file_exists(base_path()."/public/client/".General::userLogo())))
                    <img src="/client/{{General::userLogo()}}" class="img-circle" alt="{{General::loginName()}}" title="{{General::loginName()}}" />
                @else
                    <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image"/>
                @endif              
              <p>
               {{General::loginName()}}
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <!--
            <li class="user-body">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </li>
            -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="/admin/settings" class="btn btn-default btn-flat">Settings</a>
              </div>
              <div class="pull-right">
                <a href="/admin/logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>