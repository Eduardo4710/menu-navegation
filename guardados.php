<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLES CSS -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/cajas.css">
        <link rel="stylesheet" href="assets/css/toggler.css">
        <link rel="stylesheet" href="assets/css/style-modal.css">
        <!-- BOX ICONS CSS-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <title>Sidebar menu</title>
    </head>
    <body id="body">
         <!-- Rounded switch --> 
         <div class="conte_toggler">
            <label class="switch" >
            <input type="checkbox" id="checkbox">
            <div class="slider round"></div>
            </label>
            </div>
            <!--Fin-->
        <header class="main_1">
             <img src="img/user.png" alt="" id="user">
             <img src="g" alt="" id="user2">

            
        </header>

<div id="main">

    <div class="l-navbar" id="navbar">
         
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <img src="assets/icons/logo.svg" alt="" class="nav__logo-icon">
                    <span class="nav__logo-text">Bedimcode</span>
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-chevron-right'></i>
                </div>

                <ul class="nav__list">
                    <a href="index.php" class="nav__link ">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__text">Home</span>
                    </a>
                    <!-- <a href="#" class="nav__link">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__text">User</span>
                    </a> -->
                    <!-- <a href="#" class="nav__link">
                        <i class='bx bx-bell nav__icon' ></i>
                        <span class="nav__text">Notification</span>
                    </a> -->
                    <!-- <a href="#" class="nav__link">
                        
                        <i class='bx bx-heart nav__icon'></i>
                        <span class="nav__text">Favorites</span>
                    </a> -->
                    <!-- <a href="registra.html" class="nav__link ">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__text">Saved</span>
                    </a> -->
                    <a href="guardados.php" class="nav__link active">
                        <i class='bx bx-message-rounded nav__icon' ></i>
                        <span class="nav__text">Chat</span>
                    </a>             
                </ul>
            </div>
            <a href="#" class="nav__link">           
                <i class='bx bx-log-out-circle nav__icon'></i>
                <span class="nav__text">Close</span>
            </a>
        </nav>
    </div>
    <br><br>
    <br><br>
    <h1 id="title">Your favorite links </h1>
<hr id="linea">
<br><br>
   <main class="contenedor_principal">


    <div class="cajas" id="cajas"  v-for="item of datas">
        <h2 class="name_link" id="name_link">{{item.titulo}}</h2>
        <hr id="linea2"><br>
        <!-- <a v-bind:href="`${item.link}`" id="link" >{{item.link}}</a> -->
        <p @click="MyRuta(item)" id="link" >{{item.link}}</p>
        <br><br>
        <button class="delite"><img src="img/delite.png"  @click="DeliteLink(item.id)"></button>
    </div>


   </main>
   <!-- -----Modal---- -->
       <input type="checkbox" id="btn-modal">
<label for="btn-modal" class="lbl-modal">+</label>
   <div class="modal " >
    <div class="contenedor_modal">
        <header>
            Registrar Link
        <hr id="hr">
        </header>
        <label for="btn-modal" id="close"> x</label>
        <div class="contenido">
            <!-- Agrega algun mensaje  -->
            <div class="input_conte">
                <h3 >Titulo:</h3>
               <input type="text" v-model="titulo" >
            </div>
            <div class="input_conte">
                <h3>Link:</h3>
               <input type="text" v-model="link" placeholder="https://" >
            </div>
            
            
        </div>
        <br>
        <hr id="hr">
        <br>
        <button @click=" SaveLink()"  id="btn-button">Agregar</button>
    </div>
</div>

<!----Fin modal---- -->
</div>
    
    </body>
    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
    <script src="modal.js"></script>
     <!--Vue.JS -->    
     <script src="assets/vue/vue.js"></script>  
     <script src="assets/vue/axios.js"></script>     
     <!--Axios -->
     <script src="assets/js/control.js"></script>
     <!--- SweeAlert ---->
     <script src="assets/js/sweetalert2@10.js"></script>
     <script src="assets/js/toggler.js"></script>
</html>