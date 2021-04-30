<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/email/inbox by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:45 GMT -->
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
      <li class="nav-item active">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="true" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse show" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="inbox.html" class="nav-link active">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="read.html" class="nav-link ">Read</a>
            </li>
            <li class="nav-item">
              <a href="compose.html" class="nav-link ">Compose</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item ">
        <a href="../apps/chat.html" class="nav-link">
          <i class="link-icon" data-feather="message-square"></i>
          <span class="link-title">Chat</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="../apps/calendar.html" class="nav-link">
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
              <a href="../apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
              <a href="../apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
              <a href="inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
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
</nav>
      <div class="page-content">
        <div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 email-aside border-lg-right">
            <div class="aside-content">
              <div class="aside-header">
                <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i data-feather="chevron-down"></i></span></button><span class="title">Mail Service</span>
                <p class="description">amiahburton@gmail.com</p>
              </div>
              <div class="aside-compose"><a class="btn btn-primary btn-block" href="compose.html">Compose Email</a></div>
              <div class="aside-nav collapse">
                <ul class="nav">
                  <li class="active"><a href="#"><span class="icon"><i data-feather="inbox"></i></span>Inbox<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
                  <li><a href="#"><span class="icon"><i data-feather="mail"></i></span>Sent Mail</a></li>
                  <li><a href="#"><span class="icon"><i data-feather="briefcase"></i></span>Important<span class="badge badge-info-muted text-white font-weight-bold float-right">4</span></a></li>
                  <li><a href="#"><span class="icon"><i data-feather="file"></i></span>Drafts</a></li>
                  <li><a href="#"><span class="icon"><i data-feather="star"></i></span>Tags</a></li>
                  <li><a href="#"><span class="icon"><i data-feather="trash"></i></span>Trash</a></li>
                </ul>
                <span class="title">Labels</span>
                <ul class="nav nav-pills nav-stacked">
                  <li>
                    <a href="#"><i data-feather="tag" class="text-warning"></i> Important </a>
                  </li>
                  <li><a href="#">
                    <i data-feather="tag" class="text-primary"></i> Business </a>
                  </li>
                  <li>
                    <a href="#"> <i data-feather="tag" class="text-info"></i> Inspiration </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 email-content">
            <div class="email-inbox-header">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="email-title mb-2 mb-md-0"><span class="icon"><i data-feather="inbox"></i></span> Inbox <span class="new-messages">(2 new messages)</span> </div>
                </div>
                <div class="col-lg-6">
                  <div class="email-search">
                    <div class="input-group input-search">
                      <input class="form-control" type="text" placeholder="Search mail..."><span class="input-group-btn">
                      <button class="btn btn-outline-secondary" type="button"><i data-feather="search"></i></button></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="email-filters d-flex align-items-center justify-content-between flex-wrap">
              <div class="email-filters-left flex-wrap d-none d-md-flex">
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                  </label>
                </div>
                <div class="btn-group ml-3">
                  <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button"> With selected <span class="caret"></span></button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Mark as read</a>
                    <a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item" href="#">Spam</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#">Delete</a>
                  </div>
                </div>
                <div class="btn-group mb-1 mb-md-0">
                  <button class="btn btn-outline-primary" type="button">Archive</button>
                  <button class="btn btn-outline-primary" type="button">Span</button>
                  <button class="btn btn-outline-primary" type="button">Delete</button>
                </div>
                <div class="btn-group mb-1 mb-md-0 d-none d-xl-block">
                  <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">Order by <span class="caret"></span></button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a class="dropdown-item" href="#">Date</a>
                    <a class="dropdown-item" href="#">From</a>
                    <a class="dropdown-item" href="#">Subject</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Size</a>
                  </div>
                </div>
              </div>
              <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of 253</span>
                <div class="btn-group email-pagination-nav">
                  <button class="btn btn-outline-secondary btn-icon" type="button"><i data-feather="chevron-left"></i></button>
                  <button class="btn btn-outline-secondary btn-icon" type="button"><i data-feather="chevron-right"></i></button>
                </div>
              </div>
            </div>
            <div class="email-list">
              <div class="email-list-item email-list-item--unread">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item email-list-item--unread">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite active" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite active" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite active" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="read.html" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
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

    </body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/email/inbox by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:45 GMT -->
</html>