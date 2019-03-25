<!DOCTYPE html>
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
            <form id="contactform" style="width:70%" method=POST action="sign.php">
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
              <input
                style="margin-bottom: 3%;"
                type="password"
                id="confirm"
                name="confirm"
                required=""
                placeholder="confirm password"
              />
              <input
                style="margin-bottom: 3%;"
                type="email"
                id="email"
                name="email"
                required=""
                placeholder="email"
              />
              <center><button type="submit" name="submit">Sign UP</button></center>
            </form>
          </div>
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
