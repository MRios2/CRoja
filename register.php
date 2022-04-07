<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Crear usuario</h3>
                                </div>
                                <div class="card-body">
                                    <?php if(isset($_SESSION['message'])) { ?>
                                    <div class="alert alert-<?= $_SESSION['typeMessage']; ?> alert-dismissible fade show"
                                        role="alert">
                                        <?= $_SESSION['message']; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>

                                    </div>

                                    <?php session_unset(); } ?>
                                    <form action="valRegister.php" method="post">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="username" class="form-control" id="inputUserame"
                                                        type="text" placeholder="Enter your user name" />
                                                    <label for="inputUserame">Nombre de usuario</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select style="margin-bottom:18px;" class="form-select"
                                                        onChange="mesSelected(this.value);">
                                                        <option value="" selected disabled>Modulo asignado</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width:100%">
                                                <div class="form-floating">
                                                    <select style="margin-bottom:18px;" class="form-select"
                                                        onChange="mesSelected(this.value);">
                                                        <option value="" selected disabled>Nombre de personal</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-floating mb-3">
                                                <input name = "idPersonal" class="form-control" id="inputPersonal" type="text" placeholder="1" />
                                                <label for="inputPersonal">Personal</label>
                                            </div> -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="password" class="form-control" id="inputPassword"
                                                        type="password" placeholder="Create a password" />
                                                    <label for="inputPassword">Contrase&ntilde;a</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="confirmPass" class="form-control"
                                                        id="inputPasswordConfirm" type="password"
                                                        placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirmar
                                                        contrase&ntilde;a</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0 text-center">
                                            <input type="submit" class="btn btn-success btn-center btn-block"
                                                name="save_user" value="Registrar">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">ya tiene cuenta? Inicie sesi&oacute;n</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>