<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bewerbung.one</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/logo.png') }}">
    <link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @include('panels/styles')
    @include('panels/styles')
    <style>
        .btn-group button {
           background-color: #fff;
            /* Green background */
            border: 1px solid #fff;
            /* border-radius: 15px 0px 15px 0px; */
            color: white;
            /* White text */
            padding: 30px 50px;
            cursor: pointer;
            /* Pointer/hand icon */
            float: left;
            /* Float the buttons side by side */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }

        .btn-group button:not(:last-child) {
            border-right: none;
            /* Prevent double borders */
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            top: -7px;
            border-radius: 12px;
		box-shadow: 0px 5px 10px -4px rgba(0, 0, 0, 0.3);

		cursor: pointer;
        }

        .h6 {
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
        }

        /* Separator Style Start
        --------------------------------------------*/
        .separator {
            margin: 20px 0;
            position: relative;
            padding: 20px 0;
            color: #7e80c0;
        }

        .separator>hr {
            border-color: #7e80c0;
        }

        .hr {
            width: 40%
        }

        .separator>i {
            width: 34px;
            height: 34px;
            line-height: 32px;
            border: 1px solid;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
            background-color: #fcfcff;
        }

        .separator a {
            height: 36px;
            line-height: 36px;
            border-radius: 18px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: transparent;
            padding: 0 26px;
            color: #8883b7;
        }

        .separator a:hover {
            text-decoration: none;
            /*            background-color: #4a4da5;*/
        }

        /* Owl-Carousel Style Start
        --------------------------------------------*/
        .owl-carousel {
            padding: 14px 0 34px;
        }

        .owl-carousel .item {
            padding: 8px;
            border: 1px solid rgba(0, 0, 0, 0);
            border-radius: 8px;
            text-align: center;
        }

        .owl-carousel .item:hover {
            background-color: #f0f0f4;
            border-color: #b0dcee;
        }

        .owl-carousel .owl-stage-outer {
            z-index: 5;
        }

        .owl-carousel .owl-nav {
            position: absolute;
            left: -62px;
            top: 50%;
            right: -62px;
            transform: translate(0, -50%);
            z-index: 3;
        }

        .owl-carousel .owl-nav .owl-prev,
        .owl-carousel .owl-nav .owl-next {
            width: 62px;
            height: 62%;
        }

        .owl-carousel .owl-nav .owl-prev {
            float: left;
        }

        .owl-carousel .owl-nav .owl-next {
            float: right;
        }

        .owl-carousel .item a {
            color: #323759;
        }

        .owl-carousel .item a:hover {
            text-decoration: none;
        }

        .owl-carousel .item .imgTemp {
            display: block;
            border: 1px solid #d3d3db;
            border-radius: 4px;
            overflow: hidden;
        }

        .owl-carousel .item .imgTemp img {
            max-width: 100%;
            display: block;
        }

        .owl-carousel .item .priceProduct {
            font-size: 16px;
            margin: 12px 0 0;
            display: block;
        }

        /* Owl-Carousel Style Ends
        --------------------------------------------*/
        /* Separator Style Ends */


        .express_block {
            padding: 0 50px;
            color: #9b9ca2;
        }

        .express_block input[type="checkbox"] {
            display: none;
        }

        .express_block input[type="checkbox"]+label {
            display: inline-block;
            position: relative;
            color: #9b9ca2;
            padding: 4px 4px;
            border: 1px solid #d3d3db;
            border-radius: 24px;
            font-weight: 400;
            cursor: pointer;
            margin: 0 8px 30px;
            width: 390px;
            text-align: left;
        }

        .express_block input[type="checkbox"]+label:before {
            content: '';
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 1px solid #d3d3db;
            position: absolute;
            top: 50%;
            right: 14px;
            transform: translate(0, -50%);
        }

        .express_block input[type="checkbox"]+label:after {
            content: '';
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #d3d3db;
            position: absolute;
            top: 50%;
            right: 19px;
            transform: translate(0, -50%);
        }

        .express_block input[type="checkbox"]+label svg {
            width: 42px;
            display: inline-block;
            vertical-align: middle;
        }

        .express_block input[type="checkbox"]+label span {
            display: inline-block;
            vertical-align: middle;
            border-left: 1px solid #d3d3db;
            padding: 6px 34px 6px 14px;
            margin-left: 10px;
        }

        .express_block input[type="checkbox"]+label span:after {
            content: '';
            width: 15px;
            height: 15px;
            position: absolute;
            top: 50%;
            right: 24px;
            transform: translate(0, -50%);
            z-index: 5;
        }

        .express_block .label_tablet span {
            border: 0;
        }

        .express_block input[type="checkbox"]+label:hover,
        .express_block input[type="checkbox"]:checked+label {
            color: #8883b7;
            border-color: #8883b7;
        }

        .express_block input[type="checkbox"]+label:hover:before,
        .express_block input[type="checkbox"]:checked+label:before {
            border-color: #8883b7;
        }

        .express_block input[type="checkbox"]+label:hover:after,
        .express_block input[type="checkbox"]:checked+label:after {
            background-color: #8883b7;
        }

        .express_block input[type="checkbox"]+label:hover span,
        .express_block input[type="checkbox"]:checked+label span {
            border-color: #8883b7;
        }

        .express_block input[type="checkbox"]:checked+label span:after {
            background: url('{{ url('/public/theme/assets/images/checkSign-w.svg') }}') center center no-repeat;
        }

        .express_block .label_tablet {
            display: inline-block;
            position: relative;
            padding: 4px 8px;
            border: 1px solid #8883b7;
            border-radius: 24px;
            margin: 0 8px 30px;
            width: 390px;
            text-align: left;
            color: #8883b7;
        }

        .express_block .label_tablet svg {
            width: 42px;
            display: inline-block;
            vertical-align: middle;
        }

        .express_block .label_tablet span {
            padding: 6px;
            display: inline-block;
            vertical-align: middle;
            color: #323759;
        }


        .contactForm {
            padding-bottom: 30px;
        }

        .contactForm .input-group {
            padding: 15px 0;
        }

        .contactForm .input-group .input-group-addon {
            min-width: inherit;
            padding-left: 22px;
            background-color: rgba(0, 0, 0, 0);
            border-right: 0;
            border-radius: 20px 0 0 20px;
            border-color: #d3d3db;
            color: #9b9ca2;
        }

        .contactForm .input-group .input-group-addon svg {
            width: 20px;
        }

        .contactForm .input-group .input-group-addon:after {
            content: '';
            width: 1px;
            position: absolute;
            top: 10px;
            right: 0;
            bottom: 10px;
            background-color: #9b9ca2;
        }

        .contactForm .input-group .form-control {
            border-radius: 20px 20px 20px 20px !important;
            height: 40px;
        }

        .contactForm .input-group.focused .input-group-addon,
        .contactForm .input-group.focused .form-control {
            border-color: #8883b7;
            color: #8883b7;
        }

        .contactForm .input-group.focused .input-group-addon:after {
            backgroud: #8883b7;
        }

        svg {
            fill: currentColor;
            display: block;
        }

        /* Radio Style Start
        --------------------------------------------*/
        input[type="radio"] {
            display: none
        }

        input[type="radio"]+label {
            font-weight: 400;
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            color: #9b9ca2;
        }

        input[type="radio"]+label:before,
        input[type="radio"]+label:after {
            content: '';
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 1px solid;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translate(0, -50%);
        }

        input[type="radio"]+label:after {
            width: 12px;
            height: 12px;
            border: 0;
            margin-left: 3px;
        }

        input[type="radio"]:checked+label {
            color: #4a4da5;
        }

        input[type="radio"]:checked+label:before {
            border-color: #8883b7;
        }

        input[type="radio"]:checked+label:after {
            background-color: #8883b7;
        }

        /* Radio Style Ends
        --------------------------------------------*/
        .priceForm .btn-normal {
            color: #9b9ca2;
            border-color: #d3d3db;
            background-color: rgba(0, 0, 0, 0);
        }

        .priceForm .btn-normal:hover {
            color: #8883b7;
            border-color: #8883b7;
        }

        .priceForm .price_label {
            color: #323759;
            border-bottom: 1px solid;
            padding-bottom: 12px;
            margin-bottom: 15px;
        }

        .priceForm .price_label:before,
        .priceForm .price_label:after {
            content: ' ';
            width: 100%;
            display: table;
            clear: both;
        }

        .priceForm .price_label span {
            float: left;
        }

        .priceForm .price_label strong {
            float: right;
        }

        .priceForm .priceQuestion {
            position: relative;
            padding-bottom: 4px;
        }

        .priceForm .priceQuestion label {
            padding: 8px 30px;
            border-radius: 8px;
            color: #fff;
            background-color: #323759;
            display: block;
            font-weight: 400;
            cursor: pointer;
        }

        .priceForm .priceQuestion label svg {
            width: 12px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 6px;
        }

        .priceForm .priceQuestion .info_detail {
            padding: 15px;
            border-radius: 8px;
            color: #fff;
            background-color: #323759;
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            right: 0;
            z-index: 5;
        }

        .priceForm .priceQuestion:hover .info_detail {
            display: block;
        }

        .checkForm {
            color: #9b9ca2;
        }

        .checkForm input[type="checkbox"] {
            display: none;
        }

        .checkForm input[type="checkbox"]+label {
            font-weight: 400;
            padding-left: 40px;
            position: relative;
            cursor: pointer;
        }

        .checkForm input[type="checkbox"]+label:before,
        .checkForm input[type="checkbox"]+label:after {
            content: '';
            width: 30px;
            height: 30px;
            border: 1px solid;
            border-radius: 6px;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translate(0, -50%);
        }

        .checkForm input[type="checkbox"]+label:after {
            width: 22px;
            height: 22px;
            margin-left: 4px;
            border-radius: 4px;
            border: 0;
            background: url('../images/checkSign-w.svg') center center no-repeat;
        }

        .checkForm input[type="checkbox"]:checked+label:before {
            border-color: #8883b7;
        }

        .checkForm input[type="checkbox"]:checked+label:after {
            background-color: #8883b7;
        }

        .checkForm a {
            color: #4a4da5;
        }


        .block-shaded {
            box-shadow: 0 0 15px rgba(0, 0, 0, .08);
        }

        .block-shaded {
            border-radius: 12px;
            padding: 15px 30px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, .05);
            margin: 30px 0;
            color: #000;
        }

        .block-shaded:before,
        .block-shaded:after {
            content: ' ';
            width: 100%;
            display: table;
            clear: both;
        }

        .topDark {
            border-top: 5px solid #8883b7;
        }

        .block-shaded h5 {
            color: #323759;
        }

        .block-shaded .dashed {
            color: #323759;
        }

        .block-shaded .dashed li {
            position: relative;
            padding: 4px 0 4px 18px;
        }

        .block-shaded .dashed li:before {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            background-color: #323759;
            left: 0;
            top: 50%;
            transform: translate(0, -50%);
        }

        .block-shaded .dashed li a {
            color: #323759;
        }

        .block-shaded .label-inline {
            display: inline-block;
            padding-top: 8px;
            padding-bottom: 6px;
            border-radius: 20px;
        }

        .block-shaded .label-inline.alert-info {
            border-color: #e7e6f1;
            background-color: #e7e6f1;
        }

        .block-shaded .label-inline.alert-success {
            color: #fff;
            background-color: #00c896;
        }

        .block-shaded .user-info {
            padding: 15px;
            width: 100%;
            display: inline-block;
            margin-bottom: 30px;
        }

        .block-shaded .user-info .user-img {
            width: 122px;
            height: 122px;
            border: 4px solid #d3d3db;
            border-radius: 50%;
            float: left;
        }

        .block-shaded .user-info .user-img img {
            width: 114px;
            height: 114px;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: inset 0 0 3px rgba(0, 0, 0, .1);
        }

        .block-shaded .user-info .user-details {
            margin-left: 156px;
            padding-top: 25px;
        }

        .block-shaded .user-info .user-details h6 {
            color: #000029;
        }

        .block-shaded .user-info .user-details hr {
            margin: 0 0 8px;
        }

        .block-shaded .user-info .user-details p {
            color: #33375a;
        }

        .block-shaded .block-header {
            margin-bottom: 15px;
        }

        .block-shaded .block-header h5 {
            margin-bottom: 0;
        }

        .block-shaded .block-header p {
            color: #98999f;
            font-size: 13px;
        }

        .block-shaded .orState {
            margin: 15px 0;
            color: #8883b7;
            position: relative;
        }

        .block-shaded .orState:after {
            content: 'oder';
            text-transform: uppercase;
            background-color: #fff;
            padding: 0 12px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .block-shaded .orState>hr {
            border-color: #8082c0;
            margin: 0;
        }

        .book_block {
            display: inline-block;
            width: 100%;
            padding: 15px 0 0;
        }

        .book_block:before,
        .book_block:after {
            content: ' ';
            width: 100%;
            display: table;
            clear: both;
        }

        .book_block .imgBox {
            width: 62px;
            float: left;
        }

        .book_block .book_info {
            margin-left: 82px;
            color: #323759;
        }

        .book_block .book_info h4 {
            margin-top: 0;
        }

        .book_block .book_info .btn {
            margin-top: 0;
            line-height: 15px;
        }

        .book_block .book_info .btn svg {
            width: 15px;
            margin-right: 4px;
            display: inline-block;
            vertical-align: top;
        }

        .topDark {
            border-top: 5px solid #8883b7;
        }


        /*Span Below Logo*/
        .my-span-kr {
            position: relative;
            z-index: 99;
            /*top: 1px;*/
            left: 14%;

        }

        .my-span-kr>svg {
            position: absolute;
            top: 21%;
            left: -46%;

        }

        .my-row-end-kr input.form-control {
            padding-left: 20%;
        }


        /* nav tab li */
        .design-pan-list {
            width: 20px;
            background: #e5c80e;
            height: 20px;
            border-radius: 50%;
        }

        .my-slider-back-kr:hover {
            border: 2px solid red;
             !important;
        }

        .design-click-class {
            display: block;
        }

        .design-click-class:focus {
            border: 2px solid blue !important;
        }

        .image-shadow-click {
            border: 2px solid #b0dcee !important;
        }


        .brdr-tp-sh {
            box-shadow: 0px -7px 0px 0px #7e57c2b5 !important;
            border-radius: 6px !important;
        }


        /*Slider hover image*/
        #design_slide_image_col {
            display: none;
            position: absolute;
            z-index: 999999;
            top: 16%;
        }

        /* Extra small devices (phones, 600px and down) */




        @media only screen and (max-width: 576px) {
            #design_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 29%;
                left: 4%;
                width: 103%;
            }


            /*.contactForm .input-group .input-group-addon{min-width:inherit;background-color:rgba(0,0,0,0);border-right:0;border-radius:20px 0 0 20px;border-color:#d3d3db;color:#9b9ca2;}*/

            .my-container {
                width: 100%;
            }
        }


        @media only screen and (min-width: 576px) {
            #design_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 28%;
                left: 25%;
            }

            /*.contactForm .input-group .input-group-addon{min-width:inherit;background-color:rgba(0,0,0,0);border-right:0;border-radius:20px 0 0 20px;border-color:#d3d3db;color:#9b9ca2;}*/


            .my-container {
                width: 100%;
            }
        }



        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            #design_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 23%;
            }
        }

        @media only screen and (max-width: 767px) {
            .express_block {
                padding: 0px;
            }

            .express_block input[type="checkbox"]+label {
                padding-top: 11px;
                padding-bottom: 11px;
                width: 100%;
            }

            .express_block input[type="checkbox"]+label svg,
            .detail_page .express_block .label_tablet svg {
                width: 30px;
            }

            .express_block input[type="checkbox"]+label span {
                padding: 0px 34px 0px 0px;
            }

            .express_block .label_tablet {
                width: 100%;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            #design_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 28%;
            }

            /*.contactForm .input-group .input-group-addon{min-width:inherit;padding-left:6%;background-color:rgba(0,0,0,0);border-right:0;border-radius:20px 0 0 20px;border-color:#d3d3db;color:#9b9ca2;}*/


        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            #design_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 27%;
            }

            /*.contactForm .input-group .input-group-addon{min-width:inherit;background-color:rgba(0,0,0,0);border-right:0;border-radius:20px 0 0 20px;border-color:#d3d3db;color:#9b9ca2;}*/



        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            #design_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 23%;
                left: 19%;
            }
        }



        /*Slider hover image*/
        #website_slide_image_col {
            display: none;
            position: absolute;
            z-index: 999999;
            top: 35%;
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 576px) {
            #website_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 44%;
                left: 4%;
                width: 103%;
            }

            .my-container {
                width: 100%;
            }
        }


        @media only screen and (min-width: 576px) {
            #website_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 47%;
                left: 25%;
            }

            .my-container {
                width: 100%;
            }
        }




        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            #website_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 26%;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            #website_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 45%;
            }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            #website_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 45%;
            }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            #website_slide_image_col {
                display: none;
                position: absolute;
                z-index: 999999;
                top: 42%;
                left: 19%;
            }
        }


        .label-hover-cursor {
            cursor: pointer;
        }

    </style>
</head>

<body class="bg-light">
<div class="container-fluid">

        <h2 class="text-uppercase logo ml-2 mt-3">
            <a href="https://die.bewerbung.one/home">
                <img src="https://die.bewerbung.one/images/logo.png" alt="">
            </a>

        </h2>
        <!--/Logo_Bar-->

    </div>
	 @if (session('message'))
    <div class="demo-spacing-0">
      <div class="alert alert-danger" role="alert">
        <div class="alert-body"><strong>{{(session('message'))}}</strong></div>
      </div>
    </div>
  @endif
    <!-- Start Content-->
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 col-sm-12">
                <div class="text-center">
                    <h4>
                        <font style="vertical-align: inherit;">
                            <font class="" style="vertical-align: inherit;">Kostenlose und unverbindliche
                                Registrierung</font>
                        </font>
                    </h4>
                </div>
                <div class="separator text-center">
                    <hr>
                    <a href="{{ url('add_order') }}" style="background-color: #8883b7;color: white;top: 50%">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Produkt wechseln</font>
                        </font>
                    </a>

                </div>
            </div>
        </div>

        <div class="row">
            <div class=" offset-md-2 col-md-8 col-sm-8">
                <div class="card-box brdr-tp-sh">
                    <div class="row pb-3" style="border-bottom: 0.5px solid lightgrey">
                        <div class="col-md-2 col-sm-2">
                            <img src="{{ url('images/products/' . $product->product_image) }}" style="width:100%;"
                                alt="">
                        </div>
                        <div class="col-md-8 col-sm-8">

                            <div class="col-md-12 col-sm-12">
                                <p class="h4 m-0">{{ $product->product_title }}</p>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <p class="h3 mr-3" style="display: inline-block"><span
                                        id="product-price-text">{{ $product->regular_price }}</span>€</p>
                                <button class="btn btn-md btn-primary"
                                    @if ($product->getOriginal('popular') == 1) style="border-radius: 22px;background-color: #6262de;" @else style="visibility: hidden;background-color: #6262de;" @endif><i
                                        class="mdi mdi-star"></i>Sehr berühmt</button>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <p class="h4">{{ $product->product_subtitle }}</p>
                            {!! $product->product_description !!}
                        </div>
                    </div>
                </div> <!-- end card-box-->

            </div>
        </div>

        {{-- ------------------------------------ DESIGNS PORTION STARTS HERE -------------------- --}}

        <div class="row mt-3" id="designs_slider_div">
            <div class="col-md-12 col-sm-12">
                <div class="separator text-center">
                    <hr class="hr" style="margin-left: 0px;">
                    <a href="javascript:void(0)">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Bewerbungs Designs</font>
                        </font>
                    </a>
                    <hr class="hr" style="position: relative;top: -17px;margin-right: 0px;">
                </div>
            </div>
        </div>

        <div class="row">

        </div>
        <!-- Set up your HTML -->
        <div class="row m-5" id="design_slider">
            <div class="col-md-12 col-sm-12">
                <span id="designs_slider_error" style="display: none;color: red">Please Select a Design</span>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" style="border: 0">
                    @foreach ($design_categories as $category)
                        <li class="nav-item colorful-tabs">
                            <a class="nav-link" data-toggle="tab" href="#d{{ $category->id }}"
                                style="border-radius: 35px; background-color: {{ $category->name }}; padding: 15px;margin: 10px; border: 6px solid white;"></a>
                        </li>
                    @endforeach
                    <li class="nav-item colorful-tabs">
                        <a class="nav-link active btn btn-primary mt-2"
                            style="color:white;border-radius:22px;padding-right:30px;padding-left:30px;background-color: #454899;"
                            data-toggle="tab" href="#dall">Alle</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach ($design_categories as $category)
                        <div class="tab-pane container fade " id="d{{ $category->id }}">
                            <div class="owl-carousel">
                                @foreach ($designs as $design)
                                    @if ($design->product_category == $category->name)
                                        <div>
                                            <a type="button" class="ml-4 btn btn-secondary text-center text-light"
                                                style="border-radius: 30px 30px 30px 30px;">Vorschau &nbsp;<i
                                                    class="fa fa-external-link float_right" aria-hidden="true"></i></a>
                                            <div class="item priceProduct-design my-slider-back-kr design-class-pick"
                                                price="{{ $design->regular_price }}">

                                                <a id="{{ $design->id }}" onclick="getDesignId(this.id)">

                                                    <div class="imgTemp resume-design">
                                                        <label for="all-resume-template-0" class="label-hover-cursor">
                                                            <img src="{{ url('images/designs/primary/' . $design->primary_image) }}"
                                                                data-src="{{ url('images/designs/secondary/' . $design->secondary_image) }}"
                                                                class="thumbnail-design"
                                                                style="width: 150px;height: 100px;">
                                                            <span class="priceProduct">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;"
                                                                        id="designPrice{{ $design->id }}">
                                                                        {{ $design->regular_price }}</font>
                                                                    <font style="vertical-align: inherit;"> €</font>
                                                                </font>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach


                    <div class="tab-pane container active" id="dall">

                        <div class="owl-carousel">
                            @foreach ($designs as $design)
                                <div>
                                    <a type="button" class="ml-4 btn btn-secondary text-center text-light"
                                        style="border-radius: 30px 30px 30px 30px;">Vorschau &nbsp;<i
                                            class="fa fa-external-link float_right" aria-hidden="true"></i></a>
                                    <div class="item priceProduct-design my-slider-back-kr design-class-pick"
                                        price="{{ $design->regular_price }}">
                                        <a id="{{ $design->id }}" onclick="getDesignId(this.id)">
                                            <div class="imgTemp resume-design">
                                                <label for="all-resume-template-0" class="label-hover-cursor">
                                                    <img src="{{ url('images/designs/primary/' . $design->primary_image) }}"
                                                        data-src="{{ url('images/designs/secondary/' . $design->secondary_image) }}"
                                                        class="" style="width: 150px;height: 100px;">
                                                    <span class="priceProduct">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;"
                                                                id="designPrice{{ $design->id }}">
                                                                {{ $design->regular_price }}</font>
                                                            <font style="vertical-align: inherit;"> €</font>
                                                        </font>
                                                    </span>
                                                </label>
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>



            </div>
            <div class="offset-2 col-md-6 col-sm-6" id="design_slide_image_col">
                <img id="largeImage" src="https://die.bewerbung.one/images/logo.png" style="width: 60%;display:none">
            </div>
        </div>

        {{-- ------------------------------------ DESIGNS PORTION ENDS HERE -------------------- --}}



        {{-- ------------------------------------ WEBSITES PORTION STARTS HERE -------------------- --}}
        <div class="row mt-3" id="homepage_slider_div">
            <div class="col-md-12 col-sm-12">
                <div class="separator text-center">

                    <hr class="hr" style="margin-left: 0px;">
                    <a href="javascript:void(0)">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Bewerbungs Home Page</font>
                        </font>
                    </a>
                    <hr class="hr" style="position: relative;top: -17px;margin-right: 0px;">

                </div>
            </div>
        </div>

        <div class="row m-5" id="homepage_slider">
            <div class="col-md-12 col-sm-12">
                <span id="homepage_slider_error" style="display: none;color: red">Please Select a Homepage</span>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    @foreach ($website_categories as $category)
                        <li class="nav-item">
                            <a class="nav-link @if ($loop->index == 0) active @endif" data-toggle="tab"
                                href="#w{{ $category->id }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach ($website_categories as $category)
                        <div class="tab-pane container @if ($loop->index == 0) active @else fade @endif"
                            id="w{{ $category->id }}">

                            <div class="owl-carousel">
                                @foreach ($websites as $website)
                                    @if ($website->product_category == $category->name)
                                        <div>
                                            <a type="button" class="ml-3 btn btn-secondary text-center text-light"
                                                style="border-radius: 30px 30px 30px 30px;">Live Vorschau<i
                                                    class="fa fa-external-link float_right" aria-hidden="true"></i></a>
                                            <div class="item priceProduct-design website-class-pick"
                                                price="{{ $website->regular_price }}">

                                                <a id="{{ $website->id }}" onclick="getWebsiteId(this.id)">
                                                    <div class="imgTemp resume-design">
                                                        <label for="all-resume-template-0" class="label-hover-cursor">
                                                            <img src="{{ url('images/websites//primary/' . $website->primary_image) }}"
                                                                data-src="{{ url('images/websites/secondary/' . $website->secondary_image) }}"
                                                                class=""
                                                                style="width: 150px;height: 100px;">
                                                            <span class="priceProduct">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;"
                                                                        id="websitePrice{{ $website->id }}">
                                                                        {{ $website->regular_price }}</font>
                                                                    <font style="vertical-align: inherit;"> €</font>
                                                                </font>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="offset-2 col-md-6 col-sm-6" id="website_slide_image_col" style="display: none;">
                <img id="largeImage-website" src="" style="width: 40%;display:none">
            </div>
        </div>

        {{-- ------------------------------------ WEBSITES PORTION ENDS HERE -------------------- --}}

        {{-- ------------------------------------ Processing -------------------- --}}
        <div class="row mt-3" id="designs_slider_div">
            <div class="col-md-12 col-sm-12">
                <div class="separator text-center">
                    <hr class="hr" style="margin-left: 0px;">
                    <a href="javascript:void(0)">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Processing</font>
                        </font>
                    </a>
                    <hr class="hr" style="position: relative;top: -17px;margin-right: 0px;">
                </div>
            </div>
        </div>
         {{-- <div class="mt-5"> --}}
        <div class="btn-group d-flex justify-content-center">
            <button onclick="valueChanged3()" class="text-dark"><strong>0€</strong><br>week</button>
            <button onclick="valueChanged1()" id="bdl" class="text-dark"><strong
                    class="text-success">19€</strong><br>3 Days</button>
            <button onclick="valueChanged2()" class="text-dark"><strong
                    class="text-danger">59€</strong><br>24h-Express</button>
        </div>
         {{-- </div> --}}
        <div class="mt-3 d-flex justify-content-center align-items-center">
            <i class="fe-bell noti-icon"></i>&nbsp;&nbsp;
            <span>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Completion on </font>
                </font>
            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong class="text-primary">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;" id="completionDate2">Tuesday, 03, November 2019</font>
                </font>
            </strong>

        </div>
        <div class="mt-5 d-flex justify-content-center align-items-center">
            <p>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">* der Express-24h Service gilt nur für die Erstellung des
                        Lebenslaufes, Deckblatts und der Anschreiben</font>
                </font>
            </p>
        </div>

        {{-- ------------------------------------ PROCESSING STARTS HERE -------------------- --}}

            {{-- <div class="row mt-3">
                <div class="col-md-12 col-sm-12">
                    <div class="separator text-center">

                        <hr class="hr" style="margin-left: 0px;">
                        <a href="javascript:void(0)">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Bearbeitungszeit</font>
                            </font>
                        </a>
                        <hr class="hr" style="position: relative;top: -17px;margin-right: 0px;">

                    </div>
                </div>
            </div> --}}


        {{-- <div class="express_block">
            <div class="text-center">
                <input type="checkbox" name="express" id="express" onchange="valueChanged()">
                <label for="express">
                    <svg viewBox="0 0 44 44">
                        <path
                            d="M3.045,22c0-10.091,8.19-18.281,18.281-18.281S39.607,11.909,39.607,22h1.97 c0.035-11.196-9.02-20.285-20.216-20.285S1.075,10.804,1.075,22c0,11.162,9.02,20.217,20.182,20.285v-1.97 C11.201,40.246,3.045,32.057,3.045,22z">
                        </path>
                        <path
                            d="M31.003,16.989c0.484-0.312,0.588-0.968,0.276-1.451c-0.312-0.484-0.968-0.588-1.451-0.276l-6.981,4.699 c-0.587-0.414-1.348-0.622-2.108-0.414l-6.151-9.192c-0.311-0.484-0.968-0.588-1.452-0.277c-0.484,0.312-0.587,0.968-0.276,1.452 l6.255,9.296c-0.276,0.553-0.38,1.175-0.242,1.831c0.346,1.348,1.728,2.178,3.076,1.832c1.209-0.311,2.004-1.451,1.9-2.661 L31.003,16.989z">
                        </path>
                        <path
                            d="M29.827,34.199c0.795-0.968,1.383-1.797,1.764-2.558c0.379-0.761,0.518-1.452,0.518-2.143 c0-1.175-0.346-2.108-1.071-2.765c-0.69-0.656-1.659-1.002-2.903-1.002c-0.863,0-1.589,0.172-2.246,0.553 c-0.656,0.38-1.141,0.898-1.485,1.555c-0.346,0.657-0.519,1.383-0.519,2.212h2.107c0-0.795,0.174-1.417,0.554-1.866 s0.898-0.691,1.589-0.691c0.588,0,1.037,0.208,1.383,0.588s0.519,0.934,0.519,1.59c0,0.483-0.138,1.002-0.38,1.486 c-0.242,0.483-0.691,1.105-1.313,1.831l-4.216,4.977v1.589h8.501v-1.831h-5.875L29.827,34.199z">
                        </path>
                        <path
                            d="M39.228,34.717h-3.318l3.145-5.426l0.174-0.311V34.717z M41.335,34.717V25.87h-2.177l-5.426,9.296 l0.069,1.383h5.46v3.041h2.108v-3.041h1.555v-1.832H41.335z">
                        </path>
                    </svg>
                    <span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Express-24h Bearbeitung 59,00 €</font>
                        </font>
                    </span>
                </label>
                <div class="label_tablet">
                    <svg viewBox="0 0 44 44">
                        <path
                            d="M3.045,22c0-10.091,8.19-18.281,18.281-18.281S39.607,11.909,39.607,22h1.97 c0.035-11.196-9.02-20.285-20.216-20.285S1.075,10.804,1.075,22c0,11.162,9.02,20.217,20.182,20.285v-1.97 C11.201,40.246,3.045,32.057,3.045,22z">
                        </path>
                        <path
                            d="M31.003,16.989c0.484-0.312,0.588-0.968,0.276-1.451c-0.312-0.484-0.968-0.588-1.451-0.276l-6.981,4.699 c-0.587-0.414-1.348-0.622-2.108-0.414l-6.151-9.192c-0.311-0.484-0.968-0.588-1.452-0.277c-0.484,0.312-0.587,0.968-0.276,1.452 l6.255,9.296c-0.276,0.553-0.38,1.175-0.242,1.831c0.346,1.348,1.728,2.178,3.076,1.832c1.209-0.311,2.004-1.451,1.9-2.661 L31.003,16.989z">
                        </path>
                        <path
                            d="M29.827,34.199c0.795-0.968,1.383-1.797,1.764-2.558c0.379-0.761,0.518-1.452,0.518-2.143 c0-1.175-0.346-2.108-1.071-2.765c-0.69-0.656-1.659-1.002-2.903-1.002c-0.863,0-1.589,0.172-2.246,0.553 c-0.656,0.38-1.141,0.898-1.485,1.555c-0.346,0.657-0.519,1.383-0.519,2.212h2.107c0-0.795,0.174-1.417,0.554-1.866 s0.898-0.691,1.589-0.691c0.588,0,1.037,0.208,1.383,0.588s0.519,0.934,0.519,1.59c0,0.483-0.138,1.002-0.38,1.486 c-0.242,0.483-0.691,1.105-1.313,1.831l-4.216,4.977v1.589h8.501v-1.831h-5.875L29.827,34.199z">
                        </path>
                        <path
                            d="M39.228,34.717h-3.318l3.145-5.426l0.174-0.311V34.717z M41.335,34.717V25.87h-2.177l-5.426,9.296 l0.069,1.383h5.46v3.041h2.108v-3.041h1.555v-1.832H41.335z">
                        </path>
                    </svg>
                    <span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Fertigstellung </font>
                        </font>
                    </span>
                    <strong>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;" id="completionDate">Monday 3.11.2019</font>
                        </font>
                    </strong>
                </div>
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">* der Express-24h Service gilt nur für die Erstellung des
                            Lebenslaufes, Deckblatts und der Anschreiben</font>
                    </font>
                </p>
            </div>
        </div> --}}
        {{-- ------------------------------------ PROCESSING PORTION ENDS HERE -------------------- --}}

        {{-- ------------------------------------ CONTACT STARTS HERE -------------------- --}}

        {{-- @if (!\Illuminate\Support\Facades\Auth::check()) --}}
        <div class="showform" style="display: none">
        <div class="row mt-3">
            <div class="col-md-12 col-sm-12">
                <div class="separator text-center">
                    <hr class="hr" style="margin-left: 0px;">
                    <a href="javascript:void(0)">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Kontakt</font>
                        </font>
                    </a>
                    <hr class="hr" style="position: relative;top: -17px;margin-right: 0px;">

                </div>
            </div>
        </div>

        <form method="POST" action="{{ url('store1') }}" onsubmit="return validateForm()">
            @csrf
            <div class="row contactForm">
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="form-group" id="gender_div">
                        <div class="radio-inline">
                            <input type="radio" value="male" name="gender" id="radio-01" />
                            <label for="radio-01">Mr</label>

                            <input type="radio" value="female" name="gender" id="radio-02" />
                            <label for="radio-02">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mrs</font>
                                </font>
                            </label>

                            <span class="invalid-feedback" role="alert" id="gender_alert" style="display: none">
                                <strong>Gender is required</strong>
                            </span>

                        </div>


                    </div>
                    <div class="row my-row-end-kr">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon my-span-kr">
                                        <svg viewBox="0 0 20 20">
                                            <path
                                                d="M7.081,4.904c0-0.011,0.004-0.022,0.004-0.03c0.125-2.723,2.059-3.016,2.887-3.016h0.015 c0.007,0,0.019,0,0.03,0c1.025,0.022,2.77,0.44,2.887,3.016c0,0.012,0,0.023,0.004,0.03c0.004,0.026,0.27,2.609-0.938,3.97 c-0.479,0.539-1.117,0.805-1.956,0.813c-0.007,0-0.011,0-0.019,0c-0.007,0-0.011,0-0.019,0C9.139,9.679,8.497,9.413,8.022,8.874 C6.818,7.521,7.077,4.928,7.081,4.904z M9.933,10.712c0.019,0,0.038,0,0.061,0c0.008,0,0.015,0,0.023,0c0.011,0,0.026,0,0.038,0 c1.112-0.019,2.013-0.41,2.678-1.158c1.462-1.648,1.22-4.475,1.192-4.744c-0.095-2.024-1.052-2.993-1.842-3.445 c-0.589-0.338-1.276-0.52-2.043-0.535h-0.027c-0.004,0-0.011,0-0.015,0H9.975c-0.421,0-1.25,0.068-2.043,0.521 c-0.797,0.452-1.77,1.42-1.865,3.46c-0.026,0.27-0.27,3.096,1.192,4.744C7.92,10.302,8.82,10.693,9.933,10.712z">
                                            </path>
                                            <path
                                                d="M17.8,15.399c0-0.004,0-0.008,0-0.012c0-0.03-0.004-0.061-0.004-0.095 c-0.023-0.752-0.072-2.511-1.721-3.073c-0.012-0.004-0.026-0.008-0.038-0.012c-1.713-0.437-3.138-1.424-3.152-1.436 c-0.231-0.163-0.551-0.105-0.714,0.126c-0.164,0.231-0.106,0.551,0.125,0.714c0.064,0.046,1.576,1.098,3.468,1.584 c0.886,0.315,0.983,1.261,1.011,2.127c0,0.034,0,0.064,0.004,0.095c0.004,0.342-0.02,0.87-0.08,1.174 c-0.615,0.35-3.027,1.558-6.696,1.558c-3.654,0-6.081-1.212-6.7-1.562c-0.061-0.304-0.087-0.832-0.08-1.174 c0-0.03,0.004-0.061,0.004-0.095c0.026-0.866,0.125-1.812,1.01-2.127c1.892-0.486,3.403-1.542,3.468-1.584 c0.231-0.163,0.289-0.482,0.125-0.714c-0.163-0.231-0.482-0.289-0.714-0.126C7.1,10.78,5.684,11.768,3.963,12.205 c-0.016,0.003-0.027,0.007-0.038,0.011c-1.648,0.566-1.698,2.325-1.721,3.073c0,0.034,0,0.064-0.004,0.095c0,0.004,0,0.008,0,0.012 c-0.004,0.197-0.007,1.211,0.194,1.721c0.038,0.099,0.106,0.182,0.198,0.239c0.114,0.075,2.845,1.815,7.414,1.815 s7.3-1.744,7.414-1.815c0.087-0.058,0.159-0.141,0.197-0.239C17.808,16.61,17.804,15.597,17.8,15.399z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" name="name" placeholder="Vorname"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon my-span-kr">
                                        <svg viewBox="0 0 20 20">
                                            <path
                                                d="M7.081,4.904c0-0.011,0.004-0.022,0.004-0.03c0.125-2.723,2.059-3.016,2.887-3.016h0.015 c0.007,0,0.019,0,0.03,0c1.025,0.022,2.77,0.44,2.887,3.016c0,0.012,0,0.023,0.004,0.03c0.004,0.026,0.27,2.609-0.938,3.97 c-0.479,0.539-1.117,0.805-1.956,0.813c-0.007,0-0.011,0-0.019,0c-0.007,0-0.011,0-0.019,0C9.139,9.679,8.497,9.413,8.022,8.874 C6.818,7.521,7.077,4.928,7.081,4.904z M9.933,10.712c0.019,0,0.038,0,0.061,0c0.008,0,0.015,0,0.023,0c0.011,0,0.026,0,0.038,0 c1.112-0.019,2.013-0.41,2.678-1.158c1.462-1.648,1.22-4.475,1.192-4.744c-0.095-2.024-1.052-2.993-1.842-3.445 c-0.589-0.338-1.276-0.52-2.043-0.535h-0.027c-0.004,0-0.011,0-0.015,0H9.975c-0.421,0-1.25,0.068-2.043,0.521 c-0.797,0.452-1.77,1.42-1.865,3.46c-0.026,0.27-0.27,3.096,1.192,4.744C7.92,10.302,8.82,10.693,9.933,10.712z">
                                            </path>
                                            <path
                                                d="M17.8,15.399c0-0.004,0-0.008,0-0.012c0-0.03-0.004-0.061-0.004-0.095 c-0.023-0.752-0.072-2.511-1.721-3.073c-0.012-0.004-0.026-0.008-0.038-0.012c-1.713-0.437-3.138-1.424-3.152-1.436 c-0.231-0.163-0.551-0.105-0.714,0.126c-0.164,0.231-0.106,0.551,0.125,0.714c0.064,0.046,1.576,1.098,3.468,1.584 c0.886,0.315,0.983,1.261,1.011,2.127c0,0.034,0,0.064,0.004,0.095c0.004,0.342-0.02,0.87-0.08,1.174 c-0.615,0.35-3.027,1.558-6.696,1.558c-3.654,0-6.081-1.212-6.7-1.562c-0.061-0.304-0.087-0.832-0.08-1.174 c0-0.03,0.004-0.061,0.004-0.095c0.026-0.866,0.125-1.812,1.01-2.127c1.892-0.486,3.403-1.542,3.468-1.584 c0.231-0.163,0.289-0.482,0.125-0.714c-0.163-0.231-0.482-0.289-0.714-0.126C7.1,10.78,5.684,11.768,3.963,12.205 c-0.016,0.003-0.027,0.007-0.038,0.011c-1.648,0.566-1.698,2.325-1.721,3.073c0,0.034,0,0.064-0.004,0.095c0,0.004,0,0.008,0,0.012 c-0.004,0.197-0.007,1.211,0.194,1.721c0.038,0.099,0.106,0.182,0.198,0.239c0.114,0.075,2.845,1.815,7.414,1.815 s7.3-1.744,7.414-1.815c0.087-0.058,0.159-0.141,0.197-0.239C17.808,16.61,17.804,15.597,17.8,15.399z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" name="nickname" placeholder="Nachname"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon my-span-kr">
                                        <svg viewBox="0 0 18 18">
                                            <path
                                                d="M8.643,11.497c-1.427,0-2.497-1.158-2.497-2.497c0-1.335,1.07-2.497,2.405-2.497 c1.123,0,2.18,0.753,2.494,1.838c0.002,0.006,0.002,0.015,0.002,0.023V9.68c0,0.006,0,0.015-0.002,0.021 C10.762,10.762,9.825,11.497,8.643,11.497z M9,1.87C5.079,1.87,1.87,5.079,1.87,9S5.079,16.13,9,16.13 c0.491,0,0.984-0.041,1.445-0.156c0.336-0.083,0.537-0.429,0.443-0.766l-0.037-0.13c-0.082-0.293-0.381-0.473-0.678-0.408 C9.804,14.753,9.422,14.791,9,14.791c-3.209,0-5.794-2.585-5.794-5.794S5.88,3.294,9.089,3.294c3.208,0,5.794,2.585,5.794,5.794 c0,1.066-0.355,2.134-0.889,3.025c-0.004,0.003-0.006,0.006-0.01,0.013c-0.041,0.05-0.393,0.439-0.975,0.439 c-0.266,0-0.447-0.178-0.447-0.178c-0.176-0.177-0.176-0.534-0.176-0.711V5.995c0-0.311-0.252-0.562-0.563-0.562h-0.158 c-0.34,0-0.619,0.275-0.619,0.618c0,0.065-0.076,0.104-0.127,0.062c-0.646-0.535-1.474-0.857-2.366-0.857 C6.503,5.256,4.81,6.949,4.81,9s1.693,3.744,3.744,3.744c0.884,0,1.714-0.313,2.37-0.836c0.051-0.039,0.123-0.01,0.127,0.056 c0.023,0.363,0.129,0.913,0.531,1.315c0.266,0.266,0.713,0.534,1.428,0.534c1.07,0,1.781-0.624,2.051-1.069 c0.711-1.07,1.068-2.405,1.068-3.744C16.129,5.079,12.92,1.87,9,1.87z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail"
                                        required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon my-span-kr">
                                        <svg viewBox="0 0 20 20">
                                            <path
                                                d="M5.203,18.064v-2.369h9.59v2.369c0,0.289-0.234,0.527-0.527,0.527H5.73 C5.441,18.592,5.203,18.357,5.203,18.064z M5.73,1.404h8.539c0.289,0,0.527,0.234,0.527,0.526v1H5.203v-1 C5.203,1.638,5.441,1.404,5.73,1.404z M5.203,3.886h9.59v10.858h-9.59V3.886z M15.753,18.064V1.93c0-0.815-0.663-1.482-1.483-1.482 H5.73c-0.816,0-1.483,0.663-1.483,1.482v16.138c0,0.816,0.663,1.484,1.483,1.484h8.539C15.086,19.549,15.753,18.885,15.753,18.064z">
                                            </path>
                                            <path
                                                d="M10.969,16.707h-1.94c-0.265,0-0.479,0.215-0.479,0.48s0.215,0.48,0.479,0.48h1.94 c0.265,0,0.479-0.215,0.479-0.48S11.233,16.707,10.969,16.707z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="number" name="phonenumber" class="form-control"
                                        placeholder="Telefonnummer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
            {{-- ------------------------------------ CONTACT ENDS HERE -------------------- --}}

            <div class="row mt-3">
                <div class="col-md-12 col-sm-12">
                    <div class="separator text-center">

                        <hr class="hr" style="margin-left: 0px;">
                        <a href="javascript:void(0)">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Kosten</font>
                            </font>
                        </a>
                        <hr class="hr" style="position: relative;top: -17px;margin-right: 0px;">
                    </div>
                </div>
            </div>

            <div class="row priceForm">
                <div class="col-sm-7">

                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="text-center">
                        <div class="price_label h4">
                            <span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Gesamtsumme: </font>
                                </font>
                            </span>
                            <strong id="price-view">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;" id="price-text">
                                        {{ $product->regular_price }}</font>
                                    <font style="vertical-align: inherit;"> €</font>
                                </font>
                            </strong>
                            <br>
                            <div class="express-pricing-container" style="display: none; background-color: #00A6C7;">
                                <span style="color: #7e57c2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Express 24h: </font>
                                    </font>
                                </span>
                                <strong id="express-price-total" style="color: #7e57c2">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">59€</font>
                                    </font>
                                </strong>
                            </div>
                        </div>
                        @if (!\Illuminate\Support\Facades\Auth::check())
                            <div class="priceQuestion">
                                <button type="button" class="btn btn-primary">Muss ich sofort bezahlen?</button>
                                <div class="info_detail">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Nein! </font>
                                    </font><br>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Die Anmeldung ist </font>
                                    </font><strong>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">unverbindlich</font>
                                        </font>
                                    </strong><br>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            und völlig kostenlos. </font>
                                    </font><strong>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"></font>
                                        </font>
                                    </strong><br>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Die Zahlung erfolgt erst nach Fertigstellung der Unterlagen und Vorauskasse
                                            zur Expressabwicklung.</font>
                                    </font>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-md-12 col-sm-12">
                    <div class="separator text-center">

                        <hr class="hr" style="margin-left: 0px;">
                        <a href="javascript:void(0)">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">AGB und Datenschutz</font>
                            </font>
                        </a>
                        <hr class="hr" style="position: relative;top: -17px;margin-right: 0px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkBox" type="checkbox">

                        <label for="checkBox" style="margin-left:12px">
                            Ich habe die Allgemeinen Geschäftsbedingungen und die Datenschutzrichtlinien gelesen und
                            stimme zu.
                        </label>

                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="text-right">
                        @if (\Illuminate\Support\Facades\Auth::check())
                            <form method="POST" action="{{ url('store1') }}"
                                onsubmit="return validateForm()">
                                @csrf
                        @endif
                        <input type="hidden" name="product" value="{{ $product->id }}" />
                        <input type="hidden" name="design" id="design_input" />
                        <input type="hidden" name="express" id="express_input" value="0" />
                        <input type="hidden" name="website" id="website_input" />




                        @if (!\Illuminate\Support\Facades\Auth::check())
                            <button type="submit" class="btn btn-primary">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Kostenlos registrieren</font>
                                </font>
                            </button>
                        @else
                            <button type="submit" class="btn btn-primary">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Bestellung hinzufügen</font>
                                </font>
                            </button>
                        @endif

                    </div>
                </div>
            </div>
        </form>
        </div>
        <button onclick="show()"  class="hide btn btn-primary float-right">
                Bestellung hinzufügen
        </button>
    </div>
</body>
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/ui/prism.min.js')) }}"></script>
@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('js/core/app.js')) }}"></script>
<script type="text/javascript" src="{{ url('js/owl.carousel.min.js') }}"></script>
</html>
<script type="text/javascript">
    var total_price = $('#price-text').text().replace(/,/g, '.');
    var product_price = $('#product-price-text').text().replace(/,/g, '.');
    var design_price = 0.00;
    var website_price = 0.00;
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });

    });


    function getDesignId(design_id) {
        document.getElementById('design_input').value = design_id;
        design_price = $('#designPrice' + design_id).text().replace(/,/g, '.');
        total_price = parseFloat(design_price) + parseFloat(website_price) + parseFloat(product_price);

        $('#price-text').text(total_price.toFixed(2).replace('.', ','));


    }

    function getWebsiteId(website_id) {
        document.getElementById('website_input').value = website_id;
        website_price = $('#websitePrice' + website_id).text().replace(/,/g, '.');
        total_price = parseFloat(design_price) + parseFloat(website_price) + parseFloat(product_price);

        $('#price-text').text(total_price.toFixed(2).replace('.', ','));
    }
</script>


<script type="text/javascript">
    function valueChanged() {
        var days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        var date = new Date();


        if ($('#express').is(":checked")) {
            $(".express-pricing-container").show();
            document.getElementById('express_input').value = 59.00;
            date.setDate(date.getDate() + 1);

            $('#completionDate').text(days[date.getDay()] + ' ' + date.getDate() + '.' + (date.getMonth() + 1) + '.' +
                date.getFullYear());

        } else {
            $(".express-pricing-container").hide();
            document.getElementById('express_input').value = 0;

            date.setDate(date.getDate() + 4);

            $('#completionDate').text(days[date.getDay()] + ' ' + date.getDate() + '.' + (date.getMonth() + 1) + '.' +
                date.getFullYear());

        }
    }


    function valueChanged3() {
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var month = ['Janaury', 'Feb', 'March', 'April', 'May', 'june', 'july','August','september','october','November','December'];
        var date = new Date();
        if ("1" == "1") {
            $(".express-pricing-container").show();
            $("#express-price-total").text("0€");
            document.getElementById('express_input').value = 0;
            date.setDate(date.getDate() +8);
            $('#completionDate2').text(days[date.getDay()] + ' ' + date.getDate() + '.' + month[(date.getMonth())] + '.' +
                date.getFullYear());

        }
    }

    function valueChanged1() {
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var month = ['Janaury', 'Feb', 'March', 'April', 'May', 'june', 'july','August','september','october','November','December'];
        var date = new Date();
        if ("1" == "1") {
            $(".express-pricing-container").show();
            $("#express-price-total").text("19€");
            document.getElementById('express_input').value = 0;
            date.setDate(date.getDate() +3);
            $('#completionDate2').text(days[date.getDay()] + ' ' + [date.getDate()] + '.' + month[(date.getMonth())] + '.' +
                date.getFullYear());

        }

    }

    function valueChanged2() {
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var month = ['Janaury', 'Feb', 'March', 'April', 'May', 'june', 'july','August','september','october','November','December'];
        var date = new Date();
        if ("1" == "1") {
            $(".express-pricing-container").show();
            $("#express-price-total").text("59€");
            document.getElementById('express_input').value = 0;
            date.setDate(date.getDate()+1);
            $('#completionDate2').text(days[date.getDay()] + ' ' + [date.getDate()] + '.' + month[(date.getMonth())] + '.' +
                date.getFullYear());

        }

    }

    function validateForm() {
        if (!$('#design_input').val()) {
            $("#design_slider").css("border", "1px solid red"); //more efficient
            $('#designs_slider_error').show();
            $('html, body').animate({
                scrollTop: $("#designs_slider_div").offset().top
            }, 2000);
            return false;
        } else if (!$('#website_input').val()) {
            $("#homepage_slider").css("border", "1px solid red"); //more efficient
            $('#homepage_slider_error').show();
            $('html, body').animate({
                scrollTop: $("#homepage_slider_div").offset().top
            }, 2000);

            return false;
        } else if (!$('#checkBox').is(":checked")) {
            alert('Please accept the agreement');
            return false;
        } else if (!$('input[name="gender"]').is(':checked')) {
            $('#gender_alert').css('display', 'inline-block');
            $('html, body').animate({
                scrollTop: $("#gender_div").offset().top
            }, 1000);
            return false;

        } else {
            return true;
        }

    }



    $(document).ready(function() {
        var days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        var date = new Date();
        date.setDate(date.getDate() + 4);

        $('#completionDate').text(days[date.getDay()] + ' ' + date.getDate() + '.' + (date.getMonth() + 1) +
            '.' + date.getFullYear());
    });



    $(".thumbnail-design").on('mouseenter', function() {
        var source = $(this).attr('data-src');

        $('#largeImage').attr('src', source);
        $("#design_slide_image_col").show();
        $('#largeImage').show();


    }).on('mouseleave', function() {
        $('#largeImage').hide();
        $("#design_slide_image_col").hide();

    });

    $(".thumbnail-website").on('mouseenter', function() {
        var source = $(this).attr('data-src');
        $('#largeImage-website').attr('src', source);
        $("#website_slide_image_col").show();
        $('#largeImage-website').show();


    }).on('mouseleave', function() {
        $('#largeImage-website').hide();
        $("#website_slide_image_col").hide();

    });

    $('.design-class-pick').click(function() {
        $('.design-class-pick').removeClass('image-shadow-click');
        $(this).addClass('image-shadow-click');
    });
    $('.website-class-pick').click(function() {
        $('.website-class-pick').removeClass('image-shadow-click');
        $(this).addClass('image-shadow-click');
    });



    $('.colorful-tabs a').on('click', function() {
        $('.colorful-tabs a').css("border-color", "white");
        $(this).css("border-color", "#d3d3db");


    });

    function show() {
        $(".showform").show();
        $(".hide").hide();
    }
</script>
