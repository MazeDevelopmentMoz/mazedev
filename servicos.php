<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="css/appstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="img/icon-32x32.png" type="image/x-icon">

    <title>Maze Development Servicoes</title>

</head>

<style>
section {
    width: 100%;
    height: 400px;
    text-align: justify;
    padding: 50px;
    color: var(--white);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}

.section-parallax {
    height: 250px;
}

h1 {
    color: var(--blueligth);
    text-align: center;
    margin-bottom: 30px;
}

section:nth-of-type(1) {
    background-image: url('img/parallax4.jpg');
}

section:nth-of-type(3) {
    background-image: url('img/parallax5.png');

}

section:nth-of-type(5) {
    background-image: url('img/parallax1.jpg');

}

section:nth-of-type(7) {
    background-image: url('img/parallax3.jpg');

}

@media screen and (max-width: 720px) {
    .section-parallax {
        height: 400px;
    }
}
</style>

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
                        <a class="nav-link" aria-current="page" href="servicos.php">SERVIÇOS</a>
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
    <section></section>
    <section class="section-parallax">
        <h1>Websites</h1>
        <p>
            Desenvolvemos websites estáticos e dinamicos. Um website <strong>estático</strong> é uma pagina web sem
            interação com os visitantes, onde simplistemnte a página apresenta as informações e serviços da empresa e um
            website <strong>dinamico</strong> existe uma interação com os visitantes.<strong>Todos com e-mails
                corporativos integrados.</strong>
        </p>
    </section>

    <section></section>
    <section class="section-parallax">
        <h1>Aplicações</h1>
        <p>Desenvolvemos aplicativos IOS e Android para qualquer tipo de finalidade e sistemas computacionais de gestão
            de acordo com as necessidades da empresa.</p>
    </section>

    <section></section>
    <section class="section-parallax">
        <h1>Design</h1>
        <p>Criação de logotipo, logomarca para a sua empresa, videos comerciais.</p>
    </section>

    <section></section>
    <section class="section-parallax">
        <!-- <h1>Publicidade</h1>
        <p></p> -->
    </section>
    <footer class="text-center text-lg-start text-white" style="background-color: #242424">

        <div class="container p-4 pb-0">

            <div class="mb-4">

                <div class="row">


                    <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mx-0 mt-3">
                        <h6 class="text-uppercase mb-1 font-weight-bold">Parceiros</h6>
                        <!-- <a class="footer-links" style="color: var(--white);" id="demo" href="">Quick House</a> -->
                        <a class="footer-links" style="color: var(--white);" id="demo"
                            href="https://gudezamusic.com/public/">Gudeza Music</a>

                        <div class="row">
                            <div class=" col-lg-9 col-md-9 col-sm-9 mt-2 px-1">
                                <input type="email" class="form-control" name="email" id="emailsubmit"
                                    placeholder="example@gmail.com" required>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 mt-2 px-0">
                                <button class="btn btn-secondary" onclick="submitEmail()">
                                    <div id="spinnermail" style="display:none;" class="spinner-grow spinner-grow-sm"
                                        role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <div id="text-enviar">Enviar</div>
                                </button>
                            </div>
                        </div>
                        </p>
                        <p>
                        </p>
                    </div>


                    <hr class="w-100 clearfix d-md-none" />


                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-1 font-weight-bold">Contactos</h6>
                        <i class="fas fa-home"></i> Maputo, Zimpeto, MZ <br>
                        <i class="fas fa-envelope"></i> info@mazedev.com <br>
                        <i class="fas fa-phone"></i> (+258) 840 - 106 - 404
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-center">
                        <h6 class="text-uppercase mb-1 font-weight-bold">Siga nos</h6>

                        <a href="https://web.facebook.com/maze.of.development" style="color: var(--white);"><i
                                class="fab fa-facebook-f"></i></a>
                        <!-- <a href="#" style="color: var(--white);"><i class="fab fa-twitter"></i></a> -->
                        <a href="https://www.instagram.com/mazedev_/" style="color: var(--white);"><i
                                class="fab fa-instagram"></i></a>

                        <!-- <h6 class="text-uppercase mb-4 font-weight-bold">Parceiros</h6> -->
                        <figure>
                            <!-- <img src="img/gudeza.png" alt="gudezamusic" class=""> -->
                        </figure>

                    </div>
                </div>

            </div>

        </div>

        <div class="text-center p-2" style="background-color: rgb(0, 123, 216, 0.500)">
            &copy; 2021
            <a class="text-white" href="#">Maze Development</a>
            Todos Direitos Reservados.

        </div>

    </footer>
</main>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/appscript.js"></script>
<script src="js/mailscript.js"></script>
</body>

</html>