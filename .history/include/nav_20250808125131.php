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
                                class="router-link-active active navbar-brand"><img class="logo-light"
                                    src="data:image/png;base64,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"
                                    alt="logo"><img class="logo-dark"
                                    src="
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


