<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/apps/chat by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>NobleUI Laravel Admin Dashboard Template</title>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="leLFmCYSqJrAlCtKdYLa1JVDIqNJp4xsva8rWEKS">
  
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
  <link media="all" type="text/css" rel="stylesheet" href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css">
  <!-- end plugin css -->

  
  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="../css/app.css">
  <!-- end common css -->

    
  <!-- Global site tag (gtag.js) - Google Analytics start -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146586338-1');
  </script>
  <!-- Google Analytics end -->
  
</head>
<body data-base-url="https://www.nobleui.com/laravel/template/light">

  <script src="../assets/js/spinner.js"></script>

  <div class="main-wrapper" id="app">
    <nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item ">
        <a href="https://www.nobleui.com/laravel/template/light" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">web apps</li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../email/inbox.html" class="nav-link ">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="../email/read.html" class="nav-link ">Read</a>
            </li>
            <li class="nav-item">
              <a href="../email/compose.html" class="nav-link ">Compose</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item active">
        <a href="chat.html" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Chat</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="calendar.html" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Calendar</span>
        </a>
      </li>
      <li class="nav-item nav-category">Components</li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">UI Kit</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="uiComponents">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../ui-components/alerts.html" class="nav-link ">Alerts</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/badges.html" class="nav-link ">Badges</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/breadcrumbs.html" class="nav-link ">Breadcrumbs</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/buttons.html" class="nav-link ">Buttons</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/button-group.html" class="nav-link ">Button group</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/cards.html" class="nav-link ">Cards</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/collapse.html" class="nav-link ">Collapse</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/dropdowns.html" class="nav-link ">Dropdowns</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/list-group.html" class="nav-link ">List group</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/media-object.html" class="nav-link ">Media object</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/modal.html" class="nav-link ">Modal</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/navs.html" class="nav-link ">Navs</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/navbar.html" class="nav-link ">Navbar</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/pagination.html" class="nav-link ">Pagination</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/popovers.html" class="nav-link ">Popvers</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/progress.html" class="nav-link ">Progress</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/scrollbar.html" class="nav-link ">Scrollbar</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/scrollspy.html" class="nav-link ">Scrollspy</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/spinners.html" class="nav-link ">Spinners</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/tabs.html" class="nav-link ">Tabs</a>
            </li>
            <li class="nav-item">
              <a href="../ui-components/tooltips.html" class="nav-link ">Tooltips</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#advanced-ui" role="button" aria-expanded="false" aria-controls="advanced-ui">
          <i class="link-icon" data-feather="anchor"></i>
          <span class="link-title">Advanced UI</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="advanced-ui">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../advanced-ui/cropper.html" class="nav-link ">Cropper</a>
            </li>
            <li class="nav-item">
              <a href="../advanced-ui/owl-carousel.html" class="nav-link ">Owl Carousel</a>
            </li>
            <li class="nav-item">
              <a href="../advanced-ui/sweet-alert.html" class="nav-link ">Sweet Alert</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Forms</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="forms">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../forms/basic-elements.html" class="nav-link ">Basic Elements</a>
            </li>
            <li class="nav-item">
              <a href="../forms/advanced-elements.html" class="nav-link ">Advanced Elements</a>
            </li>
            <li class="nav-item">
              <a href="../forms/editors.html" class="nav-link ">Editors</a>
            </li>
            <li class="nav-item">
              <a href="../forms/wizard.html" class="nav-link ">Wizard</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
          <i class="link-icon" data-feather="pie-chart"></i>
          <span class="link-title">Charts</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="charts">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../charts/apex.html" class="nav-link ">Apex</a>
            </li>
            <li class="nav-item">
              <a href="../charts/chartjs.html" class="nav-link ">ChartJs</a>
            </li>
            <li class="nav-item">
              <a href="../charts/flot.html" class="nav-link ">Flot</a>
            </li>
            <li class="nav-item">
              <a href="../charts/morrisjs.html" class="nav-link ">MorrisJs</a>
            </li>
            <li class="nav-item">
              <a href="../charts/peity.html" class="nav-link ">Peity</a>
            </li>
            <li class="nav-item">
              <a href="../charts/sparkline.html" class="nav-link ">Sparkline</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
          <i class="link-icon" data-feather="layout"></i>
          <span class="link-title">Tables</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="tables">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../tables/basic-tables.html" class="nav-link ">Basic Tables</a>
            </li>
            <li class="nav-item">
              <a href="../tables/data-table.html" class="nav-link ">Data Table</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
          <i class="link-icon" data-feather="smile"></i>
          <span class="link-title">Icons</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="icons">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../icons/feather-icons.html" class="nav-link ">Feather Icons</a>
            </li>
            <li class="nav-item">
              <a href="../icons/flag-icons.html" class="nav-link ">Flag Icons</a>
            </li>
            <li class="nav-item">
              <a href="../icons/mdi-icons.html" class="nav-link ">Mdi Icons</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Pages</li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#general" role="button" aria-expanded="false" aria-controls="general">
          <i class="link-icon" data-feather="book"></i>
          <span class="link-title">Special Pages</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="general">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../general/blank-page.html" class="nav-link ">Blank page</a>
            </li>
            <li class="nav-item">
              <a href="../general/faq.html" class="nav-link ">Faq</a>
            </li>
            <li class="nav-item">
              <a href="../general/invoice.html" class="nav-link ">Invoice</a>
            </li>
            <li class="nav-item">
              <a href="../general/profile.html" class="nav-link ">Profile</a>
            </li>
            <li class="nav-item">
              <a href="../general/pricing.html" class="nav-link ">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="../general/timeline.html" class="nav-link ">Timeline</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#auth" role="button" aria-expanded="false" aria-controls="auth">
          <i class="link-icon" data-feather="unlock"></i>
          <span class="link-title">Authentication</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="auth">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../auth/login.html" class="nav-link ">Login</a>
            </li>
            <li class="nav-item">
              <a href="../auth/register.html" class="nav-link ">Register</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#error" role="button" aria-expanded="false" aria-controls="error">
          <i class="link-icon" data-feather="cloud-off"></i>
          <span class="link-title">Error</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="error">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../error/404.html" class="nav-link ">404</a>
            </li>
            <li class="nav-item">
              <a href="../error/500.html" class="nav-link ">500</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Docs</li>
      <li class="nav-item">
        <a href="https://www.nobleui.com/laravel/documentation/docs.html" target="_blank" class="nav-link">
          <i class="link-icon" data-feather="hash"></i>
          <span class="link-title">Documentation</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>
    <div class="theme-wrapper">
      <h6 class="text-muted mb-2">Light Version:</h6>
      <a class="theme-item active" href="../index.html">
        <img src="../assets/images/screenshots/light.jpg" alt="light version">
      </a>
      <h6 class="text-muted mb-2">Dark Version:</h6>
      <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">
        <img src="../assets/images/screenshots/dark.jpg" alt="light version">
      </a>
    </div>
  </div>
</nav>    <div class="page-wrapper">
      <nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <form class="search-form">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i data-feather="search"></i>
          </div>
        </div>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
      </div>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item dropdown nav-apps">
        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="grid"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="appsDropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <p class="mb-0 font-weight-medium">Web Apps</p>
            <a href="javascript:;" class="text-muted">Edit</a>
          </div>
          <div class="dropdown-body">
            <div class="d-flex align-items-center apps">
              <a href="chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
              <a href="calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
              <a href="../email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
              <a href="../general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
            </div>
          </div>
          <div class="dropdown-footer d-flex align-items-center justify-content-center">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown nav-messages">
        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="mail"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="messageDropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <p class="mb-0 font-weight-medium">9 New Messages</p>
            <a href="javascript:;" class="text-muted">Clear all</a>
          </div>
          <div class="dropdown-body">
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="../assets/images/faces/face2.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Leonardo Payne</p>
                  <p class="sub-text text-muted">2 min ago</p>
                </div>	
                <p class="sub-text text-muted">Project status</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="../assets/images/faces/face3.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Carl Henson</p>
                  <p class="sub-text text-muted">30 min ago</p>
                </div>	
                <p class="sub-text text-muted">Client meeting</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="../assets/images/faces/face4.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Jensen Combs</p>												
                  <p class="sub-text text-muted">1 hrs ago</p>
                </div>	
                <p class="sub-text text-muted">Project updates</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="../assets/images/faces/face5.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Amiah Burton</p>
                  <p class="sub-text text-muted">2 hrs ago</p>
                </div>
                <p class="sub-text text-muted">Project deadline</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="figure">
                <img src="../assets/images/faces/face6.jpg" alt="userr">
              </div>
              <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                  <p>Yaretzi Mayo</p>
                  <p class="sub-text text-muted">5 hr ago</p>
                </div>
                <p class="sub-text text-muted">New record</p>
              </div>
            </a>
          </div>
          <div class="dropdown-footer d-flex align-items-center justify-content-center">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown nav-notifications">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="bell"></i>
          <div class="indicator">
            <div class="circle"></div>
          </div>
        </a>
        <div class="dropdown-menu" aria-labelledby="notificationDropdown">
          <div class="dropdown-header d-flex align-items-center justify-content-between">
            <p class="mb-0 font-weight-medium">6 New Notifications</p>
            <a href="javascript:;" class="text-muted">Clear all</a>
          </div>
          <div class="dropdown-body">
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="user-plus"></i>
              </div>
              <div class="content">
                <p>New customer registered</p>
                <p class="sub-text text-muted">2 sec ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="gift"></i>
              </div>
              <div class="content">
                <p>New Order Recieved</p>
                <p class="sub-text text-muted">30 min ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="alert-circle"></i>
              </div>
              <div class="content">
                <p>Server Limit Reached!</p>
                <p class="sub-text text-muted">1 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="layers"></i>
              </div>
              <div class="content">
                <p>Apps are ready for update</p>
                <p class="sub-text text-muted">5 hrs ago</p>
              </div>
            </a>
            <a href="javascript:;" class="dropdown-item">
              <div class="icon">
                <i data-feather="download"></i>
              </div>
              <div class="content">
                <p>Download completed</p>
                <p class="sub-text text-muted">6 hrs ago</p>
              </div>
            </a>
          </div>
          <div class="dropdown-footer d-flex align-items-center justify-content-center">
            <a href="javascript:;">View all</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown nav-profile">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../assets/images/faces/face1.jpg" alt="profile">
        </a>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <div class="dropdown-header d-flex flex-column align-items-center">
            <div class="figure mb-3">
              <img src="../assets/images/faces/face1.jpg" alt="">
            </div>
            <div class="info text-center">
              <p class="name font-weight-bold mb-0">Amiah Burton</p>
              <p class="email text-muted mb-3">amiahburton@gmail.com</p>
            </div>
          </div>
          <div class="dropdown-body">
            <ul class="profile-nav p-0 pt-3">
              <li class="nav-item">
                <a href="../general/profile.html" class="nav-link">
                  <i data-feather="user"></i>
                  <span>Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:;" class="nav-link">
                  <i data-feather="edit"></i>
                  <span>Edit Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:;" class="nav-link">
                  <i data-feather="repeat"></i>
                  <span>Switch User</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:;" class="nav-link">
                  <i data-feather="log-out"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>      <div class="page-content">
        <div class="row chat-wrapper">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="row position-relative">
          <div class="col-lg-4 chat-aside border-lg-right">
            <div class="aside-content">
              <div class="aside-header">
                <div class="d-flex justify-content-between align-items-center pb-2 mb-2">
                  <div class="d-flex align-items-center">
                    <figure class="mr-2 mb-0">
                      <img src="../assets/images/faces/face1.jpg" class="img-sm rounded-circle" alt="profile">
                      <div class="status online"></div>
                    </figure>
                    <div>
                      <h6>Amiah Burton</h6>
                      <p class="text-muted tx-13">Software Developer</p>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="settings" data-toggle="tooltip" title="Settings"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View Profile</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit Profile</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="aperture" class="icon-sm mr-2"></i> <span class="">Add status</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="settings" class="icon-sm mr-2"></i> <span class="">Settings</span></a>
                    </div>
                  </div>
                </div>
                <form class="search-form">
                  <div class="input-group border rounded-sm">
                    <div class="input-group-prepend">
                      <div class="input-group-text border-0 rounded-sm">
                        <i data-feather="search" class="icon-md cursor-pointer"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control  border-0 rounded-sm" id="searchForm" placeholder="Search here...">
                  </div>
                </form>
              </div>
              <div class="aside-body">
                <ul class="nav nav-tabs mt-3" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="chats-tab" data-toggle="tab" href="#chats" role="tab" aria-controls="chats" aria-selected="true">
                      <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center">
                        <i data-feather="message-square" class="icon-sm mr-sm-2 mr-lg-0 mr-xl-2 mb-md-1 mb-xl-0"></i>
                        <p class="d-none d-sm-block">Chats</p>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="calls-tab" data-toggle="tab" href="#calls" role="tab" aria-controls="calls" aria-selected="false">
                      <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center">
                        <i data-feather="phone-call" class="icon-sm mr-sm-2 mr-lg-0 mr-xl-2 mb-md-1 mb-xl-0"></i>
                        <p class="d-none d-sm-block">Calls</p>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contacts-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">
                      <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center">
                        <i data-feather="users" class="icon-sm mr-sm-2 mr-lg-0 mr-xl-2 mb-md-1 mb-xl-0"></i>
                        <p class="d-none d-sm-block">Contacts</p>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="tab-content mt-3">
                  <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                    <div>
                      <p class="text-muted mb-1">Recent chats</p>
                      <ul class="list-unstyled chat-list px-1">
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status online"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body font-weight-bold">John Doe</p>
                                <p class="text-muted tx-13">Hi, How are you?</p>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">4:32 PM</p>
                                <div class="badge badge-pill badge-primary ml-auto">5</div>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face3.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status offline"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body font-weight-bold">Carl Henson</p>
                                <div class="d-flex align-items-center">
                                  <i data-feather="image" class="text-muted icon-md mb-2px"></i>
                                  <p class="text-muted ml-1">Photo</p>
                                </div>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">05:24 PM</p>
                                <div class="badge badge-pill badge-danger ml-auto">3</div>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face4.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status offline"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body">John Doe</p>
                                <p class="text-muted tx-13">Hi, How are you?</p>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">Yesterday</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face5.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status online"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body">Jensen Combs</p>
                                <div class="d-flex align-items-center">
                                  <i data-feather="video" class="text-muted icon-md mb-2px"></i>
                                  <p class="text-muted ml-1">Video</p>
                                </div>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">2 days ago</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face6.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status offline"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body">Yaretzi Mayo</p>
                                <p class="text-muted tx-13">Hi, How are you?</p>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">4 week ago</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status offline"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body font-weight-bold">John Doe</p>
                                <p class="text-muted tx-13">Hi, How are you?</p>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">4:32 PM</p>
                                <div class="badge badge-pill badge-primary ml-auto">5</div>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face3.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status online"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body font-weight-bold">Leonardo Payne</p>
                                <div class="d-flex align-items-center">
                                  <i data-feather="image" class="text-muted icon-md mb-2px"></i>
                                  <p class="text-muted ml-1">Photo</p>
                                </div>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">6:11 PM</p>
                                <div class="badge badge-pill badge-danger ml-auto">3</div>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face4.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status online"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body">John Doe</p>
                                <p class="text-muted tx-13">Hi, How are you?</p>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">Yesterday</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face5.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status online"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body">Leonardo Payne</p>
                                <div class="d-flex align-items-center">
                                  <i data-feather="video" class="text-muted icon-md mb-2px"></i>
                                  <p class="text-muted ml-1">Video</p>
                                </div>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">2 days ago</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="chat-item pr-1">
                          <a href="javascript:;" class="d-flex align-items-center">
                            <figure class="mb-0 mr-2">
                              <img src="../assets/images/faces/face6.jpg" class="img-xs rounded-circle" alt="user">
                              <div class="status online"></div>
                            </figure>
                            <div class="d-flex justify-content-between flex-grow border-bottom">
                              <div>
                                <p class="text-body">John Doe</p>
                                <p class="text-muted tx-13">Hi, How are you?</p>
                              </div>
                              <div class="d-flex flex-column align-items-end">
                                <p class="text-muted tx-13 mb-1">4 week ago</p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="calls" role="tabpanel" aria-labelledby="calls-tab">
                    <p class="text-muted mb-1">Recent calls</p>
                    <ul class="list-unstyled chat-list px-1">
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face4.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">Jensen Combs</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-up-right" class="icon-sm text-success mr-1"></i>
                                <p class="text-muted tx-13">Today, 03:11 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="phone-call" class="text-success icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face5.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">Leonardo Payne</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-success mr-1"></i>
                                <p class="text-muted tx-13">Today, 11:41 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="video" class="text-success icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face6.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">Carl Henson</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-danger mr-1"></i>
                                <p class="text-muted tx-13">Today, 04:24 PM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="phone-call" class="text-danger icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face7.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">Jensen Combs</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-danger mr-1"></i>
                                <p class="text-muted tx-13">Today, 12:53 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="video" class="text-danger icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-down-left" class="icon-sm text-success mr-1"></i>
                                <p class="text-muted tx-13">Today, 01:42 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="video" class="text-success icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face3.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <i data-feather="arrow-up-right" class="icon-sm text-success mr-1"></i>
                                <p class="text-muted tx-13">Today, 12:01 AM</p>
                              </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                              <i data-feather="phone-call" class="text-success icon-md"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <p class="text-muted mb-1">Contacts</p>
                    <ul class="list-unstyled chat-list px-1">
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">Amiah Burton</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Front-end Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-success mr-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary mr-2"></i>
                              <i data-feather="video" class="icon-md text-danger"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face3.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status online"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Back-end Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-success mr-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary mr-2"></i>
                              <i data-feather="video" class="icon-md text-danger"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face4.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">Yaretzi Mayo</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Fullstack Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-success mr-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary mr-2"></i>
                              <i data-feather="video" class="icon-md text-danger"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="chat-item pr-1">
                        <a href="javascript:;" class="d-flex align-items-center">
                          <figure class="mb-0 mr-2">
                            <img src="../assets/images/faces/face5.jpg" class="img-xs rounded-circle" alt="user">
                            <div class="status offline"></div>
                          </figure>
                          <div class="d-flex align-items-center justify-content-between flex-grow border-bottom">
                            <div>
                              <p class="text-body">John Doe</p>
                              <div class="d-flex align-items-center">
                                <p class="text-muted tx-13">Front-end Developer</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-end text-body">
                              <i data-feather="message-square" class="icon-md text-success mr-2"></i>
                              <i data-feather="phone-call" class="icon-md text-primary mr-2"></i>
                              <i data-feather="video" class="icon-md text-danger"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 chat-content">
            <div class="chat-header border-bottom pb-2">
              <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                  <i data-feather="corner-up-left" id="backToChatList" class="icon-lg mr-2 ml-n2 text-muted d-lg-none"></i>
                  <figure class="mb-0 mr-2">
                    <img src="../assets/images/faces/face2.jpg" class="img-sm rounded-circle" alt="image">
                    <div class="status online"></div>
                    <div class="status online"></div>
                  </figure>
                  <div>
                    <p>Mariana Zenha</p>
                    <p class="text-muted tx-13">Front-end Developer</p>
                  </div>
                </div>
                <div class="d-flex align-items-center mr-n1">
                  <a href="#">
                    <i data-feather="video" class="icon-lg text-muted mr-3" data-toggle="tooltip" title="Start video call"></i>
                  </a>
                  <a href="#">
                    <i data-feather="phone-call" class="icon-lg text-muted mr-0 mr-sm-3" data-toggle="tooltip" title="Start voice call"></i>
                  </a>
                  <a href="#" class="d-none d-sm-block">
                    <i data-feather="user-plus" class="icon-lg text-muted" data-toggle="tooltip" title="Add to contacts"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="chat-body">
              <ul class="messages">
                <li class="message-item friend">
                  <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:12 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="../assets/images/faces/face1.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                    </div>
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum.</p>
                      </div>
                      <span>8:13 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item friend">
                  <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:15 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="../assets/images/faces/face1.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                      <span>8:15 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item friend">
                  <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:17 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="../assets/images/faces/face1.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                    </div>
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum.</p>
                      </div>
                      <span>8:18 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item friend">
                  <img src="../assets/images/faces/face2.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                      <span>8:22 PM</span>
                    </div>
                  </div>
                </li>
                <li class="message-item me">
                  <img src="../assets/images/faces/face1.jpg" class="img-xs rounded-circle" alt="avatar">
                  <div class="content">
                    <div class="message">
                      <div class="bubble">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                      </div>
                      <span>8:30 PM</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="chat-footer d-flex">
              <div>
                <button type="button" class="btn border btn-icon rounded-circle mr-2" data-toggle="tooltip" title="Emoji">
                  <i data-feather="smile" class="text-muted"></i>
                </button>
              </div>
              <div class="d-none d-md-block">
                <button type="button" class="btn border btn-icon rounded-circle mr-2" data-toggle="tooltip" title="Attatch files">
                  <i data-feather="paperclip" class="text-muted"></i>
                </button>
              </div>
              <div class="d-none d-md-block">
                <button type="button" class="btn border btn-icon rounded-circle mr-2" data-toggle="tooltip" title="Record you voice">
                  <i data-feather="mic" class="text-muted"></i>
                </button>
              </div>
              <form class="search-form flex-grow mr-2">
                <div class="input-group">
                  <input type="text" class="form-control rounded-pill" id="chatForm" placeholder="Type a message">
                </div>
              </form>
              <div>
                <button type="button" class="btn btn-primary btn-icon rounded-circle">
                  <i data-feather="send"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
  <p class="text-muted text-center text-md-left">Copyright © 2019 <a href="https://www.nobleui.com/" target="_blank">NobleUI</a>. All rights reserved</p>
  <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
</footer>    </div>
  </div>

    <!-- base js -->
    <script src="../js/app.js"></script>
    <script src="../assets/plugins/feather-icons/feather.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    <!-- common js -->
    <script src="../assets/js/template.js"></script>
    <!-- end common js -->

      <script src="../assets/js/chat.js"></script>
</body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/apps/chat by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:49 GMT -->
</html>