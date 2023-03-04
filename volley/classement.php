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
		<div class="site-blocks-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5" style="background-image: url(images/paris5.jpg);">
			<div class="container">
				<div class="row align-items-center justify-content-start">
					<div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
						<h1 class="bg-text-line">Rencontrez l'équipe</h1>
						<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="site-blocks-vs site-section bg-light">
			<div class="row"></div>
		</div>
		<div class="site-section block-13 bg-primary fixed overlay-primary bg-image" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_bg_3.jpg');">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-12 text-center">
						<h2 class="text-white">Classement</h2>
					</div>
				</div>
				<div class="react-container">
					<div class="theme-dark" data-reactroot="">
						<div class="widget-container widget-dark">
							<div class="c-ranking" style="position: relative;">
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
								<table>
									<colgroup>
										<col width="0%">
										<col width="52%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
										<col width="4%">
									</colgroup>
									<thead>
										<tr class="c-ranking__header" style="background-color: #D3B081; border-left-color: #ffff; border-right-color: #ffff; color: rgb(255, 255, 255);">
											<th class="c-ranking__column--rank"></th>
											<th>
												<p class="text-truncate">Classement Championnat Accession Régionale</p>
											</th>
											<th class="c-ranking__column--pts">
												<p>Pts</p>
											</th>
											<th class="c-ranking__column--details">
												<p>Jo</p>
											</th>
											<th class="c-ranking__column--details">
												<p>G</p>
											</th>
											<th class="c-ranking__column--details">
												<p>P</p>
											</th>
											<th class="c-ranking__column--details">
												<p>3-0</p>
											</th>
											<th class="c-ranking__column--details">
												<p>3-1</p>
											</th>
											<th class="c-ranking__column--details">
												<p>3-2</p>
											</th>
											<th class="c-ranking__column--details">
												<p>2-3</p>
											</th>
											<th class="c-ranking__column--details">
												<p>1-3</p>
											</th>
											<th class="c-ranking__column--details">
												<p>0-3</p>
											</th>
											<th class="c-ranking__column--details">
												<p>Coeff.S</p>
											</th>
											<th class="c-ranking__column--details">
												<p>Coeff.P</p>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="c-ranking__row">
											<!--style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)"-->
											<td class="c-ranking__column--rank">1</td>
											<td class="c-ranking__column--team-name">
												<div class="c-ranking__column--team-name__logo img-cover"></div><a class="text-truncate" href="" target="_blank">Tours Volley-Ball</a>
											</td>
											<td class="c-ranking__column--pts">29</td>
											<td class="c-ranking__column--details">10</td>
											<td class="c-ranking__column--details">10</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">7</td>
											<td class="c-ranking__column--details">2</td>
											<td class="c-ranking__column--details">1</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">7.500</td>
											<td class="c-ranking__column--details">1.527</td>
										</tr>
										<tr class="c-ranking__row">
											<td class="c-ranking__column--rank">2</td>
											<td class="c-ranking__column--team-name">
												<div class="c-ranking__column--team-name__logo img-cover"></div><a class="text-truncate" href="/volley/clubs/nantes-reze-metropole-volley/equipes/nantes-reze-metropole-volley/" target="_blank">Pantin Volley</a>
											</td>
											<td class="c-ranking__column--pts">23</td>
											<td class="c-ranking__column--details">10</td>
											<td class="c-ranking__column--details">8</td>
											<td class="c-ranking__column--details">2</td>
											<td class="c-ranking__column--details">7</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">2</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">2</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">3.250</td>
											<td class="c-ranking__column--details">1.276</td>
										</tr>
										<tr class="c-ranking__row">
											<td class="c-ranking__column--rank">3</td>
											<td class="c-ranking__column--team-name">
												<div class="c-ranking__column--team-name__logo img-cover"></div><a class="text-truncate" href="/volley/clubs/tourcoing-lille-metropole-volley/equipes/tourcoing-lille-metropole-volley/" target="_blank">Avant Garde Saint Denis</a>
											</td>
											<td class="c-ranking__column--pts">23</td>
											<td class="c-ranking__column--details">10</td>
											<td class="c-ranking__column--details">8</td>
											<td class="c-ranking__column--details">2</td>
											<td class="c-ranking__column--details">4</td>
											<td class="c-ranking__column--details">2</td>
											<td class="c-ranking__column--details">2</td>
											<td class="c-ranking__column--details">1</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">1</td>
											<td class="c-ranking__column--details">2.167</td>
											<td class="c-ranking__column--details">1.179</td>
										</tr>
										<tr class="c-ranking__row">
											<td class="c-ranking__column--rank">4</td>
											<td class="c-ranking__column--team-name">
												<div class="c-ranking__column--team-name__logo img-cover"></div><a class="text-truncate" href="/volley/clubs/saint-nazaire-volley-ball-atlantique/equipes/saint-nazaire-volley-ball-atlantique/" target="_blank">Tremablay VB</a>
											</td>
											<td class="c-ranking__column--pts">18</td>
											<td class="c-ranking__column--details">9</td>
											<td class="c-ranking__column--details">5</td>
											<td class="c-ranking__column--details">4</td>
											<td class="c-ranking__column--details">5</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">1</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">4</td>
											<td class="c-ranking__column--details">1.750</td>
											<td class="c-ranking__column--details">1.219</td>
										</tr>
										<tr class="c-ranking__row highlight" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">
											<td class="c-ranking__column--rank">5</td>
											<td class="c-ranking__column--team-name">
												<div class="c-ranking__column--team-name__logo img-cover"></div><a class="text-truncate" href="/volley/clubs/chaumont-volley-ball-52-haute-marne/equipes/chaumont-volley-ball-52-haute-marne/" target="_blank">THAY Volley</a>
											</td>
											<td class="c-ranking__column--pts">16</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">10</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">6</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">4</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">5</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">0</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">1</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">0</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">2</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">2</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">1.429</td>
											<td class="c-ranking__column--details" style="background-color: #D3B081; border-left-color: #D3B081; border-right-color: #D3B081; color: rgb(51, 51, 51)">1.035</td>
										</tr>
										<tr class="c-ranking__row">
											<td class="c-ranking__column--rank">6</td>
											<td class="c-ranking__column--team-name">
												<div class="c-ranking__column--team-name__logo img-cover"></div><a class="text-truncate" href="/volley/clubs/narbonne-volley/equipes/narbonne-volley/" target="_blank">Noisy Le Grand VB</a>
											</td>
											<td class="c-ranking__column--pts">13</td>
											<td class="c-ranking__column--details">9</td>
											<td class="c-ranking__column--details">4</td>
											<td class="c-ranking__column--details">5</td>
											<td class="c-ranking__column--details">5</td>
											<td class="c-ranking__column--details">1</td>
											<td class="c-ranking__column--details">3</td>
											<td class="c-ranking__column--details">0</td>
											<td class="c-ranking__column--details">1</td>
											<td class="c-ranking__column--details">4</td>
											<td class="c-ranking__column--details">0.778</td>
											<td class="c-ranking__column--details">1.082</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>