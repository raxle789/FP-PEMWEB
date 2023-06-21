<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SIPPDB</title>
        <link rel="icon" href="sippdb-icon.png"/>
        <link href="style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Buat Akun</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="register-action.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="input-nisn" type="text" placeholder="Masukkan NISN Anda" name="nisn"/>
                                                <label for="input-nisn">NISN</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="input-password" type="password" placeholder="Masukkan password Anda" name="password"/>
                                                <label for="input-password">Password</label>
                                            </div>          
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Buat akun"/></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Punya akun? Masuk</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
