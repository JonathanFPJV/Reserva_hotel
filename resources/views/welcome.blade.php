<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(https://www.momondo.com.pe/himg/62/c0/84/ice-85676218-68620422_3XL-430714.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .navbar {
            margin-bottom: 50px;
        }
        .main-content {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        * {
            padding: 0;
            margin: 0;
        }
        body {
            font-size: 18px;
            font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
            color: white;
            background-image: url(https://www.cronista.com/files/image/307/307126/5ffe2f4705222.webp?oe=jpg);
            background-attachment: fixed, scroll;
            background-repeat: no-repeat, repeat-y;
        }
        h3 {
            font-size: 20px;
            text-align: center;
            background-color: #006EBE;
            height: 120px;
        }
        .encabezado {
            display: flex;
            background-color: #FFFFFF;
            border-bottom: thin solid #CDCDCD;
        }
        .encabezado ul {
            margin-top: 24px;
            margin-right: 0;
            margin-left: 80px;
            margin-bottom: 0;
        }
        .encabezado li {
            display: block;
            float: left;
            background-color: #008DC0;
            width: 150px;
            text-align: center;
        }
        .encabezado li a {
            color: white;
            font-size: 20px;
            text-decoration: none;
            font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
        }
        .encabezado li a:hover {
            text-transform: uppercase;
            background-color: #c0b600;
            transition: 0.3s;
            cursor: pointer;
            font-family: Pristina;
            font-stretch: semi-condensed;
            font-size: 13px;
        }
        .encabezado img {
            margin-left: 30px;
            height: 80px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .body01 {
            width: 1200px;
            height: 600px;
            margin: 1em auto;
            border: 5px none #42577B;
            position: relative;
        }
        .body01 img {
            top: 0;
            left: 0;
            width: 1000px;
            height: 550px;
        }
        .body02 {
            text-align: center;
        }
        .body02 img {
            height: 320px;
            margin-top: 2em;
            margin-right: 15px;
            margin-left: 15px;
            margin-bottom: 1em;
            width: 380px;
        }
        .pie {
            background-color: #006EBE;
            font-family: Verdana;
            display: flex;
            font-size: 16px;
        }
        #pie01columna {
            padding-left: 100px;
            float: left;
            width: 400px;
        }
        #pie02columna {}
        #pie02columna {
            float: right;
            width: 400px;
        }
        .ubicacion {
            background-image: url(https://www.momondo.com.pe/himg/62/c0/84/ice-85676218-68620422_3XL-430714.jpg);
            background-attachment: fixed;
            text-align: center;
            font-weight: bold;
            font-family: times new roman;
            color: #ffffff;
        }
        .ubicacion img {
            width: 600px;
            height: 450px;
        }
        .redes {
            background-color: #006EBE;
        }
        .redes font {
            margin-right: 950px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hotel Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                @if (Route::has('login'))
                    @auth

                    

                        <li class="nav-item">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </nav>
    <!-- Imagen Principal -->
    <div class="body01">
        <center>
            <img src=https://www.momondo.com.pe/himg/62/c0/84/ice-85676218-68620422_3XL-430714.jpg alt="No se encontro imagen"/>
        </center>
    </div>

    <!-- Mensaje de Bienvenida -->
    <h3>
        <br>
        Bienvenido a Nuestro Hotel<br><br>
        Experimente el lujo y el confort en el corazón de la ciudad. Disfrute de nuestras instalaciones y servicios de clase mundial diseñados para hacer su estadía inolvidable.

    </h3>

    <!-- Ubicación -->
    <div class="ubicacion">
        <br>
        <p>
            <br>
            Local Arequipa<br>
            Ubicado en la Av. Pizarro 138, Paucarpata 04002<br>
            <br>
            <br>
        </p>
        <img src=https://www.momondo.com.pe/himg/62/c0/84/ice-85676218-68620422_3XL-430714.jpg alt="No se encontro imagen"/>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.021786369346!2d-71.51774358513683!3d-16.423719888662784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b18674074f3%3A0x9b7d7fd757b62e2b!2sEn%20Altamar!5e0!3m2!1ses-419!2spe!4v1646259599875!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <br><br>
    </div>

    <!-- Platos Principales -->
    <h3>
        <br>
        <br>
        Principales caracteristicas
    </h3>
    <div class="body02">
        <a href="#"><img src="plato01.jpg" alt="otro1"></a>
        <a href="#"><img src="plato02.jpg" alt="otro2"></a>
        <a href="#"><img src="plato03.jpg" alt="otro3"></a>
        <br>
        <a href="#"><img src="plato04.jpg" alt="otro4"></a>
        <a href="#"><img src="plato05.jpg" alt="otro5"></a>
        <a href="#"><img src="plato06.jpg" alt="otro6"></a>
    </div>

    <!-- Pie de Página -->
    <div class="pie">
        <div id="pie01columna">
            <br>
            <p>
                DIRECCIÓN: <br>
                Av. Pizarro 138, Paucarpata 04002<br><br>
            </p>
        </div>
        <div id="pie02columna">
            <p>
                <br>
                HORARIOS: <br>
                Lunes a Sábado 12:00pm - 10:00pm<br>
                Domingos 12:00pm - 8:00pm<br>
            </p>
        </div>
        <div id="pie03columna">
            <p>
                <br>
                CONTÁCTANOS:<br>
                (01) 445-4042 / 994-005-266<br>
                reservas@hotel.com<br>
            </p>
            <br>
        </div>
    </div>
    <hr>
    <div class="redes">
        <font>©2024 ------ - Hotel</font>
        <a href="https://www.facebook.com/"><img src="facebook.png" width="30" height="30" alt="Facebook"></a>
        <a href="https://www.instagram.com/"><img src="instagram1.png" width="30" height="30" alt="Instagram"></a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
