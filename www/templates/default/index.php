<!Doctype html>
		<html>
		  <head>
		     <title></title>
					  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
					  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					  <link rel="stylesheet" href="/stylesheet/font-awesome.min.css"/>
					  <link rel="stylesheet" href="/stylesheet/bootstrap.min.css"/>								   
					  <link rel="stylesheet" href="/stylesheet/style.css"/>
					  <script src="/js/jquery.js"></script>
					  <script src="/js/bootstrap.js"></script>
					  <script src="/js/bootstrap-grid.min.js"></script>
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
										  <a href=""><img src="/img/logo.jpg"/ class="img-circle"></a>
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
								 <div class="row">
									 <div class="col-lg-9"></div>
									 <div class="col-lg-3">
										  <ul id="sign_in_out">
											 <li><a href="#connexion2" data-toggle="modal">Connexion</a>
											    <div class="modal" id="connexion2">
											   <div class="modal-dialog">
												<div class="modal-content">
												  <div class="modal-header">
												   <button type="button" class="close" data-dismiss="modal">x</button>
												     <div class="modal-body">
													  <form>
													    <div class="form-group">
															<label for="mail1">Email address</label>
															<input type="email" class="form-control" id="mail1"  placeholder="Entrer votre email" name="mail">														
														 </div>
														 <div class="form-group">
															<label for="Pass">Mot de passe</label>
															<input type="password" class="form-control" id="Pass" placeholder="Entrer votre mot de passe" name="pass">
														 </div>	
														 <button type="submit" class="btn btn-primary">Soumettre</button>
													  </form>
													 </div>
									               </div>
									            </div>
									          </div>
									         </div>
											 </li>
											 <li>/</li>
											 <li><a href="#">Deconnexion</a></li>
										   </ul>
									 </div>
							   </div>
						 </header>
						 <div class="row">
						    <div class="col-lg-4" >
							   <aside>
							      <div class="row">
									<div class="col-lg-12">
									   <ul id="sign_in_reg">
											 <li><a href="#connexion1" data-toggle="modal">Connexion</a>
											  <div class="modal" id="connexion1">
											   <div class="modal-dialog">
												<div class="modal-content">
												  <div class="modal-header">
												   <button type="button" class="close" data-dismiss="modal">x</button>
												     <div class="modal-body">
													  <form>
													    <div class="form-group">
															<label for="mail1">Email address</label>
															<input type="email" class="form-control" id="mail1"  placeholder="Entrer votre email" name="mail">														
														 </div>
														 <div class="form-group">
															<label for="Pass">Mot de passe</label>
															<input type="password" class="form-control" id="Pass" placeholder="Entrer votre mot de passe" name="pass">
														 </div>	
														 <button type="submit" class="btn btn-primary">Soumettre</button>
													  </form>
													 </div>
									               </div>
									            </div>
									          </div>
									         </div>
										    </li>
										 <li>/</li>
										  <li><a href="#formulaire" data-toggle="modal">S'inscrire</a></li>	
                                           <div class="modal" id="formulaire">
											  <div class="modal-dialog">
												<div class="modal-content">
												  <div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">x</button>
													<h4 class="modal-title">Renseignez vos informations s'il vous plait</h4>
												  </div>
												  <div class="modal-body">
													<form>
													<div class="form-group">
															<label for="nom">Nom</label>
															<input type="email" class="form-control" id="nom"  placeholder="Entrer votre nom" name="nom">															
														 </div>
													<div class="form-group">
															<label for="prenom">Prenom</label>
															<input type="email" class="form-control" id="prenom"  placeholder="Entrer votre prenom" name="prenom">															
														 </div>
														 <div class="form-group">
															<label for="telephone">Telephone</label>
															<input type="email" class="form-control" id="telephone"  placeholder="Entrer votre numero de telephone" name="telephone">															
														 </div>
														 <div class="form-group">
															<label for="Select">Genre</label>
															<select class="form-control" id="Select" name="genre">
															  <option>M</option>
															  <option>F</option>															 
															</select>
														 </div>	
														<div class="form-group">
															<label for="Email1">Email address</label>
															<input type="email" class="form-control" id="tEmail1"  placeholder="Entrer votre email" name="mail">														
														 </div>
														 <div class="form-group">
															<label for="Password">Mot de passe</label>
															<input type="password" class="form-control" id="Password" placeholder="Entrer votre mot de passe" name="pass">
														 </div>	
                                                         <div class="form-group">
															<label for="Select">Genre</label>
															<select class="form-control" id="Select" name="genre">
															<option value="" selected="selected">-</option>
															  <option value="1">M</option>
															  <option value="2">F</option>															 
															</select>
														 </div>	
                                                         <div class="form-group">
														    <div class="form-group">
															<label for="Select">Oblast</label>
																	<select id="actSelect" class="Validate_Required form-control" name="actSelect" aria-required="true" onChange="Selected(this)">
																		   <option value="" selected="selected">-</option>
																		   <option value="1">Moskovskaya oblast</option>
																		   <option value="2">Tulskaya oblast</option>
																		   <option value="3">Kurskaya oblast</option>
																	</select>
																</div> 
																<div class="form-group">
																<div id='Block1' style='display: none;'>
																 <label for="Select">choisissez votre ville</label>
																  <select class="form-control">
																   <option value="" selected="selected" class="form-control">-</option>
																   <option value="a">Moscou</option>
																   <option value="b">pushkina</option>
																   <option value="c">stupina</option>
																  </select>
																</div>
                                                               </div>
																<div id='Block2' style='display: none;'>
																	 <select class="form-control">
																		   <option value="" selected="selected" class="form-control">-</option>
																		   <option value="a">Tula</option>
																		   <option value="b">Novomoskovsk</option>
																		   <option value="c">Efremov</option>
																  </select>
																</div>

																<p></p>
																<div id='Block3' style='display: none;'>
																 <select class="form-control">
																		   <option value="" selected="selected" class="form-control">-</option>
																		   <option value="a">Kursk</option>
																		   <option value="b">jeleznogorsk</option>
																		   <option value="c">Kutchatov</option>
																  </select>
																</div>
                                                         </div>	
                                                         <div class="form-group">
															<label for="type">Type</label>
															<select class="form-control" id="type" name="genre">
															 <option value="" selected="selected">-</option>
															 <option>Particulier</option>
															  <option>Professionel</option>															 
															</select>
														 </div>														 
														 <button type="submit" class="btn btn-primary">Soumettre</button>
													</form>
												  </div>
												  <div class="modal-footer">
													<button class="btn btn-info" data-dismiss="modal">Fermer</button>
												  </div>
												</div>
											  </div>
											</div>											 
									   </ul>
								  </div>
								 </div>
									 <div class="row">
										 <div class="col-lg-12">
										   <div id="paris_meteo">
											 <h4>Meteo de Paris</h4>
                                                  
												<div id="widget_41286fba06c4a00d7dd30008bbec48df">
												<span id="l_41286fba06c4a00d7dd30008bbec48df"><a href="http://www.my-meteo.fr/previsions+meteo+france/paris.html">www.my-meteo.fr</a></span>
												<script type="text/javascript">
												(function() {
													var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
													my.src = "http://services.my-meteo.fr/widget/js-design.php?ville=251&format=horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=6&masque=3&x=360&y=150&id=41286fba06c4a00d7dd30008bbec48df";
													var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
												})();
												</script>
												</div>	
										 </div>
									  </div>
								   </div>
									<div class="row">
										<div class="col-lg-12">
										   <div id="moscou_meteo">
											 <h4>Meteo de Moscou</h4>										
												<div id="widget_74ea4121cb9a4fa572814fda9d5773e4">
												<span id="l_74ea4121cb9a4fa572814fda9d5773e4"><a href="http://www.my-meteo.fr/previsions+meteo+russie/moscou.html">www.my-meteo.fr</a></span>
												<script type="text/javascript">
												(function() {
													var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
													my.src = "http://services.my-meteo.fr/widget/js-design.php?ville=434&format=horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=6&masque=3&x=360&y=150&id=74ea4121cb9a4fa572814fda9d5773e4";
													var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
												})();
												</script>
												</div>				
										 </div>
									  </div>
								   </div>
								   <div class="row">
								      <div class="col-lg-12">
									  <h4>Abonnez-vous a la newsletter</h4>
									    <form>
										    <div class="row">
												<div class="form-group">
												  <label for="name" class="col-lg-4 control-label">Nom : </label>
												  <div class="col-lg-8">
													<input type="text"  id="name">
												  </div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
												  <label for="prenom" class="col-lg-4 control-label">Prenom : </label>
												  <div class="col-lg-8">
													<input type="text"  id="Prenom">
												  </div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
												  <label for="mail" class="col-lg-4 control-label">e-mail : </label>
												  <div class="col-lg-8">
													<input type="mail"  id="mail">
												  </div>
												</div>
											</div>												 
										    <div class="form-group">
											  <button class=" btn btn-default">Envoyer</button>
										    </div>
										</form>
									  </div>
								   </div>
							   </aside>
							</div>
							
							<div class="col-lg-8" style="padding-left:0px;">
							    <section>
									   <div class="row">
										 <div class="col-lg-1"><a href="#"><img src="/img/bmw.jpg"/></a></div>
										 <div class="col-lg-11">				
										   <span class="anounce_header">
											 <span class="anounce_date">25.03.2016</span>
												<a href="" class="anounce_title">BMW Série 1 118D Sport 57000 km</a>
											 <span class="anounce_price">/ 7000€</span>
										   </span><br/>
										   <span class="anounce_body">
										   Equipements: abs, accoudoir, airbags, allumage automatique des 
										   feux, anti-brouillards, autoradio cd, autoradio mp3, autoradio usb,
										   bluetooth, climatisation automatique bi-zone, démarrage sans clé, détecteur de pluie, 
										   </span><br/>
										   <p> <a href="#">en savoir plus .......</a></p>
										 </div>
									   </div>
									   
										<div class="row">
										 <div class="col-lg-1"><a href="#"><img src="/img/peugeot.jpeg"/></a></div>
										 <div class="col-lg-11">				
										   <span class="anounce_header">
											 <span class="anounce_date">5.06.2016</span>
												<a href="" class="anounce_title">Enchères Silverstone Auctions</a>
											 <span class="anounce_price">/ 1500€</span>
										   </span><br/>
										   <span class="anounce_body">
													  Mais cette Peugeot 205 GTi britannique a dépassé 
													  plus du double de cette somme. D'accord, elle n'a 
													  eu qu'un propriétaire et son faible kilométrage (12.800 km) 
													  se reflète dans l'état neuf de la voiture. Mais tout de même, soyons sérieux!
													  En tout cas, cette enchère montre qu'il faut s'attendre à une sérieuse augmentation
													  de la cote de la 205 GTi. Manifestement, les premiers nostalgiques friands 
													  de petites bombes, portées sur le survirage malgré une transmission avant,
													  sont prêts à dépenser gros. 
										   </span><br/>
										   <p> <a href="#">en savoir plus .......</a></p>
										 </div>
									   </div>
									   
										<div class="row">
										 <div class="col-lg-1"><a href="#"><img src="/img/jaguar.jpeg"/></a></div>
										 <div class="col-lg-11">				
										   <span class="anounce_header">
											 <span class="anounce_date">25.07.2016</span>
												<a href="" class="anounce_title">Technologies Jaguar</a>
											 <span class="anounce_price">/ 2000€</span>
										   </span><br/>
										   <span class="anounce_body">
													  Comme les autres constructeurs, Jaguar et Land Rover 
													  développent de nouvelles technologies qui "rendront nos voitures 
													  plus intelligentes. Une voiture intelligente n'est jamais distraite",
													  affirme le directeur de stratégie James Towle. Contrairement à Mercedes,
													  Volvo ou Tesla, Jaguar-Land Rover a choisi d'attendre encore avant de prendre
													  le train de la conduite autonome. "Nous voyons évidemment un avenir certain pour
													  cette technologie mais pour nos clients, la conduite humaine reste très importante".
										   </span><br/>
										   <p> <a href="#">en savoir plus .......</a></p>
										 </div>
									   </div>
									   
										<div class="row">
										 <div class="col-lg-1"><a href="#"><img src="/img/bentley.jpg"/></a></div>
										 <div class="col-lg-11">				
										   <span class="anounce_header">
											 <span class="anounce_date">25.03.2016</span>
												<a href="" class="anounce_title">The Sky Is The Limit (et encore...)</a>
											 <span class="anounce_price">/ 5000€</span>
										   </span><br/>
										   <span class="anounce_body">
													  Disons les choses comme elles sont: dans la course 
													  historique que se livrent les supermarques Rolls-Royce et Bentley,
													  c'est actuellement cette dernière qui mène. Le SUV de Rolls 
													  n'arrivera pas avant au-moins un an, alors que le Bentayga
													  se vend déjà comme des petits pains.
										   </span><br/>
										   <p> <a href="#">en savoir plus .......</a></p>
										 </div>
									   </div>
									   
										<div class="row">
										 <div class="col-lg-1"><a href="#"><img src="/img/bmwking.jpg"/></a></div>
										 <div class="col-lg-11">				
										   <span class="anounce_header">
											 <span class="anounce_date">25.03.2016</span>
												<a href="" class="anounce_title">La BMW du King est vivante!</a>
											 <span class="anounce_price">/ 15000€</span>
										   </span><br/>
										   <span class="anounce_body">
													 A l'automne 1958, un jeune soldat américain de 23 ans 
													 passe devant le showroom d'un concessionnaire à Francfort 
													 et ses yeux sont accrochés par une BMW 507 blanche. Après 
													 un bref essai, il l'achète immédiatement. Le jeune soldat n'est 
													 autre que le Roi du rock Elvis Presley, qui a mis sa 
													 carrière en pause le temps d'accomplir son service militaire en Allemagne.
										   </span><br/>
										   <p> <a href="#">en savoir plus .......</a></p>
										 </div>
									   </div>
									   
										 <div class="row">
										 <div class="col-lg-1"><a href="#"><img src="/img/terrain.jpg"/></a></div>
										 <div class="col-lg-11">				
										   <span class="anounce_header">
											 <span class="anounce_date">25.03.2016</span>
												<a href="" class="anounce_title">Entre deux eaux</a>
											 <span class="anounce_price">/ 8000€</span>
										   </span><br/>
										   <span class="anounce_body">
													Toyota (et Lexus bien sûr) est et reste le plus 
													grand vendeur mondial de voitures hybrides.
													Et ce n'est pas pour rien, puisque la marque 
													peut compter sur 20 ans d'expérience, accumulés 
													depuis la première Prius. Sauf qu'aujourd'hui, cette 
													technologie éprouvée s'avère moins avantageuses
													que celles des concurrentes plus modernes.
										   </span><br/>
										   <p> <a href="#">en savoir plus .......</a></p>
										 </div>
									   </div>
	                           </section>
							</div>
						 </div>
					  </div>
				  </div>
				  <div id="footer">
	                <div class="container">
	                 <div class="row">
						<div class="col-lg-4">
						   <a href="#"><img src="/img/facebook.png"/></a>
						   <a href="#"><img src="/img/twitter.png"/></a>
						   <a href="#"><img src="/img/vimeo.png"/></a>
						   <a href="#"><img src="/img/rss.png"/></a>
						</div>
						<div class="col-lg-4"></div>
						<div class="col-lg-4"></div>
					 </div>
					 <div class="row">
					 <div class="col-lg-12">
						  <p>copyright:<span>Serges Manga</span></p>
					</div>
	             </div>
	           </div>
             </div>
			  </body>
        </html>