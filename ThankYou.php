<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Thankyou | BULKDATABASE PROVIDER</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- required meta tags essential for seo and link sharing -->

    <!-- Enter a proper description for the page in the meta description tag -->
    <meta name="description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

    <!-- Enter Page title -->
    <meta property="og:title" content="ENTER_PAGE_TITLE" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="ENTER_PAGE_URL" />

    <!-- Enter page description -->
    <meta property="og:description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website" />

    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <link rel="icon" href="ENTER_FAVICON_LOCATION">

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>
        /* Example CSS */

        /*.link {
            position: relative;
            display: inline-block;
        }

        .link .tip {
            opacity: 1;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            position: absolute;
            z-index: 1000;
            top: -5px;
            right: 105%;
            transition: 0.5s ease;
            overflow: hidden;
            margin-right: 20px;
        }*/
        #buttong:hover {
            background-color: #24436e;
        } 
        #buttong {
            background-color:#2f507e;
        }
        #buttong-mob:hover {
            background-color: #24436e;
        } 
        #buttong-mob {
            background-color:#2f507e;
        }
    </style>
</head>

<body>

    <div class="d-none d-lg-block">

        <!-- desktop header start -->
        <div id="header-desktop"></div>
        <!-- desktop header end -->
        <!-- second bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div style="width:100%;" class="hello">
                <!-- <h1 style="color:#2b2b2b; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px;"
                    class="font-Lato-Regular">
                    CONTACT US
                </h1> -->
                <div style="width:50%;margin-top: 7%; margin-left: auto; margin-right: auto;">
                    <h3 class="font-Lato-Regular" style="color:#2b2b2b; margin:0px 0px 20.8px; text-align:center;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight: 500;">
                        Thankyou for your submission. Our team will get back to you within 24 Hours.
                    </h3>
                </div>
            </div>
        </div>
        <!-- second bar end -->


        <!-- desktop footer start -->
        <div id="footer-desktop"></div>
        <!-- deskop footer end -->
    </div>

    <!-- mobile view -->
    <div class="d-lg-none position-relative">
        <!-- mobile view header start -->
        <div id="header-mob"></div>
        <!-- mobile view header end -->
        <!-- second bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div style="width:100%;" class="hello">
                <!-- <h1 style="color:#2b2b2b; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px;"
                    class="font-Lato-Regular">
                    CONTACT US
                </h1> -->
                <div style="width:100%;margin-top: 7%; margin-left: auto; margin-right: auto;">
                    <h4 class="font-Lato-Regular" style="color:#2b2b2b; margin:0px 0px 20.8px; text-align:center;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight: 500;">
                        Thankyou for your submission. Our team will get back to you within 24 Hours.
                    </h4>
                </div>
            </div>
        </div>

        <!-- mobile view footer -->
        <div id="footer-mob"></div>
        <!-- mobile view footer end -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom_mobile_header.js"></script>
    <script>

        // Add custom javascript and jquery here
        // including header footer
        $("#header-desktop").load('template/header.php');
        $("#footer-desktop").load('template/footer.php');
        $("#footer-mob").load('template/footerMob.php');
        $("#header-mob").load('template/headerMob.php');
    </script>
</body>

</html>