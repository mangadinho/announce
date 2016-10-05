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
													  <form action="<?=TEMPLATE;?>my_profile.php" method="post">
													    <div class="form-group">
															<label for="mail1">Email address</label>
															<input type="email" class="form-control" id="mail1"  placeholder="Entrer votre email" name="mail">													
														 </div>
														 <div class="form-group">
															<label for="Pass">Mot de passe</label>
															<input type="password" class="form-control" id="Pass" placeholder="Entrer votre mot de passe" name="pass">
														 </div>	
														  <div class="form-group">
														    <a href="">Mot de passe oublie ?</a>
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
													<form method="post" action="">
													<div class="form-group">
															<label for="nom">Nom</label>
															<input type="email" class="form-control" id="nom"  placeholder="Entrer votre nom" name="reg_nom">															
														 </div>
													<div class="form-group">
															<label for="prenom">Prenom</label>
															<input type="email" class="form-control" id="prenom"  placeholder="Entrer votre prenom" name="reg_prenom">															
														 </div>
														 <div class="form-group">
															<label for="telephone">Telephone</label>
															<input type="email" class="form-control" id="telephone"  placeholder="Entrer votre numero de telephone" name="reg_telephone">															
														 </div>														 	
														<div class="form-group">
															<label for="Email1">Email address</label>
															<input type="email" class="form-control" id="tEmail1"  placeholder="Entrer votre email" name="reg_e_mail">														
														 </div>
														 <div class="form-group">
															<label for="Password">Mot de passe</label>
															<input type="password" class="form-control" id="Password" placeholder=" votre mot de passe" name="reg_pass">
														 </div>
                                                          <div class="form-group">
															<label for="Password"> resaisissez votre mot de passe</label>
															<input type="password" class="form-control" id="Password" placeholder="resaisissez votre mot de passe" name="reg_conf_pass">
														 </div>														 
                                                         <div class="form-group">
															<label for="Select">Genre</label>
															<select class="form-control" id="Select" name="reg_genre">
															<option value="" selected="selected">-</option>
															  <option value="1">M</option>
															  <option value="2">F</option>															 
															</select>
														 </div>	
                                                         <div class="form-group">
														    <div class="form-group">
															<label for="Select">Oblast</label>
																	<select id="actSelect" class="Validate_Required form-control" name="reg_region" aria-required="true" onChange="Selected(this)">
																		   <option value="" selected="selected">-</option>
																		   <option value="1">Moskovskaya oblast</option>
																		   <option value="2">Tulskaya oblast</option>
																		   <option value="3">Kurskaya oblast</option>
																	</select>
																</div> 
																<div class="form-group">
																<div id='Block1' style='display: none;'>
																 <label for="Select">choisissez votre ville</label>
																  <select class="form-control" name="reg_city">
																   <option value="" selected="selected" class="form-control">-</option>
																   <option value="a">Moscou</option>
																   <option value="b">pushkina</option>
																   <option value="c">stupina</option>
																  </select>
																</div>
                                                               </div>
																<div id='Block2' style='display: none;'>
																	 <select class="form-control" name="reg_city">
																		   <option value="" selected="selected" class="form-control">-</option>
																		   <option value="a">Tula</option>
																		   <option value="b">Novomoskovsk</option>
																		   <option value="c">Efremov</option>
																  </select>
																</div>

																<p></p>
																<div id='Block3' style='display: none;'>
																 <select class="form-control" name="reg_city">
																		   <option value="" selected="selected" class="form-control">-</option>
																		   <option value="a">Kursk</option>
																		   <option value="b">jeleznogorsk</option>
																		   <option value="c">Kutchatov</option>
																  </select>
																</div>
                                                         </div>	
                                                         <div class="form-group">
															<label for="type">Type</label>
															<select class="form-control" id="type" name="reg_type">
															 <option value="" selected="selected">-</option>
															 <option>Particulier</option>
															  <option>Professionel</option>															 
															</select>
														 </div>														 
														 <button type="submit" class="btn btn-primary" name="reg_send">Soumettre</button>
													</form>
												  </div>
												  <div class="modal-footer">
													<button class="btn btn-info" data-dismiss="modal">Fermer</button>
												  </div>
												</div>
											  </div>
											</div>	
											
                                        <li>Bonjour serges manga !!</li>	
                                       									
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