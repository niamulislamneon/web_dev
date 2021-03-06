<?php session_start(); ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="assets/images/mist_logo.png"
          height="20"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="photo_gallery.php">Photo Gallery</a>
        </li>
        <?php
            if(isset($_SESSION['name'])){
                echo '<li class="nav-item">
                    <a class="nav-link" href="#">' . $_SESSION['name'] . '</a>
                </li>';
            }else{
                echo '<li class="nav-item">
                    <a class="nav-link" href="index.php">Login</a>
                </li>';
            }
        ?>
        
        <?php
            if(isset($_SESSION['name'])){
                echo '<li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                ';
            }
        ?>
        
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->