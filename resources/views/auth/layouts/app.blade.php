<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>@yield('title', 'Mail Sender')</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/login/classic/login-3.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url(assets/media/bg/bg-1.jpg);">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="assets/media/logos/logo-letter-9.png" class="max-h-100px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    @yield('content')
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";

    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };

    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    {{-- <script src="assets/js/pages/custom/login/login-general.js"></script> --}}
    <!--end::Page Scripts-->
    <script>
        "use strict";

        // Class Definition
        var KTLogin = function() {
            var _login;

            var _showForm = function(form) {
                var cls = 'login-' + form + '-on';
                var form = 'kt_login_' + form + '_form';

                _login.removeClass('login-forgot-on');
                _login.removeClass('login-signin-on');
                _login.removeClass('login-signup-on');

                _login.addClass(cls);

                KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
            }

            var _handleSignInForm = function() {
                var validation;

                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validation = FormValidation.formValidation(
                    KTUtil.getById('kt_login_signin_form'), {
                        fields: {
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email is required'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'Password is required'
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            submitButton: new FormValidation.plugins.SubmitButton(),
                            //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                            bootstrap: new FormValidation.plugins.Bootstrap()
                        }
                    }
                );

                // $('#kt_login_signin_submit').on('click', function (e) {
                //     e.preventDefault();

                //     validation.validate().then(function(status) {
                //         if (status == 'Valid') {
                //             swal.fire({
                //                 text: "All is cool! Now you submit this form",
                //                 icon: "success",
                //                 buttonsStyling: false,
                //                 confirmButtonText: "Ok, got it!",
                //                 customClass: {
                // 					confirmButton: "btn font-weight-bold btn-light-primary"
                // 				}
                //             }).then(function() {
                // 				KTUtil.scrollTop();
                // 			});
                // 		} else {
                // 			swal.fire({
                //                 text: "Sorry, looks like there are some errors detected, please try again.",
                //                 icon: "error",
                //                 buttonsStyling: false,
                //                 confirmButtonText: "Ok, got it!",
                //                 customClass: {
                // 					confirmButton: "btn font-weight-bold btn-light-primary"
                // 				}
                //             }).then(function() {
                // 				KTUtil.scrollTop();
                // 			});
                // 		}
                //     });
                // });

                // // Handle forgot button
                // $('#kt_login_forgot').on('click', function (e) {
                //     e.preventDefault();
                //     _showForm('forgot');
                // });

                // // Handle signup
                // $('#kt_login_signup').on('click', function (e) {
                //     e.preventDefault();
                //     _showForm('signup');
                // });
            }

            var _handleSignUpForm = function(e) {
                var validation;
                var form = KTUtil.getById('kt_login_signup_form');

                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validation = FormValidation.formValidation(
                    form, {
                        fields: {
                            name: {
                                validators: {
                                    notEmpty: {
                                        message: 'Username is required'
                                    }
                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email address is required'
                                    },
                                    emailAddress: {
                                        message: 'The value is not a valid email address'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password is required'
                                    }
                                }
                            },
                            password_confirmation: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password confirmation is required'
                                    },
                                    identical: {
                                        compare: function() {
                                            return form.querySelector('[name="password"]').value;
                                        },
                                        message: 'The password and its confirm are not the same'
                                    }
                                }
                            },
                            agree: {
                                validators: {
                                    notEmpty: {
                                        message: 'You must accept the terms and conditions'
                                    }
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap()
                        }
                    }
                );

                // $('#kt_login_signup_submit').on('click', function (e) {
                //     e.preventDefault();

                //     validation.validate().then(function(status) {
                //         if (status == 'Valid') {
                //             swal.fire({
                //                 text: "All is cool! Now you submit this form",
                //                 icon: "success",
                //                 buttonsStyling: false,
                //                 confirmButtonText: "Ok, got it!",
                //                 customClass: {
                // 					confirmButton: "btn font-weight-bold btn-light-primary"
                // 				}
                //             }).then(function() {
                // 				KTUtil.scrollTop();
                // 			});
                // 		} else {
                // 			swal.fire({
                //                 text: "Sorry, looks like there are some errors detected, please try again.",
                //                 icon: "error",
                //                 buttonsStyling: false,
                //                 confirmButtonText: "Ok, got it!",
                //                 customClass: {
                // 					confirmButton: "btn font-weight-bold btn-light-primary"
                // 				}
                //             }).then(function() {
                // 				KTUtil.scrollTop();
                // 			});
                // 		}
                //     });
                // });

                // Handle cancel button
            //     $('#kt_login_signup_cancel').on('click', function (e) {
            //         e.preventDefault();

            //         _showForm('signin');
            //     });
            // }

            var _handleForgotForm = function(e) {
                var validation;

                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validation = FormValidation.formValidation(
                    KTUtil.getById('kt_login_forgot_form'), {
                        fields: {
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email address is required'
                                    },
                                    emailAddress: {
                                        message: 'The value is not a valid email address'
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap()
                        }
                    }
                );

                // Handle submit button
                // $('#kt_login_forgot_submit').on('click', function (e) {
                //     e.preventDefault();

                //     validation.validate().then(function(status) {
                //         if (status == 'Valid') {
                //             // Submit form
                //             KTUtil.scrollTop();
                // 		} else {
                // 			swal.fire({
                //                 text: "Sorry, looks like there are some errors detected, please try again.",
                //                 icon: "error",
                //                 buttonsStyling: false,
                //                 confirmButtonText: "Ok, got it!",
                //                 customClass: {
                // 					confirmButton: "btn font-weight-bold btn-light-primary"
                // 				}
                //             }).then(function() {
                // 				KTUtil.scrollTop();
                // 			});
                // 		}
                //     });
                // });

                // Handle cancel button
                // $('#kt_login_forgot_cancel').on('click', function (e) {
                //     e.preventDefault();

                //     _showForm('signin');
                // });
            }

            // Public Functions
            return {
                // public functions
                init: function() {
                    _login = $('#kt_login');

                    _handleSignInForm();
                    _handleSignUpForm();
                    _handleForgotForm();
                }
            };
        }();

        // Class Initialization
        jQuery(document).ready(function() {
            KTLogin.init();
        });

    </script>
</body>
<!--end::Body-->

</html>
