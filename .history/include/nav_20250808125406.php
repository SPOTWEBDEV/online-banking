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
                                    src=""
                                    alt="logo"><img class="logo-dark"
                                    src="data:image/png;base64,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"
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


