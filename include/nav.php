<?php

?>
           
           
           
           <div class="header-wrap style1">
                <div class="header-top"><button type="button" class="close-sidebar"><i
                            class="ri-close-fill"></i></button>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-9">
                                <div class="header-top-left">
                                    <ul class="contact-info list-style">
                                        <li><i class="flaticon-call"></i><a href="tel:02459271449"><?php   echo   $sitephone  ?></a>
                                        </li>
                                        <li><i class="flaticon-email-1"></i><a
                                                href="mailto:<?php   echo   $supportemail  ?>"><?php   echo   $siteemail  ?></a></li>
                                        <li><i class="flaticon-pin"></i>
                                            <p><?php   echo   $siteaddress  ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="header-top-right">
                                    <ul class="header-top-menu list-style">
                                        <li><a href="" class="">Support</a></li>
                                        <li><a href="./contact" class="">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="header-bottom">
                    <div class="container">
                        
                        <nav class="navbar navbar-expand-md navbar-light"><a aria-current="page" href="./"
                                class="router-link-active active navbar-brand">
                                <img class="logo-light"
                                    src="<?php echo $domain . 'img/logo.png' ?>"
                                    alt="logo"><img class="logo-dark"
                                    src="<?php echo $domain . 'img/logo.png' ?>"
                                    alt="logo"></a>
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">

                                        <a href="index.php" class="nav-link"> Home </a>

                                    </li>
                                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                                    <li class="nav-item"><a href="services.php" class="nav-link"> Services </a></li>
                                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                                </ul>
                                <div class="others-options d-flex align-items-cente"><button class="searchbtn"
                                        type="button" aria-pressed="false"><i class="flaticon-search"></i></button>
                                    <div class="searchbox"></div>
                                    <div class="header-btn hide-on-mobile"><a href="./auth/" class="btn style1">Register Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-bar-wrap">
                                <div class="mobile-sidebar" aria-pressed="false"><i class="ri-menu-4-line"></i></div>
                                <button class="searchbtn" type="button" aria-pressed="false"><i
                                        class="flaticon-search"></i></button>
                                <div class="navbar-toggler mobile-menu xl-none" aria-pressed="false"><a
                                        href="javascript:void(0);"><i class="ri-menu-line"></i><i
                                            class="ri-close-line"></i></a></div>
                            </div>
                        </nav>
                    </div>
                    <div class="search-area">
                        <div class="container">
                            <form>
                                <div class="form-group"><input type="search" placeholder="Search Here" autofocus="">
                                </div>
                            </form><button type="button" class="close-searchbox"><i class="ri-close-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Sidebar menu toggle (the one from the side)
    const sidebarTrigger = document.querySelector('.mobile-sidebar');
    const headerTop = document.querySelector('.header-top');
    const closeSidebar = document.querySelector('.close-sidebar');

    if (sidebarTrigger && headerTop && closeSidebar) {
      sidebarTrigger.addEventListener('click', function () {
        headerTop.classList.add('open');
      });

      closeSidebar.addEventListener('click', function () {
        headerTop.classList.remove('open');
      });
    }

    // Main mobile nav dropdown toggle
    const mobileToggler = document.querySelector('.navbar-toggler.mobile-menu');
    const collapseMenu = document.querySelector('.collapse.navbar-collapse');

    if (mobileToggler && collapseMenu) {
      mobileToggler.addEventListener('click', function () {
        collapseMenu.classList.toggle('show');
      });
    }
  });
</script>

<style>
    .collapse.navbar-collapse {
        display: none;
    }

    .collapse.navbar-collapse.show {
        display: block;
    }

    @media screen and (max-width: 767px) {
  .hide-on-mobile {
    display: none !important;
  }
}


</style>


