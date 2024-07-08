  <?php
  // Get the current file name, e.g., index.php, about.php, etc.
  $current_page = basename($_SERVER['PHP_SELF']);
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top pt-0 pb-0 bg-white shadow">
    <div id="header-div" class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <picture>
          <source media="(min-width: 1200px)" srcset="assets/img/mcl-logo-lg.png">
          <source media="(max-width: 1200px)" srcset="assets/img/mcl-logo-sm.png">
          <img src="assets/img/mcl-logo-sm.png" alt="web logo small size">
        </picture>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
          <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>
          <li><a href="works.php" class="<?= $current_page == 'works.php' ? 'active' : '' ?>">Works & Plans</a></li>
          <li><a href="news_mainpage.html">News</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="service_educational.php">Educational Assistance</a></li>
              <li class="dropdown"><a href="#"><span>Assistance to Individuals In Crisis Situation (AICS)</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="service_hospitalbill.php">Medical Assistance (Hospital Bill)</a></li>
                  <li><a href="service_laboratory.php">Medical Assistance (Laboratory)</a></li>
                  <li><a href="service_chemo.php">Medical Assistance (Dialysis)</a></li>
                  <li><a href="service_burial.php">Burial Assitance</a></li>
                  <li><a href="service_medicine.php">Medical Assistance (Medicine)</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="faq.php" class="<?= $current_page == 'faq.php' ? 'active' : '' ?>">FAQ</a></li>
          <li><a href="event-main.php" class="<?= $current_page == 'event-main.php' ? 'active' : '' ?>">Event</a></li>
          <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
          
          <!----------------------------------->
          <li id="notif-text" class="dropdown">
            <a href="#">
              <span class="d-flex">
                <span>Notifications</span>
                <span class="icon-button__badge_notif_text ms-1">2</span>
              </span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <!----------------------->
            <ul>
              <li class="d-flex align-items-center justify-content-between" style="padding: 0px 20px;">
                <h4 id="first-h4" class="">
                  Notifications
                </h4>
                <h4 class="d-flex align-items-center">
                  <a href="profile.html">
                    View all
                    <i class="fa fa-solid fa-circle-arrow-right font-awesome-circle-arrow-right ps-1"
                      style="font-size: 1em;"></i>
                  </a>
                </h4>
              </li>

              <hr>

              <div id="notif-body" style="max-height: 291px; overflow: auto;">
                <li>
                  <a href="profile.html" class="rounded">
                    <div>
                      <p class="text-wrap">Your applications for Medical Assistance (Dialysis) was
                        approved, visit the main office to claim the assistance, please bring a
                        valid ID. - <span>9hr</span></p>
                      <p class="text-wrap">Medical Assistance (Dialysis)</p>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="profile.html" class="rounded">
                    <div>
                      <p class="text-wrap">For approval - <span>1d</span></p>
                      <p class="text-wrap">Medical Assistance (Dialysis)</p>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="profile.html" class="rounded">
                    <div>
                      <p class="text-wrap">Please re-submit a clear valid ID. Thank you. - <span>1w</span></p>
                      <p class="text-wrap">Medical Assistance (Dialysis)</p>
                    </div>
                  </a>
                </li>

              </div>

              <hr>
              <li class="">
                <h4 class="d-flex align-items-center mt-2 m-0">
                  <a href="profile.html">View all
                    <i class="fa fa-solid fa-circle-arrow-right font-awesome-circle-arrow-right ps-1"
                      style="font-size: 1em;"></i>
                  </a>
                </h4>
              </li>


            </ul>
            <!---------------------------->

          </li>

          <li id="account-text" class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="user-setting.html">Settings</a></li>
              <li><a href="help-center.html">Help Center</a></li>
              <li><a href="#">Log Out</a></li>
            </ul>
          </li>
          <!----------------------------------->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      <!-------------------------------------------------->
      <!-- Third column: notification and account icons -->
      <div id="icon-div" class="d-flex align-items-center">

        <!---------------------------->
        <!-- Notifications New -->
        <div id="notif-icon" class="dropdown me-2">

          <button type="button" class="icon-button" data-bs-toggle="dropdown" aria-expanded="false">
            <i id="myIcon" class="fas fa-bell fa-lg mx-2"></i>
            <span class="icon-button__badge">2</span>
          </button>

          <!-------------------------->
          <ul class="dropdown-menu dropdown-menu-end mt-2 shadow" aria-labelledby="navbarDropdownMenuAvatar">

            <li class="d-flex align-items-center justify-content-between">
              <h4 id="first-h4-icon-div">
                Notifications
              </h4>
              <h4 class="d-flex align-items-center">
                <a href="profile.html">View all
                  <i class="fa fa-solid fa-circle-arrow-right font-awesome-circle-arrow-right fa-1x ps-1"></i>
                </a>
              </h4>
            </li>
            <hr>

            <div id="notif-body">

              <li class="rounded">
                <a href="profile.html">
                  <div>
                    <p class="text-wrap">Your application for Medical Assistance (Dialysis) was
                      approved, visit the main office to claim the assistance, please bring a
                      valid ID. - <span>9hr</span></p>
                    <p class="text-wrap">Medical Assistance (Dialysis)</p>
                  </div>
                </a>
              </li>

              <li class="rounded">
                <a href="profile.html">
                  <div>
                    <p class="text-wrap">For approval - <span>1d</span></p>
                    <p class="text-wrap">Medical Assistance (Dialysis)</p>
                  </div>
                </a>
              </li>

              <li class="rounded">
                <a href="profile.html">
                  <div>
                    <p class="text-wrap">Please re-submit a clear valid ID. Thank you. - <span>1w</span></p>
                    <p class="text-wrap">Medical Assistance (Dialysis)</p>
                  </div>
                </a>
              </li>

            </div>

            <hr>
            <li class="">
              <h4 class="d-flex align-items-center mt-2 m-0">
                <a href="profile.html">View all
                  <i class="fa fa-solid fa-circle-arrow-right font-awesome-circle-arrow-right fa-1x ps-1"></i>
                </a>
              </h4>
            </li>

          </ul>
          <!-------------------------->
        </div>
        <!---------------------------->




        <!---------------------------->
        <!-- Avatar Old-->
        <div id="user-icon" class="dropdown">

          <a href="#" class="nav-link d-flex align-items-center hidden-arrow" id="navbarDropdownMenuAvatar"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-circle-user" aria-hidden="true" style="font-size: 39.2px; padding: 8px;"></i>
          </a>

          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdownMenuAvatar">
            <li>
              <a class="dropdown-item" href="profile.html">
                <i class="fas fa-sliders-h fa-fw me-2"></i>
                Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="user-setting.html">
                <i class="fas fa-cog fa-fw me-2"></i>
                Settings
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="help-center.html">
                <i class="fas fa-question-circle fa-fw me-2"></i>
                Help Center
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="signin.html">
                <i class="fas fa-sign-out-alt fa-fw me-2"></i>
                Log Out
              </a>
            </li>
          </ul>

        </div>
        <!---------------------------->

      </div>
      <!-------------------------------------------------->

    </div>
  </header>
  <!-- End Header -->