<?php 
session_start(); // Start the session at the beginning of your file 
?>

<!DOCTYPE html>
<html lang="IT">
    <head>
        <title>FormulaForFun</title>
        <link rel="stylesheet" href="stile_piloti.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    
<body>
    <div class="header">
        <div class="logo">
            <a href="index.php" class="box-link"><img src="media/logo.png" alt=""></a>
        </div>

        <ul class="menu">
            <li><a href="stats.php" class="menu-text">Stats</a></li>
            <li><a href="scuderie.php" class="menu-text">Scuderie</a>
                <ul>
                    <span><a href="scuderie/RedBull.php" >Red Bull</a></span>
                    <span><a href="scuderie/Mercedes.php" >Mercedes</a></span>
                    <span><a href="scuderie/Ferrari.php" >Ferrari</a></span>
                    <span><a href="scuderie/McLaren.php" >McLaren</a></span>
                    <span><a href="scuderie/AstonMartin.php" >Aston Martin</a></span>
                    <span><a href="scuderie/Alpine.php" >Alpine</a></span>
                    <span><a href="scuderie/Williams.php" >Williams</a></span>                       
                    <span><a href="scuderie/AlphaTauri.php" >Alpha Tauri</a></span>
                    <span><a href="scuderie/KickSaubern.php" >kick Saubern</a></span>
                    <span><a href="scuderie/Haas.php" >Haas</a></span>
                </ul>
            </li>
            <li><a href="fanta-formula.php" class="menu-text">Fanta-Formula</a></li> 
        </ul>

        <div class="r-l">
        <?php if(isset($_SESSION['username'])): ?>
                    <a href="pagina_personale.php" id="userImage"><img src="<?php echo $_SESSION['profile_image']; ?>" alt="image"></a>
                    <a href="logout.php" id="logoutButton" class="button">LOGOUT</a>
                <?php else: ?>
                    <a href="login.html" id="loginButton" class="button">LOGIN</a>
                    <p>
                    <a href="register.html" id="registerButton" class="button">REGISTER</a>
                <?php endif; ?>
        </div>
    </div>
    <div class="mt-3">
        <div class="center">
            <div class="grid-container">
                <div class="box box-1">
                    <img src="media/redbull-removebg-preview.png" alt="Descrizione dell'immagine">
                </div>
                <div class="box box-2">
                    <div class="conteiner">
                        <div class="box box-1" style="--img: url('media/versatppen.avif')" data-text="Verstappen"><a href="piloti/verstappen.php" class="box-link"></a></div>
                        <div class="box box-2" style="--img: url('media/perez.avif')"data-text="Perez"><a href="piloti/perez.php" class="box-link"></a></div>
                        <div class="box box-3" style="--img: url('media/hamilton.avif')" data-text="Hamilton"><a href="piloti/Hamilton.php" class="box-link"> </a></div>
                        <div class="box box-4" style="--img: url('media/russel.avif')" data-text="Russel"><a href="piloti/Russel.php" class="box-link"> </a></div>
                    </div>
                </div>
                <div class="box box-3">
                    <img src="media/mercedes-removebg-preview - fanta.png" alt="Descrizione dell'immagine">
                </div>

                <div class="box box-1">
                    <img src="media/ferrar-removebg-preview.png" alt="Descrizione dell'immagine">
                </div>
                <div class="box box-2">
                    <div class="conteiner">
                        <div class="box box-1" style="--img: url('media/leclerc.avif')" data-text="Leclerc"><a href="piloti/Leclerc.php" class="box-link"></a></div>
                        <div class="box box-2" style="--img: url('media/sainz.avif')" data-text="Sainz"><a href="piloti/sainz.php" class="box-link"></a></div>
                        <div class="box box-3" style="--img: url('media/Norris.avif')" data-text="Norris"><a href="piloti/Norris.php" class="box-link"></a></div>
                        <div class="box box-4" style="--img: url('media/Piastri.avif')" data-text="Piastri"><a href="piloti/piastri.php" class="box-link"></a></div>
                    </div>
                </div>
                <div class="box box-3">
                    <img src="media/mclaren-removebg-preview - Copia.png" alt="Descrizione dell'immagine">
                </div>

                <div class="box box-1">
                    <img src="media/AstonMartin-removebg-preview.png" alt="Descrizione dell'immagine">
                </div>
                <div class="box box-2">
                    <div class="conteiner">
                        <div class="box box-1" style="--img: url('media/alonso.avif')" data-text="Alonso"><a href="piloti/Alonso.php" class="box-link"></a></div>
                        <div class="box box-2" style="--img: url('media/stroll.avif')" data-text="Stroll"><a href="piloti/Stroll.php" class="box-link"></a></div>
                        <div class="box box-3" style="--img: url('media/gasly.avif')" data-text="Gasly"><a href="piloti/Gasly.php" class="box-link"></a></div>
                        <div class="box box-4" style="--img: url('media/ocon.avif')" data-text="Ocon"><a href="piloti/Ocon.php" class="box-link"></a></div>
                    </div>
                </div>
                <div class="box box-3">
                    <img src="media/alphine-removebg-preview - Copia.png" alt="Descrizione dell'immagine">
                </div>

                <div class="box box-1">
                    <img src="media/williams-removebg-preview.png" alt="Descrizione dell'immagine">
                </div>
                <div class="box box-2">
                    <div class="conteiner">
                        <div class="box box-1" style="--img: url('media/albon.avif')" data-text="Albon"><a href="piloti/Albon.php" class="box-link"></a></div>
                        <div class="box box-2" style="--img: url('media/sargent.avif')" data-text="Sargent"><a href="piloti/Sargeant.php" class="box-link"></a></div>
                        <div class="box box-3" style="--img: url('media/tunoda.avif')" data-text="Tsunoda"><a href="piloti/Tsunoda.php" class="box-link"></a></div>
                        <div class="box box-4" style="--img: url('media/riccardo.avif')" data-text="Ricciardo"><a href="piloti/Ricciardo.php" class="box-link"></a></div>
                    </div>
                </div>
                <div class="box box-3">
                    <img src="media/AlphaTauri-removebg-preview - Copia.png" alt="Descrizione dell'immagine">
                </div>

                <div class="box box-1">
                    <img src="media/kik_saubern-removebg-preview.png" alt="Descrizione dell'immagine">
                </div>
                <div class="box box-2">
                    <div class="conteiner">
                        <div class="box box-1" style="--img: url('media/bottas.avif')" data-text="Bottas"><a href="piloti/bottas.php" class="box-link"></a></div>
                        <div class="box box-2" style="--img: url('media/zhou.avif')" data-text="Zhou"><a href="piloti/Zhou.php" class="box-link"></a></div>
                        <div class="box box-3" style="--img: url('media/hulkenberg.avif')" data-text="Hulkemberg"><a href="piloti/Hulkenberg.php" class="box-link"></a></div>
                        <div class="box box-4" style="--img: url('media/magnussen.avif')" data-text="magnussen"><a href="piloti/magnussen.php" class="box-link"></a></div>
                    </div>
                </div>
                <div class="box box-3">
                    <img src="media/Haas-removebg-preview-copia.png" alt="Descrizione dell'immagine">
                </div>
        </div>
    </div>
</body>
</html>

        <footer class="footer mt-1">        
            <div class="col">
                <h3 class="medium-text">Contatti </h3>
                <p class="normal-text">e-mail: <br/> Fantaformula@gmail.com</p>
                <p class="normal-text">telefono: <br/> +39 3383477124</p>
            </div>
        </footer>
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>


<!-- dobbiamo inserire i link per le paggine appena le abbiamo crete -->