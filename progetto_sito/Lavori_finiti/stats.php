<?php 
session_start(); // Start the session at the beginning of your file 
?>

<!DOCTYPE html>
<html lang="IT">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>FormulaForFun</title>
      <link rel="stylesheet" href="Style_stats.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQhdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    
<body>
    <div class="header">
        <div class="logo">
            <a href="index.php" class="box-link"><img src="media/logo.png" alt=""></a>
        </div>

        <ul class="menu">
            <li><a href="stats.php" class="menu-text">Stats</a></li>
            <li><a href="piloti.php" class="menu-text">Piloti</a>
                <ul>
                    <li><a href="piloti/verstappen.php">Max Verstappen</a></li> 
                    <li><a href="piloti/perez.php">Sergio Perez</a></li> 
                    <li><a href="piloti/Hamilton.php">Lewis Hamilton</a></li> 
                    <li><a href="piloti/Russel.php">George Russell</a></li> 
                    <li><a href="piloti/Leclerc.php">Charles Leclerc</a></li>
                    <li><a href="piloti/sainz.php">Carlos Sainz</a></li> 
                    <li><a href="piloti/Norris.php">Lando Norris</a></li>
                    <li><a href="piloti/piastri.php">Oscar Piastri</a></li>
                    <li><a href="piloti/Alonso.php">Fernando Alonso</a></li>
                    <li><a href="piloti/Stroll.php">Lance Stroll</a></li>                     
                    <li><a href="piloti/Gasly.php">Pierre Gasly</a></li>
                    <li><a href="piloti/Ocon.php">Esteban Ocon</a></li>
                    <li><a href="piloti/Albon.php">Alexander Albon</a></li>
                    <li><a href="piloti/Sargeant.php">Logan Sargeant</a></li>
                    <li><a href="piloti/Tsunoda.php">Yuki Tsunoda</a></li>
                    <li><a href="piloti/Ricciardo.php">Daniel Ricciardo</a></li>
                    <li><a href="piloti/bottas.php">Valterri Bottas</a></li>
                    <li><a href="piloti/Zhou.php">Ghuanyu Zhou</a></li>
                    <li><a href="piloti/Hulkenberg.php">Nico Hulkenberg</a></li>
                    <li><a href="piloti/magnussen.php">Kevin Magnussen</a></li>
                </ul>
            </li>
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
            <label><a href="login.php"class="menu-text">Login</a></label>
            <label><a href="register.php"class="menu-text">Register</a></label>   
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

        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>

     
        <div class="grid-container mt-4">
          <div class="box box-1">
            <div class="main">
                <img class="product__image" src="media/versatppen.avif" alt="soda_can" />
                <div class="container">
                  <div class="title">Max Verstappen
                    <span>RedBull</span>
                  </div>
                  <p class="desc">wins: </br> polposition: </p>
                  <a href="piloti/verstappen.php" class="button_grid">Leggi di più</a>
                </div>
              </div>
        </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/perez.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Sergio Perez
                        <span>RedBull</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/perez.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/hamilton.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Lewis Hamilton
                        <span>Mercedes</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Hamilton.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/russel.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">George Russell
                        <span>Mercedes</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="Russel.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/leclerc.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Charles Leclerc
                        <span>Ferrari</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Leclerc.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/sainz.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Carlos Sainz
                        <span>Ferrari</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/sainz.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/Norris.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Lando Norris
                        <span>McLaren</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Norris.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/Piastri.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Oscar Piastri
                        <span>McLaren</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/piastri.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/alonso.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Fernando Alonso
                        <span>Aston Martin</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Alonso.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/stroll.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Lance Stroll
                        <span>Aston Martin</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Stroll.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/gasly.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Pierre Gasly
                        <span>Alpha</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Gasly.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/ocon.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Esteban Ocon
                        <span>Alphine</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Ocon.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/albon.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Alexander Albon
                        <span>Williams</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Albon.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/sargent.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Logan Sargeant
                        <span>Williams</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Sargeant.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/tunoda.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Yuki Tsunoda
                        <span>Alpha Tauri</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Tsunoda.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/riccardo.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Daniel Ricciardo
                        <span>Alpha Tauri</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Ricciardo.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/bottas.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Valterri Bottas
                        <span>kick Saubern</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/bottas.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/zhou.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Ghuanyu Zhou
                        <span>kick Saubern</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Zhou.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="box box-1">
                <div class="main">
                    <img class="product__image" src="media/hulkenberg.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Nico Hulkenberg
                        <span>Haas</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/Hulkenberg.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
            <div class="box box-2">
                <div class="main">
                    <img class="product__image" src="media/magnussen.avif" alt="soda_can" />
                    <div class="container">
                      <div class="title">Kevin Magnussen
                        <span>Haas</span>
                      </div>
                      <p class="desc">wins: </br> polposition: </p>
                      <a href="piloti/magnussen.php" class="button_grid">Leggi di più</a>
                    </div>
                  </div>
            </div>
        </div>

    <footer class="footer">        
        <div class="col">
            <h3 class="medium-text">Contatti </h3>
            <p class="normal-text">e-mail: <br/> Fantaformula@gmail.com</p>
            <p class="normal-text">telefono: <br/> +39 </p>
        </div>
    </footer>

    <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="hamburger.js"></script>    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOrEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

