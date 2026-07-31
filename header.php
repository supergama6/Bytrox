<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
   	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<title><?= $title; ?></title>
	<meta name="keywords" content="<?= $keywords; ?>" />
	<meta name="description" content="<?= $description; ?>" />
	<link rel="shortcut icon" href="/images/favicon.ico" type="x-icon">		
    <link href="/css/bootstrap-reboot.min.css" rel="stylesheet"><!--重設所有 CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet"><!--Bootstrap 4 CSS -->
	<link href="/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/swiper.min.css">
	<link href="/css/style.css?t=1" rel="stylesheet">	
</head>
<body>
		<header class="container-fluid header header_bk light-theme" id="header">			
			<div class="row justify-content-center align-items-center">					
				<div class="logo_menu">
				   <a href="index.php" class="logo"></a>
				</div>
				<div class="col p-0 menu d-none d-lg-block d-print-block">					 
					 <ul class="nav animenu_nav ">								
						
						<li class="nav-item li1">
							<a href="forex.php"><span>Markets  <i class="fa fa-angle-down"></i></span></a>
							<div class="animenu_nav_child text-left">
								<a href="forex.php" class="d-block">Forex </a>
								<a href="indices.php" class="d-block">Indices </a>
								<a href="commodities.php" class="d-block">Commodities</a>	
								<a href="metal.php" class="d-block">Metals </a>									
							</div>
						</li>
						<li class="nav-item li3">
							<a href="account.php"><span> Account Types  <i class="fa fa-angle-down"></i></span> </a>
							<div class="animenu_nav_child text-left">
								<a href="account.php" class="d-block">Compare Accounts</a>
							</div>	
						</li>
						<li class="nav-item li4">
							<a href="deposit.php"><span> Trading Condition  <i class="fa fa-angle-down"></i></span> </a>
							<div class="animenu_nav_child text-left">
								<a href="deposit.php" class="d-block">Deposit & Withdrawal</a>
								<a href="trading-hours.php" class="d-block">Trading Hours</a>					
							</div>	
						</li>
						<li class="nav-item li2">
							<a href="mt5.php"><span>Platforms & Tools  <i class="fa fa-angle-down"></i></span> </a>
							<div class="animenu_nav_child text-left">
								<a href="mt5.php" class="d-block">MetaTrader 5</a>
								<a href="calendar.php" class="d-block">Economic Calendar</a>
								<!--<a href="copy.php" class="d-block">Copy Trading</a>-->	
							</div>	
						</li>
						
						
						<li class="nav-item li6">
							<a href="about.php"><span>  About us   <i class="fa fa-angle-down"></i></span> </a>
							<div class="animenu_nav_child text-left">
								<a href="about.php" class="d-block"> About us </a>	
								<a href="contact.php" class="d-block"> Contact us </a>	
							</div>	
						</li>
						
					  </ul>
				</div>
				<div class="col pl-0 text-right d-none d-lg-block d-print-block header_menu_right">	
					<div class="top_login" >
						<a href="#" class="btn btn-primary"><strong>LOGIN</strong></a>
						<a href="#" class="btn btn-primary"><strong>OPEN ACCOUNT</strong></a>
					</div>
					
				</div>
				<div class="col pl-0 pr-2 d-lg-none d-sm-block d-print-block">
					 <ul class="flex-column text-right phone_menu">
						<li class="nav-item dropdown text-right">
						  <div class="navbar-toggler nav-link header_bar" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
							  <i class="fa fa-reorder" id="header_bar"></i>
							  <img src="/images/header/close.svg" width="20" id="header_bar2" style="display:none;">
						 </div>
						<div class="collapse" id="navbarToggleExternalContent">
							<div class="dropdown-menu" style="display:block">								
								
								<div class="accordion" id="phone_menu">
								  <a href="/" class="phone_logo"></a>
								  <div class="card">
									<div class="card-header" id="menu_head_01">
									  <h2 class="mb-0">
										<button class="btn btn-link w-100 collapsed" type="button" data-toggle="collapse" data-target="#menu01" aria-expanded="false" aria-controls="menu01">
										  Markets <span class="fa fa-angle-down float-right"></span>
										</button>
									  </h2>
									</div>
									<div id="menu01" class="collapse" aria-labelledby="menu_head_01" data-parent="#phone_menu" style="">
									  <div class="card-body">
										<a href="forex.php" class="dropdown-item">Forex </a>
										<a href="indices.php" class="dropdown-item">Indices </a>
										<a href="commodities.php" class="dropdown-item">Commodities </a>	
										<a href="metal.php" class="dropdown-item">Metals </a>	
									  </div>
									</div>
									
								  </div>
								  
								   <div class="card">
									<div class="card-header" id="menu_head_03">
									  <h2 class="mb-0">
										<button class="btn btn-link w-100 collapsed" type="button" data-toggle="collapse" data-target="#menu03" aria-expanded="false" aria-controls="menu03">
										 Account Types   <span class="fa fa-angle-down float-right"></span>
										</button>
									  </h2>
									</div>
									<div id="menu03" class="collapse" aria-labelledby="menu_head_03" data-parent="#phone_menu" style="">
									  <div class="card-body">
										<a href="account.php" class="dropdown-item">Compare Accounts </a>											
									  </div>
									</div>
								  </div>
								  <div class="card">
									<div class="card-header" id="menu_head_04">
									  <h2 class="mb-0">
										<button class="btn btn-link w-100 collapsed" type="button" data-toggle="collapse" data-target="#menu04" aria-expanded="false" aria-controls="menu04">
										  Trading Condition   <span class="fa fa-angle-down float-right"></span>
										</button>
									  </h2>
									</div>
									<div id="menu04" class="collapse" aria-labelledby="menu_head_04" data-parent="#phone_menu" style="">
									  <div class="card-body">
										<a href="deposit.php" class="dropdown-item">Deposit & Withdrawal</a>
										<a href="trading-hours.php" class="dropdown-item">Trading Hours</a>								
									  </div>
									</div>
								  </div>
								 <div class="card">
									<div class="card-header" id="menu_head_02">
									  <h2 class="mb-0">
										<button class="btn btn-link w-100 collapsed" type="button" data-toggle="collapse" data-target="#menu02" aria-expanded="false" aria-controls="menu02">
										  Platforms & Tools <span class="fa fa-angle-down float-right"></span>
										</button>
									  </h2>
									</div>
									<div id="menu02" class="collapse" aria-labelledby="menu_head_02" data-parent="#phone_menu" style="">
									  <div class="card-body">
										<a href="mt5.php" class="dropdown-item">MetaTrader 5</a>
										<a href="calendar.php" class="dropdown-item">Economic Calendar</a>
										<a href="copy.php" class="dropdown-item">Copy Trading</a>
									  </div>
									</div>
								  </div>
								  
								  <div class="card">
									<div class="card-header" id="menu_head_06">
									  <h2 class="mb-0">
										<button class="btn btn-link w-100 collapsed" type="button" data-toggle="collapse" data-target="#menu06" aria-expanded="false" aria-controls="menu06">
										  About us  <span class="fa fa-angle-down float-right"></span>
										</button>
									  </h2>
									</div>
									<div id="menu06" class="collapse" aria-labelledby="menu_head_05" data-parent="#phone_menu" style="">
									  <div class="card-body">
										<a href="about.php" class="dropdown-item"> About us </a>	
										<a href="contact.php" class="dropdown-item"> Contact us </a>											
									  </div>
									</div>
								  </div>
								  
								</div>  
								
							</div>
								
							
						  </div>
						</li>						
						<li class="nav-item dropdown float-right">
							<a href="#" class="btn btn-primary phone_top m-0 "><strong>OPEN ACCOUNT</strong></a>
						</li>
					</ul>
				</div>
				
		</div>
	</header>

