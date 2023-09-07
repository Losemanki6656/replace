<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ReplaceUz</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <script src="../assets/js/config.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link href="../vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">

    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>

<main class="main" id="top">


    <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg navbar-darker"
         id="navbarTopSlim">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="../index.html">Replace <span
                    class="text-1000 d-none d-sm-inline">Uz</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
             id="navbarTopCollapse">
            <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                                                 data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                                                 aria-expanded="false"><span class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
                    <ul class="dropdown-menu navbar-dropdown-caret">
                        <li><a class="dropdown-item" href="../index.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                                         data-feather="shopping-cart"></span>E
                                    commerce</div>
                            </a></li>
                        <li><a class="dropdown-item active" href="../dashboard/project-management.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                                         data-feather="clipboard"></span>Project
                                    management</div>
                            </a></li>
                        <li><a class="dropdown-item" href="../dashboard/crm.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                                         data-feather="phone"></span>CRM</div>
                            </a></li>
                        <li><a class="dropdown-item" href="../apps/social/feed.html">
                                <div class="dropdown-item-wrapper"><span class="me-2 uil"
                                                                         data-feather="share-2"></span>Social feed
                                </div>
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Switch theme"><span class="icon me-1 d-none d-sm-block"
                                                   data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                            class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                            class="fs--1 fw-bold">Light</span></label></div>
            </li>
        </ul>
    </nav>


    <div class="content" style="padding-top: 50px">

        @yield('content')

        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023
                        &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-600">v1.13.0</p>
                </div>
            </div>
        </footer>
    </div>
</main>

<style>
    .bottom-button {
        bottom: 7px;
        right: 23px;
    }
    .spinner-grow-sm {
        width: 0.75rem;
        height: 0.75rem;
    }
</style>

<script src="../vendors/popper/popper.min.js"></script>
<script src="../vendors/bootstrap/bootstrap.min.js"></script>
<script src="../vendors/anchorjs/anchor.min.js"></script>
<script src="../vendors/is/is.min.js"></script>
<script src="../vendors/fontawesome/all.min.js"></script>
<script src="../vendors/lodash/lodash.min.js"></script>
<script src="../vendors/feather-icons/feather.min.js"></script>
<script src="../assets/js/phoenix.js"></script>
<script src="../vendors/dropzone/dropzone.min.js"></script>
<script src="../assets/js/projectmanagement-dashboard.js"></script>
<script src="../assets/js/jquery.min.js"></script>
@stack('scripts')

</body>

</html>
