<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>View Fayy</title>
    <style>
        .bg-card {
            background-color: #282A42;
        }

        .margin-atas {
            margin-top: 13%;
        }

        .color-txt {
            color: #ffffff;
        }

        hr {
            border: 2px solid #ffffff;
        }

        .form-control::placeholder {
            color: #ffffff;
            /* Set the color to white or your desired color */
        }

        .form-control:focus {
            background-color: #282A42;
            /* Set the background color to the desired color */
            color: #ffffff;
            /* Set the text color to white or your desired color */
        }

        .eye-icon {
            cursor: pointer;
            position: absolute;
            right: 15px;
            margin-top: 11px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center margin-atas">
            <div class="col-sm-5">
                <div class="card bg-card">
                    <div class="card-body p-4">
                        <img class="mx-auto d-block" src="logo.png" style="width: 60%;">
                        <div class="color-txt">
                            <h5>Welcome to RKAKL!</h5>
                            <p class="text-justify">Rencana Kerja dan Anggaran Kementerian Lembaga/Negara</p>
                        </div>
                        <form class="text-light bg-card">
                            <div class="mb-3 mt-3 bg-card">
                                <input type="email" class="form-control bg-card text-light" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3 d-flex justify-content-between position-relative ">
                                <input type="password" class="form-control bg-card text-light" id="pwd" placeholder="Password" name="password">
                                <span>
                                    <i class="far fa-eye fa-eye-slash eye-icon" id="togglePassword"></i>
                                </span>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-block btn-light text-dark">Login</button>
                            </div>
                            <div class="container p-0">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="flex-fill text-center">
                                        <hr>
                                    </div>
                                    <div style="color: #ffffff; padding: 0 15px 5px;">or</div>
                                    <div class="flex-fill text-center">
                                        <hr>
                                    </div>
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

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#pwd'); // Update the selector to match the actual id

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>