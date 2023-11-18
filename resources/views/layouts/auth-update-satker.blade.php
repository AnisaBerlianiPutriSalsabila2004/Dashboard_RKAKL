<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - RKAKL | RKAKL - RKAKL Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/flaticon/flaticon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/cards-statistics.css" />
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>
  <style>
    .body {
      background-color: white;
    }
    .sayang {
      background-color: #324C91;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
      color: white;
    }
    .logo {
      width: 220px;
      height: 48px;
      margin-top: 30px;
      margin-bottom: -40px;
    }

    .white {
      color: white;
    }

    .iye {
        margin-right: 40px;
        text-align: right;
        position: relative;
        float: left;
    }

    .ha {
        width: 45px;
        height: 21px;
        margin-top: 9px;
        margin-bottom: -110px;
        margin-right: -10px;
    }

    .iki {
        margin-right: 210px;
        padding-left: 14px;
        display: block;
    }

    .box1{
      width:150px;
      height:150px;
      background:green;
    }

    .box2{
      width:230px;
      height:230px;
      background:blue;
    }
  </style>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo sayang">
            <a href="" class="app-brand-link">
                <img src="https://apiportal.postel.go.id/images/1675227345_LOGO%20SDPPI.png" class="logo" style="margin-bottom: 12px ">
                  <svg xmlns="https://apiportal.postel.go.id/images/1675227345_LOGO%20SDPPI.png">
                    <path
                      d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                      fill="currentColor" />
                    <path
                      d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                      fill="url(#paint0_linear_2989_100980)"
                      fill-opacity="0.4" />
                    <path
                      d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                      fill="currentColor" />
                    <path
                      d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                      fill="currentColor" />
                    <path
                      d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                      fill="url(#paint1_linear_2989_100980)"
                      fill-opacity="0.4" />
                    <path
                      d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                      fill="currentColor" />
                    <defs>
                      <linearGradient
                        id="paint0_linear_2989_100980"
                        x1="5.36642"
                        y1="0.849138"
                        x2="10.532"
                        y2="24.104"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-opacity="1" />
                        <stop offset="1" stop-opacity="0" />
                      </linearGradient>
                      <linearGradient
                        id="paint1_linear_2989_100980"
                        x1="5.19475"
                        y1="0.849139"
                        x2="10.3357"
                        y2="24.1155"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-opacity="1" />
                        <stop offset="1" stop-opacity="0" />
                      </linearGradient>
                    </defs>
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2"></span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.6" />
                <path
                  d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.38" />
              </svg>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1 sayang">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link" style="background-color: #30334E; margin-top: 10px;">
                <i class="menu-icon tf-icons mdi mdi-home-outline" style="color: white;"></i>
                <div style="color: white;">Dashboards</div>
              </a>
            </li>


            <!-- Apps & Pages -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text" style="color: white;">Data</span>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <img class="me-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAARBJREFUSEvtllFKAzEQhr/fg2jtTTyCiAg+6E1s9SpqEemDN9CT1NqL/CWlu6xb2WbTlFg0kJcwM9/Mn0kYUWipEJffA7Z9ApxmVuJT0lczZl2x7SNgAlxlhlbhHoFbSQ4HTfA18LwnaBX2XNJbG3wH3K8tzjIn8L6ON5L00AaPgdHqUMradLZX8obCJAXON6k3wLYHQNgpay5pHhxTwHUyCeS6uoMCl5E6Qd4fXVKkLlOx7f/m6nPt6e+4D6XLNntzSfqISS4F3NlcsX/6QYE73/HepI65vxibbVIXGwTCrPUSU8EONpeSpu1BIAx7r8DFDoG7XJ+Am41hr/KwPQSOM8NnkhbNmFlnqz7J/j3wEvHW9B/esVB6AAAAAElFTkSuQmCC"/>
                <div style="color: white;">RKAKL</div>
              </a>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons mdi mdi-file-document-outline me-3" style="color: white;"></i>
                  <div style="color: white;">Master Data</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-invoice-list.html" class="menu-link">
                      <i class="menu-icon tf-icons mdi mdi-file-document-outline me-3" style="color: white;"></i>
                      <div style="color: white;">Kode Belanja</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-invoice-preview.html" class="menu-link">
                      <i class="menu-icon tf-icons mdi mdi-file-document-outline me-3" style="color: white;"></i>
                      <div style="color: white;">Kode SATKER</div>
                    </a>
                  </li>
                </ul>
              </li>

            <!-- Components -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text" style="color: white;">Data Visualization</span>
            </li>
            <!-- Cards -->

            <!-- Icons -->
            <li class="menu-item">
              <a href="icons-mdi.html" class="menu-link">
                <img class="me-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAJJJREFUSEvtldENgCAMRHubuImO4iiO5mZnNPFHQGtphMTyTx99vQZIo4NGXAnwZ+ZD9aGa5OLpHEBSL6uaJJ3BCacvsGe3pVqR6qJlkpN1BADW61216pqkA9ClOtdZS3Ab1db5xjqdBtSpLikjua/KeDeKqlT3CJ5FZHjoWPcteic4V696xtZHBthq7vW9/6neAJP9KB84NK5hAAAAAElFTkSuQmCC"/>
                <div style="color: white;">Menu Management</div>
              </a>
            </li>
            <li class="menu-item">
                <a href="icons-mdi.html" class="menu-link">
                  <img class="me-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAA49JREFUSEvFlkuoVnUUxX+L1KJQemElJY1CapKlkJDkAx8DaRBZGT20KGoSmWWJDWogaRriQCihLJDUVCIhyh5WiFBWiqCTaBBGqSlmapEZ7Vgf+3yce+45955PBPfk8v3vPnv999p7r/8W58l0nnDpGTgirgXuAi7PSx8Dtkj6pZckegKOiAnAduCiCsgp4A5Ju9uC9wr8HjC7Ifg6SQ+ec+CIGAp8DdwCfCVpkkEi4ktnCzjbCZL+aQNem3HW8WHHBdYC44C3gCsz6HZJUxP4c2BKnh8B5gF7gLl59rakX6uX6QccEVcBewH/tf0OXArdRjwIzJe0MYHvB1YA16S/L3scuCx/HwBulXS0DF4H3FTHE8BCZy7pTDlIluFxYBlwSQ3VGyXd1wgcEdOBbengjNYBrwCHTaGknweqX0RcD7yZJVkMPADcm9/MkPRJ8X2fjCPCozIZ+AMYI+lQFSgi7gaeLNXVNV4t6f0a36uBH4DhwGeSpjUB7wduBEzlC8BKSa5ZxyJiOfBsQ9YvSXq55Ouk5if9Q9w3km5uAnYd3i010nJJrqtB7wE6DQX8DbgXbD4vBGW6pE/T/zXgmfT5z5RL2lwLnB/cBpi+i13jQhQiwnM6NsswTtKP6T8G+D79t0mamefrASfyp8siaVdjc5Vo8g1N1RJJL2ag08Aw4HVJrnHXIsIz7vk9JumK9HeHm62/JPXr9CYBMZUXAkslLcpA1mMHeEPSExXgNcBjwElJI9L/VeA54JQkN1cfq5vjMtUbJM3JQDuA21Mcxkr6Kc9vAL4FDFhWtE2AJ2BwqiPCM+faFBcqN9edwAd5bWfvwBdUmmumpI4ORITVbEH6ezJmS9pS21wRsQ+4KcfJ9VlVGaeCvipz/v28JP+/YxHhyz8N+MzjtEeSH5iOVQWkEPzBBOQpYGLG2JoN91H1NhFRFpBux9cBzwA+zgCFZFr6XKc2knldvmZuwiUVyezOeD/gpOhsH4lHktZOV1ds4EcigUfmezoqP/ZO5WCuk827lVVoZ/qb8g1A4f+vx6ryLI6X9Fv5MgMtAg/lIvBOLnYWifH58YeSZiWwa9tRK+Ab4NEcOS8StrWS/Ib3sdY7V3bpdwOsPpZNZ9Z9VGoo7x61Bs7sTGnxvlbjrpfkbaSV9QpsVfuiYb2dLMmMtLKegDPr0bnQew+zufk21y1054zqVqm0dOo545ZxB3X7H491ZC7vQ4FuAAAAAElFTkSuQmCC"/>
                  <div style="color: white;">Config Management</div>
                </a>
              </li>

            <!-- Account Settings -->
            <li class="menu-header fw-light mt-4">
              <span class="menu-header-text" style="color: white;">Account Settings</span>
            </li>
            <li class="menu-item">
              <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                <img class="me-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAuVJREFUSEvtlVuojmkUx39/hwnRmIgLGalJUyPnXAiZ0MbdUEPjVGYuFHLM8QKlDC7sCeVQSpJkZu5EEjNKiZzacSOHzDiU84VC+E9rWluf3fd972dvtW+su/d9nmf91lrPf61HtJKplbh8Bjer8rYHAFuBGZLu1+KksNS224VDYCnQP53+AeyQdMr2F8AV4FvgRuyR9LIIXhVsO9Z/ByZXcDQbOAD8BszLPfWSFrcUvBzYlE4eZxDdMpA2wBtgkKSrto8BdcAroLekh9XgFTPObONwgG4CwyUFHNsjgdPwf1fskjTXdlxDQ8IWSNreXHAv4N88vELS5lJHtk8AY4GLkoZmQBFg3yi/pNBFRauWcXegsVyrJP3aBHwcGB9ZSgpVRyXuRJmB/ZJmNQucjiLjyPwWMEzSk5JS/wW0BfZK+jmv5m2WPxQ/vyXghUB9OngEHAZ6AD8AIa7XGVCD7QBty71TJP3ZEnBcRcCmlHFiYLqkg7aHAGeB9kAE2FPSu2aDs6wxQOK+lgDfxVVm7+6UdMb2YOAk0LUEdAqYKeluJXjh5CoaBLY7AaOBCcAcoEueCWHWSbpUzkc1VXcAJsaAyExD5Y0WWYeCrwLnJIXQQtUdgbXAitz4HBgh6VpTeFmw7ejPfanooqRj/W9gmqQHGcBU4GAq/IKkYYVg2z/moVBtWER9uQw9WmlEqjuW4z5HSrqd8HWZfXxOknS01McHGdseBYQwwukLYGVOoafl0rb9TT4Oi3L9OjAgXifbnXPyfQkckjStGjiet5hCMfzHSYoSFprtjRlk7F0tKb7jzvcAvwDPJH1VFpxtcTEX10uKUtVkObVCvQOBa5Ki7QIc0ICHfS3pn0aH70vdZPL0kRSqrdlsLwO25IHu8ZLZ7gf8lP92S7pXDrwG2JALbSRFy9RsticBR/JAPKHnqx0uzfi9CiV99GCxPSaFGbzvG3u7EvyjATWXoGDjZ/CnqmShn1Yr9X/wPgkuPh8IrQAAAABJRU5ErkJggg=="/>
                <div style="color: white;">Users</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                target="_blank"
                class="menu-link">
                <img class="me-3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAddJREFUSEvNl79LHUEQxz/foELAQkSIQlALbUJATBGwFoV0YpHCNhbijyaJYCMmYBPESpNU8Q9IIViK2CZdDIIiCKJgY2NhrU7Yx60cet7e23ePl2kO7nbnM9/dmd050SBTg7gEwWbWDowDz2sI8hzYlHTpfeSCzawT+As8qwHqp14AA5LcM1+xmc0CayVAvYtZSV+LgD8BSwHwFbANPAVGgZac8Z8lOZ9BxXngW2AC+CnJnDMz6wYOgNZH4KWANyS9uw8ws1XgfT3BM5K+ZYCngco+ZlgpihclLWeAXU5U9rEQ2Mzu9lNSpczS7zKcHAEvJd34b2bWDBwCffUEO9+7wDzggngBfAGGq8rqCMUx5f1wjyPB18BvwJXWE2AIaKqn4pNkWbf8EZjkhDtix4AFoKfs5PoFvJHkTqxMSy6WHeDVvQHRS+2UDuZBUxneAewDXSl4NHhS0o+iWWVmH4GVMsAfgD9FwcDrJBf8lGjFVTBrO7nKvo/nJK27kO46kEfquBc4DtRm0VVwNd8v6TQITmrT1eNICT3XjqQzH2Wu4qJSYsb9F+Ap4HtM9Ok5/koN+UkrbgP2AJdQ0VY1OEkk16S9BVzTFmW+iwxNDv5JhBzEfm8Y+B+dp/MfCUcgiwAAAABJRU5ErkJggg=="/>
                <br>
                <div style="color: white;">Role</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                    <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                  </a>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="mdi mdi-translate mdi-24px"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                        <span class="align-middle">English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                        <span class="align-middle">French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                        <span class="align-middle">German</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                        <span class="align-middle">Portuguese</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                    href="javascript:void(0);">
                    <i class="mdi mdi-24px"></i>
                  </a>
                </li>
                <!--/ Style Switcher -->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-shortcuts-add text-muted"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Add shortcuts"
                          ><i class="mdi mdi-view-grid-plus-outline mdi-24px"></i
                        ></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-calendar fs-4"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link">Calendar</a>
                          <small class="text-muted mb-0">Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-file-document-outline fs-4"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                          <small class="text-muted mb-0">Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-account-outline fs-4"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link">User App</a>
                          <small class="text-muted mb-0">Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-shield-check-outline fs-4"></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                          <small class="text-muted mb-0">Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-chart-pie-outline fs-4"></i>
                          </span>
                          <a href="index.html" class="stretched-link">Dashboard</a>
                          <small class="text-muted mb-0">User Profile</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-cog-outline fs-4"></i>
                          </span>
                          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                          <small class="text-muted mb-0">Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-help-circle-outline fs-4"></i>
                          </span>
                          <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
                          <small class="text-muted mb-0">FAQs & Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="mdi mdi-dock-window fs-4"></i>
                          </span>
                          <a href="modal-examples.html" class="stretched-link">Modals</a>
                          <small class="text-muted mb-0">Useful Popups</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline mdi-24px"></i>
                    <span
                      class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Notification</h6>
                        <span class="badge rounded-pill bg-label-primary">8 New</span>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                              <small class="text-truncate text-body">Won the monthly best seller gold badge</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">1h ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                              <small class="text-truncate text-body">Accepted your connection</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">12hr ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                              <small class="text-truncate text-body">You have new message from Natalie</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">1h ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="mdi mdi-cart-outline"></i
                                ></span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒</h6>
                              <small class="text-truncate text-body">ACME Inc. made new order $1,154</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">1 day ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Application has been approved 🚀</h6>
                              <small class="text-truncate text-body"
                                >Your ABC project application has been approved.</small
                              >
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">2 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="mdi mdi-chart-pie-outline"></i
                                ></span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Monthly report is generated</h6>
                              <small class="text-truncate text-body">July monthly financial report is generated </small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">3 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">Send connection request</h6>
                              <small class="text-truncate text-body">Peter sent you connection request</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">4 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1 text-truncate">New message from Jane</h6>
                              <small class="text-truncate text-body">Your have new message from Jane</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">5 days ago</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                              <div class="avatar me-1">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="mdi mdi-alert-circle-outline"></i
                                ></span>
                              </div>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                              <h6 class="mb-1">CPU is running high</h6>
                              <small class="text-truncate text-body"
                                >CPU Utilization Percent is currently at 88.63%,</small
                              >
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <small class="text-muted">5 days ago</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top p-2">
                      <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center">
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="mdi mdi-cog-outline me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-help-center-landing.html">
                        <i class="mdi mdi-lifebuoy me-2"></i>
                        <span class="align-middle">Help</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="mdi mdi-help-circle-outline me-2"></i>
                        <span class="align-middle">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="mdi mdi-currency-usd me-2"></i>
                        <span class="align-middle">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="mdi mdi-logout me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="mdi mdi-close search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <div class="col-lg-12">
                  <div class="card text-right">
                      <div class="card-header">
                      </div>
                      <div class="card-body">
                          <div class="basic-form">
                              <form>
                                  <div class="col-md-6">
                                    <div class="row">
                                      <img src="hai.png" class="ha">
                                      <label class="col-sm-3 col-form-label">Tahun Anggaran*</label>
                                      <div class="col" style="padding-right: 270px;">
                                        <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                                            <option value="">2024</option>
                                            <option value="AL">2023</option>
                                            <option value="AK">2022</option>
                                            <option value="AZ">2021</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="col-md-6">
                                    <div class="row">
                                      <img src="hai.png" class="ha">
                                      <label class="col-sm-3 col-form-label">SATKER</label>
                                      <div class="col" style="padding-right: 8px;">
                                        <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                                            <option value="">521253</option>
                                            <option value="AL">521254</option>
                                            <option value="AK">521255</option>
                                            <option value="AZ">521256</option>
                                        </select>
                                      </div>
                                      <div class="col">
                                        <input
                                          type="text"
                                          id="collapsible-fullname"
                                          class="form-control iki"
                                          placeholder="nama satker" />
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="mb-3 row">
                                    <div class="col-md-6">
                                      <div class="row">
                                      <img src="hai.png" class="ha">
                                      <label class="col-sm-3 col-form-label">Judul Laporan</label>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="judul laporan">
                                      </div>
                                      </div>
                                    </div>
                                  </div>


                                  <!-- DIBAGIAN INI YANG SALAH, TOLONG BENARKAN -->
                                  <div class="col-md-8">
                                    <div class="row">
                                      <img src="hai.png" class="ha">
                                      <label class="col-sm-3 col-form-label">Tempat/Tanggal</label>
                                      <div class="col" style="padding-right: 8px; margin-left: -52px;">
                                        <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                                            <option value="">Jakarta</option>
                                            <option value="AL">Bekasi</option>
                                            <option value="AK">Surabaya</option>
                                            <option value="AZ">Solo</option>
                                        </select>
                                      </div>
                                      <div class="col">
                                        <input
                                          type="date"
                                          id="collapsible-fullname"
                                          class="form-control iki"
                                          placeholder="nama satker" />
                                      </div>
                                    </div>


                                  </div>
                                  <br>
                                  <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <div class="row">
                                          <img src="hai.png" class="ha">
                                          <label class="col-sm-3 col-form-label">Rincian Anggaran</label>
                                          <div class="col">
                                            <input
                                              type="text"
                                              id="collapsible-fullname"
                                              class="form-control"
                                              placeholder="rincian anggaran" />
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="mb-3 row">
                                      <div class="col-md-6">
                                        <div class="row">
                                          <img src="hai.png" class="ha">
                                          <label class="col-sm-3 col-form-label">Penanda Tangan</label>
                                          <div class="col">
                                            <input
                                              type="text"
                                              id="collapsible-fullname"
                                              class="form-control"
                                              placeholder="NIP" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="row">
                                          <div class="col-sm-9">
                                            <input
                                              type="text"
                                              id="collapsible-phone"
                                              class="form-control phone-mask"
                                              placeholder="nama"
                                              aria-label="658 799 8941" />
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <p></p>
              <button type="button" class="btn btn-success" style="margin-left: 999px;">Confirm</button>
              <button class="btn btn-primary btn-initialize">Back</button>

              <!-- Content -->

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4 mb-4">

              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-ecommerce.js"></script>
  </body>
</html>
