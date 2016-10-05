<!Doctype html>
		<html>
		  <head>
		     <title></title>
					  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
					  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					  <link rel="stylesheet" href="<?=TEMPLATE;?>/stylesheet/font-awesome.min.css"/>
					  <link rel="stylesheet" href="<?=TEMPLATE;?>/stylesheet/bootstrap.min.css"/>								   
					  <link rel="stylesheet" href="<?=TEMPLATE;?>/stylesheet/style.css"/>
					  <script src="<?=TEMPLATE;?>/js/jquery.js"></script>
					  <script src="<?=TEMPLATE;?>/js/bootstrap.js"></script>
					  <script src="<?=TEMPLATE;?>/js/bootstrap-grid.min.js"></script>
			  <script>
				  $(document).ready(function(){
				  MakeBootstrapGridOverlay({
				  showByDefault: false,               //(1)
				  color: '#5086b8',                   //(2)
				  opacity: '0.3',                     //(3)
				  showOuterGuides: true,              //(4)
				  outerGuidesColor: '#27506d',        //(5)
				  showInnerGuides: true,              //(6)
				  innerGuidesColor: '#000000',        //(7)
				  showHorizontalLines: true,          //(8)
				  horizontalLinesColor: '#000000',    //(9)
				  horizontalLinesOpacity: '0.1',      //(10)
				  horizontalLinesHeight: '25',        //(11)
				  hotkey: 'G'                         //(12)
				  });
				  });
               </script>
			   
			    <script>
					function Selected(a) {
							var label = a.value;
							if (label==1) {
								document.getElementById("Block1").style.display='block';
								document.getElementById("Block2").style.display='none';
                                document.getElementById("Block3").style.display='none';								
							} else if (label==2) {
								document.getElementById("Block1").style.display='none';
								document.getElementById("Block2").style.display='block';
                                document.getElementById("Block3").style.display='none';								
							} else {
								document.getElementById("Block1").style.display='none';
								document.getElementById("Block2").style.display='none';
								document.getElementById("Block3").style.display='block';
							}
							 
					}
              </script>
		  </head>
			  <body>
				  <div id="wrapper">
					  <div class="container">
							 <header>
								   <div class="row">
										<div class="col-lg-2">
										  <a href=""><img src="<?=TEMPLATE;?>/img/logo.jpg"/ class="img-circle"></a>
										</div>
										<div class="col-lg-6"></div>
										<div class="col-lg-3">
										<form id="finds">
											<input placeholder="recherche" type="search">
										</form>
										</div>
										<div class="col-lg-1">
										  <ul id="lang_file">
											 <li><a href="#">Fr</a></li>
											 <li>/</li>
											 <li><a href="#">En</a></li>
										  </ul>
										</div>
								 </div>								
								
							   <nav id="profile">
							    <ul>
								 <li><a href="?action=">Mon compte</a></li>
								 <li><a href="?action=">Gérer mes annonces</a></li>
								  <li><a href="?action=login&logout=1">Deconnexion</a></li>
								</ul>
							   </nav>
						 </header>