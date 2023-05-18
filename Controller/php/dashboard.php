<?php
    require "../../Model/connection/verifica.php";
    if (isset($_SESSION['id']) && isset($_SESSION['id'])):
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Bots</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../View/style/css/css-dashboard/dashboard.css">
    
     <!--Icone do title-->
     <link rel="icon" href="../../View/assets/img/logo_sem_nome.png">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../../../View/html/controle-financeiro.html">
                        <span class="icon">
                            <ion-icon name="trending-up-outline"></ion-icon>
                        </span>
                        <span class="title">Controle Financeiro</span>
                    </a>
                </li>

                <li>
                    <a href="../../../View/html/noticias.html">
                        <span class="icon">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </span>
                        <span class="title">Noticias</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php?pg=taxa-de-cambio">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Taxa de câmbio </span>
                    </a>
                </li>

               

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="school-outline"></ion-icon>
                        </span>
                        <span class="title">Aulas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Configurações</span>
                    </a>
                </li>
                <li>
                    <a href="../../Model/utils/sair.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sair</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
               <div class="avatar">
                <label class="label-name"><?php echo $saudacao, $nomeuser; 
?></label>
                <img src="../../View/assets/img/robo.avif" alt="" class="user">
               </div>


            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="cardName">Controle<br>Financeiro</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="trending-up-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="cardName">Investimentos</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        
                        <div class="cardName">Taxa de cambio</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="school-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="cardName">Aulas</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

           <!-- ======================= Cotação ================== -->

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Cotações</h2>
                        <a href="../../View/html/taxa-de-cambio.html" class="btn">Ver todos</a>
                    </div>

                    <div class="update">
            <span class="notification"></span>

           
        </div>

        <div class="container">
            
    
        <section class="container-values quotes">
                    <div class="line"></div>
                    <div class="content">
                        <div class="recentCustomers">
                            <table>
                                <div class="cards" data-id="USD">
                                    <tr>
                                        <td width="60px">
                                            <div class="imgBx">
                                                <img src="../../View/assets/img/dollar-icon.svg" alt="Dólar" width="35px" />
                                            </div>
                                        </td>
                                        <td>
                                            <h4>Dólar<br>
                                                <div><span class="card-value" data-id="USD">-</span>
                                                </div>
                                            </h4>
                                        </td>
                                    </tr>
                                </div>
                                    <tr>
                                        <td width="60px">
                                            <div class="imgBx">
                                                <img src="../../View/assets/img/euro-icon.svg" alt="Euro" width="35px" />
                                            </div>
                                        </td>
                                        <td>
                                            <h4>Euro<br><span class="card-value" data-id="EUR">-</span></h4>
                                        </td>
                                    </tr>
                
                                    <tr>
                                        <td width="60px">
                                            <div class="imgBx">
                                                <img src="../../View/assets/img/libra-icon.svg" alt="Libra" width="35px" />
                                             </div>
                                        </td>
                                        <td>
                                            <h4>Libra<br><span class="card-value" data-id="GBP">-</span></h4>
                                        </td>
                                    </tr>
                
                                    <tr>
                                        <td width="60px">
                                            <div class="imgBx">
                                                <img src="../../View/assets/img/bitcoin-icon.svg" alt="Libra" width="35px" />
                                             </div>
                                        </td>
                                        <td>
                                            <h4>Bitcoin<br><span class="card-value" data-id="BTC">-</span></h4>
                                        </td>
                                    </tr>
                        <p id="date-hour"></p>
                        </table>
                    </div>
                </section>
            </div>

   <!-- =============== Professores ================ -->                 
                   
                </div>

                
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Professores</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../View/assets/img/jeff.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Jefferson Guedes <br> <span>Brasil</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../View/assets/img/bruno.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Bruno Morais<br> <span>Brasil</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../View/assets/img/jean.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Jean Wallace <br> <span>Brasil</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../../View/assets/img/antony.jpeg" alt=""></div>
                            </td>
                            <td>
                                <h4>Anthony Monteiro <br> <span>Brasil</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- =============== JS ================ -->
    
    <script src="../../js/main-dashboard.js"></script>
    <script defer src="../../js/taxa-cambio.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php else: header("Location: ../../View/html/erro-login.html"); endif;?>