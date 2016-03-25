<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Galindo|Rambla|Sarala' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsive.css">
    </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <h1>The Pop List</h1>
        <h2>Your One Stop Guide to All Things Pops</h2>
      </a>
      <nav>
        <ul>
          <li><a href="index.php" class="selected">Home</a></li>
          <li><a href="sign-in.php">Sign In/Register</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <form id="search">
        <input type="text" placeholder="Search..." required>
        <input type="button" value="Search">
      </form>
    </header>
    <div id="wrapper">