 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpeg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.11.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <h1 class="text-light"><a href="index.php"><span>अरुण विकास सेवा संस्था मर्या, चंदूर</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a  href="index.php">मुख्यपृष्ठ</a></li>
        <li><a class=" active" href="about.php">संस्थेची माहिती</a></li>
        <li><a href="services.php">संस्थेचे विभाग </a></li>
        <li><a href="portfolio.php"> योजना</a></li>
        <li class="dropdown"><a href="#"><span>सदस्य </span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="sanchalak.php">संचालक मंडळ</a></li>
            <li><a href="sevak.php">सेवक वर्ग</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>फॉर्म केंद्र</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="accountopen.pdf">खाते उघडण्यासाठी लागणारी कागदपत्रे </a></li>
              <li><a href="loan.pdf">संभासदांसाठी मिळणारी अल्पिुदत कर्जे </a></li>
              <li><a href="sabhasad.pdf">सभासद होण्यासाठी लागणारी कागदपत्र</a></li>
            </ul>
        <li><a href="team.php"> गाव माहिती</a></li>
        
        <li><a href="contact.php">संपर्क </a></li>
        <li><a href="log1.php">Admin Login</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Admin Login</h2>
          <ol>
            <li><a href="index.php">मुख्यपृष्ठ</a></li>
            <li>Admin Login</li>
          </ol>
        </div>
          
      </div>	
<center><font size="6" color="#00CCFF"><em>Login Form</em></font></center>

<form action="log.php" method="POST">
<center>
<table height="400" width="400" cellpadding="30">
	<tr>
	<td>
	<font size="4" color=#00CCFF>Username:</font>
	</td>
	<td>
	 <input type="text" name="user">
	</td>
	</tr>
	
	<tr>
	<td>
	<font size="4" color="#00CCFF">E-mail:</font>
	</td>
	<td>
	<input type="email" name="mail">
	</td>
	</tr>

	<tr>
	<td>
	<font size="4" color="#00CCFF">Password:</font>
	</td>
	<td>
	<input type="password" name="pass">
	</td>
	</tr>
	
	<tr>
	<td></td>
	<td> 
	<font size="4" color="#00CCFF"><input type="submit" value="Login"></font>
	</td>
	</tr>

	</table>
</center>
</form>



