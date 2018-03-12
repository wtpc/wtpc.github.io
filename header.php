<style>
    header{
        background-color: #1A1A1A;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    header .logo{
        width: 250px;
    }
    header .borde{
        height: 100px;
        border: 2px solid #22B573;
        margin: 0 60px;
    }
    header h2{
        color: #23b573;
        font-size: 1.8rem;
        margin-bottom: 0!important;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
    }
    header .logo img{
        width: 100%;
    }

    nav.menu{
        width: 100%;
        height: 50px;
        float: left;

        background-color: #FFF;
        z-index: 9999;
    }
    nav.menu.fijar{
        position: fixed;
        top: 0!important;
        box-shadow: 1px 1px 1px 1px lightgrey;
    }
    nav.menu > ul{
        list-style: none;
        display: flex;
        justify-content: space-around;
    }
    nav.menu > ul > li{
        float: left;
        padding: 10px 20px;
    }
    nav.menu > ul > li > a{
        color: #1A1A1A;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-weight: 700;
    }
</style>

<header>

        <div class="menuMobile">
            <a href="#" id="menuMobile"><i aria-hidden="true" class="fa fa-bars"></i></a>
        </div>

        <div class="menuMobileBox">
            <div class="closeButton">
                <a href="#" id="close">
                    <i aria-hidden="true" class="fa fa-times"></i>
                </a>
            </div>
            <ul>
                <li><a href="/wtpc">Home</a></li>
                <li><a href="objetivos">Objetivos</a></li>
                <li><a href="docentes">Docentes</a></li>
                <li><a href="programa">Programa</a></li>
                <li><a href="clases">Clases</a></li>
                <li><a href="calendario">Calendario</a></li>
                <li><a class="contactoAnchor" href="#">Contacto</a></li>
            </ul>
        </div>

        <div class="logo">
            <a href="#"><img src="img/logoBlanco.png" alt="WTPC - Workshop en técnicas de programación científica"></a>
        </div>

        <div class="borde"></div>

        <?php if($_GET['k'] == "home"){ ?>

            <img class="hideMobile" style="height: 85px;" src="img/bajadaLogo.png" alt="WTPC - Workshop en técnicas de programación científica" />

        <?php }else{ ?>

            <h2><?= $_GET['k']; ?></h2>

        <?php } ?>
</header>

<nav class="menu">

    <ul>
        <li><a href="/wtpc">Home</a></li>
        <li><a href="objetivos">Objetivos</a></li>
        <li><a href="docentes">Docentes</a></li>
        <li><a href="programa">Programa</a></li>
        <li><a href="clases">Clases</a></li>
        <li><a href="calendario">Calendario</a></li>
        <li><a class="contactoAnchor" href="#">Contacto</a></li>
    </ul>

</nav>


