<?php

// Merchant key here as provided by Payu

$MERCHANT_KEY = "BIu4aGaX";

// Merchant product info.

// Populate name, merchantId, description, value, commission parameters as per your code logic; in case of multiple splits pass multiple json objects in paymentParts

$firstSplitArr = [
    "name" => "splitID1",
    "value" => "6",
    "merchantId" => "396446",
    "description" => "test description",
    "commission" => "2",
];

$paymentPartsArr = [$firstSplitArr];

$finalInputArr = ["paymentParts" => $paymentPartsArr];

$Prod_info = json_encode($finalInputArr);

// Merchant Salt as provided by Payu

$SALT = "cmhXaoxMeM";

// End point - change to https://secure.payu.in for LIVE mode

$PAYU_BASE_URL = "https://secure.payu.in";

$action = "";

$posted = [];

if (!empty($_POST)) {
    //print_r($_POST);

    foreach ($_POST as $key => $value) {
        $posted[$key] = $value;
    }
}

$formError = 0;

if (empty($posted["txnid"])) {
    // Generate random transaction id

    $txnid = substr(hash("sha256", mt_rand() . microtime()), 0, 20);
} else {
    $txnid = $posted["txnid"];
}

$hash = "";

// Hash Sequence

$hashSequence =
    "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

if (empty($posted["hash"]) && sizeof($posted) > 0) {
    if (
        empty($posted["key"]) ||
        empty($posted["txnid"]) ||
        empty($posted["amount"]) ||
        empty($posted["firstname"]) ||
        empty($posted["email"]) ||
        empty($posted["phone"]) ||
        empty($posted["productinfo"]) ||
        empty($posted["surl"]) ||
        empty($posted["furl"]) ||
        empty($posted["service_provider"])
    ) {
        $formError = 1;
    } else {
        //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));

        $hashVarsSeq = explode("|", $hashSequence);

        $hash_string = "";

        foreach ($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : "";

            $hash_string .= "|";
        }

        $hash_string .= $SALT;

        $hash = strtolower(hash("sha512", $hash_string));

        $action = $PAYU_BASE_URL . "/_payment";
    }
} elseif (!empty($posted["hash"])) {
    $hash = $posted["hash"];

    $action = $PAYU_BASE_URL . "/_payment";
}
?>



<!DOCTYPE html>

<html lang="en">



<head>

    <script>

        var hash = '<?php echo $hash; ?>';



        function submitPayuForm() {

            if (hash == '') {

                return;

            }

            var donationForm = document.forms.donationForm;

            donationForm.submit();



        }

    </script>

    <script src="js/jquery.min.js"></script>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel=icon href="images/favicon.png" sizes=32x32 />

    

 <!-- Primary Meta Tags -->

<title>Multispeciality Hospitals in Amritsar | EMC Hospital</title>

<meta name="title" content="Multispeciality Hospitals in Amritsar | EMC Hospital">

<meta name="description" content="EMC hospital is a top multispecialty group of hospitals with best in class treatments for knee replacements, neuro, heart, diabetes, kidney, etc.">



<!-- Open Graph / Facebook -->

<meta property="og:type" content="website">

<meta property="og:url" content="https://emchospital.co.in/emc-green-avenue/">

<meta property="og:title" content="Multispeciality Hospitals in Amritsar | EMC Hospital">

<meta property="og:description" content="EMC hospital is a top multispecialty group of hospitals with best in class treatments for knee replacements, neuro, heart, diabetes, kidney, etc.">

<meta property="og:image" content="">



<!-- Twitter -->

<meta property="twitter:card" content="summary_large_image">

<meta property="twitter:url" content="https://emchospital.co.in/emc-green-avenue/">

<meta property="twitter:title" content="Multispeciality Hospitals in Amritsar | EMC Hospital">

<meta property="twitter:description" content="EMC hospital is a top multispecialty group of hospitals with best in class treatments for knee replacements, neuro, heart, diabetes, kidney, etc.">

<meta property="twitter:image" content="">

  

 <link rel="canonical" href="https://emchospital.co.in/emc-green-avenue/"/>

  

  <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-PZMZK9K');</script>

<!-- End Google Tag Manager -->







    <link href="css/customnew.css" rel="stylesheet" type="text/css">

    <link href="css/app-index.css" rel="stylesheet" type="text/css">

    <link href="css/mystylehomeview.css" rel="stylesheet" type="text/css">

    <link href="css/home.css" rel="stylesheet" type="text/css">

    <link href="css/new-speciality.css" rel="stylesheet" type="text/css">

    <link href="css/specility-listing.css" rel="stylesheet" type="text/css">

    <link href="css/blog-page.css" rel="stylesheet" type="text/css">

    <link href="css/main-custom.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/all.css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/emc.css" rel="stylesheet">

    <link rel="stylesheet" href="css/heroslider.css">
    <link rel="stylesheet" href="css/dr-managementslider.css">
    <link rel="stylesheet" href="app-index.css">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="./js/fancybox/jquery.fancybox.css">

    <link rel="stylesheet" href="css/emcfamily.css">





      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->



    <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">



    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



    <style>

        @media (max-width:480px) {

            .dc-bringcarecontent .dc-btnarea .dc-btn {

                width: 100%;

            }



            .dc-bringcarecontent .dc-btnarea .dc-btn+.dc-btn {

                margin: 10px 0 0;

            }



            .section-doctor {

                background-color: #f8f9fa;

                padding: 29px 0;

            }



        }







        @media (max-width:992px) {

            .dc-bringimg-holder {

                padding: 30px 0 0;

            }

        }



        @media (max-width:1280px) {

            .dc-usernav {

                right: 0;

                left: auto;

            }



            .dc-doccareimg figcaption {

                right: 0;

            }



            .dc-appbgimg figure img {

                margin: 0;

                height: auto;

                max-width: 100%;

            }

        }



        .our-spe {

            height: 100%;

            width: 0;

            position: fixed;

            z-index: 1;

            top: 0;

            right: 0;

            background-color: #fff;

            overflow-x: hidden;

            transition: 0.5s;

            padding-top: 30px;

        }



        .list-of-center-ex a {

            transition: 0.3s;

            text-align: justify;

            color: #0479dc;

            display: block;

            padding: 5px 0px 5px 25px;

            font-size: 15px;



        }



        .list-of-center-ex a:hover {

            transition: 0s;

            color: #6c86b2;

        }



        .our-spe .closebtn {

            position: absolute;

            top: 20px;

            right: 33px;

            font-size: 35px;

            text-align: right;

            color: #c5ccd2;

        }



        .our-center-ex {

            padding: 6px 8px 6px 16px;

            text-decoration: none;

            font-size: 18px;

            color: #114398;

            font-weight: 700;

            display: block;

            border: none;

            background: 0 0;

            width: 100%;

            text-align: left;

            cursor: pointer;

            outline: 0;

        }



        .ex-our-txt {

            font-size: 18px;

            color: #0C141D;

            cursor: pointer;

            font-family: Titillium Web;

            font-weight: 600;

            padding-left: 10px;



        }



        @media screen and (max-height: 450px) {

            .our-spe {

                padding-top: 15px;

            }



            .our-spe a {

                font-size: 18px;

            }

        }

    </style>

</head>

<body onload="submitPayuForm()">

<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZMZK9K"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->



    <div>





        <?php include "include/header.php"; ?>



        <a href="#" id="topb"  class="hidden-xs" style="display: none;"><span></span></a>



        <main class="imgsection" >
        <img src="images/web-baner-2-1.png" class="img-responsive images">
        <!-- <img src="images/webmobile-3.jpg" class="img-responsive destopdisplaynone banner-image-hided-in-top"> -->
        <!-- <img src="images/web-baner.jpg" class="img-responsive images"> -->
        <!-- <img src="images/webmobile.jpg" class="img-responsive destopdisplaynone banner-image-hided-in-top images"> -->
        <img src="images/web-baner-7.jpg" class="img-responsive images">
        <!-- <img src="images/mobile7.jpg" class="img-responsive destopdisplaynone banner-image-hided-in-top images"> -->
        <img src="images/web-baner-5.jpg" class="img-responsive images">
        <!-- <img src="images/mobile5.jpg" class="img-responsive destopdisplaynone banner-image-hided-in-top images"> -->
        <img src="images/web-baner-6.jpg" class="img-responsive images">
        <!-- <img src="images/mobile6.jpg" class="img-responsive destopdisplaynone banner-image-hided-in-top images"> -->
        <img src="images/web-baner-4.jpg" class="img-responsive images">
        <!-- <img src="images/mobile8.jpg" class="img-responsive destopdisplaynone banner-image-hided-in-top images"> -->


    </main>
    <section class="buttons">
        <button class="prev"><i class="fa-solid fa-arrow-left fa-2xl" style="color:#c4c4c4"></i></button>
        <button class="nxt"><i class="fa-solid fa-arrow-right fa-2xl" style="color:#c4c4c4"></i></button>
    </section>

    
        <div class="banner_button mobiledisplaynone">

            <div class="container">

                <div class="row bookpad20">

                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 bdr-left-right">

                        <a href="doctors.php">

                            <div class="bannerbtn-flex">

                                <div class="bannerbtn-flex-img">

                                    <svg width="56px" height="56px" viewBox="0 0 56 56" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                                        <!-- Generator: sketchtool 59 (101010) - https://sketch.com -->



                                        <desc>Created with sketchtool.</desc>

                                        <defs>

                                            <rect id="path-1" x="0" y="0" width="55.9999967" height="55.9999967" rx="6.39999962"></rect>

                                        </defs>

                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

                                            <g id="Home-page-New-2" transform="translate(-164.000000, -600.000000)">

                                                <g id="Group" transform="translate(0.000000, 581.000000)">

                                                    <g id="doctor" transform="translate(164.000000, 19.000000)">

                                                        <mask id="mask-2" fill="white">

                                                            <use xlink:href="#path-1"></use>

                                                        </mask>

                                                        <use id="Mask" fill="#36BD63" xlink:href="#path-1"></use>

                                                        <g id="Group-8" mask="url(#mask-2)">

                                                            <g transform="translate(11.199999, 3.113693)">

                                                                <path d="M0,52.8863033 L1.07807614,48.7536784 C1.90204443,45.5951334 4.27452793,43.071705 7.37631496,42.0547255 L26.7999984,35.6863044 L26.7999984,35.6863044 L44.7999973,43.6863044 L44.7999973,52.8863033" id="Path-5" stroke="none" fill="#4CDB7C" fill-rule="evenodd"></path>

                                                                <path d="M13.7145353,27.2863049 C9.88848249,21.6207585 8.3853903,16.9466828 9.20525876,13.2640777 C10.0251272,9.5814726 11.8015089,7.74017005 14.5344038,7.74017005 C15.9008513,3.20773299 19.3169699,0.658237145 24.7827597,0.0916825131 C32.9814443,-0.758149435 41.9999975,4.34084225 41.9999975,13.6889937 C41.9999975,19.9210946 40.2236158,24.4535317 36.6708525,27.2863049 L13.7145353,27.2863049 Z" id="Path-8" stroke="none" fill="#00812B" fill-rule="evenodd"></path>

                                                                <path d="M13.1999992,52.8863033 L13.1999992,45.6863038 C13.1999992,41.268026 16.781721,37.6863042 21.1999987,37.6863042 L30.3999982,37.6863042 C34.8182759,37.6863042 38.3999977,41.268026 38.3999977,45.6863038 L38.3999977,52.8863033 L38.3999977,52.8863033" id="Path-9" stroke="#16A044" stroke-width="2.39999986" fill="none"></path>

                                                                <polygon id="Path-10" stroke="none" fill="#4CDB7C" fill-rule="evenodd" points="14.7999991 44.4863038 17.599999 34.8863044 32.799998 34.8863044 36.7999978 44.4863038">

                                                                </polygon>

                                                                <polygon id="Path-11" stroke="none" fill="#3ECD6E" fill-rule="evenodd" points="18.3999989 36.8863043 25.1999985 51.2863034 33.199998 36.8863043">

                                                                </polygon>

                                                                <path d="M13.9999992,20.7974164 L13.9999992,25.9649899 C13.9999992,30.9756359 16.2022871,35.7330526 20.0226403,38.9751931 L21.1140645,39.9014295 C23.9188255,42.2816883 28.066804,42.1648723 30.7331595,39.6305352 L31.4226396,38.9751931 C34.8561291,35.7117048 36.7999978,31.1822294 36.7999978,26.4452256 L36.7999978,20.7974164 L36.7999978,20.7974164 L22.1735836,13.6863057 L13.9999992,20.7974164 Z" id="Path-7" stroke="none" fill="#81EDA5" fill-rule="evenodd"></path>

                                                            </g>

                                                        </g>

                                                    </g>

                                                </g>

                                            </g>

                                        </g>

                                    </svg></div>

                                <p>Find a doctor</p>

                                <img src="images/arrowg.png" alt="" class="img-fluid">



                            </div>

                        </a>

                    </div>

                    <a data-toggle="modal" data-target="#exampleModalCenter1" href="#" class="bookappointment">

                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">



                            <div class="bannerbtn-flex">

                                <div class="bannerbtn-flex-img">

                                    <svg width="56px" height="56px" viewBox="0 0 56 56" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                                        <!-- Generator: sketchtool 59 (101010) - https://sketch.com -->



                                        <desc>Created with sketchtool.</desc>

                                        <defs>

                                            <rect id="path-1" x="0" y="0" width="56" height="55.9999967" rx="6.39999962">

                                            </rect>

                                        </defs>

                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

                                            <g id="Home-page-New-2" transform="translate(-527.000000, -599.000000)">

                                                <g id="Group" transform="translate(0.000000, 581.000000)">

                                                    <g id="appointment" transform="translate(527.000000, 18.000000)">

                                                        <mask id="mask-2" fill="white">

                                                            <use xlink:href="#path-1"></use>

                                                        </mask>

                                                        <use id="Mask" fill="#00BFEF" xlink:href="#path-1"></use>

                                                        <g id="Group-7" mask="url(#mask-2)">

                                                            <g transform="translate(7.599999, 13.199999)">

                                                                <path d="M24.7999985,14.7999991 L4.39999974,14.7999991 L4.39999974,7.99999952 C4.39999974,3.58172179 7.98172153,8.11624453e-16 12.3999993,0 L24.7999985,0 L24.7999985,0 L24.7999985,14.7999991 Z" id="Path-13" fill="#007F9E"></path>

                                                                <path d="M17.599999,42.7999974 L17.599999,7.19999957 C17.599999,3.22354961 14.3764493,2.80133504e-15 10.3999994,0 L10.3999994,0 L10.3999994,0 L41.5999999,0 C46.4601054,-8.92786898e-16 50.3999994,3.93989397 50.3999994,8.79999948 L50.3999994,42.7999974 L50.3999994,42.7999974" id="Path-12" fill="#72DEFF"></path>

                                                                <rect id="Rectangle" fill="#2CC0E6" x="27.1999984" y="14.7999991" width="15.999999" height="2.39999986">

                                                                </rect>

                                                                <rect id="Rectangle" fill="#2CC0E6" x="27.1999984" y="20.3999988" width="15.999999" height="2.39999986">

                                                                </rect>

                                                                <rect id="Rectangle" fill="#2CC0E6" x="27.1999984" y="25.9999985" width="15.999999" height="2.39999986">

                                                                </rect>

                                                                <circle id="Oval" fill="#44CEF9" cx="13.5999992" cy="37.1999978" r="13.5999992"></circle>

                                                                <circle id="Oval" fill="#10A5CF" cx="13.5999992" cy="37.1999978" r="9.59999943"></circle>

                                                                <rect id="Rectangle" fill="#40CCEF" x="12.7999992" y="30.7999982" width="2.39999986" height="3.99999976">

                                                                </rect>

                                                                <rect id="Rectangle" fill="#44CEF9" x="12.7999992" y="20.3999988" width="2.39999986" height="3.99999976">

                                                                </rect>

                                                                <rect id="Rectangle" fill="#44CEF9" x="8.79999948" y="17.9999989" width="9.59999943" height="3.19999981">

                                                                </rect>

                                                            </g>

                                                        </g>

                                                    </g>

                                                </g>

                                            </g>

                                        </g>

                                    </svg></div>

                                <p>Book an appointment </p>

                                <img src="images/arrows.png" alt="" class="img-fluid">

                            </div>



                        </div>

                    </a>

                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 bdr-left-right">

                        <a data-toggle="modal" data-target="#exampleModalCenter1" href="#">

                            <div class="bannerbtn-flex">

                                <div class="bannerbtn-flex-img">

                                    <svg width="56px" height="56px" viewBox="0 0 56 56" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                                        <!-- Generator: sketchtool 59 (101010) - https://sketch.com -->



                                        <desc>Created with sketchtool.</desc>

                                        <defs>

                                            <rect id="path-1" x="0" y="0" width="56" height="55.9999967" rx="6.39999962">

                                            </rect>

                                        </defs>

                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

                                            <g id="Home-page-New-2" transform="translate(-895.000000, -599.000000)">

                                                <g id="Group" transform="translate(0.000000, 581.000000)">

                                                    <g id="preregistration" transform="translate(895.000000, 18.000000)">

                                                        <mask id="mask-2" fill="white">

                                                            <use xlink:href="#path-1"></use>

                                                        </mask>

                                                        <use id="Rectangle" fill="#EFA442" xlink:href="#path-1"></use>

                                                        <path d="M24.799998,21.5999987 L55.9999962,21.5999987 L55.9999962,21.5999987 L55.9999962,55.9999967 L22.3999982,55.9999967 L22.3999982,23.9999986 C22.3999982,22.6745152 23.4745147,21.5999987 24.799998,21.5999987 Z" id="Rectangle" fill="#FFD8A4" mask="url(#mask-2)"></path>

                                                        <path d="M39.9999971,17.599999 L55.9999962,17.599999 L55.9999962,17.599999 L55.9999962,25.599999 L39.9999971,25.599999 C38.6745138,25.599999 37.5999973,24.5254824 37.5999973,23.1999991 L37.5999973,19.9999988 C37.5999973,18.6745155 38.6745138,17.599999 39.9999971,17.599999 Z" id="Rectangle" fill="#995700" mask="url(#mask-2)"></path>

                                                        <circle id="Oval" fill="#995700" mask="url(#mask-2)" cx="50.7999965" cy="13.9999992" r="5.19999969"></circle>

                                                        <circle id="Oval" fill="#CD882C" mask="url(#mask-2)" cx="20.3999983" cy="49.999997" r="12.3999993"></circle>

                                                        <rect id="Rectangle" fill="#FFD399" mask="url(#mask-2)" x="18.3999984" y="43.9999974" width="4.79999971" height="12.7999992"></rect>

                                                        <rect id="Rectangle" fill="#FFD399" mask="url(#mask-2)" x="14.3999987" y="47.9999971" width="12.7999992" height="3.99999976"></rect>

                                                    </g>

                                                </g>

                                            </g>

                                        </g>

                                    </svg></div>

                                <p>Pre-registration</p>

                                <img src="images/arrowo.png" alt="" class="img-fluid">

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- <div class="banner_card mobiledisplaynone destopdisplaynone tabdisplaynone">

    <div class="container">

        <div class="row">

            <div class="bookpad20">

                <div class="col-12 col-sm-4 col-md-4 col-lg-4 p-0">

                    <div class="row">

                        <div class="banner_cards">

                            <div class="banner-card-size" id="base2">

                                <img src="assets/images/doc-icon.png"

                                    class="img-fluid"></div>

                            <p>Find a doctor</p>

                            <img src="images/arrowg.png" alt="" class="img-fluid ">

                        </div>

                    </div>

                </div>

            </div>

            <div class="bookpad20">

                <div class="col-12 col-sm-4 col-md-4 col-lg-4 p-0">

                    <div class="row">

                        <div class="banner_cards book-an-pop" data-toggle="modal" data-target="#exampleModalCenter1">

                            <div class="banner-card-size" id="base">

                                <img src="assets/images/quick-registration2.png" class="img-fluid"></div>

                            <p>Book an appointment</p>

                            <img src="images/arrows.png" alt="" class="img-fluid ">

                            <div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bookpad20">

                <div class="col-12 col-sm-4 col-md-4 col-lg-4 p-0">

                    <div class="row">

                        <div class="banner_cards" data-toggle="modal" data-target="#exampleModalCenter1">

                            <div class="banner-card-size" id="base1"><img src="assets/images/health-checkup2.png"

                                    class=" mt-2 img-fluid"></div>

                            <p>Pre-registration</p>

                            <img src="assets/images/arrowo.png" alt="" class="img-fluid ">

                        </div>

                    </div>

                </div>

            </div>





        </div>

    </div>

</div> -->



        <div class="bannerbottom destopdisplaynone tabdisplaynone mobilebannerbottom">

            <div class="container">



                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-4 pad00">

                        <a href="doctors.php" target="_blank">

                            <div class="Bok-an-app Bapleftborder" style="border-bottom:4px solid #00BD00;">

                                <ul>

                                    <li> <svg width="56px" height="56px" viewBox="0 0 56 56" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                                            <!-- Generator: sketchtool 59 (101010) - https://sketch.com -->



                                            <desc>Created with sketchtool.</desc>

                                            <defs>

                                                <rect id="path-1" x="0" y="0" width="55.9999967" height="55.9999967" rx="6.39999962"></rect>

                                            </defs>

                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

                                                <g id="Home-page-New-2" transform="translate(-164.000000, -600.000000)">

                                                    <g id="Group" transform="translate(0.000000, 581.000000)">

                                                        <g id="doctor" transform="translate(164.000000, 19.000000)">

                                                            <mask id="mask-2" fill="white">

                                                                <use xlink:href="#path-1"></use>

                                                            </mask>

                                                            <use id="Mask" fill="#36BD63" xlink:href="#path-1"></use>

                                                            <g id="Group-8" mask="url(#mask-2)">

                                                                <g transform="translate(11.199999, 3.113693)">

                                                                    <path d="M0,52.8863033 L1.07807614,48.7536784 C1.90204443,45.5951334 4.27452793,43.071705 7.37631496,42.0547255 L26.7999984,35.6863044 L26.7999984,35.6863044 L44.7999973,43.6863044 L44.7999973,52.8863033" id="Path-5" stroke="none" fill="#4CDB7C" fill-rule="evenodd"></path>

                                                                    <path d="M13.7145353,27.2863049 C9.88848249,21.6207585 8.3853903,16.9466828 9.20525876,13.2640777 C10.0251272,9.5814726 11.8015089,7.74017005 14.5344038,7.74017005 C15.9008513,3.20773299 19.3169699,0.658237145 24.7827597,0.0916825131 C32.9814443,-0.758149435 41.9999975,4.34084225 41.9999975,13.6889937 C41.9999975,19.9210946 40.2236158,24.4535317 36.6708525,27.2863049 L13.7145353,27.2863049 Z" id="Path-8" stroke="none" fill="#00812B" fill-rule="evenodd"></path>

                                                                    <path d="M13.1999992,52.8863033 L13.1999992,45.6863038 C13.1999992,41.268026 16.781721,37.6863042 21.1999987,37.6863042 L30.3999982,37.6863042 C34.8182759,37.6863042 38.3999977,41.268026 38.3999977,45.6863038 L38.3999977,52.8863033 L38.3999977,52.8863033" id="Path-9" stroke="#16A044" stroke-width="2.39999986" fill="none"></path>

                                                                    <polygon id="Path-10" stroke="none" fill="#4CDB7C" fill-rule="evenodd" points="14.7999991 44.4863038 17.599999 34.8863044 32.799998 34.8863044 36.7999978 44.4863038">

                                                                    </polygon>

                                                                    <polygon id="Path-11" stroke="none" fill="#3ECD6E" fill-rule="evenodd" points="18.3999989 36.8863043 25.1999985 51.2863034 33.199998 36.8863043">

                                                                    </polygon>

                                                                    <path d="M13.9999992,20.7974164 L13.9999992,25.9649899 C13.9999992,30.9756359 16.2022871,35.7330526 20.0226403,38.9751931 L21.1140645,39.9014295 C23.9188255,42.2816883 28.066804,42.1648723 30.7331595,39.6305352 L31.4226396,38.9751931 C34.8561291,35.7117048 36.7999978,31.1822294 36.7999978,26.4452256 L36.7999978,20.7974164 L36.7999978,20.7974164 L22.1735836,13.6863057 L13.9999992,20.7974164 Z" id="Path-7" stroke="none" fill="#81EDA5" fill-rule="evenodd"></path>

                                                                </g>

                                                            </g>

                                                        </g>

                                                    </g>

                                                </g>

                                            </g>

                                        </svg></li>

                                    <li>

                                        <h4>Find a doctor</h4>

                                    </li>

                                    <li class="mobiledisplaynone">

                                        <!-- <img src="assets/images/header-arrow.png" alt=""> -->

                                    </li>

                                </ul>

                            </div>

                        </a>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 pad00">

                        <a data-toggle="modal" data-target="#exampleModalCenter1" href="#" class="bookappointment">

                            <div class="Bok-an-app " style="border-bottom:4px solid #00C5FF;">

                                <ul>

                                    <li> <svg width="56px" height="56px" viewBox="0 0 56 56" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                                            <!-- Generator: sketchtool 59 (101010) - https://sketch.com -->



                                            <desc>Created with sketchtool.</desc>

                                            <defs>

                                                <rect id="path-1" x="0" y="0" width="56" height="55.9999967" rx="6.39999962">

                                                </rect>

                                            </defs>

                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

                                                <g id="Home-page-New-2" transform="translate(-527.000000, -599.000000)">

                                                    <g id="Group" transform="translate(0.000000, 581.000000)">

                                                        <g id="appointment" transform="translate(527.000000, 18.000000)">

                                                            <mask id="mask-2" fill="white">

                                                                <use xlink:href="#path-1"></use>

                                                            </mask>

                                                            <use id="Mask" fill="#00BFEF" xlink:href="#path-1"></use>

                                                            <g id="Group-7" mask="url(#mask-2)">

                                                                <g transform="translate(7.599999, 13.199999)">

                                                                    <path d="M24.7999985,14.7999991 L4.39999974,14.7999991 L4.39999974,7.99999952 C4.39999974,3.58172179 7.98172153,8.11624453e-16 12.3999993,0 L24.7999985,0 L24.7999985,0 L24.7999985,14.7999991 Z" id="Path-13" fill="#007F9E"></path>

                                                                    <path d="M17.599999,42.7999974 L17.599999,7.19999957 C17.599999,3.22354961 14.3764493,2.80133504e-15 10.3999994,0 L10.3999994,0 L10.3999994,0 L41.5999999,0 C46.4601054,-8.92786898e-16 50.3999994,3.93989397 50.3999994,8.79999948 L50.3999994,42.7999974 L50.3999994,42.7999974" id="Path-12" fill="#72DEFF"></path>

                                                                    <rect id="Rectangle" fill="#2CC0E6" x="27.1999984" y="14.7999991" width="15.999999" height="2.39999986">

                                                                    </rect>

                                                                    <rect id="Rectangle" fill="#2CC0E6" x="27.1999984" y="20.3999988" width="15.999999" height="2.39999986">

                                                                    </rect>

                                                                    <rect id="Rectangle" fill="#2CC0E6" x="27.1999984" y="25.9999985" width="15.999999" height="2.39999986">

                                                                    </rect>

                                                                    <circle id="Oval" fill="#44CEF9" cx="13.5999992" cy="37.1999978" r="13.5999992"></circle>

                                                                    <circle id="Oval" fill="#10A5CF" cx="13.5999992" cy="37.1999978" r="9.59999943"></circle>

                                                                    <rect id="Rectangle" fill="#40CCEF" x="12.7999992" y="30.7999982" width="2.39999986" height="3.99999976">

                                                                    </rect>

                                                                    <rect id="Rectangle" fill="#44CEF9" x="12.7999992" y="20.3999988" width="2.39999986" height="3.99999976">

                                                                    </rect>

                                                                    <rect id="Rectangle" fill="#44CEF9" x="8.79999948" y="17.9999989" width="9.59999943" height="3.19999981">

                                                                    </rect>

                                                                </g>

                                                            </g>

                                                        </g>

                                                    </g>

                                                </g>

                                            </g>

                                        </svg></li>

                                    <li>

                                        <h4>Book an

                                            appointment



                                        </h4>

                                    </li>

                                    <li class="mobiledisplaynone">

                                        <!-- <img src="assets/images/header-arrow.png" alt=""> -->

                                    </li>

                                </ul>

                            </div>

                        </a>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 pad00">

                        <a data-toggle="modal" data-target="#exampleModalCenter1" href="#">

                            <div class="Bok-an-app" style="border-bottom:4px solid #FFBC00;">

                                <ul>

                                    <li> <svg width="56px" height="56px" viewBox="0 0 56 56" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">

                                            <!-- Generator: sketchtool 59 (101010) - https://sketch.com -->



                                            <desc>Created with sketchtool.</desc>

                                            <defs>

                                                <rect id="path-1" x="0" y="0" width="56" height="55.9999967" rx="6.39999962">

                                                </rect>

                                            </defs>

                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

                                                <g id="Home-page-New-2" transform="translate(-895.000000, -599.000000)">

                                                    <g id="Group" transform="translate(0.000000, 581.000000)">

                                                        <g id="preregistration" transform="translate(895.000000, 18.000000)">

                                                            <mask id="mask-2" fill="white">

                                                                <use xlink:href="#path-1"></use>

                                                            </mask>

                                                            <use id="Rectangle" fill="#EFA442" xlink:href="#path-1"></use>

                                                            <path d="M24.799998,21.5999987 L55.9999962,21.5999987 L55.9999962,21.5999987 L55.9999962,55.9999967 L22.3999982,55.9999967 L22.3999982,23.9999986 C22.3999982,22.6745152 23.4745147,21.5999987 24.799998,21.5999987 Z" id="Rectangle" fill="#FFD8A4" mask="url(#mask-2)"></path>

                                                            <path d="M39.9999971,17.599999 L55.9999962,17.599999 L55.9999962,17.599999 L55.9999962,25.599999 L39.9999971,25.599999 C38.6745138,25.599999 37.5999973,24.5254824 37.5999973,23.1999991 L37.5999973,19.9999988 C37.5999973,18.6745155 38.6745138,17.599999 39.9999971,17.599999 Z" id="Rectangle" fill="#995700" mask="url(#mask-2)"></path>

                                                            <circle id="Oval" fill="#995700" mask="url(#mask-2)" cx="50.7999965" cy="13.9999992" r="5.19999969"></circle>

                                                            <circle id="Oval" fill="#CD882C" mask="url(#mask-2)" cx="20.3999983" cy="49.999997" r="12.3999993"></circle>

                                                            <rect id="Rectangle" fill="#FFD399" mask="url(#mask-2)" x="18.3999984" y="43.9999974" width="4.79999971" height="12.7999992"></rect>

                                                            <rect id="Rectangle" fill="#FFD399" mask="url(#mask-2)" x="14.3999987" y="47.9999971" width="12.7999992" height="3.99999976"></rect>

                                                        </g>

                                                    </g>

                                                </g>

                                            </g>

                                        </svg></li>

                                    <li>

                                        <h4>Pre-registration</h4>

                                    </li>

                                    <li class="mobiledisplaynone"><!--<img src="assets/images/header-arrow.png" alt="">--></li>

                                </ul>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>


       

          

        

        <div class="slidecenter">

        <section class="doctor-data">
            <section class="doctorcard">
                <div class="all">
                    <div class="doctorcontent">
                    <h3 class="center">Management Desk</h3>
                        <p class="para">mr. pawan arora, chairman,EMC group is the founder of the foremost chain of super speciality hospitals in punjab.a visionary par excellance, he revolutionised the health care scenario of punjab and inspired others to follow suit </p>
                        <p> <strong class="paraheading">Mr. pawan arora</strong></p>
                        <p class="para">chairmain of group</p>
                            <div class="allbtn">
                                <button class="doctorbtn" id="prev">Prev</button>
                                <button class="doctorbtn" id="next">Next</button>
                            </div>
                        
                    </div>
                    <div class="doctorimg">
                        <img src="images/pwawan.jpg" alt="" srcset="">
                    </div>
                </div>
                
            </section>
            
            <section class="doctorcard">
                <div class="all">
                    <div class="doctorcontent">
                    <h3 class="center">Management Desk</h3>
                        <p class="para">mrs. meenu arora, director, EMC group is working really hard to fulfill mr. arora's dream of providing international standards of healthcare facilities not only to the people of the holy city people but all across punjab. together this dynamic duo has set a precendent for corporate healthcare in the state.</p>
                        <p><strong class="paraheading">
                        mrs. meenu arora
                        </strong></p>
                        <p class="para">managing director of group</p>
                            <div class="allbtn">
                                <button class="doctorbtn" id="prev">Prev</button>
                                <button class="doctorbtn" id="next">Next</button>
                            </div>
                        
                    </div>
                    <div class="doctorimg">
                        <img src="images/meenu.jpg" alt="" srcset="">
                    </div>
                </div>
                
            </section>

            <section class="doctorcard">
                <div class="all">
                    <div class="doctorcontent">
                    <h3 class="center">Management Desk</h3>
                        <p class="para">we providepatient-centered service.people who come to  the grace health can expect polite,friendly helpful staff members who relate to each person as an individual, recogonizing their history, relationships, culture, and needs. we go the extra mile to meet their expectations</p>
                        <p><strong class="paraheading">
                        dr. Rishab arora
                        </strong></p>
                        <p class="para">director EMC group of hospitals</p>
                            <div class="allbtn">
                                <button class="doctorbtn" id="prev">Prev</button>
                                <button class="doctorbtn" id="next">Next</button>
                            </div>
                        
                    </div>
                    <div class="doctorimg">
                        <img src="images/dr-rishabh.jpg" alt="" srcset="">
                    </div>
                </div>
                
            </section>
            
            <section class="doctorcard">
                <div class="all">
                    <div class="doctorcontent">
                    <h3 class="center">Management Desk</h3>
                        <p class="para">we belive that patients deserve to have easy access to healthcare and that our systems should reflects this value. as we lok back at the last 20 years of our existance, we are happy to count the millions of people who have walked out of the doors with a smiling face and healtier body. despite the dynamic nature of the industry,we are continuing on a path of stable growth and infusion of new vigour into EMC group of hospitals. </p>
                        <p><strong class="paraheading">
                         mrs.  samiksha arora   
                        </strong></p>
                        <p class="para">director EMC group of hospitals</p>
                            <div class="allbtn">
                                <button class="doctorbtn" id="prev">Prev</button>
                                <button class="doctorbtn" id="next">Next</button>
                            </div>
                        
                    </div>
                    <div class="doctorimg">
                        <img src="images/samiksha2.jpg" alt="" srcset="">
                    </div>
                </div>
                
            </section>
            <section class="doctorcard">
                <div class="all">
                    <div class="doctorcontent">
                    <h3 class="center">Management Desk</h3>
                        <p class="para">a community in  which all people achieve their full potential for health and well-being across the lifespan. we work to be trusted by patients,a valued partner in the community, and creators of positive change.</p>
                        <p><strong class="paraheading">
                        Dr sourab arora   
                        </strong></p>
                        <p class="para">director EMC group of hospitals</p>

                            <div class="allbtn">
                                <button class="doctorbtn" id="prev">Prev</button>
                                <button class="doctorbtn" id="next">Next</button>
                            </div>
                        
                    </div>
                    <div class="doctorimg">
                        <img src="images/Sourab.jpg" alt="" srcset="">
                    </div>
                </div>
                
            </section>
        </section>
    </div>

    <section class="advance-tecnology">

<div class="container">

    <div class="row">

        <h2>ADMINISTRATION BOARD</h2>





        <div class="owl-carousel owl-theme bcon owl-loaded owl-drag" id="doctr">

            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1525px, 0px, 0px); transition: all 0.25s ease 0s; width: 3660px;"><div class="owl-item cloned" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                       

                            <img class="img-fluid" alt="User Image" src="doctors/dr-vivek-tandon.jpg">

                        



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                            <a href="#" target="_blank"> Nitin Kapoor </a>



                        </h3>

                        <p class="speciality">Director, operations</p>

                        <a href="tel:9814921382"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        "></i>9814921382</button></a>



                         <div class="row row-sm">

                         </div>

                    </div>

                </div>

            </div>
        </div>
            <div class="owl-item cloned" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="gastroenterology.php">

                            <img class="img-fluid" style="width:90%" alt="User Image" src="doctors/dr-mushtaq-ammad.jpg">

                        </a>



                    </div>
                    <div class="pro-content">

                        <h3 class="title">

                            <a href="#" target="_blank"> Dr Narjeet Kaur </a>



                        </h3>

                        <p class="speciality">Director, HR</p>

                        <a href="tel:8437859104"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        "></i>8437859104</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>

                        
                </div>

            </div></div><div class="owl-item cloned" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="neuro-surgeon.php">

                            <img class="img-fluid" alt="User Image" src="doctors/dr-mukesh-vij.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                            <a href="#" target="_blank"> Rtd. Col. Balbir Ahluwalia </a>



                        </h3>

                        <p class="speciality">Patient Welfare Director, EMC and Pulse Hospital</p>

                        <a href="tel:9501473660"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        "></i>9501473660</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>

                </div>



            </div></div><div class="owl-item cloned" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="nephrology.php">

                            <img class="img-fluid" alt="User Image" src="doctors/Dr-Chetan-Mahajan.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                            <a href="#" target="_blank"> Rtd. Col. Dilbag Singh</a>



                        </h3>

                        <p class="speciality">Patient Welfare Director, Abrol Hospital Gurdaspur</p>

                        <a href="tel:9878015725"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        "></i>9878015725</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>
                </div>



            </div></div><div class="owl-item" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="cardiology.php">

                            <img class="img-fluid" alt="User Image" src="doctors/dr-vivek-tandon.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                        <a href="#" target="_blank"> Dr Pallvi Nagpal</a>



                        </h3>

                        <p class="speciality">Manager, Operations, Abrol Hospital Gurdaspur</p>

                        <a href="tel:9779530888"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        
                        "></i>9779530888</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>
                </div>

            </div></div><div class="owl-item active" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="gastroenterology.php">

                            <img class="img-fluid" style="width:90%" alt="User Image" src="doctors/dr-mushtaq-ammad.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                        <a href="#" target="_blank"> Gurwinder Kaur</a>



                        </h3>

                        <p class="speciality">Nursing Supretendent, EMC Group</p>

                        <a href="tel:7986364771"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        "></i>7986364771</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>
                </div>

            </div></div><div class="owl-item active" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="neuro-surgeon.php">

                            <img class="img-fluid" alt="User Image" src="doctors/dr-mukesh-vij.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                        <a href="#" target="_blank"> Sourabh Ganguly</a>



                        </h3>

                        <p class="speciality">Director, HR - Abrol Hospital Gurdaspur</p>

                        <a href="tel:9915530697"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        
                        "></i>9915530697</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>


                </div>



            </div></div><div class="owl-item active" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="nephrology.php">

                            <img class="img-fluid" alt="User Image" src="doctors/Dr-Chetan-Mahajan.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                        <a href="#" target="_blank">  Varinder Sohal</a>



                        </h3>

                        <p class="speciality">Protocol Officer, EMC and Pulse Hospital</p>

                        <a href="tel:8054863500"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        ;
                        "></i>8054863500</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>

                </div>



            </div></div><div class="owl-item cloned active" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="cardiology.php">

                            <img class="img-fluid" alt="User Image" src="doctors/dr-vivek-tandon.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                        <a href="#" target="_blank">  Rabia Kapoor</a>



                        </h3>

                        <p class="speciality">Coordinator Head</p>

                        <a href="tel:7526890004"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        
                        "></i>7526890004</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>
                </div>

            </div></div><div class="owl-item cloned" style="width: 295px; margin-right: 10px;"><div class="item-holder">

                <div class="profile-widget">

                    <div class="doc-img" style="height: 320px;
    width: 240px;">

                        <a href="gastroenterology.php">

                            <img class="img-fluid" style="width:90%" alt="User Image" src="doctors/dr-mushtaq-ammad.jpg">

                        </a>



                    </div>

                    <div class="pro-content">

                        <h3 class="title">

                        <a href="#" target="_blank">  Gagan Bhatia</a>



                        </h3>

                        <p class="speciality">Director, IT/Communication</p>

                        <a href="tel:9015180007"><button class="" style="background: white;
                        border: 2px solid black;
                        color: black;
                        padding: 3px 30px;
                        border-radius: 4px;
                        "><i class="fa-solid fa-phone-volume" style="color: #f7961e;
                        font-size: 14px;
                        padding: 0px 5px;
                        ;
                        "></i>9015180007</button></a>



                        <div class="row row-sm">

                        </div>

                    </div>

                </div>

            </div>
        </div>
            
        </section>
        <!-- alldoctorofhospital -->

        <div class="container">

<div class="section-header">

   <h2 class="text-center" style="margin:60px;"> Medical Board</h2>

</div>

</div>



        <section>

         <div class="container">
            <!-- Row of doctors -->
            <div class="row containerItems">
               <!-- First Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-rishabh.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Rishab Arora</a> 
                        </h3>
                        <p class="speciality">MBBS, FCCS (USA) </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                        <!-- <div class="row row-sm">
                           <div class="col-lg-6 col-sm-1">
                              <a href="cardiologist.php" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-lg-6 col-sm-1">
                              <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr.Vivek Tandon" data-speciality="Cardiology" data-hospital="EMC Hospital Green Avenue" href="#" class="btn book-btn">Appointment</a>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <!-- Second Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/HD/pankaj-soni.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Pankaj Soni</a> 
                        </h3>
                        <p class="speciality">MD Anesthesiology</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Third Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/HD/manish.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Manish Gupta</a> 
                        </h3>
                        <p class="speciality">MD, DM Critical Care</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Fourth Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/rajeev.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Rajeev Kumar</a> 
                        </h3>
                        <p class="speciality">MD Anesthesiology</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- End of Row -->

            <!-- Row of doctors -->
            <div class="row containerItems">
               <!-- First Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr kaetki2.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Kaetki</a> 
                        </h3>
                        <p class="speciality">MD Anesthesia </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                        <!-- <div class="row row-sm">
                           <div class="col-lg-6 col-sm-1">
                              <a href="cardiologist.php" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-lg-6 col-sm-1">
                              <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr.Vivek Tandon" data-speciality="Cardiology" data-hospital="EMC Hospital Green Avenue" href="#" class="btn book-btn">Appointment</a>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <!-- Second Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-subash.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Subhash</a> 
                        </h3>
                        <p class="speciality">MD Anesthesia </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Third Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-danish.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Danish Altaf</a> 
                        </h3>
                        <p class="speciality">MD Anesthesiology </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Fourth Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/Dr. Rabinder Waan.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Rabinder Waan </a> 
                        </h3>
                        <p class="speciality">MD Anesthesiology, 
FCCS (USA) </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- End of Row -->

            <!-- Row of doctors -->
            <div class="row containerItems">
               <!-- First Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-ajay-abrol.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Ajay Abrol</a> 
                        </h3>
                        <p class="speciality">Head, Orthopedics Department </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                        <!-- <div class="row row-sm">
                           <div class="col-lg-6 col-sm-1">
                              <a href="cardiologist.php" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-lg-6 col-sm-1">
                              <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr.Vivek Tandon" data-speciality="Cardiology" data-hospital="EMC Hospital Green Avenue" href="#" class="btn book-btn">Appointment</a>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <!-- Second Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-kulpreet.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Kulpreet Singh</a> 
                        </h3>
                        <p class="speciality">MS Orthopedics</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Third Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-prabjot.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Prabhjot Singh</a> 
                        </h3>
                        <p class="speciality">DNB Orthopedics</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Fourth Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-rohit-dhawan.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Rohit Dhawan</a> 
                        </h3>
                        <p class="speciality"><span style="display:inline;letter-spacing: 0px;">MS, MCh Surgical Gastroenterology</span></p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- End of Row -->
                       <!-- Row of doctors -->
            <div class="row containerItems">
               <!-- First Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-ishtiaq.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Ishtiyaq Masood</a> 
                        </h3>
                        <p class="speciality">MD, DM Cardiology </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                        <!-- <div class="row row-sm">
                           <div class="col-lg-6 col-sm-1">
                              <a href="cardiologist.php" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-lg-6 col-sm-1">
                              <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr.Vivek Tandon" data-speciality="Cardiology" data-hospital="EMC Hospital Green Avenue" href="#" class="btn book-btn">Appointment</a>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <!-- Second Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-chetan.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Chetan Mahajan</a> 
                        </h3>
                        <p class="speciality">MD, DM Nephrology</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Third Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-hakeem.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Hakeem Ansar</a> 
                        </h3>
                        <p class="speciality">MD, DM Medical Oncology
</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Fourth Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-naveen.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Naveen Goyal</a> 
                        </h3>
                        <p class="speciality"><span style="display:inline;letter-spacing: 0px;">MS, MCh Genito Urinary Surgery</span></p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- End of Row -->

            <!-- Row of doctors -->
            <div class="row containerItems">
               <!-- First Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-kamaldeep.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">
                            Dr. Kamaldeep</a> 
                        </h3>
                        <p class="speciality">MS Surgery (PGIMER Chandigarh) </p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                        <!-- <div class="row row-sm">
                           <div class="col-lg-6 col-sm-1">
                              <a href="cardiologist.php" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-lg-6 col-sm-1">
                              <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr.Vivek Tandon" data-speciality="Cardiology" data-hospital="EMC Hospital Green Avenue" href="#" class="btn book-btn">Appointment</a>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <!-- Second Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-ishfaq.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Ishfaq Gulzar Bhat</a> 
                        </h3>
                        <p class="speciality">MD Medicine</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Third Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-manzoor.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Abid Manzoor</a> 
                        </h3>
                        <p class="speciality">MD Medicine
</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Fourth Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-mushtaq.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Mushtaq Ahmad</a> 
                        </h3>
                        <p class="speciality" style="letter-spacing: 0px;s"><span style="display:inline;letter-spacing: 0px;">MD, DM Gastroenterology</span></p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                               <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- End of Row -->
            <!-- Row of doctors -->
            <div class="row containerItems">
               <!-- First Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/mukesh-vij.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">
                            Dr. Mukesh Vij</a> 
                        </h3>
                        <p class="speciality">MS, MCh Neurosurgery</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                        <!-- <div class="row row-sm">
                           <div class="col-lg-6 col-sm-1">
                              <a href="cardiologist.php" class="btn view-btn">View Profile</a>
                           </div>
                           <div class="col-lg-6 col-sm-1">
                              <a data-toggle="modal" data-target="#exampleModalCenter" data-id="Dr.Vivek Tandon" data-speciality="Cardiology" data-hospital="EMC Hospital Green Avenue" href="#" class="btn book-btn">Appointment</a>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>

               <!-- Second Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-arjimand.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Arjimand Yaqoob
</a> 
                        </h3>
                        <p class="speciality">MD, DM Neurology</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- third Column -->
               <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/dr-sanjay.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Sanjay Gupta
</a> 
                        </h3>
                        <p class="speciality">MBBS , DNB Cardiology</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- 4rth Column -->
            <div   data-search="critical-trauma-care"  class="col-lg-3">
                  <div class="profile-widget">
                     <div class="doc-img" style="height: 320px;
    width: 240px;">
                        <a href="anesthesia.php">
                        <img class="img-fluid" alt="Cardiologist" src="doctors/alka.jpg">
                        </a>
                     </div>
                     <div class="pro-content">
                        <h3 class="title">
                           <a href="anesthesia.php" target="_blank">Dr. Alka Srivastava
</a> 
                        </h3>
                        <p class="speciality">MD Radiotherapy</p>
                        <div class="row row-sm">
                           <div class="col-lg-12 col-sm-1">
                              <a href="anaesthesia.php" class="btn view-btn">Book an Appointment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
           
            
            
            <!-- End of Row -->
         </div>
      </section>


        

        <section class="alldoctorofhospital">

        </section>

        <!-- emc family -->
        <div class="container">

<div class="section-header">

   <h2 class="text-center" style="margin:60px;"> EMC Family</h2>

</div>

</div>
<!-- emc family -->

<main class="emcimgsection" >
        <img src="emc-family-images/1.jpg" class="img-responsive emcimages">
        
        <img src="emc-family-images/2.jpg" class="img-responsive emcimages">
        
        <img src="emc-family-images/3.jpg" class="img-responsive emcimages">
        
        <img src="emc-family-images/4.jpg" class="img-responsive emcimages">
        
        <img src="emc-family-images/5.jpg" class="img-responsive emcimages">

        <img src="emc-family-images/6.jpg" class="img-responsive emcimages">

        <img src="emc-family-images/7.jpg" class="img-responsive emcimages">

        <img src="emc-family-images/8.jpg" class="img-responsive emcimages">

        <img src="emc-family-images/9.jpg" class="img-responsive emcimages">

        <img src="emc-family-images/10.jpg" class="img-responsive emcimages">

        <img src="emc-family-images/11.jpg" class="img-responsive emcimages">

        <img src="emc-family-images/12.jpg" class="img-responsive emcimages">
        

    </main>
    <section class="butns">
        <button class="prvbtn"><i class="fa-solid fa-arrow-left fa-2xl" style="color:#c4c4c4"></i></button>
        <button class="nextbtn"><i class="fa-solid fa-arrow-right fa-2xl" style="color:#c4c4c4"></i></button>
    </section>

<!-- end of emc family -->


<!-- infrastructure -->
        <div class="container">

            <div class="section-header">

                <h2 class="text-center" style="margin:60px;"> Infrastructure</h2>

            </div>

        </div>


<div class="section page-content-first">
            <div class="container mt-2">
               
                  <div class="clearfix"></div>
                  <br>
				  <div class="row">
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/front-offices.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/front-offices.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">FRONT OFFICE</h1>
                     </a>
                  </div>
                  <!--div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-22.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-22s.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">IPD WAITING HALL</h1>
                     </a>
                  </div-->
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-24.jpg" data-fancybox-group="gallery">
                        <img src="images/opd-doc.JPG" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">OPD CHAMBER</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-12.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-12s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">CONFERENCE HALL</h1>
                     </a>
                  </div>
				  </div>
				  <div class="row">
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-15.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/img-3.JPG" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EMERGENCY</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-18.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-18s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ICU 1</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-19.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-19s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ICU 2</h1>
                     </a>
                  </div>
				  </div>
				  <div class="row">
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-20.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-20s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ICU 3</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-21.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-21s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ICU 4</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/cardiac-recovery-big.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/cardiac-recovery.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">CARDIAC CRITICAL CARE</h1>
                     </a>
                  </div>
				  </div>
				  <div class="row">
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-23.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-23s.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">MODULAR  OT</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-17.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-17s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">GENERAL WARD</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-13.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-13s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">DIALYSIS</h1>
                     </a>
                  </div>
				  </div>
				  <div class="row">
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-16.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-16s.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">GASTROENTEROLOGY AND HEPATOLOGY</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-11.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-11s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">CATH LAB</h1>
                     </a>
                  </div>
                  
                 
				  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-1.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/img-1.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">CATH LAB 2</h1>
                     </a>
                  </div>
				  </div>
				  <div class="row">
                  <!--<div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-2.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-14s.jpg"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ECO</h1>
                     </a>
                  </div>-->
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-25.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-25s.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">PHYSIOTHERAPHY</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/private-room1.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/private-room.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">PRIVATE ROOM</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/gaelly-9.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/gaelly-9s.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>
				  </div>
				  <div class="row">
					 <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T133003.662.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T133003.662.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T133159.862.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T133159.862.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T133420.987.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T133420.987.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>
				 
                  <!--div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-2.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-2.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ECO</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-3.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-3.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">EMERGENCY</h1>
                     </a>
                  </div-->
				  </div>
                  <div class="row">
					 <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T152423.031.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T152423.031.jpg" class="img-responsive" border="0" alt="">
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T153906.197.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T153906.197.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T152802.036.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T152802.036.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>
				 
                  <!--div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-2.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-2.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ECO</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-3.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-3.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">EMERGENCY</h1>
                     </a>
                  </div-->
				  </div>
                  <div class="row">
					 <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T153456.311.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T153456.311.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T153707.373.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T153707.373.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T154044.093.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T154044.093.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>
				 
                  <!--div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-2.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-2.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ECO</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-3.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-3.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">EMERGENCY</h1>
                     </a>
                  </div-->
				  </div>
                  <div class="row">
					 <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T154331.198.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T154331.198.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T154504.743.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T154504.743.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>

                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/Untitled design - 2023-08-31T154832.103.jpg" data-fancybox-group="gallery">
                        <img src="infrastructure/Untitled design - 2023-08-31T154832.103.jpg" class="img-responsive" border="0" alt=""> 
                        <h1 class="text-center">EEG</h1>
                     </a>
                  </div>
				 
                  <!--div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-2.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-2.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">ECO</h1>
                     </a>
                  </div>
                  <div class="col-md-4">
                     <a class="fancybox" href="infrastructure/img-3.JPG" data-fancybox-group="gallery">
                        <img src="infrastructure/img-3.JPG"
                           class="img-responsive" border="0" alt="">
                        <h1 class="text-center">EMERGENCY</h1>
                     </a>
                  </div-->
				  </div>
                  <div class="clearfix"></div>
                  <br>
               
            </div>
            <div class="h40"></div>
         </div>

<!-- end of infrastructure -->


<!-- empanelment section -->
        <section class="advance-tecnology">

        <div class="container">

<div class="section-header">

    <h2 class="text-center" style="margin:60px;"> Empanelments</h2>

</div>

</div>



                    <div class="owl-carousel owl-theme bcon" id="advance-tecnology">

                        <div class="item-holder">

                            <a>

                                <div class="item-holder">

                                    <img src="infrastructure/front-office.jpg" class="img-responsive" border="0" alt="">

                                    <h4>FRONT OFFICE </h4>



                                </div>



                            </a>

                        </div>



                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-22s.jpg" class="img-responsive" border="0" alt="">



                                    <h4>IPD WAITING HALL </h4>



                                </div>



                            </a>

                        </div>

                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-24s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>OPD CHAMBER</h4>



                                </div>



                            </a>

                        </div>

                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-12s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>CONFERENCE HALL</h4>



                                </div>



                            </a>

                        </div>

                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-15s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>EMERGENCY</h4>



                                </div>



                            </a>

                        </div>

                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-18s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>ICU 1</h4>



                                </div>



                            </a>

                        </div>

                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-20s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>ICU 2</h4>



                                </div>



                            </a>

                        </div>

                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-19s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>ICU 3</h4>



                                </div>



                            </a>

                        </div>



                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="internal-external/icu.jpg" alt="" title="" class="img-responsive">

                                    <h4>ICU 4</h4>



                                </div>



                            </a>

                        </div>





                        <div class="item-holder">

                            <a>

                                <div class="item-holder">

                                    <img src="infrastructure/cardiac-recovery.jpg" class="img-responsive" border="0" alt="">



                                    <h4>CARDIAC CRITICAL CARE</h4>



                                </div>



                            </a>

                        </div>



                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-23s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>MODULAR OT</h4>



                                </div>



                            </a>

                        </div>



                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-17s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>GENERAL WARD</h4>



                                </div>



                            </a>

                        </div>



                        <div class="item-holder">

                            <a>

                                <div class="item-holder">

                                    <img src="infrastructure/gaelly-13s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>DIALYSIS</h4>



                                </div>



                            </a>

                        </div>



                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-16s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>GASTROENTEROLOGY AND HEPATOLOGY</h4>



                                </div>



                            </a>

                        </div>





                        <div class="item-holder">

                            <a>

                                <div class="item-holder">



                                    <img src="infrastructure/gaelly-11s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>CATH LAB</h4>



                                </div>



                            </a>

                        </div>





                        <div class="item-holder">

                            <a>

                                <div class="item-holder">

                                    <img src="infrastructure/gaelly-9s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>EEG</h4>



                                </div>



                            </a>

                        </div>





                        <div class="item-holder">

                            <a>

                                <div class="item-holder">

                                    <img src="infrastructure/gaelly-14s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>ECO</h4>



                                </div>



                            </a>

                        </div>





                        <div class="item-holder">

                            <a>

                                <div class="item-holder">

                                    <img src="infrastructure/gaelly-25s.jpg" class="img-responsive" border="0" alt="">

                                    <h4>PHYSIOTHERAPHY</h4>



                                </div>



                            </a>

                        </div>





                        <div class="item-holder">

                            <a>

                                <div class="item-holder">

                                    <img src="infrastructure/private-room.jpg" class="img-responsive" border="0" alt="">

                                    <h4>PRIVATE ROOM</h4>   



                                </div>



                            </a>

                        </div>

                    </div>



                </div>

            </div>

        </section>





        <section class="homepage-news">

            <div class="container">

                <div class="row">

                    <h2>Achievements/Events</h2>

                    <div class="owl-carousel owl-theme" id="homepage-news">

                        <div class="item-holder">

                            <div class="news">

                                <div class="news-img">

                                    <img src="news-events/1.jpg" class="img-responsive">

                                </div>



                            </div>

                        </div>



                        <div class="item-holder">

                            <div class="news">

                                <div class="news-img">

                                    <img src="news-events/2.jpg" class="img-responsive">

                                </div>



                            </div>

                        </div>



                        <div class="item-holder">

                            <div class="news">

                                <div class="news-img">

                                    <img src="news-events/3.jpg" class="img-responsive">

                                </div>



                            </div>

                        </div>



                        <div class="item-holder">

                            <div class="news">

                                <div class="news-img">

                                    <img src="news-events/4.jpg" class="img-responsive">

                                </div>



                            </div>

                        </div>





                    </div>

                    <div class="col-12 col-xs-12">

                        <a href="events-news.php" class="btn">View all</a>

                    </div>

                </div>

            </div>

        </section>



        <style>

            #ls_theLayer .raised .b2 {

                background: #00B48D;



            }

        </style>



        <style type="text/css">

            .modal .modal-header {

                background-color: #f7961e;

                color: #fff;

                text-align: center;

                border-top-left-radius: 5px;

                border-top-right-radius: 5px;

            }

        </style>





        <?php include "include/footer.php"; ?>





        <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
      <script src="js/heroslider.js"></script>

      <script src="js/emcfamily.js"></script>
      
      <script src="js/dr-managementslider.js"></script>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

        <script type="text/javascript" src="js/app.js"></script>

        <script type="text/javascript" src="js/owl.carousel.min.js"></script>

        <script type="text/javascript" src="js/webslidemenu.js"></script>

        <script src="js/additional-methods.min.js" type="text/javascript"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

        <script src="js/slick.js"></script>










        <script>

            $('#exampleModalCenter').on('show.bs.modal', function(event) {



                var button = $(event.relatedTarget) // Button that triggered the modal



                var doctor = button.data('id')



                var speciality = button.data('speciality')



                var hospital = button.data('hospital')



                var modal = $(this)







                modal.find('.modal-body #doctor').val(doctor)



                modal.find('.modal-body #speciality').val(speciality)



                modal.find('.modal-body #hospital').val(hospital)



            })

        </script>

        <script type="text/javascript">

            // Slick Slider



            if ($('.specialities-slider').length > 0) {

                $('.specialities-slider').slick({

                    dots: true,

                    autoplay: false,

                    infinite: true,

                    variableWidth: true,

                    prevArrow: false,

                    nextArrow: false

                });

            }



            if ($('.doctor-slider').length > 0) {

                $('.doctor-slider').slick({

                    dots: false,

                    autoplay: false,

                    infinite: true,

                    variableWidth: true,

                });

            }

            if ($('.features-slider').length > 0) {

                $('.features-slider').slick({

                    dots: true,

                    infinite: true,

                    centerMode: true,

                    slidesToShow: 3,

                    speed: 500,

                    variableWidth: true,

                    arrows: false,

                    autoplay: false,

                    responsive: [{

                        breakpoint: 992,

                        settings: {

                            slidesToShow: 1

                        }



                    }]

                });

            }

        </script>





        <script>

            $(document).ready(function() {

                (function($) {

                    $('a[href*=#]:not([href=#])').click(function() {

                        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||

                            location.hostname == this.hostname) {



                            var target = $(this.hash),

                                headerHeight = $(".primary-header").height() + 170; // Get fixed header height



                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');



                            if (target.length) {

                                $('php,body').animate({

                                    scrollTop: target.offset().top - headerHeight

                                }, 1000);

                                return false;

                            }

                        }

                    });

                })(jQuery);

            });

        </script>







        



        <script>

            $(document).ready(function() {





                $(window).scroll(function() {

                    if ($(this).scrollTop() > 100) {

                        $('#topb').fadeIn();

                    } else {

                        $('#topb').fadeOut();

                    }

                });

                $('#topb').click(function() {

                    $("php, body").animate({

                        scrollTop: 0

                    }, 600);

                    return false;

                });



            });

        </script>









        <script>

            $(window).load(function() {

                $(".se-pre-con").fadeOut("fast");

            });



            $(document).ready(function() {





                $('#spec-testimonials').owlCarousel({

                    loop: true,

                    margin: 10,

                    autoplay: true,

                    lazyLoad: true,

                    nav: true,

                    autoplayTimeout: 3000,

                    autoplayHoverPause: true,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    dots: false,

                    responsive: {

                        0: {

                            items: 1

                        },

                        600: {

                            items: 2

                        },

                        1000: {

                            items: 3

                        }

                    }

                })





                var owl2_1 = $("#owl2-demo-1");

                owl2_1.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: false,

                    autoplay: true,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 1,

                            nav: true

                        },

                        1000: {

                            items: 1,

                            nav: false

                        }

                    }

                });

                var homenew = $("#homenew-demo-1");

                homenew.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: false,

                    autoplay: true,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 1,

                            nav: true

                        },

                        1000: {

                            items: 1,

                            nav: false

                        }

                    }

                });

                var our_expert = $("#our-expert");

                our_expert.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: true,

                    autoplay: true,

                    // navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 2,

                            nav: true

                        },

                        1000: {

                            items: 3,

                            nav: false

                        }

                    }

                });

                var advance_tecnology = $("#advance-tecnology");

                advance_tecnology.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: true,

                    autoplay: true,

                    // navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 2,

                            nav: true

                        },

                        1000: {

                            items: 3,

                            nav: false

                        }

                    }

                });



                var doctr = $("#doctr");

                doctr.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: true,

                    autoplay: true,

                    // navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 2,

                            nav: true

                        },

                        1000: {

                            items: 3,

                            nav: false

                        },



                        1366: {

                            items: 4,

                            nav: false

                        }

                    }

                });

                var homepage_testimonial = $("#homepage-testimonial");

                homepage_testimonial.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: true,

                    autoplay: true,

                    // navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: false,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 2,

                            nav: true

                        },

                        1000: {

                            items: 3,

                            nav: true

                        }





                    }

                });

                var homepage_news = $("#homepage-news");

                homepage_news.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: true,

                    autoplay: false,

                    mouseDrag: false,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 2,

                            nav: true

                        },

                        1000: {

                            items: 3,

                            nav: false

                        }

                    }

                });

                var homenew_specilities = $("#homenew-specilities");

                homenew_specilities.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    dots: true,

                    autoplay: false,

                    mouseDrag: false,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true,

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 3,

                            nav: true

                        },

                        1000: {

                            items: 3,

                            nav: false

                        }

                    }

                });

                var owl2_2 = $("#owl2-demo-2");

                owl2_2.owlCarousel({

                    lazyLoad: true,

                    // center: true,

                    loop: true,

                    autoplay: true,

                    // autoWidth:305,

                    autoplayTimeout: 2000,

                    autoplayHoverPause: true,

                    margin: 25,

                    dots: false,

                    nav: true,

                    slideBy: 1,

                    // itemsDesktop : [1000,4],

                    items: 4,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    responsive: {

                        0: {

                            items: 1,

                            nav: false,

                        },

                        600: {

                            items: 2,

                            nav: false,

                        },

                        1000: {

                            items: 3

                        },

                        1100: {

                            items: 4

                        }



                    }

                });



                $('#owl-video .owl-nav').removeClass('disabled');



                var owl2_6_2 = $("#owl2-demo-6-2");

                owl2_6_2.owlCarousel({

                    lazyLoad: true,

                    loop: true,

                    autoplay: true,

                    autoplayTimeout: 3000,

                    autoplayHoverPause: true,

                    margin: 30,

                    responsiveClass: true,

                    dots: true,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    responsive: {

                        0: {

                            items: 1,

                            nav: false,

                            dots: true,

                        },

                        600: {

                            items: 1,

                            nav: false,

                            dots: true,

                        },

                        1000: {

                            items: 1,

                            nav: true,

                            dots: false,

                        },

                        1100: {

                            items: 1,

                            nav: true,

                            dots: false,

                        }

                    }

                });



                $('#owl2-demo-4').owlCarousel({

                    autoplay: true,

                    center: true,

                    loop: true,

                    autoplayHoverPause: true,

                    nav: true,

                    autoplayTimeout: 3000,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    responsive: {

                        0: {

                            items: 1,

                            nav: false,

                        },

                        600: {

                            items: 1,

                            nav: false,

                        },

                        1000: {

                            items: 3,

                            nav: true,

                        },

                        1100: {

                            items: 3,

                            nav: true,

                        }



                    }

                });





                var owl2_3 = $("#owl2-demo-3");

                owl2_3.owlCarousel({

                    items: 4,

                    autoplay: true,

                    autoplayTimeout: 2000,

                    lazyLoad: true,

                    loop: true,

                    autoplayHoverPause: true,

                    margin: 10,

                    dots: true,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    responsive: {

                        0: {

                            items: 1,

                            dots: false,

                            nav: true

                        },

                        600: {

                            items: 3,

                            dots: false,

                            nav: true

                        },

                        1000: {

                            items: 4,

                            dots: true,

                            nav: true,

                        }

                    }

                });

                var owl2_5 = $("#owl2-demo-5");

                owl2_5.owlCarousel({

                    lazyLoad: true,

                    // center: true,

                    loop: true,

                    autoplay: true,

                    // autoWidth:305,

                    autoplayTimeout: 2000,

                    autoplayHoverPause: true,

                    margin: 25,

                    dots: false,

                    nav: true,

                    slideBy: 1,

                    // itemsDesktop : [1000,4],

                    items: 4,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    responsive: {

                        0: {

                            items: 1,

                            nav: false,

                        },

                        480: {

                            items: 1,

                            nav: false,

                        },

                        600: {

                            items: 3,

                            nav: false,

                        },

                        1000: {

                            items: 3

                        },

                        1100: {

                            items: 3

                        }



                    }

                });





                // $(".btn-scrollUp").hide();



                $(".btn-scrollUp").on('click', function() {

                    $("php, body").animate({

                        scrollTop: 0

                    }, 600);

                });



                $(window).scroll(function() {

                    //scroll to top button show when user has scrolled down 500px atleast

                    if ($(window).scrollTop() > 500) {

                        $(".btn-scrollUp").show();

                    }

                    //scroll to top button hide

                    if ($(window).scrollTop() < 500) {

                        $(".btn-scrollUp").hide();

                    }







                    // if ($(window).scrollTop() > 300) {

                    //             $(".bookAppntFixed").show();

                    //         }

                    //         //scroll to top button hide

                    //         if ($(window).scrollTop() < 500) {

                    //             $(".bookAppntFixed").hide();

                    //         }





                    //stick book appointment button to the footer whenthe viewport is at bottom

                    if ($(window).scrollTop() > $("body").height() - $(window).height() - 100) {

                        $("#floatButton").css({

                            "border-radius": "5px"

                        });

                        $("#floatButton").css({

                            "width": "100%"

                        });

                        $("#floatButton").removeClass("bookAppntFixed");

                        $(".btn-scrollUp").css({

                            "bottom": "172px"

                        })

                        $(".btn-scrollUp").css({

                            "z-index": "99999999999"

                        })

                    }



                    //make appointment buttom stick to the bottom of the viewport

                    if ($(window).scrollTop() < $("body").height() - $(window).height() - 100) {

                        $("#floatButton").css({

                            "border-radius": "0px"

                        });

                        $("#floatButton").addClass("bookAppntFixed");

                        $(".btn-scrollUp").css({

                            "bottom": "120px"

                        })

                    }



                    //initial opacity of scroll to top button

                    $(".btn-scrollUp").css({

                        "opacity": ".5"

                    });



                    //make scroll to top button visible when user stops scrolling

                    clearTimeout($.data(this, 'scrollTimer'));

                    $.data(this, 'scrollTimer', setTimeout(function() {

                        $(".btn-scrollUp").css({

                            "opacity": "1"

                        })

                    }, 500));

                });





                $('.datepicker').datetimepicker({

                    startDate: new Date(),

                    orientation: " auto",

                    format: "dd MM yyyy - HH:ii P",

                    showMeridian: true,

                    weekStart: 1,

                    todayBtn: 1,

                    autoclose: true,

                    todayHighlight: 1,

                    startView: 2,

                    forceParse: 1

                });



                $(".back-arrow").click(function() {

                    $(".overlapblackbg").click();

                });















                $(".events_load_more").on("click", function(e) {

                    var no_of_items = 3;

                    var limit = $(this).attr("data-limit");

                    if (limit !== "") {

                        $(".loading-spinner").show();

                        var start = (parseInt(limit) + parseInt(no_of_items))

                        var new_limit = start + "," + no_of_items;

                        var js = {

                            limit: new_limit

                        }

                        $.post(url + "events/get_events", js, function(data) {

                            $(".eventarea:last").append(data.result);

                            $(".events_load_more").attr("data-limit", new_limit);

                            if (data.total <= start + 3) {

                                $(".events_load_more").attr("data-limit", "");

                                $(".events_load_more").hide();

                            }

                            $(".loading-spinner").hide();

                        }, "json");

                    }

                    e.preventDefault();

                });



                $(".news_load_more").on("click", function(e) {

                    var no_of_items = 3;

                    var limit = $(this).attr("data-limit");

                    if (limit !== "") {

                        $(".loading-spinner").show();

                        var start = (parseInt(limit) + parseInt(no_of_items))

                        var new_limit = start + "," + no_of_items;

                        var js = {

                            limit: new_limit

                        }

                        $.post(url + "news/get_news", js, function(data) {

                            $(".newsarea:last").append(data.result);

                            $(".news_load_more").attr("data-limit", new_limit);

                            if (data.total <= start + 3) {

                                $(".news_load_more").attr("data-limit", "");

                                $(".news_load_more").hide();

                            }

                            $(".loading-spinner").hide();

                        }, "json");

                    }

                    e.preventDefault();

                });



                var total = $('.example-image-link').attr("count");

                if (total < 5) {

                    $('.gallery_load_more').hide();

                }

                $(".gallery_load_more").on("click", function(e) {

                    var no_of_items = 5;

                    var limit = $(this).attr("data-limit");

                    if (limit !== "") {

                        $(".loading-spinner").show();

                        var start = (parseInt(limit) + parseInt(no_of_items))

                        var new_limit = start + "," + no_of_items;

                        var js = {

                            limit: new_limit

                        }

                        $.post(url + "gallery/get_gallery", js, function(data) {

                            $(".gallerylh").append(data.result);

                            $(".gallery_load_more").attr("data-limit", new_limit);

                            if (data.total <= start + 5) {

                                $(".gallery_load_more").attr("data-limit", "");

                                $(".gallery_load_more").hide();

                            }

                            $(".loading-spinner").hide();

                        }, "json");

                    }

                    e.preventDefault();

                });



                (function() {

                    $('.carousel-showmanymoveone .item').each(function() {

                        var itemToClone = $(this);

                        for (var i = 1; i < 4; i++) {

                            itemToClone = itemToClone.next();

                            if (!itemToClone.length) {

                                itemToClone = $(this).siblings(':first');

                            }

                            itemToClone.children(':first-child').clone()

                                .addClass("cloneditem-" + (i))

                                .appendTo($(this));

                        }

                    });

                }());



                $(document).on('click', '.appoint-btn', function() {

                    $("#ls_theLayer").css({

                        "right": "-00px",

                        "transition": "ease 1s"

                    });

                    $(".appoint-btn").fadeOut("slow");

                    $(".appoint-btn").addClass("hide");

                    $(".appoint-btn-hide").fadeIn("slow");

                    $(".appoint-btn-hide").addClass("show");

                    $(".appoint-btn-hide").css("top", "100px");

                });

                $(document).on('click', '.appoint-btn-hide', function() {

                    $(".appoint-btn-hide").fadeIn("slow");

                    $(".appoint-btn-hide").removeClass("show");

                    $(".appoint-btn-hide").addClass("hide");

                    $(".appoint-btn").removeClass("hide");

                    $(".appoint-btn").fadeIn("slow");

                    $(".appoint-btn").addClass("show");

                    $("#ls_theLayer").css("right", "-300px");

                });

                $(".abcd").click(function() {



                    $('#bs-example-modal-lg').modal('show');

                    $('.video-iframe').php(data[0].mediaURL);





                });

                $(".testimonials").click(function() {

                    var id = $(this).attr("rel");

                    var url = "/";

                    $.post(url + "testimonials/get_testimonials", {

                            id: id

                        })

                        .done(function(data) {

                            var data = JSON.parse(data);

                            if (data) {

                                console.log(data);

                                $('#bs-example-modal-lg').modal('show');

                                $('.video-iframe').php(data[0].mediaURL);

                            }

                        });

                });



            });





            $(document).ready(function() {



                $('#doccarr').owlCarousel({

                    loop: true,

                    margin: 10,

                    nav: true,

                    responsive: {

                        0: {

                            items: 1

                        },

                        600: {

                            items: 3

                        },

                        1000: {

                            items: 4

                        }

                    }

                })







                var owl2_6 = $("#owl2-demo-6");

                owl2_6.owlCarousel({

                    lazyLoad: true,

                    loop: true,

                    autoplay: true,

                    autoplayTimeout: 5000,

                    margin: 30,

                    responsiveClass: true,

                    dots: false,

                    navText: ["<span class='prev'></span>", "<span class='next'></span>"],

                    responsive: {

                        0: {

                            items: 1,

                            nav: true

                        },

                        600: {

                            items: 1,

                            nav: true

                        },

                        1000: {

                            items: 1,

                            nav: true,

                        },

                        1100: {

                            items: 1,

                            nav: true,

                        }

                    }

                });











                var owl2_5 = $("#owl2-demo-5");

                owl2_5.owlCarousel({

                    items: 1,

                    lazyLoad: true,

                    loop: true,

                    margin: 10,

                    autoplay: true,

                    autoplayTimeout: 5000,

                    autoplayHoverPause: true

                });



                $('#owl-video').owlCarousel({

                    loop: true,

                    center: true,

                    nav: true,

                    video: true,

                    responsive: {

                        480: {

                            items: 2

                        },

                        600: {

                            items: 3

                        }

                    }

                });









                $(window).load(function() {

                    // if( $(window).width() < 769 ){

                    //     $('.newcontentholder').css({"height":"20vw"});

                    //     $(".newimgholder img").css({"height":"20vw"});

                    // }



                    // if( $(window).width() < 426 ){

                    //     $('.newcontentholder').css({"height":"40vw"});

                    //     $(".newimgholder img").css({"height":"40vw"});

                    // }



                    // if( $(window).width() < 376 ){

                    //     $('.newcontentholder').css({"height":"50vw"});

                    //     $(".newimgholder img").css({"height":"50vw"});

                    // }

                });

                console.log($(".newimgholder img").outerHeight());

                console.log("window width", $(window).width());





                // $('.newcontentholder').css({"height":"20vw"});

                // $(".newimgholder img").css({"height":"20vw"});



                $(window).resize(function() {

                    //     if( $(window).width() < 376 ){

                    //         $('.newcontentholder').css({"height":"50vw"});

                    //         $(".newimgholder img").css({"height":"50vw"})

                    //    }



                    //    if( $(window).width() < 426 ){

                    //         $('.newcontentholder').css({"height":"30vw"});

                    //         $(".newimgholder img").css({"height":"30vw"})

                    //    }



                    //    if( $(window).width() < 769 ){

                    //         $('.newcontentholder').css({"height":"20vw"});

                    //         $(".newimgholder img").css({"height":"20vw"});

                    //     }

                });



            });



            function openNav() {

                document.getElementById("mySidenav").style.width = "300px";

            }



            function closeNav() {

                document.getElementById("mySidenav").style.width = "0";

                // document.getElementById("mySidenav").style.marginRight = "15px";

            }









            var dropdown = document.getElementsByClassName("dropdown-btn");

            var i;



            for (i = 0; i < dropdown.length; i++) {

                dropdown[i].addEventListener("click", function() {

                    this.classList.toggle("active");

                    var dropdownContent = this.nextElementSibling;

                    if (dropdownContent.style.display === "block") {

                        dropdownContent.style.display = "none";

                    } else {

                        dropdownContent.style.display = "block";

                    }

                });

            }



            $(document).ready(function() {

                //sidenav show

                $('.sidenav').hide();

                $('.caretMenuHamburger').on('click', function() {

                    $('.sidenav').show();

                    $('.sidenav').animate({

                        right: '-22px'

                    });

                    // $('php').css({ "overflow": "hidden" });

                });



                //sidenav hide

                $(".closebtn").on('click', function() {

                    $('.sidenav').animate({

                        right: '-450px'

                    });

                    $('.sidenav').hide();

                    $('php').css({

                        "overflow": "visible"

                    });

                });

            });





            $(document).ready(function() {

                $(window).scroll(function() {

                    if ($(this).scrollTop() > 20) {

                        $('#mainNavbar').addClass('header-animate');

                    } else {

                        $('#mainNavbar').removeClass('header-animate');

                    }

                });

                $(".destopmenuonly").on('click', function() {

                    $(".destopmenu").fadeIn();

                    $("body").css("overflow", "hidden");

                });

                $(".menu_close_btn").on('click', function() {

                    $(".destopmenu").fadeOut();

                    $("body").css("overflow", "auto");

                });

            });



            $(document).ready(function() {

                $(window).scroll(function() {

                    if ($(this).scrollTop() > 450) {



                        $('.sticky-right-buttos').addClass('slideVisable');

                    } else {

                        $('.sticky-right-buttos').removeClass('slideVisable');

                    }

                });

            });



            function get_active() {

                $(".changetoactive").addClass("active");

                $(".triggers").css("display", "block");

            }



            function removeblock() {

                $(".triggers").css("display", "none");

            }



            $(".buts").click(function() {

                $("#ls_theLayer").css("display", "block");

            });

        </script>



        <style>

            .intro {

                display: block !important;

            }

        </style>





        <script>



        </script>

        <script>

            /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */

        </script>

        <script>

            $(".blog_social").hide();

            $(".social_blog").click(function() {

                $(".blog_social", this).toggle();

            });

            $(document).ready(function() {



                $(".menu-search").click(function() {

                    $("input").toggle();

                    $(".header-search-box").css("display", "block");

                });



            });

        </script>



        <script>

            var option = [];

            var key = [];

            var url = "#";

            $('input.typeahead').typeahead({



                source: function(query, process) {



                    return process(key);

                },

                updater: function(item) {

                    if (option[0][item] !== '') {

                        console.log(option[0][item]);

                        window.location = option[0][item];

                    }

                    return item;

                },

            });





            function selection() {

                var a = document.getElementById("mySelect");

                var opt = a.options[a.selectedIndex];

                var n = opt.text;

                if (n.length > 12) {

                    document.getElementById("mySelect").style.width = "250px";

                } else {

                    document.getElementById("mySelect").style.width = "100px";

                }

            }





            $(window).scroll(function() {

                if ($(this).scrollTop() > 320) {

                    $('.scrollbutton:hidden').stop(true, true).fadeIn();

                } else {

                    $('.scrollbutton').stop(true, true).fadeOut();

                }

            });

        </script>







        <script>

            function openNav() {

                document.getElementById("our-specialities-menu").style.width = "320px";

            }



            function closeNav() {

                document.getElementById("our-specialities-menu").style.width = "0";

            }

        </script>

</body>



</php>