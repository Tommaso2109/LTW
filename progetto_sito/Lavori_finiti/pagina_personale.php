<?php 
session_start(); // Start the session at the beginning of your file 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FormulaForFun</title>
        <link rel="stylesheet" href="Style_pagina_personale.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="header">
            <div class="logo">
                <img src="media/logo.png" alt="">
            </div>

            <ul class="menu">
                <li><a href="stats.php" class="menu-text">Stats</a></li>
                <li><a href="piloti.php" class="menu-text">Piloti</a>
                    <ul>
                        <li><a href="verstappen.php">Max Verstappen</a></li> 
                        <li><a href="perez.php">Sergio Perez</a></li> 
                        <li><a href="Hamilton.php">Lewis Hamilton</a></li> 
                        <li><a href="Russel.php">George Russell</a></li> 
                        <li><a href="Leclerc.php">Charles Leclerc</a></li>
                        <li><a href="sainz.php">Carlos Sainz</a></li> 
                        <li><a href="Norris.php">Lando Norris</a></li>
                        <li><a href="piastri.php">Oscar Piastri</a></li>
                        <li><a href="Alonso.php">Fernando Alonso</a></li>
                        <li><a href="Stroll.php">Lance Stroll</a></li>                     
                        <li><a href="Gasly.php">Pierre Gasly</a></li>
                        <li><a href="Ocon.php">Esteban Ocon</a></li>
                        <li><a href="Albon.php">Alexander Albon</a></li>
                        <li><a href="Sargeant.php">Logan Sargeant</a></li>
                        <li><a href="Tsunoda.php">Yuki Tsunoda</a></li>
                        <li><a href="Ricciardo.php">Daniel Ricciardo</a></li>
                        <li><a href="bottas.php">Valterri Bottas</a></li>
                        <li><a href="Zhou.php">Ghuanyu Zhou</a></li>
                        <li><a href="Hulkenberg.php">Nico Hulkenberg</a></li>
                        <li><a href="magnussen.php">Kevin Magnussen</a></li>
                    </ul>
                </li>
                <li><a href="scuderie.php" class="menu-text">Scuderie</a>
                    <ul>
                        <span><a href="RedBull.php" >Red Bull</a></span>
                        <span><a href="Mercedes.php" >Mercedes</a></span>
                        <span><a href="Ferrari.php" >Ferrari</a></span>
                        <span><a href="McLaren.php" >McLaren</a></span>
                        <span><a href="AstonMartin.php" >Aston Martin</a></span>
                        <span><a href="Alpine.php" >Alpine</a></span>
                        <span><a href="Williams.php" >Williams</a></span>                       
                        <span><a href="AlphaTauri.php" >Alpha Tauri</a></span>
                        <span><a href="KickSaubern.php" >kick Saubern</a></span>
                        <span><a href="Haas.php" >Haas</a></span>
                    </ul>
                </li>
                <li><a href="fanta-formula.php" class="menu-text">Fanta-Formula</a></li>
                <label><a href="login.php" id="loginButton" class="menu-text">Login</a></label>
                <label><a href="register.php" id="registerButton" class="menu-text">Register</a></label>
            </ul>

            <div class="r-l">
            <?php if(isset($_SESSION['username'])): ?>
                    <a href="pagina_personale.php" id="userImage"><img style="width:100px; height:auto" src="<?php echo $_SESSION['profile_image']; ?>" alt="image"></a>
                    <a href="logout.php" id="logoutButton" class="button">LOGOUT</a>
                <?php else: ?>
                    <a href="login.html" id="loginButton" class="button">LOGIN</a>
                    <p>
                    <a href="register.html" id="registerButton" class="button">REGISTER</a>
                <?php endif; ?>    
            </div>

            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <?php
        $user = "AdviceLOL";
        
        $conn = new mysqli('127.0.0.1', 'root', '', 'statistiche');

        // Controlla la connessione
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Esegui una query SQL per ottenere i dati della squadra
        $sql = "SELECT scuderia, pilota1, pilota2 FROM squadra WHERE utente = '$user'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Stampa i dati di ogni riga
            $row = $result->fetch_assoc();
            
            // Assegna i dati alle variabili
            $scuderia = $row["scuderia"];
            $pilota1 = $row["pilota1"];
            $pilota2 = $row["pilota2"];
         
            $immaginePilota1 = '';
            $immaginePilota1 = '';
            $immagineScuderia = '';

            //Immagine Primo Pilota
            if($pilota1 == "Max Verstappen")$immaginePilota1 = 'versatppen.avif';
            if($pilota1 == "Sergio Perez")$immaginePilota1 = 'perez.avif';
            if($pilota1 == "Lewis Hamilton")$immaginePilota1 = 'hamilton.avif';
            if($pilota1 == "George Russell")$immaginePilota1 = 'russel.avif';
            if($pilota1 == "Charles Leclerc")$immaginePilota1 = 'leclerc.avif';
            if($pilota1 == "Carlos Sainz")$immaginePilota1 = 'sainz.avif';
            if($pilota1 == "Lando Norris")$immaginePilota1 = 'Norris.avif';
            if($pilota1 == "Oscar Piastri")$immaginePilota1 = 'Piastri.avif';
            if($pilota1 == "Fernando Alonso")$immaginePilota1 = 'alonso.avif';
            if($pilota1 == "Lance Stroll")$immaginePilota1 = 'stroll.avif';
            if($pilota1 == "Pierre Gasly")$immaginePilota1 = 'gasly.avif';
            if($pilota1 == "Esteban Ocon")$immaginePilota1 = 'ocon.avif';
            if($pilota1 == "Alexander Albon")$immaginePilota1 = 'albon.avif';
            if($pilota1 == "Logan Sargeant")$immaginePilota1 = 'sargent.avif';
            if($pilota1 == "Yuki Tsunoda")$immaginePilota1 = 'tunoda.avif';
            if($pilota1 == "Daniel Ricciardo")$immaginePilota1 = 'ricciardo.avif';
            if($pilota1 == "Valterri Bottas")$immaginePilota1 = 'bottas.avif';
            if($pilota1 == "Ghuanyu Zhou")$immaginePilota1 = 'zhou.avif';
            if($pilota1 == "Nico Hulkenberg")$immaginePilota1 = 'hulkenberg.avif';
            if($pilota1 == "Kevin Magnussen")$immaginePilota1 = 'magnussen.avif';
            if($pilota1 == "Max Verstappen")$immaginePilota1 = 'versatppen.avif';

            //Immagine Secondo Pilota     
            if($pilota2 == "Max Verstappen")$immaginePilota2 = 'versatppen.avif';       
            if($pilota2 == "Sergio Perez")$immaginePilota2 = 'perez.avif';
            if($pilota2 == "Lewis Hamilton")$immaginePilota2 = 'hamilton.avif';
            if($pilota2 == "George Russell")$immaginePilota2 = 'russel.avif';
            if($pilota2 == "Charles Leclerc")$immaginePilota2 = 'leclerc.avif';
            if($pilota2 == "Carlos Sainz")$immaginePilota2 = 'sainz.avif';
            if($pilota2 == "Lando Norris")$immaginePilota2 = 'Norris.avif';
            if($pilota2 == "Oscar Piastri")$immaginePilota2 = 'Piastri.avif';
            if($pilota2 == "Fernando Alonso")$immaginePilota2 = 'alonso.avif';
            if($pilota2 == "Lance Stroll")$immaginePilota2 = 'stroll.avif';
            if($pilota2 == "Pierre Gasly")$immaginePilota2 = 'gasly.avif';
            if($pilota2 == "Esteban Ocon")$immaginePilota2 = 'ocon.avif';
            if($pilota2 == "Alexander Albon")$immaginePilota2 = 'albon.avif';
            if($pilota2 == "Logan Sargeant")$immaginePilota2 = 'sargent.avif';
            if($pilota2 == "Yuki Tsunoda")$immaginePilota2 = 'tunoda.avif';
            if($pilota2 == "Daniel Ricciardo")$immaginePilota2 = 'riccardo.avif';
            if($pilota2 == "Valterri Bottas")$immaginePilota2 = 'bottas.avif';
            if($pilota2 == "Ghuanyu Zhou")$immaginePilota2 = 'zhou.avif';
            if($pilota2 == "Nico Hulkenberg")$immaginePilota2 = 'hulkenberg.avif';
            if($pilota2 == "Kevin Magnussen")$immaginePilota2 = 'magnussen.avif';
            
            //Immagine Scuderia
            if($scuderia == "RedBull")$immagineScuderia = 'redbull-removebg-preview.png';
            if($scuderia == "Mercedes")$immagineScuderia = 'mercedes-removebg-preview.png';
            if($scuderia == "Ferrari")$immagineScuderia = 'ferrar-removebg-preview.png';
            if($scuderia == "McLaren")$immagineScuderia = 'mclaren-removebg-preview.png';
            if($scuderia == "Aston Martin")$immagineScuderia = 'astonmartin-removebg-preview.png';
            if($scuderia == "Alpine")$immagineScuderia = 'alpine-removebg-preview.png';
            if($scuderia == "Williams")$immagineScuderia = 'williams-removebg-preview.png';
            if($scuderia == "Alpha Tauri")$immagineScuderia = 'alphatauri-removebg-preview.png';
            if($scuderia == "Kick Saubern")$immagineScuderia = 'kicksaubern-removebg-preview.png';
            if($scuderia == "Haas")$immagineScuderia = 'haas-removebg-preview.png';

            //Punteggi
            $puntiPilota1Gara = "0";
            $puntiPilota2Gara = "0";
            $moltiplicatoreScuderiaGara = "0";

            $sql = "SELECT posizione, nome, scuderia, fastLap FROM ultimagara";
            $result = $conn->query($sql); 
            if ($result->num_rows > 0) {    
                $puntixposizione = array(25, 18, 15, 12, 10, 8, 6, 4, 2, 1);
                $moltiplicatoreScuderia = array(4 , 3, 2, 1.75, 1.35, 1.30, 1.25, 1.20, 1.15, 1.10);
                // Stampa i dati di ogni riga
                $found = false;

                while($row = $result->fetch_assoc()){
                    // Assegna i dati alle variabili
                    $posizione = $row["posizione"];
                    $nome = $row["nome"];
                    $scuderiaPilota = $row["scuderia"];
                    $fastLap = $row["fastLap"];

                    if(!$found && $scuderiaPilota == $scuderia){
                        $moltiplicatoreScuderiaGara = $moltiplicatoreScuderia[$posizione-1];
                        $found = true;
                    }

                    if($nome == $pilota1){
                        $puntiPilota1Gara += $puntixposizione[$posizione-1];
                        if($fastLap)$puntiPilota1Gara += 3;
                    }else if($nome == $pilota2){
                        $puntiPilota2Gara += $puntixposizione[$posizione-1];
                        if($fastLap)$puntiPilota2Gara += 3;
                    }

                    

                }
                $puntiPilota1Gara *= $moltiplicatoreScuderiaGara;
                $puntiPilota2Gara *= $moltiplicatoreScuderiaGara;

                //Email
                $sql = "SELECT email FROM utenti WHERE username = '$user'";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {    
                    $row = $result->fetch_assoc();
                    $email = $row["email"];

                    echo '<div class="mt-4">
                        <div class="grid-container">
                            <div class="grid-container-profilo">
                                <div class="immagine_profilo">
                                    <img src="media/profilo_vuotio.jpg" alt="immagine non presente"> 
                                    <a href="" class="button1"> cambio immagine</a>
                                </div>
                                <div>
                                    <div class="info-1"> '. $user .' <br> </div>
                                    <div class="info-2"> '. $email .' <br> </div>
                                    <div class="info-2"> DarGay <br> </div>
                                    <div class="info-2"> DarGay <br> </div>
                                    <div class="info-2"> DarGay <br> </div>
                                </div>
                            </div>
                            <div class="grid-container-squad">
                                <div class="grid-container-squad-interno">
                                    <div class="grid-container-piloti">
                                        <div class="immagine_pilota">
                                        <img src="media/' . $immaginePilota1 . '" alt="">
                                        </div>
                                        <div class="immagine_pilota"> 
                                            <img src="media/' . $immaginePilota2 . '" alt="">
                                        </div>
                                        <div class="info '. ($puntiPilota1Gara > 0 ? 'positive' : 'negative') .'"> '. $puntiPilota1Gara .'</div>
                                        <div class="info '. ($puntiPilota2Gara > 0 ? 'positive' : 'negative') .'"> '. $puntiPilota2Gara .'</div>
                                    </div>
                                    <div class="grid-container-scuderie">
                                        <div class="immagine_scuderia">
                                            <img src="media/' . $immagineScuderia . '" alt="">
                                        </div>
                                        <div class="info">x'. $moltiplicatoreScuderiaGara .'</div>
                                    </div>
                                </div>
                                <div class="grid-container-punti">
                                    <div class="info"> Punti della Squadra: '. $puntiPilota1Gara + $puntiPilota2Gara .'</div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }

        }if (!$result) {
            printf("Error: %s\n", $conn->error);
        }
        // Chiudi la connessione
        $conn->close();
        ?>

         <footer class="footer mt-0">        
            <div class="col">
                <h3 class="medium-text">Contatti </h3>
                <p class="normal-text">e-mail: <br/> Fantaformula@gmail.com</p>
                <p class="normal-text">telefono: <br/> +39 3383477124</p>
            </div>
        </footer>
        
        <!-- Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="hamburger.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>


<!-- dobbiamo inserire i link per le paggine appena le abbiamo crete -->