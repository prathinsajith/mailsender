<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
</head>

<body>
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
      <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td class="header">
                            <a href="" style="display: inline-block;">
                                <img src="https://codesign.com.bd/conversations/content/images/2020/04/bose-logo-5.png" width="100px" height="45px" class="logo" alt="Laravel Logo">
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
                                            {{-- {{ Illuminate\Mail\Markdown::parse($slot) }}
                                            {{ $subcopy ?? '' }} --}}
                                            <h4 style="color: rgb(162, 0, 255)">#Hello {{ $details['name'] }},</h4>

                                            <h1 style="color: rgb(255, 0, 0)">{{ $details['title'] }}</h1>
                                            <p style="color: rgb(0, 128, 96)">{{ $details['body'] }}</p>
                                            <p>Thank you</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                    <tr>
                                        <td class="content-cell" align="center">
                                            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')

                                            {{-- {{ Illuminate\Mail\Markdown::parse($slot) }} --}}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
</body>

</html>