<?php
include("head.html")

?>
<body>
	<div class="site-wrap">
		
		<form>
			<section>
				<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalLoginForm" role="dialog" tabindex="-1">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header text-center">
								<h4 class="modal-title w-100 font-weight-bold">Crée un compte</h4><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body modal-form mx-3">
								<!--Début colonne gauche-->
								<div class="col-sm-6 col-xs-12">
									<!--Nom de Famille-->
									<div class="col-xs-12 mt20">
										<span class=""><label class="required" for="member_user_registration_form_member_last_name">Nom de famille *</label></span>
										<div class="">
											<input class="" id="member_user_registration_form_member_last_name" name="last_name" placeholder="Entrez votre nom de famille" required="required" type="text">
										</div>
									</div><!--Prenom-->
									<div class="col-xs-12 mt20">
										<span class=""><label class="required" for="member_user_registration_form_member_last_name">Prénom *</label></span>
										<div class="">
											<input class="" id="member_user_registration_form_member_last_name" name="name" placeholder="Entrez votre prénom" required="required" type="text">
										</div>
									</div><!--Genre-->
									<div class="col-xs-12 mt20">
										<span class="input-select"><label class="required" for="member_user_registration_form_member_gender">Genre *</label></span>
										<div class="select">
											<select class="" id="member_user_registration_form_member_gender" name="gender" required="required" style="width:100%">
												<option selected="selected" value="">
												</option>
												<option value="0">
													Féminin
												</option>
												<option value="1">
													Masculin
												</option>
											</select>
										</div>
									</div><!--Date de naissance-->
									<div class="col-xs-12 mt20">
										<span class="col-xs-12 mt20"><label class="required">Date de naissance *</label></span>
										<div class="col-xs-4 custom-col">
											<select class="form-control j_register_birthday" id="member_user_registration_form_member_birthdate_day" name="day">
												<option value="1">
													01
												</option>
												<option value="2">
													02
												</option>
												<option value="3">
													03
												</option>
												<option value="4">
													04
												</option>
												<option value="5">
													05
												</option>
												<option value="6">
													06
												</option>
												<option value="7">
													07
												</option>
												<option value="8">
													08
												</option>
												<option value="9">
													09
												</option>
												<option value="10">
													10
												</option>
												<option value="11">
													11
												</option>
												<option value="12">
													12
												</option>
												<option value="13">
													13
												</option>
												<option value="14">
													14
												</option>
												<option value="15">
													15
												</option>
												<option value="16">
													16
												</option>
												<option value="17">
													17
												</option>
												<option value="18">
													18
												</option>
												<option value="19">
													19
												</option>
												<option value="20">
													20
												</option>
												<option value="21">
													21
												</option>
												<option value="22">
													22
												</option>
												<option value="23">
													23
												</option>
												<option value="24">
													24
												</option>
												<option value="25">
													25
												</option>
												<option value="26">
													26
												</option>
												<option value="27">
													27
												</option>
												<option value="28">
													28
												</option>
												<option value="29">
													29
												</option>
												<option value="30">
													30
												</option>
												<option value="31">
													31
												</option>
											</select>
										</div>
										<div class="col-xs-4 custom-col">
											<select class="form-control j_register_birthday" id="member_user_registration_form_member_birthdate_month" name="month">
												<option value="1">
													01
												</option>
												<option value="2">
													02
												</option>
												<option value="3">
													03
												</option>
												<option value="4">
													04
												</option>
												<option value="5">
													05
												</option>
												<option value="6">
													06
												</option>
												<option value="7">
													07
												</option>
												<option value="8">
													08
												</option>
												<option value="9">
													09
												</option>
												<option value="10">
													10
												</option>
												<option value="11">
													11
												</option>
												<option value="12">
													12
												</option>
											</select>
										</div>
										<div class="col-xs-4 custom-col">
											<select class="form-control j_register_birthday" id="member_user_registration_form_member_birthdate_year" name="year">
												<option value="2023">
													2023
												</option>
												<option value="2022">
													2022
												</option>
												<option value="2021">
													2021
												</option>
												<option value="2020">
													2020
												</option>
												<option value="2019">
													2019
												</option>
												<option value="2018">
													2018
												</option>
												<option value="2017">
													2017
												</option>
												<option value="2016">
													2016
												</option>
												<option value="2015">
													2015
												</option>
												<option value="2014">
													2014
												</option>
												<option value="2013">
													2013
												</option>
												<option value="2012">
													2012
												</option>
												<option value="2011">
													2011
												</option>
												<option value="2010">
													2010
												</option>
												<option value="2009">
													2009
												</option>
												<option value="2008">
													2008
												</option>
												<option value="2007">
													2007
												</option>
												<option value="2006">
													2006
												</option>
												<option value="2005">
													2005
												</option>
												<option value="2004">
													2004
												</option>
												<option value="2003">
													2003
												</option>
												<option value="2002">
													2002
												</option>
												<option value="2001">
													2001
												</option>
												<option value="2000">
													2000
												</option>
												<option value="1999">
													1999
												</option>
												<option value="1998">
													1998
												</option>
												<option value="1997">
													1997
												</option>
												<option value="1996">
													1996
												</option>
												<option value="1995">
													1995
												</option>
												<option value="199 4">
													1994
												</option>
												<option value="1993">
													1993
												</option>
												<option value="1992">
													1992
												</option>
												<option value="1991">
													1991
												</option>
												<option value="1990">
													1990
												</option>
												<option value="1989">
													1989
												</option>
												<option value="1988">
													1988
												</option>
												<option value="1987">
													1987
												</option>
												<option value="1986">
													1986
												</option>
												<option value="1985">
													1985
												</option>
												<option value="1984">
													1984
												</option>
												<option value="1983">
													1983
												</option>
												<option value="1982">
													1982
												</option>
												<option value="1981">
													1981
												</option>
												<option value="1980">
													1980
												</option>
												<option value="1979">
													1979
												</option>
												<option value="1978">
													1978
												</option>
												<option value="1977">
													1977
												</option>
												<option value="1976">
													1976
												</option>
												<option value="1975">
													1975
												</option>
												<option value="1974">
													1974
												</option>
												<option value="1973">
													1973
												</option>
												<option value="1972">
													1972
												</option>
												<option value="1971">
													1971
												</option>
												<option value="1970">
													1970
												</option>
												<option value="1969">
													1969
												</option>
												<option value="1968">
													1968
												</option>
												<option value="1967">
													1967
												</option>
												<option value="1966">
													1966
												</option>
												<option value="1965">
													1965
												</option>
												<option value="1964">
													1964
												</option>
												<option value="1963">
													1963
												</option>
												<option value="1962">
													1962
												</option>
												<option value="1961">
													1961
												</option>
												<option value="1960">
													1960
												</option>
												<option value="1959">
													1959
												</option>
												<option value="1958">
													1958
												</option>
												<option value="1957">
													1957
												</option>
												<option value="1956">
													1956
												</option>
												<option value="1955">
													1955
												</option>
												<option value="1954">
													1954
												</option>
												<option value="1953">
													1953
												</option>
												<option value="1952">
													1952
												</option>
												<option value="1951">
													1951
												</option>
												<option value="1950">
													1950
												</option>
												<option value="1949">
													1949
												</option>
												<option value="1948">
													1948
												</option>
												<option value="1947">
													1947
												</option>
												<option value="1946">
													1946
												</option>
												<option value="1945">
													1945
												</option>
												<option value="1944">
													1944
												</option>
												<option value="1943">
													1943
												</option>
												<option value="1942">
													1942
												</option>
												<option value="1941">
													1941
												</option>
												<option value="1940">
													1940
												</option>
												<option value="1939">
													1939
												</option>
												<option value="1938">
													1938
												</option>
												<option value="1937">
													1937
												</option>
												<option value="1936">
													1936
												</option>
												<option value="1935">
													1935
												</option>
												<option value="1934">
													1934
												</option>
												<option value="1933">
													1933
												</option>
												<option value="1932">
													1932
												</option>
												<option value="1931">
													1931
												</option>
												<option value="1930">
													1930
												</option>
												<option value="1929">
													1929
												</option>
												<option value="1928">
													1928
												</option>
												<option value="1927">
													1927
												</option>
												<option value="1926">
													1926
												</option>
												<option value="1925">
													1925
												</option>
												<option value="1924">
													1924
												</option>
												<option value="1923">
													1923
												</option>
											</select>
										</div>
									</div><!--Code Postale-->
									<div>
										<div class="col-xs-12 mt20">
											<span class=""><label class="required" for="member_user_registration_form_member_postal_code">Code postal *</label></span>
										</div>
										<div class="input">
											<div class="" id="city-gouv">
												<span aria-live="polite" class="ui-helper-hidden-accessible" role="status"></span> <input autocomplete="off" class="city-by-postalcode ui-autocomplete-input" id="member_user_registration_form_member_postal_code" name="member_user_registration_form[member][postal_code]" placeholder="Entrez le code postal" required="required" type="text">
												<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" style="display: none;" tabindex="0"></ul>
											</div>
										</div>
									</div>
								</div><!--Fin colonne gauche--><!--Début colonne droite-->
								<div class="col-sm-7 col-xs-12">
									<!--Ville-->
									<div class="col-xs-12 mt10">
										<div class="">
											<span class=""><label class="required" for="member_user_registration_form_member_city">Ville *</label></span>
											<div class="color-city">
												<input class=" auto-city" id="member_user_registration_form_member_city" name="member_user_registration_form[member][city]" placeholder="Ville" required="required" type="text">
											</div>
										</div>
									</div><!--Numéro de téléphone-->
									<div class="col-xs-12 mt10">
										<span class=""><label class="required" for="member_user_registration_form_member_phone_number">Numéro de téléphone *</label></span>
										<div class="">
											<input class="" id="member_user_registration_form_member_phone_number" name="member_user_registration_form[member][phone_number]" placeholder="Entrez le numéro de téléphone" required="required" type="text">
										</div>
									</div><!--Adresse Mail-->
									<div class="col-xs-12 mt10">
										<span class=""><label class="required" for="member_user_registration_form_email">Login * :</label></span>
										<div class="">
											<input class="form-control" id="member_user_registration_form_email" name="member_user_registration_form[email]" placeholder="Saisir un email" required="required" type="email">
										</div>
									</div><!--Mot de passe-->
									<div class="col-xs-12 mt10">
										<div class="">
											<div id="member_user_registration_form_plainPassword">
												<div>
													<label class="required" for="member_user_registration_form_plainPassword_first">Mot de passe * :</label><input class="form-control" id="member_user_registration_form_plainPassword_first" name="member_user_registration_form[plainPassword][first]" placeholder="Saisir un mot de passe" required="required" type="password">
												</div>
											</div>
										</div>
									</div>
									<div class="">
										<button class="btn btn-primary" style="text-transform: unset" type="submit" name="envoie">Créer</button>
									</div>
								</div><!--Fin colonne droite-->
							</div>
						</div>
					</div>
				</div>
			</section>
		</form>
		<div class="site-section bg-light" data-aos="fade-up">
			<div class="container">
				<div class="row align-items-first">
					<div class="col-md-7">
						<form action="#" class="bg-white" method="post">
							<div class="p-3 p-lg-5 border">
								<div class="form-group row">
									<div class="col-md-6">
										<label class="text-black" for="c_fname">Prénom <span class="text-danger">*</span></label> <input class="form-control" id="c_fname" name="c_fname" type="text">
									</div>
									<div class="col-md-6">
										<label class="text-black" for="c_lname">Nom <span class="text-danger">*</span></label> <input class="form-control" id="c_lname" name="c_lname" type="text">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="text-black" for="c_email">Email <span class="text-danger">*</span></label> <input class="form-control" id="c_email" name="c_email" placeholder="" type="email">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="text-black" for="c_subject">Objet</label> <input class="form-control" id="c_subject" name="c_subject" type="text">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="text-black" for="c_message">Message</label> 
										<textarea class="form-control" cols="30" id="c_message" name="c_message" rows="7"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-12">
										<input class="btn btn-primary btn-lg btn-block" type="submit" value="Envoyez votre message">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-5">
						<div class="p-4 border mb-3 bg-white">
							<p class="mb-0">Adresse</p>
							<p class="mb-4">5/7 rue Leredde; 75013 Paris</p>
							<p class="mb-0">Téléphone</p>
							<p class="mb-4"><a href="#">0612345699</a></p>
							<p class="mb-0">Adresse Mail</p>
							<p class="mb-4"><a href="#">thayvb@ffvb.fr</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>

		<div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
			<div class="container">
			<img src="../assets/img/logos/thayvb.png" alt="">
			</div>
		</div>
		</footer>
	</div>
	<script src="js/jquery-3.3.1.min.js">
	</script> 
	<script src="js/jquery-migrate-3.0.1.min.js">
	</script> 
	<script src="js/jquery-ui.js">
	</script> 
	<script src="js/popper.min.js">
	</script> 
	<script src="js/bootstrap.min.js">
	</script> 
	<script src="js/owl.carousel.min.js">
	</script> 
	<script src="js/jquery.stellar.min.js">
	</script> 
	<script src="js/jquery.countdown.min.js">
	</script> 
	<script src="js/jquery.magnific-popup.min.js">
	</script> 
	<script src="js/aos.js">
	</script> 
	<script src="js/main.js">
	</script>
</body>
</html>