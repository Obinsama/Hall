<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ui-components/dropdowns by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:57 GMT -->
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
              <a href="breadcrumbs.html" class="nav-link ">Breadcrumbs</a>
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
              <a href="dropdowns.html" class="nav-link active">Dropdowns</a>
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
    <h1 class="page-title">Dropdowns</h1>
    <p class="lead">Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included Bootstrap dropdown javascript plugin. Read the <a href="https://getbootstrap.com/docs/4.3/components/dropdowns/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Basic Example</h4>
    <p class="mb-3">Wrap the dropdown’s toggle (your button or link) and the dropdown menu within <code>.dropdown</code>, or another element that declares position relative. Dropdowns can be triggered from link or button elements to better fit your potential needs.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="defaultDropdown">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultDropdown"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="variations">Dropdown variations</h4>
    <p class="mb-3">Add class <code>.btn-*</code> for solid colored buttons.</p>
    <div class="example">
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownVariations">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownVariations"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="split">Split button</h4>
    <p class="mb-3">Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown caret.</p>
    <div class="example">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="splitButton">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group">
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#splitButton"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="sizing">Sizing</h4>
    <p class="mb-3">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
    <div class="example">
        <div class="btn-toolbar" role="toolbar">
          <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Large button
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div><!-- /btn-group -->
          <div class="btn-group ml-2">
            <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div><!-- /btn-group -->
        </div>
        <div class="btn-toolbar" role="toolbar">
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Small button
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div><!-- /btn-group -->
          <div class="btn-group ml-2">
            <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div><!-- /btn-group -->
        </div>
    </div>
    <figure class="highlight" id="buttonSizing">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Large button groups (default and split) -->
<div class="btn-group">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Large button
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-lg" type="button">
    Large split button
  </button>
  <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>

<!-- Small button groups (default and split) -->
<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Small button
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-sm" type="button">
    Small split button
  </button>
  <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    ...
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonSizing"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="dropup">Dropup</h4>
    <p class="mb-3">Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent element.</p>
    <div class="example">
      <div class="btn-group dropup">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropup
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
      <div class="btn-group dropup">
        <button type="button" class="btn btn-secondary">
          Split dropup
        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropUP">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropup
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropUP"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="dropright">Dropright</h4>
    <p class="mb-3">Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the parent element.</p>
    <div class="example">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropright
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
      <div class="btn-group dropright">
        <button type="button" class="btn btn-secondary">
          Split dropright
        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropright</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropRight">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Default dropright button -->
<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropright
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
  </div>
</div>

<!-- Split dropright button -->
<div class="btn-group dropright">
  <button type="button" class="btn btn-secondary">
    Split dropright
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropright</span>
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropRight"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="dropleft">Dropleft</h4>
    <p class="mb-3">Trigger dropdown menus at the right of the elements by adding <code>.dropleft</code> to the parent element.</p>
    <div class="example">
      <div class="btn-group dropleft">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropleft
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
      <div class="btn-group">
        <div class="btn-group dropleft" role="group">
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropleft</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <button type="button" class="btn btn-secondary">
          Split dropleft
        </button>
      </div>
    </div>
    <figure class="highlight" id="dropLeft">
<pre><code class="language-markup"><script type="script/prism-html-markup"><!-- Default dropleft button -->
<div class="btn-group dropleft">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropleft
  </button>
  <div class="dropdown-menu">
    <!-- Dropdown menu links -->
  </div>
</div>

<!-- Split dropleft button -->
<div class="btn-group">
  <div class="btn-group dropleft" role="group">
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropleft</span>
    </button>
    <div class="dropdown-menu">
      <!-- Dropdown menu links -->
    </div>
  </div>
  <button type="button" class="btn btn-secondary">
    Split dropleft
  </button>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropLeft"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="active-item">Active menu item</h4>
    <p class="mb-3">Add <code>.active</code> to items in the dropdown to <strong>style them as active</strong>.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item active" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="activeItem">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item active" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#activeItem"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="disabled-item">disabled menu item</h4>
    <p class="mb-3">Add <code>.disabled</code> to items in the dropdown to <strong>style them as active</strong>.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item disabled" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="disabledItem">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item disabled" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#disabledItem"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-header">Dropdown header</h4>
    <p class="mb-3">Add a header to label sections of actions in any dropdown menu.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
          <h6 class="dropdown-header">Dropdown header</h6>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownHeader">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
    <h6 class="dropdown-header">Dropdown header</h6>
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownHeader"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-dividers">Dropdown dividers</h4>
    <p class="mb-3">Add a header to label sections of actions in any dropdown menu.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownDividers">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownDividers"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-text">Text in dropdown</h4>
    <p class="mb-3">Place any freeform text within a dropdown menu with text and use spacing utilities. Note that you’ll likely need additional sizing styles to constrain the menu width.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu p-4 text-muted" aria-labelledby="dropdownMenuButton5">
          <p>Some example text that's free-flowing within the dropdown menu.</p>
          <p class="mb-0">And this is more example text.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="dropdownText">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu p-4 text-muted"  aria-labelledby="dropdownMenuButton5">
    <p>Some example text that's free-flowing within the dropdown menu.</p>
    <p class="mb-0">And this is more example text.</p>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownText"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="dropdown-form">Forms in dropdown</h4>
    <p>Put a form within a dropdown menu, or make it into a dropdown menu, and use margin or padding utilities to give it the negative space you require.</p>
    <div class="example">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <form class="dropdown-menu p-4"  aria-labelledby="dropdownMenuButton6">
          <div class="form-group">
            <label for="exampleDropdownFormEmail2">Email address</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
          </div>
          <div class="form-group">
            <label for="exampleDropdownFormPassword2">Password</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
    </div>
    <figure class="highlight" id="dropdownForm">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <form class="dropdown-menu p-4"  aria-labelledby="dropdownMenuButton6">
    <div class="form-group">
      <label for="exampleDropdownFormEmail2">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword2">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#dropdownForm"><i data-feather="copy"></i></button>
    </figure>
                
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#variations" class="nav-link">Dropdown variations</a>
      </li>
      <li class="nav-item">
        <a href="#split" class="nav-link">Split button</a>
      </li>
      <li class="nav-item">
        <a href="#sizing" class="nav-link">Sizing</a>
      </li>
      <li class="nav-item">
        <a href="#dropup" class="nav-link">Dropup</a>
      </li>
      <li class="nav-item">
        <a href="#dropright" class="nav-link">Dropright</a>
      </li>
      <li class="nav-item">
        <a href="#dropleft" class="nav-link">Dropleft</a>
      </li>
      <li class="nav-item">
        <a href="#active-item" class="nav-link">Active menu item</a>
      </li>
      <li class="nav-item">
        <a href="#disabled-item" class="nav-link">Disabled menu item</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-header" class="nav-link">Dropdown header</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-dividers" class="nav-link">Dropdown dividers</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-text" class="nav-link">Text in dropdown</a>
      </li>
      <li class="nav-item">
        <a href="#dropdown-form" class="nav-link">Form in dropdown</a>
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

<!-- Mirrored from www.nobleui.com/laravel/template/light/ui-components/dropdowns by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 00:09:57 GMT -->
</html>