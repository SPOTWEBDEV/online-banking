<?php  include('./server/connection.php')   ?>

<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="./favicon.png">
    <title>Ruxa - Vuejs Banking &amp; Finance Template</title>
    <link href="./css/chunk-vendors.60846cb7.css" rel="stylesheet">
    <link href="./css/app.3f1ce354.css" rel="stylesheet">
    <style type="text/css" id="operaUserStyle"></style>
        <style>
        .breadcrumb-wrap {
        height: auto !important;
        }

    </style>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div id="app" data-v-app=""><!---->
        <div class="page-wrapper">
            <?php include 'include/nav.php'; ?>
            <div class="content-wrapper">
                <div class="breadcrumb-wrap bg-spring"><img
                        src="data:image/png;base64,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"
                        alt="Image" class="br-shape-one xs-none"><img
                        src="data:image/png;base64,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"
                        alt="Image" class="br-shape-two xs-none"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFcAAAASCAYAAAAuXUKzAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQASURBVHgBtVhbVhpBEK1uHvGYfOgOyA7iCiIrCH5EQhSBFYgrAFcgrABQDCHJOeIKNCuQJZgd+JV4ZJxOVfX0MCAzzMv7Ic1MY3Xdul1d1QJWYXSxC1K0QKgPoMQWPrnF7x34fHANr4Febwve5Y9B2U1tT0xBQB/2D7rwWhid10HKGo520c8H/JzAs3UKlcY9pATx4snPyxbYqr1ythRtJPgU0sSPSwygfYVLKegVoaM6oAh1D7ZVTNNhDuRmDu0hqcv2FDyAkA0of51ACpAL37zE2uoU/s62oXwowLYbvAh6R3PSwqhXQEM3mlg1YXv71W0QYoeJpecye8OEpAWXWAqcKrI9e/YelOqi1NAOBpp2bgqYK1enghseE5mVo/7CTFIYEaGjXEfSB5AErKDsHRNIgaxU2wvvr/D9U47Wg3YxLZUPi5AUrnh8dsToos3pkBSsZjtJd4xWLjkqocdjdnSJWML+wRSj2+Cxgk5iNW3mWkysQuKWiSXsNR4gPytqBaPSvg+bkAQkDiKWd6BPqqF1GAXLXA8SQpNLhwkIf0cNykcT1/jb7BnEBacDaOp8N2v4ziOCbTDvW4kCynkdYYvgQ+uN1XYDmjA9SHbU5NkgR73G9SFQj21cZtr8+QzdtVuvUr0FSgsU0I1sPPVSZQCiwKR9OewEzqWAgjrR64RE6pWuo0r1Q+UYMk6k8K9F9MONVUslEDoatEu8sJ2gC3EcS73uOrHaCQPaoRRQEIVYAqI1op8SF/yJHygrfIm1YXWc2nDX2eLhYYIZ1lGCDno89XpVG+UQprOHEEdAdFCL3J3kHKTgJNLJ6FUvZOuhf+dVrT37DVFgnI2q3qiqNeB0FCP3zoM5kZyD1uWhVTDqJWfDqtdNQXAducyJk3vjqtYgqnq56nLmKhhIiAujXi5b8usrB69qlRU9mISo6o2rWgMuSR31jr+V1s53qy46v6q38ckluLlXldYap06LoEQ3dnFO6rXtAQd0Mx98knMnKQqxVWtgSkFl9wJ36ELVpc+vZOSSet3GIsD4eHgWuhRah43nphtQv1Z8fF6at/FWss5O595JYGNBfhvxcBOmxZOMXIK3sSADXoJp6zKx2DCYljMpdDra4/Gqu45fwxqmDU1C1IPaD3mrMU8Pl1cLPrrEihdNmIC0MB728W/N+bdIuP0HQ1fjuwhWmixyC50W9JWhoyQKHAwwx34Ec9u16r4ikT0PiWRPUB3MKDn3LVO8eCpCg5oQjfTI5QU4Fx9eUDSp80vz2tBg+bqSwN0jpirdCKQLVixWPPoeeA7auf+wc/UQy0uBtMERzuAlSWYLMhjNNNXqa5PqUFlAud7DozVddjJ9ex4fH58mfvb+Azj5H6Z2CKgTAAAAAElFTkSuQmCC"
                        alt="Image" class="br-shape-three moveHorizontal sm-none"><img
                        src="data:image/png;base64,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"
                        alt="Image" class="br-shape-four moveVertical sm-none">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 col-sm-8">
                                <div class="breadcrumb-title">
                                    <h2>Contact Us</h2>
                                    <ul class="breadcrumb-menu list-style">
                                        <li><a href="./" class="">Home </a></li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                                <div class="breadcrumb-img"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAlCAYAAADMdYB5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANPSURBVHgBxZg9TNtAFMf/sUMAl1AkIiRQSVtVonRAqlhYurBUqliQEJE6MTAgZuYuZejSpR2aia1TEIiFpQtzpYoFiaapkIAlKgVBGxpC4JK+5zvHBvLhODY86eWS+/D97r3nu3cJoZGkUjrCZz04jxhoD3VRjY5L0V5pD+vn9FlE+SIHvXiKydkcmpRQzZa1pSjKRh8uSlFzYtdSLkLvPIYQB0gkim5G3IRIpSL0gEHopR60JgJ6xy9MTWUbdbwKsbrai8uzQTS18kZClkHkRz2r2BArK/0QhYErrfk8sLUFpNNUpuXvw0O73TCAWAyIx4GRYWB4BOiPVZtH4Pg0g7m5fG0IDr5S6Rk0FXA88foXOXm+6rjaMkww4y9Ix2+25QoZzN4MXNsSHAvZvSEkl9rNyS3hFY6OAU/ictUxx0oZcH8f2CFNE/jXTbuN+y0syHG2VLWIMyb6SNkdumnmiQnSl9LkboVdxW5bXrbdxs+YmXF0MmNkm2JEWDVWAD4k7SfVSI+QTOoYHQmjrQ1NCQM/ppVPvJKP3t4Gfu6Qhb6RRZ8DUV5QSCd7aBSDf61hPOkDUrbxJeke6S66uzMomZuQd5meBD59kG5hly0uAlllHb3UZ7rfAWHtB6ekshe/TprWOggDvH0jS3YPg1iBLsSAEyJDeq5ghmC5yE+Q9+9skI9JWc+bIb+VCqLoAIkGAsKxwhbhcpPeoPV1EwPhQq8FgWsgBoKyyPy8/L68Jt0SajOcELcDMjYqNzMGYGtciOh1iNsBmZ6WJe/I+bMIx4VWpVuwIOYZo6yxscE1VSGCB2G3sKhtXqvTNTgQ63DjTawBRHAgVgrALkkkGkIEBxKvnK6GG4hgQO5XTmfdLYT/IIY3CH9B7IxNNAvhH8gfO7nyAuEG5DuB1E9ObUsUvUI0AhHKItVB+NZm57H5ViC8g3xOHVkA8BgTrYGIQpYuWdZd1kz//YBwDyK0E7ye5RQyqsYd+AnhDkTXd+kXZ1Oc5ObUmDq3cu8SUQBs8rwCE462p6rMKBA/L74V4QlPIBPnTtJu0mPSMukj0nvgu41yRVAQtUA6IO837K5d2NYJDKIaSJeq5wvWP2fHICGug4RJ+Q+T37gj4UCsebP+D8QIjaZWLTYPAAAAAElFTkSuQmCC"
                                        alt="Image" class="br-shape-five animationFramesTwo"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAhCAYAAABX5MJvAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHWSURBVHgBrdZNasJAFAfwN1OrCM3KQg+SA7QHSKBQcNeVew/j3gsIhUJyAD2A5yhdhC4siKkknZdkjImjmfcmfxgGGZ35Zb6iAG4WixE8PQYg8gnkIgExiGA6TYERAZycA3QcIBKoacxAtoO7LCrq4vMxhNVqCMTQEG3AbxrD2/tXUTtA7JfDBJjNdqf25dKDh6Fqlx51aewQXQBHSDfCFuAAEQ4ATxVfFTwhiSpbVXYciHAABFWtg20xMCDSEYAz8FHVTRh+3/LUCEcAPvlBFew8hHJpyDMiegDosCGiJ4ATRPQIYENEzwAWRHZcRD4DgMFpjqA+Nf6pxXBq5Ol1nKUbw02oX9VrAuAcsm71U0MGVZsaXypRUny4Hz/D59JrdZRU9QuUU0zJqPrdeT9lcJz8rmxT46uZGEUFJMs9OI6DFkRfxfgkIQGCgADqPbFtAHAcHA/H/f6Jy9OBN1l+CNVmmYAUaqr2Mbxe3Zy41ikBUG9KAwDm80N9T/QDIQOwqXljukFYgEsEH8IGmBF0yBrKU8ACXEfQIDoswG2EHcQH0z8rAqAb0Q25DBFgh6BAGAB7hA2ECaAhbkEcAHSECfK33xQvPyaAh2hDdJgAPqINcQBg/gGaxXxDIv8iJQAAAABJRU5ErkJggg=="
                                        alt="Image" class="br-shape-six bounce"><img
                                        src="./img/breadcrumb-1.72569e19.png" alt="Image"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-wrap pt-100">
                    <div class="container">
                        <div class="row justify-content-center pb-75">
                            <div class="col-lg-4 col-md-6">
                                <div class="contact-item"><span class="contact-icon"><i class="flaticon-map"></i></span>
                                    <div class="contact-info">
                                        <h3>Our Location</h3>
                                        <p><?php   echo   $siteaddress  ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="contact-item"><span class="contact-icon"><i
                                            class="flaticon-email-2"></i></span>
                                    <div class="contact-info">
                                        <h3>Email Us</h3><a href="mailto:<?php   echo    $siteemail  ?>"> <?php   echo   $siteemail  ?></a><a
                                            href="mailto:support@ruxa.com"><?php   echo   $sitephone  ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="contact-item"><span class="contact-icon"><i
                                            class="flaticon-phone-call"></i></span>
                                    <div class="contact-info">
                                        <h3>Call us</h3><a href="tel:<?php   echo   $$sitephone ?>"><?php   echo   $sitephone ?></a><a
                                            href="tel:<?php   echo   $sitephone ?>"><?php   echo   $sitephone ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comp-map pb-100"><iframe
                                src="https:  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193571.43834027767!2d-74.11808602740372!3d40.70582544158339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xefe4a94f4d8b0bdf!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sus!4v1691095693210!5m2!1sen!2sus" "></iframe>
                        </div>
                    </div>
                    <div class="contact-form-area ptb-100 bg-albastor"><img
                            src="data:image/png;base64,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"
                            alt="Image" class="contact-shape-one animationFramesTwo"><img
                            src="data:image/png;base64,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"
                            alt="Image" class="contact-shape-two bounce">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                                    <div class="content-title style1 text-center mb-40"><span>Send Us A Message</span>
                                        <h2>Do You have Any Questions?</h2>
                                    </div>
                                    <div class="contact-form">
                                        <form class="form-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><input type="text" name="name"
                                                            placeholder="Your Name*" id="name" required=""
                                                            data-error="Please enter your name"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><input type="email" name="email" id="email"
                                                            required="" placeholder="Your Email*"
                                                            data-error="Please enter your email*"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><input type="number" name="phone" id="phone"
                                                            required="" placeholder="Phone Number"
                                                            data-error="Please enter your phone number"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><input type="text" name="msg_subject"
                                                            placeholder="Subject" id="msg_subject" required=""
                                                            data-error="Please enter your subject"></div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group v1"><textarea name="message" id="message"
                                                            placeholder="Your Messages.." cols="30" rows="10"
                                                            required=""
                                                            data-error="Please enter your message"></textarea></div>
                                                </div>
                                                <div class="col-md-12 text-center"><button type="submit"
                                                        class="btn style1 w-100 d-block">Send Message </button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'include/footer.php'; ?>
        </div>
        <div class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></div>
    </div>
</body>

</html>