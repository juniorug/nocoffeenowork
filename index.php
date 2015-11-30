<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
                <a class="home <? if(($url['0'] == '') ||($url['0'] == 'home')){ echo 'menu_on'; }?>" href="http://nocoffeenowork.esy.es/home">HOME</a>
                |
                <a class="produtos <? if(($url['0'] == '') ||($url['0'] == 'home')){ echo 'menu_on'; }?>" href="http://nocoffeenowork.esy.es/produtos">PRODUTOS</a>
                |
                <a class="status <? if(($url['0'] == '') ||($url['0'] == 'home')){ echo 'menu_on'; }?>" href="http://nocoffeenowork.esy.es/status">STATUS</a>
                |
                <a class="editar <? if(($url['0'] == '') ||($url['0'] == 'home')){ echo 'menu_on'; }?>" href="http://nocoffeenowork.esy.es/editar">EDITAR LISTA</a>
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
    <section id="services">
        <div class="services-overlay">
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="main-head">
                    <div data-scroll-reveal="enter top and move 50px over 1.2s">
                    	<span class="fa fa-users"></span>
                    	<h2>QUEM SOMOS<br /></h2><br />
                    </div>
					<h5 data-scroll-reveal="enter bottom and move 50px over 1.4s" style="display: inline;">
                        A VIDEIRA ADMINISTRAÇÃO DE CONDOMÍNIOS – VIDACON - </h5>
                    <p data-scroll-reveal="enter bottom and move 50px over 1.4s" style="display: inline;">
                        Nasceu com o propósito tornar-se uma administradora de destaque no que se refere ao compremetimento, 
                        satisfação e transparência com seus clientes, colaboradores, fornecedores e parceiros. Nosso principal 
                        objetivo é prestar serviços de Gestão Condominial com pontualidade e excelente padrão de qualidade. 
                        E para isso buscamos um atendimento personalizado e direcionado as necessidadesdo seu condomínio, 
                        atuando junto com os síndicos, além de promover treinamentos aos funcionários e apaerfeiçoamento das 
                        técnicas administrativas para que possamos acompanhar as mudanças do mercado.
                    </p>
                </div>
                <!-- Main Heading Ends -->
                <!-- Services List Starts -->
                <div id="services-blocks" class="row">
                    <div data-scroll-reveal="enter bottom and move 50px over 1.6s" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sblock">
                        <span class="fa fa-crosshairs"></span>
                        <h4>
                            Missão</h4>
                        <p>
                            Buscar a excelência na prestação dos nossos serviços. Garantir a satisfação dos clientes cumprindo 
                            os acordos feitos entre ambos, promover uma gestão participativa. Além de promover investimentos em 
                            funcionários e colaboradores para que os mesmos tenham oportunidades de crescimento pessoal e profissional, 
                            pois entendemos que o nosso maior patrimônio são as pessoas.
                        </p>
                    </div>
                    <div data-scroll-reveal="enter top and move 50px over 1.7s" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sblock">
                        <span class="fa fa-eye"></span>
                        <h4>
                            Visão</h4>
                        <p>
                            Ser a melhor a administradora de bens patrimoniais do mercado imobiliário do Estado da Bahia, onde as 
                            pessoas trabalhem de forma honesta e harmônica.
                        </p>
                    </div>
                    <div data-scroll-reveal="enter bottom and move 50px over 1.8s" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sblock">
                        <span class="fa fa-key"></span>
                        <h4>
                            Valores</h4>
                        <p>
                            <b>A VIDEIRA ADMINISTRAÇÃO DE CONDOMÍNIOS – VIDACON –</b> acredita que somente através da valorização das 
                            pessoas é possível atingir os objetivos e alcançar os resultados esperados. Sabemos da importância do nosso 
                            papel dentro do cenário que atuamos e para isso contribuimos profissionalmente e socialmente afim de oferecermos 
                            para as famílias, aquilo que elas esperam contar, serviços que lhe deem garantia de segurança e qualidade de vida. 
                            Nosso lema é: <u>Servir sempre, melhor e mais!</u>
                        </p>
                    </div>
                </div>
                <!-- Services List Ends -->
            </div>
        </div>
    </section>
    <!-- Services Section Ends -->
    <!-- Contact Us Section Starts -->
    <section id="contact">
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="main-head" style="z-index: 9999;">
                <h2 data-scroll-reveal="enter top and move 50px over 1.2s" class="MT40">
                    Subscreva & Fique atualizado</h2>
            </div>
            <!-- Main Heading Ends -->
            <!-- Form & Address Blocks Starts -->
            <div class="row">
                <!-- Contact Form Starts -->
                <div data-scroll-reveal="enter left and move 50px over 1.6s" id="contact-area" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <form id="contact-form" class="contact-form" name="contact-form" method="post" action="contact.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" required placeholder="Digite Seu Nome">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required placeholder="Digite Seu Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Subscrever</button>
                    </div>
                    </form>
                </div>
                <!-- Contact Form Ends -->
                <!-- Contact Address Starts -->
                <div data-scroll-reveal="enter right and move 50px over 1.8s" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis lectus quis lorem tincidunt dapibus. 
                        Donec pellentesque enim odio, eget pharetra quam placerat lacinia. Integer id suscipit dolor. Etiam laoreet 
                        justo vitae est tincidunt condimentum. Phasellus vel sem in nulla ultrices condimentum. Nullam sollicitudin 
                        sollicitudin dignissim.
                    </p>
                </div>
                <!-- Contact Address Ends -->
            </div>
            <!-- Form & Address Blocks Ends -->
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
