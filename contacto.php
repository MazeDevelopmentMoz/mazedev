<?php
session_start();
$_SESSION['email_error'] = "";
$_SESSION['email_success'] = $_POST['email_success'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="css/appstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="img/icon-32x32.png" type="image/x-icon">

    <title>Maze Development</title>

</head>
<style>
.container-contact {
    margin: 20px;
    margin-top: 0px;
    padding-top: 50px;
    padding-bottom: 18px;
    border-radius: 10px;
}

.form-label {
    color: rgb(0, 139, 189);
}

.form-title {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 34px;
    font-weight: bold;
    color: rgb(0, 139, 189);
    margin-bottom: 40px;

}
</style>

<body>
    <div class="loader">
        <img class="img-loader" src="img/833.gif" alt="">
    </div>
    <main class="page">
        <nav class="navbar navbar-expand-lg  navbar-light navbar-color">
            <div class="container-fluid">
                <a class="navbar-brand" href="index-pr.html">
                    <img src="img/brand1.png" id="brand" alt="" width="40" height="38"
                        class="d-inline-block align-text-top img-fluid ">
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">CONTACTAR</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <i class="fas fa-moon" id="darktheme"></i>
                    </form>
                </div>
            </div>
        </nav>

        <main class="container justify-content-center">
            <div class="container-contact d-flex justify-content-center">
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <form id="formEmail" method="post">

                        <div class="row">
                            <?php
                            if ($_SESSION['email_success'] != "") :
                            ?>
                            <div class="alert alert-success text-center"><?= $_SESSION['email'] ?></div>
                            <?php
                            endif;
                            if ($_SESSION['email_error'] != "") :
                            ?>
                            <div class="alert alert-danger text-center"><?= $_SESSION['email_error'] ?></div>
                            <?php
                            endif;
                            ?>
                        </div>

                        <div class="row">
                            <div class="text-center col-lg-12 col-md-12 col-sm-12 form-title">
                                FORMULARIO DE CONTACTO
                            </div>
                        </div>

                        <div class="row">
                            <label for="name" class="form-label">
                                Nome Completo
                            </label>
                            <input type="text" class="form-control col-lg-6 col-md-6 col-sm-12" name="name" id="name"
                                placeholder="Nome Completo" required>
                        </div>
                        <div class="row">
                            <label for="tel" class="form-label">
                                Telefone
                            </label>
                            <input type="tel" class="form-control" name="tel" id="tel"
                                placeholder="(+258) 000 - 000 - 000" max="14" min="9" pattern=".{8,}" required>
                        </div>
                        <div class="row">
                            <label for="email" class="form-label">
                                Email
                            </label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="example@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                required>
                        </div>
                        <div class="row">
                            <label for="assunto" class="form-label">
                                Assunto
                            </label>
                            <textarea rows="10" class="form-control" name="assunto" id="assunto" required></textarea>
                        </div>
                        <div class="row mt-3 col-4">
                            <button class="btn btn-primary" name="send" onclick="submitForm()">
                                <div id="spinnermail" style="display:none;" class="spinner-grow spinner-grow-sm"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div id="text-enviar">Enviar</div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </main>

    <!-- Script -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/appscript.js"></script>
    <script src="js/mailscript.js"></script>
    <!-- fim do Script -->

</body>

</html>