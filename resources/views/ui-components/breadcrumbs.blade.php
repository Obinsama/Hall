<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ui-components/breadcrumbs by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:55 GMT -->
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

    <link media="all" type="text/css" rel="stylesheet" href="../assets/plugins/prismjs/prism.css">

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
      <li class="nav-item active">
        <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="true" aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">UI Kit</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse show" id="uiComponents">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="alerts.html" class="nav-link ">Alerts</a>
            </li>
            <li class="nav-item">
              <a href="badges.html" class="nav-link ">Badges</a>
            </li>
            <li class="nav-item">
              <a href="breadcrumbs.html" class="nav-link active">Breadcrumbs</a>
            </li>
            <li class="nav-item">
              <a href="buttons.html" class="nav-link ">Buttons</a>
            </li>
            <li class="nav-item">
              <a href="button-group.html" class="nav-link ">Button group</a>
            </li>
            <li class="nav-item">
              <a href="cards.html" class="nav-link ">Cards</a>
            </li>
            <li class="nav-item">
              <a href="collapse.html" class="nav-link ">Collapse</a>
            </li>
            <li class="nav-item">
              <a href="dropdowns.html" class="nav-link ">Dropdowns</a>
            </li>
            <li class="nav-item">
              <a href="list-group.html" class="nav-link ">List group</a>
            </li>
            <li class="nav-item">
              <a href="media-object.html" class="nav-link ">Media object</a>
            </li>
            <li class="nav-item">
              <a href="modal.html" class="nav-link ">Modal</a>
            </li>
            <li class="nav-item">
              <a href="navs.html" class="nav-link ">Navs</a>
            </li>
            <li class="nav-item">
              <a href="navbar.html" class="nav-link ">Navbar</a>
            </li>
            <li class="nav-item">
              <a href="pagination.html" class="nav-link ">Pagination</a>
            </li>
            <li class="nav-item">
              <a href="popovers.html" class="nav-link ">Popvers</a>
            </li>
            <li class="nav-item">
              <a href="progress.html" class="nav-link ">Progress</a>
            </li>
            <li class="nav-item">
              <a href="scrollbar.html" class="nav-link ">Scrollbar</a>
            </li>
            <li class="nav-item">
              <a href="scrollspy.html" class="nav-link ">Scrollspy</a>
            </li>
            <li class="nav-item">
              <a href="spinners.html" class="nav-link ">Spinners</a>
            </li>
            <li class="nav-item">
              <a href="tabs.html" class="nav-link ">Tabs</a>
            </li>
            <li class="nav-item">
              <a href="tooltips.html" class="nav-link ">Tooltips</a>
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
        <div class="row">
  <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
    <h1 class="page-title">Breadcrumbs</h1>
    <p class="lead">Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS. Read the <a href="https://getbootstrap.com/docs/4.3/components/breadcrumb/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    <hr>
    <h4 id="default">Defalult breadcrumb</h4>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="defaultBreadcrumbs">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultBreadcrumbs"><i data-feather="copy"></i></button>
    </figure>
    <hr>
    <h4 id="variations">Breadcrumb variations</h4>
    <p class="mb-3">Add class <code>.bg-*</code> for solid colored breadcrumb.</p>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-danger">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-success">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-warning">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="colorVariations">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-primary">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#colorVariations"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="inverse">Inverse breadcrumbs</h4>
    <p class="mb-3">Add class <code>.bg-inverse-*</code> for inverse skin.</p>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-info">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-danger">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-success">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-warning">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-dark">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="inverseBreadcrumbs">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-inverse-primary">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#inverseBreadcrumbs"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="changing-seperator">Changing the separator</h4>
    <p class="mb-3">Separators are automatically added in CSS through <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/::before"><code>::before</code></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content"><code>content</code></a>. They can be changed by changing <code>$breadcrumb-divider</code>. The <a href="https://sass-lang.com/documentation/Sass/Script/Functions.html#quote-instance_method">quote</a> function is needed to generate the quotes around a string, so if you want <code>&gt;</code> as separator, you can use this:</p>
    <figure class="highlight" id="divider">
<pre><code class="language-css"><script type="script/prism-html-markup">$breadcrumb-divider: quote(">");</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#divider"><i data-feather="copy"></i></button>
    </figure>
    <p class="mb-3">It’s also possible to use a base64 embedded SVG icon:</p>
    <figure class="highlight" id="base64">
<pre><code class="language-css"><script type="script/prism-html-markup">$breadcrumb-divider: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPjxwYXRoIGQ9Ik0yLjUgMEwxIDEuNSAzLjUgNCAxIDYuNSAyLjUgOGw0LTQtNC00eiIgZmlsbD0iY3VycmVudENvbG9yIi8+PC9zdmc+);</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#base64"><i data-feather="copy"></i></button>
    </figure>
    <p class="mb-3">The separator can be removed by setting <code>$breadcrumb-divider</code> to <code>none</code>:</p>
    <figure class="highlight" id="seperatorNone">
<pre><code class="language-markup"><script type="script/prism-html-markup">$breadcrumb-divider: none;</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#seperatorNone"><i data-feather="copy"></i></button>
    </figure>
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Default breadcrumb</a>
      </li>
      <li class="nav-item">
        <a href="#variations" class="nav-link">Breadcrumb variations</a>
      </li>
      <li class="nav-item">
        <a href="#inverse" class="nav-link">Inverse breadcrumb</a>
      </li>
      <li class="nav-item">
        <a href="#changing-seperator" class="nav-link">Changing seperator</a>
      </li>
    </ul>
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
      <script src="../assets/plugins/prismjs/prism.js"></script>
  <script src="../assets/plugins/clipboard/clipboard.min.js"></script>
    <!-- end plugin js -->

    <!-- common js -->
    <script src="../assets/js/template.js"></script>
    <!-- end common js -->

    </body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ui-components/breadcrumbs by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:55 GMT -->
</html>