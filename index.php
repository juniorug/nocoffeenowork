<? 		    
    //incluindo configuracoes iniciais
    include('./includes/config.inc.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   <meta name="author" content="Junior Mascarenhas">
    <title>No Coffee No Work!</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Coustard' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet'
        type='text/css'>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
    <link rel="shortcut icon" href="images/fav.png">
</head>
<body onload="startTime()">
    <!-- Preloader Starts -->
    <div class="loader">
    </div>
    <!-- Preloader Ends -->
    <section>
    <!-- Header Section Starts -->
    <header id="header">
        <div class="header-overlay">
            <div class="menu">
                <a class="home <? if(($url['0'] == '') ||($url['0'] == 'home')){ echo 'menu_on'; }?>" href="#header">HOME</a>
                |
                <a class="lista <? if(($url['0'] == '') ||($url['0'] == 'lista')){ echo 'menu_on'; }?>" href="#lista">LISTA</a>
                |
                <a class="status <? if(($url['0'] == '') ||($url['0'] == 'status')){ echo 'menu_on'; }?>" href="#status">STATUS</a>
                |
                <a class="produtos <? if(($url['0'] == '') ||($url['0'] == 'produtos')){ echo 'menu_on'; }?>" href="#produtos">PRODUTOS</a>
                |    
                <a class="editar <? if(($url['0'] == '') ||($url['0'] == 'editar')){ echo 'menu_on'; }?>" href="#editar">EDITAR LISTA</a>
            </div>
            <div class="container">
                <!-- Logo Starts -->
                
                <div data-scroll-reveal="enter top and move 50px over 1.2s" class="hexagon">
                    <!--<i class="fa fa-flash"></i><span></span>
                    -->
                    <div data-scroll-reveal="enter top and move 50px over 1.2s" class="coffee">
                        <img src="images/no2.jpg" height="90" width="75">
                    </div>
                </div>
                <!-- Logo Ends -->
                <!-- Main Heading Starts -->
                <div class="main-head">
                    <h2 data-scroll-reveal="enter left and move 50px over 1.8s">
                        No Coffee No Work! <br>Gerenciamento de Combustível Operacional</h2>
                    <p data-scroll-reveal="enter right and move 50px over 2.0s">
                       Estamos construindo algo muito legal. Fique atento e seja paciente. Sua paciência será recompensada.</p>
                </div>
                <!-- Main Heading Ends -->
            </div>
            <!-- Countdown Area Starts -->
            <div id="countdown-area">
                <!-- Count Down Timer Starts -->
                <ul class="countdown">
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 2.2s" class="day" id="day">00</span>   
                        <p data-scroll-reveal="enter top and move 20px over 1.4s" class="day_ref" id="day_ref">
                            Dia</p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 2.2s">/</span>
                        <p><br /></p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 15px over 1.8s" class="month" id="month">00</span>
                        <p data-scroll-reveal="enter top and move 20px over 1.8s" class="month_ref" id="month_ref">
                            Mês</p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 2.2s">/</span>
                        <p><br /></p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 1.2s" class="year" id="year">00</span>
                        <p data-scroll-reveal="enter top and move 20px over 1.4s" class="year_ref" id="year_ref">
                            Ano</p>
                    </li>
                     <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 1.2s"> </span>
                        <p><br /></p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 1.6s" class="hours" id="hours">00</span>
                        <p data-scroll-reveal="enter top and move 20px over 1.8s" class="hours_ref" id="hours_ref">
                            Horas</p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 2.2s">:</span>
                        <p><br /></p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 2px over 2.0s" class="minutes" id="minutes">00</span>
                        <p data-scroll-reveal="enter top and move 20px over 2.2s" class="minutes_ref" id="minutes_ref">
                            Minutos</p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 2.2s">:</span>
                        <p><br /></p>
                    </li>
                    <li>
                        <span data-scroll-reveal="enter bottom and move 20px over 2.4s" class="seconds" id="seconds">00</span>
                        <p data-scroll-reveal="enter top and move 20px over 2.6s" class="seconds_ref" id="seconds_ref">
                            Segundos</p>
                    </li>
                </ul>
                <!-- Count Down Timer Ends -->
            </div>
            <!-- Countdown Area Ends -->
           
        </div>
    </header>
    <!-- Header Section Ends -->
   
    </section>
    
    <!-- Services Section Starts -->
    <section id="services" style="margin-top: -45px;">
        <div class="services-overlay">
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="main-head" id="lista">
                    <div data-scroll-reveal="enter bottom and move 50px over 1.2s">
                    	<table class="table table-hover table-hover-color">
                            <thead>
                              <tr>
                                <th>Nome</th>
                                <th>Quantidade de caixas</th>
                                <th>Valor Total (+tx de envio)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <? 
                                foreach($pessoas as $pessoa){
                                    
                                    $found = false;
                                    echo '<tr><td>'.$pessoa->getnome().'</td>';
                                    foreach($ppp as $ppp_single){
                                        if($ppp_single->getid_pessoa() == $pessoa->getid()){
                                            $found = true;
                                            echo '<td>'.$ppp_single->get_qtde_caixas().'</td>';
                                            echo '<td>R$ '.$ppp_single->getval_total().'</td>';
                                        }
                                    }
                                    if(!$found){
                                        echo '<td>0</td>';
                                        echo '<td>R$ 0,00</td>';
                                    }
                                    echo '</tr>';
							  } 
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style="text-align: center;" id="status">
                    <h5 data-scroll-reveal="enter top and move 50px over 1.4s" style="display: inline;">
                        <?
                            $qtde_min_caixas = 30;
                            $consulta = $DB->consulta('SELECT qtde_caixas FROM pedido WHERE pedido_atual = 1');
                            $total = $consulta->fetch_row();
                            $diff = (($qtde_min_caixas - $total[0]) > 0) ? ($qtde_min_caixas - $total[0]) : 0;
                            echo 'Temos '.$total[0].' caixas no estoque. Faltam '.$diff.' caixas para realizarmos o próximo pedido.<br />';
                        ?>
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section Ends -->
    <!-- Contact Us Section Starts -->
    <section id="produtos" style="margin-top: 40px;">
        <div class="container" data-scroll-reveal="enter bottom and move 50px over 1.2s">
            <table class="table table-hover table-products"> <tbody>
            <?
                $count = 0;
                foreach($produtos as $produto){
                    if ($count == 0){
                        echo '<tr>';
                    }
                    echo '<td style="float:left;">';
                    echo '<div class="imgcoffee"><img src="'.$siteUrl.'/images/'.$produto->getimg().'" /></div>';
                    echo '<div class="imgdescription"><p>'.$produto->getdescricao().'<p></div>';
                    echo '</td>';		
                    if  ($count == 4){
                        echo '</tr>';
                        $count  = 0;
                    } else {
                        $count ++;
                    }

                }
                if  ($count != 0){
                    echo '</tr>';
                }
            ?>
            </tbody></table>                    
        </div>
    </section>
    <!-- Contact Us Section Ends -->
    <!-- Footer Starts -->
    <footer id="footer">
        <div class="container">
            <!-- Copyright Starts -->
            <div data-scroll-reveal="enter bottom and move 50px over 1.2s">
                <p data-scroll-reveal="enter over 3.2s">
                   NoCoffeeNoWork - Todos os direitos reservados. &copy <a href="http://www.juniormascarenhas.com">
                        JuniorMascarenhas.com</a>
                </p>
            </div>
            <!-- Copyright Ends -->
        </div>
    </footer>
    <!-- Footer Ends -->
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
    <script src="js/scrollReveal.js" type="text/javascript"></script>
    <!--<script src="js/jquery.downCount.js" type="text/javascript"></script>-->
    <script src="js/custom.js" type="text/javascript"></script>
	<script>
        function startTime() {
            var today = new Date();
            var Y = today.getFullYear();
            var M = today.getMonth() + 1;
            var D = today.getDate();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();

            var ref_hours = (h === 1) ? 'Hora' : 'Horas',
            ref_minutes = (m === 1) ? 'Minuto' : 'Minutos',
            ref_seconds = (s === 1) ? 'Segundo' : 'Segundos';

            D = checkTime(D);
            M = checkTime(M); 
            h = checkTime(h); 
            m = checkTime(m);
            s = checkTime(s);

        document.getElementById('day').innerHTML = D;
        document.getElementById('month').innerHTML = M;
        document.getElementById('year').innerHTML = Y;
        document.getElementById('hours').innerHTML = h;
        document.getElementById('minutes').innerHTML = m;
        document.getElementById('seconds').innerHTML = s;
        document.getElementById('hours_ref').innerHTML = ref_hours;
        document.getElementById('minutes_ref').innerHTML = ref_minutes;
        document.getElementById('seconds_ref').innerHTML = ref_seconds;


            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>
	
</body>
</html>