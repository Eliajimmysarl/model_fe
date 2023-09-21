<hr/>

	<ol class="breadcrumb bc-2 hidden-print" >
		
		<li>
			<a href="index.html"><i class="fa-home"></i>Home</a>
		</li>
		
		<li>
			<a href="extra-icons.html">Mes renouvellements</a>
		</li>
		
		<li class="active">
			<strong>Facture</strong>
		</li>

	</ol>
	
	<br class="hidden-print" />
		
		<div class="invoice">
		
			<div class="row">
			
				<div class="col-sm-6 invoice-left">
				
					<a href="#">
						<img src="assets/images/logo_facture.png" width="185" alt="" />
					</a>
					
				</div>
				
				<div class="col-sm-6 invoice-right">
				
						<h3>FACTURE NO. #<?php echo  $referenceCommande;?></h3>
						<span><?php echo $dateEnregistrement;?></span>
				</div>
				
			</div>
			
			<hr class="margin" />
					
			<div class="row">
			
				<div class="col-sm-3 invoice-left">
				
					<h4>Client</h4>
					
					Prenom : <?php echo  $prenom;?>
					<br />
					Nom : <?php echo  $nom;?>
					<br />
					E-mail : <?php echo  $email;?>
					
			</div>
			
			<div class="col-md-9 invoice-right">
				
				<h4>Détails de paiement:</h4>
					
					<strong>Methode #:</strong> Mpesa
					<br */>
					<strong>Télephone:</strong> <?php echo  $telephone;?>
					<br/>
					<strong>Service:</strong> Titre de Transport
					
				</div>
				
			</div>
			
			<div class="margin"></div>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th width="60%">Description</th>
						<th>Quantité</th>
						<th>Prix</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td class="text-center">1</td>
						<td><?php echo  "$descriptions ($zone) ";?></td>
						<td>1</td>
						<td class="text-right"><?php echo  $prix;?> CDF</td>
					</tr>

					<tr>
						<td class="text-center" colspan=4></td>	
					</tr>
				</tbody>
			</table>
			
			<div class="margin"></div>
		
			<div class="row">
			
				<div class="col-sm-6">
				
					<div class="invoice-left">

						EJ SARL, make it easy!
						<br />
						130/A Boulevard du 30 Juin.
						<br />
						Commune de la Gombe
						<br />
						Tel: (234)815250190
						<br />
						
						support@ejsarl.com
					</div>
				
				</div>
				
				<div class="col-sm-6">
					
					<div class="invoice-right">
						
						<ul class="list-unstyled">
							<li>
								Sous- Total : 
								<strong><?php echo  $prix;?> CDF</strong>
							</li>
							<li>
								TVA: 
								<strong>0%</strong>
							</li>
							<li>
								Remise: 
								0
							</li>
							<li>
								Total à payer:
								<strong><?php echo  $prix;?></strong>
							</li>
						</ul>
						
						<br />
						
						<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
							Imprimer la facture
							<i class="entypo-doc-text"></i>
						</a>
						
						</div>
					
				</div>
				
			</div>
		
		</div>

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>
