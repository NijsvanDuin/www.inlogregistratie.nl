<?php
  if (isset($_GET["content"])) {
    	$active = $_GET["content"];
  } else {
      $active = "";
  }
?>


<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Groenten Sap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "home" || $active == "") { echo "active"; } ?>" aria-current="page" href="./index.php?content=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "sappen") { echo "active"; } ?>" href="./index.php?content=sappen">Sappen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "smoothies") { echo "active"; } ?>" href="./index.php?content=smoothies">Smoothies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if ($active == "sleep" || $active == "nutrition" || $active == "exercise") { echo "active"; } ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Heath education
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?php if ($active == "sleep") { echo "active"; } ?>" href="./index.php?content=sleep">sleep</a></li>
            <li><a class="dropdown-item <?php if ($active == "nutrition") { echo "active"; } ?>" href="./index.php?content=nutrition">nutrition</a></li>
            <li><a class="dropdown-item <?php if ($active == "exercise") { echo "active"; } ?>" href="./index.php?content=exercise">exercise</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <a class="nav-link <?php if ($active == "register" || $active == "") { echo "active"; } ?>" aria-current="page" href="./index.php?content=register">Registeer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($active == "login") { echo "active"; } ?>" href="./index.php?content=login">Inloggen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>