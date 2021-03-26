<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }

    </style>
</head>

<body>

    <table class="wp-block-table action">
        <tbody>
            <tr>
                <td>
                    <table border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td align="center">
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    #Hello {{ $details['name'] }},
                                                    <h1 style="color: rgb(255, 0, 0)">{{ $details['title'] }}</h1>
                                                    <p style="color: rgb(0, 128, 96)">{{ $details['body'] }}</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fi0.wp.com%2Fzeevector.com%2Fwp-content%2Fuploads%2FLOGO%2FPaytm-Cashback-Logo-PNG-Tranparent.png%3Ffit%3D526%252C313%26ssl%3D1&imgrefurl=https%3A%2F%2Fzeevector.com%2Fpaytm-cashback-logo-png%2F&tbnid=hmdYH9IvI7cu4M&vet=12ahUKEwjdkoLYqMvvAhU-oEsFHdchCM4QMygQegUIARDcAQ..i&docid=P08jWQ2vN8cnfM&w=526&h=313&q=logo%20paytm&ved=2ahUKEwjdkoLYqMvvAhU-oEsFHdchCM4QMygQegUIARDcAQ"
                                        width="500px" height="" class="logo" alt="Laravel Logo">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td>
                                    <p>Thank you</p>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td></td>
            </tr>
            <tr>
                <td> © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights
                    reserved.')</td>
            </tr>
        </tbody>
    </table>




    {{-- <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td class="header">
                            <a href="" style="display: inline-block;">
                                <img src="" width="100px" height="45px" class="logo" alt="Laravel Logo">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0"
                                role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">

                                        <h4 style="color: rgb(162, 0, 255)"></h4>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0"
                                role="presentation">
                                <tr>
                                    <td class="content-cell" align="center">

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table> --}}
</body>

</html>
