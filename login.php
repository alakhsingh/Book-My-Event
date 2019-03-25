
<!DOCTYPE html>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>BookMyEvent</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="homepage is-preload">
    <div id="page-wrapper">
      <header id="header">
        <div class="logo container">
          <div>
            <h1>Book My Event</h1>
          </div>
        </div>
      </header>

      <!-- Nav -->
      <nav id="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>
            <a href="#">Event</a>
            <ul>
              <li><a href="#">Search Events</a></li>
              <li>
                <a href="#">Create Events</a>
                <ul>
                  <li><a href="#">Host University Event</a></li>
                  <li><a href="#">Organize Workshops</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Current Events near you</a></li>
          <li class="current"><a href="login.php">Login / Signup</a></li>
        </ul>
      </nav>

      <!-- Main -->
      <section id="main_deleted" style="height:auto;">
        <div class="container">
          <div class="row" style="justify-content:center;">
            <form id="contactform" style="width:70%" method="post" action="log.php">
              <input
                style="margin-bottom: 3%;"
                id="username"
                name="username"
                placeholder="username"
                required=""
                tabindex="2"
                type="text"
              />
              <input
                style="margin-bottom: 3%;"
                type="password"
                id="password"
                name="password"
                required=""
                placeholder="password"
              />
              <center><button type="submit" name="submit">Login</button></center>
            </form>
          </div>
          <center style="margin-top:3em;">
            <p>Sign Up <a href="signup.php">Here!</a></p>
          </center>
        </div>
      </section>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
