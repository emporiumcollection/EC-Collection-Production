
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>
        /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f7f7f7;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

        .body {
            background-color: #f7f7f7;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 550px;
            padding: 10px;
        }

        /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            text-decoration: underline;
        }

        /* -------------------------------------
          BUTTONS
      ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn>tbody>tr>td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }

        .btn-primary table td {
            background-color: #3498db;
        }

        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #dfdfdf;
            margin: 20px 0;
        }

        .color-primary {
            color: #89A49F;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .btn-default {
            color: #fff;
            background-color: #89a49f;
            border-color: #89a49f;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
        }

        /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }
    </style>
</head>

<body class="">
    <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">
                    <div class="align-center" style="margin-bottom: 20px;margin-top: 60px;">
                        <img src="http://design.emporium-voyage.com/images/logo-emporium-collection.png" alt="">
                    </div>
                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper">
                                <h2 class="align-center font-weight-bold"> New Order!</h2>
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">Dear Administrator,</p>
                                            <p>Please find below new order details.</p>

                                            <p class="font-weight-bold color-primary mb-0">Booking Details </p>
                                            <hr style="margin-top: 10px;">

                                            <p>
                                                Guest Name: <br>
                                                <b>{{$user->first_name}} {{$user->last_name}}</b>
                                            </p>
                                            <p>
                                                Booking ID:<b>{{ $booking_number }}</b> <br>
                                                Membership Level : <b>Lifestyle</b> <br>
                                                Booked from : <b>{{ \Config::get('app.currentdomain')}}</b>
                                            </p>

                                            <div class="res-detail"
                                                style="background: #F7F7F7;padding:20px;margin-bottom: 30px;">
                                                <p><b>{{ $reservations->property->property_short_name }}</b></p>
                                                <p>
                                                    {{ $reservations->property->address }}
                                                </p>
                                                <hr>
                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                                    style="margin-bottom: 30px;margin-top: 30px;">
                                                    <tr>
                                                        <td class="align-center"
                                                            style="border-right: 1px solid #dfdfdf;">
                                                            Check-in <br>
                                                            <span style="font-size: 16px;"><b>{{ date('d F Y', strtotime( $checkin_date )) }}</b></span>
                                                            <br>
                                                            <span style="font-size: 13px; color: #89A49F;">
                                                                from 15:00
                                                            </span>
                                                        </td>
                                                        <td class="align-center">
                                                            Check-out <br>
                                                            <span style="font-size: 16px;"><b>{{ date('d F Y', strtotime( $checkout_date )) }}</b></span>
                                                            <br>
                                                            <span style="font-size: 13px; color: #89A49F;">
                                                                from 15:00
                                                            </span>

                                                        </td>
                                                    </tr>

                                                </table>
                                                <hr>
                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                                    style="margin-bottom: 15px;">
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Hotel Name
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>{{ $reservations->property->property_short_name }}</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Total Stay Cost
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>€ {{ $price }}</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Comission Payable
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>€xxxx</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Reservation Agent
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>{{$user->first_name}} {{$user->last_name}}</b>
                                                        </td>
                                                    </tr>
                                                    <?php $count = 0; ?>
                                                    @foreach($reservations->reservedSuites as $val)
                                                        <tr>
                                                            <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                                Suite Name
                                                            </td>
                                                            <td style="width: 15px;">:</td>
                                                            <td>
                                                                <b>{{ $val->suite->category_name }}</b>
                                                            </td>
                                                        </tr>
                                                    @endforeach    
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            {{ $number_of_nights }}
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>1</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Guests
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>{{ \Session::get('Guests') }}    </b>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                                    style="margin-bottom: 15px;">
                                                    {{-- <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Suite Name(s)
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>Deluxe Suite Room Only</b>
                                                        </td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            No. of Suites
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>{{ isset($count) }}</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Name of Guests
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        @foreach($reservations->reservedCompanions as $val)
                                                            <p>
                                                                <b>{{ $val->companion->first_name }} {{ $val->companion->last_name }}</b>
                                                            </p>
                                                        @endforeach    
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Board Type
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        @if(isset($suiteboards->board_name))
                                                            <td>
                                                                <b>{{ $suiteboards->board_name }}</b>
                                                            </td>
                                                        @endif    
                                                    </tr>
                                                    {{-- <tr>
                                                        <td style="color:#656565;padding-bottom: 5px;width: 150px;">
                                                            Experiences
                                                        </td>
                                                        <td style="width: 15px;">:</td>
                                                        <td>
                                                            <b>lorem</b> <br>
                                                            <b>lorem</b> <br>
                                                            <b>lorem</b> <br>
                                                            <b>lorem</b> <br>
                                                        </td>
                                                    </tr> --}}
                                                </table>
                                            </div>
                                            <hr>
                                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="padding: 10px;width: 50%;">
                                                        <a href="#" class="btn-default align-center" style="display:block">My Itenarary</a>
                                                    </td>
                                                    <td style="padding: 10px;width: 50%;">
                                                        <a href="#" class="btn-default align-center" style="display:block">Print Itenarary</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px;width: 50%;">
                                                        <a href="#" class="btn-default align-center" style="display:block">Go to my Dashboard</a>
                                                    </td>
                                                    <td style="padding: 10px;width: 50%;">
                                                        <a href="#" class="btn-default align-center" style="display:block">Support Agent</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->

                    <!-- START FOOTER -->
                    <div class="footer">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-block">
                                    <span class="apple-link">© 2021 <a href="#">Emporium-Collection</a>. All Rights Reserved. </span>
                                </td>
                            </tr>
                           
                        </table>
                    </div>
                    <!-- END FOOTER -->

                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
</body>

</html>