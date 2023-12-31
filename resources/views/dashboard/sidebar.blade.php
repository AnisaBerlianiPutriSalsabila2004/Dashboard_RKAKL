<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    <title>View Fayy</title>
    <style>
        .color-txt {
            color: #cccccc;
        }

        .bg-sidebar {
            background-color: #282A42;
        }

        .cursor-hover:hover {
            background-color: #476787;
        }

        .subMenu-margin {
            margin-left: 35px;
        }

        .input-search:focus {
            outline: none;
            border: none;
        }

        .bg-headcard {
            background-color: #282A42;
            height: 250px;
        }

        .body-profile {
            height: 145px;
        }

        .photo-profile {
            top: -30px;
        }

        .name-profile {
            bottom: 70px;
            left: 195px;
        }

        .desc-profile {
            bottom: 30px;
            left: 195px;
        }

        .sebaris {
            display: inline;
        }

        .sett-profile {
            right: 35px;
            bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-sidebar">
                <div class="d-flex">
                    <img src="logo.png" width="100%">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-3 d-flex cursor-hover" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse">
                            <img class="me-2" src="icon_dashboard.png" width="30px">
                            <div class="align-self-center color-txt">Dashboard</div>
                            <i class="fas fa-chevron-right ms-auto"></i>
                        </a>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_subdashboard.png" width="30px">
                                        <div class="align-self-center color-txt">Overview</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_subdashboard.png" width="30px">
                                        <div class="align-self-center color-txt">Dashboard 2</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_subdashboard.png" width="30px">
                                        <div class="align-self-center color-txt">Dashboard 3</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_subdashboard.png" width="30px">
                                        <div class="align-self-center color-txt">Dashboard 4</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link text-white d-flex">
                            <b class="color-txt">DATA</b>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-3 d-flex cursor-hover" data-bs-toggle="collapse" data-bs-target="#rkakl-collapse">
                            <img class="me-2" src="icon_rkakl.png" width="30px">
                            <div class="align-self-center color-txt">RKAKL</div>
                        </a>
                        <div class="collapse" id="rkakl-collapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_belanjadansatker.png" width="30px">
                                        <div class="align-self-center color-txt">RKAKL 1</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_belanjadansatker.png" width="30px">
                                        <div class="align-self-center color-txt">RKAKL 2</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-3 d-flex cursor-hover" data-bs-toggle="collapse" data-bs-target="#master-collapse">
                            <img class="me-2" src="icon_masterdata.png" width="30px">
                            <div class="align-self-center color-txt">Master Data</div>
                        </a>
                        <div class="collapse" id="master-collapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_belanjadansatker.png" width="30px">
                                        <div class="align-self-center color-txt">Kode Belanja</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white rounded-3 d-flex cursor-hover" href="#">
                                        <img class="me-2 subMenu-margin" src="icon_belanjadansatker.png" width="30px">
                                        <div class="align-self-center color-txt">Kode SATKER</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link text-white d-flex">
                            <b class="color-txt">DATA VISUALIZATION</b>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-3 d-flex cursor-hover">
                            <img class="me-2" src="icon_menumanag.png" width="30px">
                            <div class="align-self-center color-txt">Menu Management</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-3 d-flex cursor-hover">
                            <img class="me-2" src="icon_configmanag.png" width="30px">
                            <div class="align-self-center color-txt">Config Management</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link text-white d-flex">
                            <b class="color-txt">ACCOUNT SETTINGS</b>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-3 d-flex cursor-hover">
                            <img class="me-2" src="icon_users.png" width="30px">
                            <div class="align-self-center color-txt">Users</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white rounded-3 d-flex cursor-hover">
                            <img class="me-2" src="icon_role.png" width="30px">
                            <div class="align-self-center color-txt">Role</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-10 bg-light text-white p-0">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>