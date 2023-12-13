<?php include_once './includes/header.php'; ?>


<main>


    <div class="banner text-white" style="text-align: right" id="conferencia">
        <div class="container" style="
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 800px;
          ">
            <div class="banner-info col-6">
                <h5>Conf Bs As</h5>
                <p>
                    Bs As llega por primera vez a Argentina. Un Evento para compartir
                    con nuestra comunidad el conocimiento y experiencia de los
                    expertos que están creando el futuro de Internet. Ven a conocer a
                    miembres del evento, a otros estudiantes de Codo a Codo y los
                    oradores de primer nivel que tenemos para ti. Te esperamos!
                </p>
                <a href="#" class="btn btn-outline-light">Quiero Ser Orador</a>
                <a href="comprar-tickets.html" class="btn btn-success">Comprar Ticket</a>
            </div>
        </div>
    </div>

    <!-- SECCIÓN CARRUSEL DE ORADORES -->

    <div class="oradores" id="oradores" style="margin: 30px; margin-left: 100px; margin-right: 100px">
        <h6 class="text-center">CONOCE A</h6>
        <h3 class="text-center">LOS ORADORES</h3>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

            <?php include_once './includes/oradores/carrusel.php'; ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    <!-- (FIN) SECCIÓN CARRUSEL DE ORADORES -->

    </div>
    <div class="conoce-mas" id="lugarFecha">
        <div class="card bg-dark text-white mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="./img/honolulu.jpg" loading="lazy" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Bs As - Octubre</h5>
                        <p class="card-text">
                            Buenos Aires es la provincia y localidad más grande del estado
                            de Argentina, en los Estados Unidos. Honolulu es la más sureña
                            de entre las principales ciudades estadounidenses. Aunque el
                            nombre de Honolulu se refiere al área urbana en la costa
                            sureste de la isla de Oahu, la ciudad y condado de Honolulu
                            han formado una ciudad-condado consolidada que cubre toda la
                            ciudad (aproximadamente 600 km<sup>2</sup> de superficie).
                        </p>
                        <a href="#" class="btn btn-outline-light">Conocé más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './includes/oradores/form_oradores.php'; ?>

</main>



<?php include_once './includes/footer.php'; ?>