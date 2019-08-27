<?php
include './include/header.php';
include './include/banner.php';
?>

<style>
    .p-home{
        border:3px solid #45a496;
        border-radius : 50%;
        width: 80px;
        height : 80px;
        text-align: center;
        vertical-align: middle;
        padding : 20px 20px;
        margin : 0 auto;
        font-size: 24px;
        color: #45a496;
    }

    .p-home:hover{
        color: white;
        background: #45a496;
    }

    .texto-home{
        text-align: justify;
        margin-top:15px;
    }
/*     .container .row{
        margin-top:30px;
    } */

    .navbar-nav > li > a {
    padding: 25px 15px;
}

    .p-img{
        text-align: center;
    }
    .p-img img{
        width:60%;
        height: auto;
    }

    .titulo-seccion{
        font-size: 24px;
        font-weight: bold;
        color : #45a496;
        text-align:center;
        margin-bottom: 30px;
        margin-top: 25px;
    }

    .mas{
        background: #45a496;
        margin: 10px 40%;
    }

    .mas a{
        color:#ffffff;
    }
</style>

<div class="container"><br>

<h2 class="text-center"><b>Diagnóstico por imágenes</b></h2><br>
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <img src="./src/images/blog/tomogramos.jpg" alt="">
            <h3 class="text-center">Tomografía Computarizada</h3>
            <p>Contamos con el sistema de tomografía computarizada Somatom Scope, de Siemens</p>
            <button class="btn mas"><a href="./apoyo.php">Ver más</a></button>
        </div>
        <div class="col-sm-12 col-md-4">
            <img src="./src/images/blog/rx.jpg" alt="">
            <h3 class="text-center">Rayos X</h3>
            <p>Nuestro  experimentado personal de radiólogos garantiza un buen diagnóstico y un tratamiento adecuado</p>
            <button class="btn mas"><a href="./apoyo.php">Ver más</a></button>
        </div>
        <div class="col-sm-12 col-md-4">
            <img src="./src/images/blog/ecografia.jpg" alt="">
            <h3 class="text-center">Ecografías</h3>
            <p>Ofrecemos a nuestros pacientes una (1) sala de ecografías, con equipos de última generación.</p>
            <button class="btn mas"><a href="./apoyo.php">Ver más</a></button>
        </div>
    </div>
</div><br>

<div class="container"><hr></div>

<!-- Primera Fila de Razones -->
<div class="container">
    <div class="row">
        <p class="titulo-seccion">Razones para escogernos</p>
    </div>
    <div class="row">
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-users icon-home">
            </p>
            <p class="texto-home">Nuestro equipo de humano está integrado por profesionales del más alto nivel y experiencia.</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-building icon-home">
            </p>
            <p class="texto-home">Nuestras confortables y modernas instalaciones de 3 pisos, con más de 8000 metros de construcción, están equipadas con los más modernos equipos tecnológicos.</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-hospital-o icon-home">
            </p>
            <p class="texto-home">Somos un referente como clínica especializada en mediana y alta complejidad en el área de influencia de Bosconia, Cesar.</p>
        </div>
    </div>
</div>

<!-- Segunda Fila de Razones -->

<div class="container">
    <div class="row">
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-image icon-home">
            </p>
            <p class="texto-home">brindamos servicios de imagenología, tomografía axial y computarizada.  laboratorio clínico; un área Servicio Transfusional, servicio de Terapias Física – Respiratoria con equipos avanzados garantizando resultados confiables a sus usuarios.</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-heartbeat icon-home">
            </p>
            <p class="texto-home">Tratamos tus URGENCIAS con prioridad.</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="	fa fa-user-md icon-home">
            </p>
            <p class="texto-home">Trabajamos con altos estándares de calidad para brindarte un trato personalizado y asegurando los resultados</p>
        </div>
    </div>
</div>

<div class="container"><hr></div>


<div class="container">
    <div class="row">
        <p class="titulo-seccion">Nuestros pacientes opinan</p>
    </div>
    <div class="row">
        <div class="col-md-4 divInfo">
            <p class="p-img">
                <img src="./src/images/testimonios/orlaida.png" alt="">
            </p>
            <p style="font-size:17px; text-align: center"><strong>Orlaida Cristina Guerra Álvarez<br>(Bosconia)</strong></p>
            <p class="texto-home"><i>“El trato ha sido muy bueno. La recuperación de mi hija ha sido muy rápida, y he quedado muy agradecida con los médicos y enfermeras. 100% recomendada”.</i></p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-img">
            <img src="./src/images/testimonios/lina.png" alt="">
            </p>
            <p style="font-size:17px; text-align: center"><strong>Lina Luz Barrios Fontalvo<br>(Astrea)</strong></p>
            <p class="texto-home"><i>“Sorprendida con la Clínica, muy bonita y cómoda. Aquí le he han hecho todos los exámenes a mi hija. Dios les pague y que sigan sanando a la gente”.</i></p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-img">
                <img src="./src/images/testimonios/leonela.png" alt="">
            </p>
            <p style="font-size:17px; text-align: center"><strong>Leonela Navarro<br>(Bosconia)</strong></p>
            <p class="texto-home"><i>“Todo ha sido espectacular, mi parto fue bien atendido y mi bebé en perfectas condiciones. Todos se han portado bien, no tengo queja”.</i></p>
        </div>
    </div>
</div> <br><br>

<div class="container"><hr></div><br>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
        <iframe class="col-sm-12 col-md-12 video_h" src="https://www.youtube.com/embed/1Dj3Gp7qPt4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <video src="https://www.youtube.com/watch?v=1Dj3Gp7qPt4" width="640" height="480" controls ></video> -->
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h3>Video Institucional</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="../views/src/images/logo.png" alt="Clinica" class="img-fluid img-thumbnail none_b">
                </div> 
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">Este video muestra nuestras modernas instalaciones de 3 pisos con más de 8000 metros de construcción, están equipados con los más modernos equipos tecnológicos dispuestos para la atención de sus usuarios. La clínica además cuenta con más de 30 consultorios dotados con los últimos equipos para consulta en cada especialidad.</p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="container"><hr></div><br>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <img src="./src/images/page/somos.png" alt="" class="img-fluid img-thumbnail none_b bosconia">
            <h3>Trabajamos por el bienestar de bosconia y la región</h3>
            <p class="text-justify">Generamos empleo y desarrollo para la región teniendo como premisa la Responsabilidad Social Empresarial. Además de pagar impuestos que contribuyen al crecimiento de Bosconia, lo más importante es el bienestar que generamos para toda la región; pues sus habitantes carecían de centros hospitalarios de calidad y se veían obligados a desplazarse a otros municipios lejanos para lograr la atención médica requerida.</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <img src="./src/images/page/equipo.png" alt="" class="img-fluid img-thumbnail none_b bosconia_ico">
                    <p class="text-center">Generamos mas de 280 empleos directos y 600 indirectos</p>
                </div>

                <div class="col-sm-12 col-md-4">
                    <img src="./src/images/page/salud.png" alt="" class="img-fluid img-thumbnail none_b bosconia_ico">
                    <p class="text-center">Atendemos con éxito mas de 2000 pacientes al mes</p>
                </div>

                <div class="col-sm-12 col-md-4">
                    <img src="./src/images/page/promo.png" alt="" class="img-fluid img-thumbnail none_b bosconia_ico">
                    <p class="text-center">Dinamizamos la economía de bosconia y la región</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './include/footer.php'; 
?>
