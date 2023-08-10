<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Bank Loan management system </title>
    <link rel="stylesheet" href="my_css/style.css">
    <link rel="stylesheet" href="my_css/style_menu.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Boxiocns CDN Link -->
    <link href='my_css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="sidebar close">
    <div class="logo-details">      
      <i class='bx bx-menu' ></i>
      <span class="logo_name">WSU MIS</span>
    </div>

    <ul class="nav-links">
      <li>
      	<div class="iocn-link">
        <a href="#"> <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
    </li>

   
      <li>
        <div class="iocn-link">
          <a href="#"> <i class='bx bx-collection' ></i>
          <span class="link_name">Applicant menu</span></a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          
          <li><a class="link_name" href="#">Apply</a></li>
          <li><a href="index.php">Apply  </a></li>
          <li><a href="find_data.php">Update application  </a></li>
          <!--<li><a href="announce1.php">Summary result  </a></li>-->          
        </ul>
      </li>
    <li>
        <div class="iocn-link">
          <a href="#"> <i class='bx bx-collection' ></i>
          <span class="link_name">User account</span></a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          
          <li><a class="link_name" href="#">Users</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="logout.php">Logout</a></li>

                     
        </ul>
      </li>


      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">Help</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="files/Directive of staff Bank Loan Guideline.pdf" target="_blank">Guideline</a></li>
          <li><a class="link_name" href="files/steps to fill form.pdf"  target="_blank">Supporting manual</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
   <!--   
      <li>
    <div class="profile-details">
      <div class="profile-content"> 
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Temesgen M.</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
-->
</ul>
  </div>
 <section class="home-section">
<!--     <div class="home-content">
      <i class='bx bx-menu' ></i>-->
      <!--<span class="text">Drop Down Sidebar</span>-->
      <?php //include_once("../common/menu123.php");?>
      <?php //include_once("../common/after_login.php");?>

<div id="notify1">
  <!--Notifications comes here-->
</div>
