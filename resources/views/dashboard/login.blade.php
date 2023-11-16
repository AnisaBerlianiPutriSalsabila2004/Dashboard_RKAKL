<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>View Fayy</title>
    <style>
        .bg-card {
            background-color: #282A42;
        }
        .color-txt {
            color: #ffffff;
        }
        hr {
            width: 90%;
            height: 3px;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-4">
                <div class="card bg-card">
                    <div class="card-body">
                        <img class="mx-auto d-block" src="logo.png" style="width: 60%;">
                        <div class="color-txt">
                            <h5>Welcome to RKAKL!</h5>
                            <p>Rencana Kerja dan Anggaran Kementerian Lembaga/Negara</p>
                        </div>
                        <form>
                            <div class="mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-block btn-light text-dark">Login</button>
                            </div>
                            <div class="container p-0">
                                <div class="d-flex m-0">
                                    <div class="flex-fill"><hr></div>
                                    <div style="color: #ffffff;">or</div>
                                    <div class="flex-fill"><hr></div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-block btn-secondary text-white">SSO</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>