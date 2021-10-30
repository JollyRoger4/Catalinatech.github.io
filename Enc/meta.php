<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
          <h4>Catalina<sup>Tech</sup></h4>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="./.logow.png" alt="logo" width="110px"/>
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome to Catalina<sup>Tech</sup> </h1>
            <h3 class="welcome-sub-text">Terima kasih telah berkunjung di situs ini </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
<!--            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">See Our Product</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Bot Tugas Online </p>
                  <p class="fw-light small-text mb-0">Bot yang bisa mengerjakan tugas puluhan soal kurang dari 1 menit</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                  <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                  <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                </div>
              </a>
            </div>
          </li>-->
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="menu-icon mdi mdi-alert-circle-outline "></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left" href="./bot.php">Bot Status : <font color="red">Offline</font> </p>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 0 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="./admin.png" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="./admin.png" width="100px" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold" style="font-weight:bold">Raihan Rivana</p>
                <p class="fw-light text-muted mb-0">raihanrivana08@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
              
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-book-open-page-variant "></i>
              <span class="menu-title">E-Learn</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> On Going </a></li>
              </ul>
            </div>
          </li>
         <li class="nav-item nav-category">Tools</li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-briefcase-check  "></i>
              <span class="menu-title">Checker</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="checker/amazon.php">Amazon</a></li>
                <li class="nav-item"> <a class="nav-link" href="checker/paypal.php">Paypal</a></li>
              </ul>
            </div>
            
          </li>-->
        
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-key-variant "></i>
              <span class="menu-title">Generator</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="./jso.php">JSO Generator</a></li>
                <li class="nav-item"><a class="nav-link" href="./meta.php">meta tag Generator</a></li>
                

              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-rss "></i>
              <span class="menu-title">Network</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="./Enc/32end.php">Check IP</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Directory Seacrh</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/endcd.php">DNS LookUp</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/HTML.php">Domain Checker</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/imgenc.php">Domain To IP</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/rot13.php">IP Geolocation</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/shaenc.php">Page Checker</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/32end.php">Reverse DNS</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/32dcd.php">Reverse IP</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/endcd.php">Sub Domain Finder</a></li>
                <li class="nav-item"><a class="nav-link" href="./Enc/HTML.php">Whois LookUp</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-security "></i>
              <span class="menu-title">Pentesting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="./pent/akp.php">AKP AFU</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/bal.php">Balitbang SQLI</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/cbt.php">CBT Scan</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/clkjk.php">ClickJacking</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/cmsiad.php">CMS IAD Xploit</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/cmsscn.php">CMS Scanner</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/cmsschexp.php">CMS Sekolahku Xploit</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent.csrf.php">CSRF</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/drpexp.php">Drupal Xploit</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/eskexp.php">E-Sakip Xploit</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/jsogen.php">JSO Generator</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/lrvPHPunt.php">Laravel PHP Unit</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/shlfnd.php">OJS Shell Finder</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/schstxp.php">SchoolHost Xploit</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/shllchck.php">Shell Checker</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/shllfnd.php">Shell Finder</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/Thmbxp.php">TimThumb Xploit</a></li>
                <li class="nav-item"><a class="nav-link" href="./pent/xampp.php"> XAMPP Xploit</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-xml "></i>
              <span class="menu-title">Programming</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Text To Charcode</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Hash Generator</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Hash Identifier</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html"> Html Escape</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Live Coding</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">PHP Obfuscator</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item nav-category">Other Product</li>
          <li class="nav-item">
            <a class="nav-link" href="bot.php">
              <i class="menu-icon 
mdi mdi-pound "></i>
              <span class="menu-title">Bot WhatsApp</span>
            </a>
          </li>
        </ul>
      </nav>



<script>alert('Disarankan Untuk Menggunakan Mode Desktop Untuk Mendapatkan Full Experience Di Halaman ini -Administrator-');</script>
<div class="container-fluid">
            <div class="row">
            <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h2>Cara Mudah Membuat Meta Tag</h2><span>Silakan isi formulir berikut, periksa opsi yang Anda butuhkan. Petunjuk ada di bawah formulir(diketik dengan warna blur,karna menghindari suspending site:v)</span>
                  </div>
                  <div class="card-body">
<div class="table-responsive">

<?php

		if(isset($_GET['action'])){
			$action = $_GET['action'];
		}else
			$action = NULL;
		if(isset($_POST['getmetafrompage'])){
			$getmetafrompage = $_POST['getmetafrompage'];
		}else
			$getmetafrompage = NULL;

		if ($action == "1")
		{
			print "<P>Masukkan kode HTML berikut di antara &lt;HEAD&gt; tag situs Anda:";
			print "<form><textarea class=\"formvb areatextc\" id=hasilnya ROWS=8 COLS=65 >&LT;meta name=\"description\" content=\"$_POST[desc]\"&GT;\n";
			print "&LT;meta name=\"keywords\" content=\"$_POST[keyw]\"&GT;\n";
			if(isset($_POST['robots'])){
				if ($_POST['robots'] == "yes")
				{
					print "&LT;meta name=\"robot\" content=\"$_POST[robotsoption]\"&GT;\n";
				}
			}

			if(isset($_POST['refresh'])){
				if ($_POST['refresh'] == "yes")
				{
					print "&LT;meta name=\"refresh\" content=\"$_POST[refreshafter]\"&GT;\n";
				}
			}

			if(isset($_POST['copyright'])){
				if ($_POST['copyright'] == "yes")
				{
					print "&LT;meta name=\"copyright\" content=\"$_POST[copyrighttext]\"&GT;\n";
				}
			}

			if(isset($_POST['author'])){
				if ($_POST['author'] == "yes")
				{
					print "&LT;meta name=\"author\" content=\"$_POST[authorname]\"&GT;\n";
				}
			}

			if(isset($_POST['generator'])){
				if ($_POST['generator'] == "yes")
				{
					print "&LT;meta name=\"generator\" content=\"$_POST[generatorname]\"&GT;\n";
				}
			}

			if(isset($_POST['language'])){
				if ($_POST['language'] == "yes")
				{
					print "&LT;meta name=\"language\" content=\"$_POST[languagetype]\"&GT;\n";
				}
			}

			if(isset($_POST['revisit'])){
				if ($_POST['revisit'] == "yes")
				{
					print "&LT;meta name=\"revisit-after\" content=\"$_POST[revisitdays]\"&GT;\n";
				}
			}
			print "</TEXTAREA></FORM><br>";
			print "<center><A HREF=\"$_SERVER[PHP_SELF]?createnew\"><button class='btn btn-outline-success'>Buat Meta Tag Baru</button></A><P><br>";
            print "<button class='btn btn-outline-warning copynym' onclick=myFunction()>Copy Text</button></center>";

		}
		else
		{
			if(isset($MetaTags["description"]))
				$description = $MetaTags["description"];
			else
				$description = NULL;

			if(isset($MetaTags["keywords"]))
				$keywords = $MetaTags["keywords"];
			else
				$keywords = NULL;

			if(isset($MetaTags["robots"]))
				$robot = $MetaTags["robots"];
			else if(isset($MetaTags["robot"]))
				$robot = $MetaTags["robot"];
			else
				$robot = NULL;

			if(isset($MetaTags["author"]))
				$author = $MetaTags["author"];
			else if(isset($MetaTags["owner"]))
				$author = $MetaTags["owner"];
			else
				$author = NULL;

			if(isset($MetaTags["refresh"]))
				$refresh = $MetaTags["refresh"];
			else
				$refresh = NULL;

			if(isset($MetaTags["copyright"]))
				$copyright = $MetaTags["copyright"];
			if(isset($MetaTags["dc_rights"]))
				$copyright = $MetaTags["dc_rights"];	
			else
				$copyright = NULL;

			if(isset($MetaTags["revisit-after"]))
				$revisit = $MetaTags["revisit-after"];
			else
				$revisit = NULL;

			if(isset($MetaTags["generator"]))
				$generator = $MetaTags["generator"];
			else
				$generator = NULL;

			if(isset($MetaTags["language"]))
				$language = $MetaTags["language"];
			else
				$language = NULL;

			$year = date('y');

			print "<form action=\"$_SERVER[PHP_SELF]?action=1\" method=post>";
			
			print "<label class=\"form-label\">Deskripsi Website</label><input type=\"text\" class=\"form-control\" size=\"40\" name=\"desc\" VALUE=\"$description\" Placeholder=\"Masukan Deskripsi Web\"><br>";
			
			print "<br><label class=\"form-label\">keyboard Web</label><input type=\"text\" class=\"form-control\" size=\"40\" name=\"keyw\" VALUE=\"$keywords\" Placeholder=\"Masukan Keyboard Web anda\"><br>";
			
			print "<div class=\"form-check checkbox checkbox-success mb-0\"><input class=\"form-check-input\" id=\"checkbox-primary\" type=\"checkbox\" name=robots value=\"yes\">";

			if (isset($robot))
				print "CHECKED";
			print "<label class=\"form-check-label \" for=\"checkbox-primary\">Pengaturan Searching Engine</label></div><SELECT class=\"form-select input-air-primary digits\" NAME=robotsoption>";

			if (isset($robot))
				print "<OPTION class=\"form-control\" value='$robot'>$robot</OPTION>";
				
			print "<OPTION class=\"form-control\" VALUE=\"index,follow\">Index page, follow all links</OPTION><OPTION VALUE=\"noindex,nofollow\">No Index page, No follow links</OPTION>";
			
			print "<OPTION class=\"form-control\" VALUE=\"index,nofollow\">Index page, No follow links</OPTION><OPTION VALUE=\"noindex,follow\">NO Index page, follow links</OPTION></SELECT><P>";

			print "<div class=\"form-check checkbox checkbox-success mb-0\"><input class=\"form-check-input\" id=\"checkbox-primary-1\" type=\"checkbox\" name=copyright value=\"yes\">";

			if (isset($copyright))
				print "CHECKED";
			print "<label class=\"form-check-label\" for=\"checkbox-primary-1\">Copyright Text</label></div><INPUT TYPE=text class=\"form-control\" NAME=copyrighttext value=\"\" Placeholder=\"copyright©Websiteanda.com\" >" ;

			if (isset($copyright))
				print "$copyright";
			print "<div class=\"form-check checkbox checkbox-success mb-0\"><input class=\"form-check-input\" id=\"checkbox-primary-2\" type=\"checkbox\" name=author value=\"yes\"> ";

			if (isset($author))
				print "CHECKED";
			print "<label class=\"form-check-label\" for=\"checkbox-primary-2\">Nama Author</label></div><INPUT TYPE=text class=\"form-control\" NAME=authorname SIZE=35 VALUE=\"$author\" Placeholder=\"Masukan Nama Author\"><P>";
			
			print "<div class=\"form-check checkbox checkbox-success mb-0\"><input class=\"form-check-input\" id=\"checkbox-primary-3\" type=\"checkbox\" name=language value=\"yes\"> ";

			if (isset($language))
				print "CHECKED";
			print "<label class=\"form-check-label\" for=\"checkbox-primary-3\">Bahasa Program yang di gunakan</label></div><INPUT TYPE=text class=\"form-control\" NAME=languagetype SIZE=35 VALUE=\"$language\" Placeholder=\"Masukan Bahasa Yang Digunakan Di web Anda\"><P>";
			print "<div class=\"form-check checkbox checkbox-success mb-0\"><input class=\"form-check-input\" id=\"checkbox-primary-3\" type=\"checkbox\" name=revisit value=\"yes\"> ";

			if (isset($revisit))
				print "CHECKED";
			print "<label class=\"form-check-label\" for=\"checkbox-primary-3\">Set Search Engine ReCrawl</label></div> <INPUT TYPE=number class=\"form-control\" NAME=revisitdays SIZE=3 VALUE=\"$revisit\">";
			print "<br><INPUT TYPE=submit class='btn btn-outline-primary' VALUE=\"Generate\"><P>";
			print "</FORM>";
		}

?>
 </div>
                </div>
            </div>
	</div>
	</div>
</div>

<div class="container-fluid">
     <div class="card-body">
     <h3>Terminologi Meta Tag</h3>
                    <div class="default-according" id="accordion1">
                      <div class="card">
                        <div class="card-header bg-primary" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link text-white" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">#<span>1  </span>apa itu Meta Tag? </button>
                          </h5>
                        </div>
                        <div class="collapse show" id="collapseFour" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                          <div class="card-body">Sebuah elemen meta adalah elemen atau tag dalam bahasa pemrograman HTML atau XHTML yang berfungsi sebagai penyedia informasi metadata untuk halaman web. Elem
                          en meta ini harus ditempatkan di bagian "kepala" HTML. Meta tag ini juga dapat digunakan untuk menyatakan deskripsi/deskripsi suatu halaman web dan untuk menjelaskan kata kunci terkait dan metadata lainnya tanpa "kepala". Secara umum, ada beberapa macam meta tag dengan fungsi yang berbeda-beda. Beberapa fungsi tersebut antara lain kata kunci meta, robot, dan deskripsi.</div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header bg-primary" id="headingFive">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> #<span>2  </span>Tipe element pada Meta Tag ?</button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordion1">
                          <div class="card-body"><b>keywords atau kata kunci</b><br>
                          Kata kunci adalah salah satu jenis meta yang memiliki fungsi menjelaskan isi suatu halaman web melalui beberapa kata atau frase. Seiring dengan perkembangan zaman, jumlah kata kunci yang digunakan pun semakin terbatas. Seperti Google yang menganggap "spam" penggunaan kata kunci dengan angka di atas 7 kata.<br>
                          Sebagai contoh sederhana, di bawah ini ditampilkan perintah meta:<br>
                          untuk menjelaskan bahwa halaman yang dimaksud terkait dengan kata kunci "wikipedia" dan "encyclopedia".<br><br>
<b>robots</b><br>
robots adalah jenis meta yang memiliki fungsi mengontrol perilaku perayapan dan pengindeksan mesin pencari. Meta tag robots berlaku untuk semua mesin pencari, untuk "googlebot" meta tag didedikasikan hanya untuk google. Nilai default untuk tag meta robot adalah "index,follow" (sama dengan "all") dan tidak perlu disetel. Ada beberapa nilai untuk meta tag robots, yaitu:
<br>
Dikutip dari meta tag yang dipahami oleh google<br>
Contoh penulisan tag meta robots<br>
<br>
<b>deskripsi</b><br>
deskripsi adalah jenis meta yang berfungsi memberikan gambaran tentang isi suatu halaman web. Cara menggunakan ini berbeda dengan kata kunci, yaitu menggunakan kalimat bukan kata-kata.
<br>
Contoh penulisan meta tag deskripsi:<br>
Contohnya adalah untuk menjelaskan garis besar konten yang terdapat dalam sebuah halaman HTML.</div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header bg-primary" id="headingSix">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">#<span>3 </span>Instruksi </button>
                          </h5>
                        </div>
                        <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordion1">
                          <div class="card-body"><b>Website Deskripsi</b><br>
<br>
Di bagian ini Anda dapat mengisi deskripsi situs web Anda
<br>
Contoh: <i>Website Catalinatech memuat berbagai informasi unik seputar dunia jaringan dan pemograman</i>
<br>
<br>
<b>Website Keyword</b><br>
<br>
Masukkan kata kunci yang terkait dengan situs web Anda dan pisahkan setiap kata kunci dengan koma
<br>
Contoh : <i>Teknologi ,Bot ,Programming Course ,Jaringan , Online Course ,Tools Online</i>
<br>
<br>
<b>Izinkan Searching Engine</b><br>
<br>
Tentukan apakah mesin pencari diizinkan untuk mengakses situs web Anda atau tidak, misalnya mesin pencari seperti <i>Google, Bing dll</i>
<br>
<br>
<b>Set Searching Engine ReCrawl</b><br>
<br>
Atur dalam berapa hari pencarian dapat kembali ke situs web Anda untuk Meng Crawl url yang ada, isi dengan angka</div>
                        </div>
                      </div>
                    </div>
                  </div>
</div>
</div>
<script>
function myFunction() {
var copyText = document.getElementById("hasilnya");
copyText.select();
copyText.setSelectionRange(0, 99999);
document.execCommand("copy");
Swal.fire({
  title: 'Success Copy!',
  icon: 'success',
  confirmButtonText: 'Okay'
})
                      }
</script>


        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2020. CatalinaTech<br>Made By Raihan</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

