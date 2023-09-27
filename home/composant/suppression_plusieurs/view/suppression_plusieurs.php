<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
			<a href="?page=recuperer_modeles">Text</a>
		</li>
	
		<li class="active">
			<strong>Supprimer</strong>
		</li>
	</ol>

<div class="row">
			
	<div class="col-md-12">
				
		<div class="panel panel-primary" data-collapsed="0">	
				
			<div class="panel-body">
						
				<form method="POST" action="index.php?demande=suppression_plusieurs"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
					
					<?php
							$ids=$_POST['id'];

							$is=$_POST['i'];

                            $texte=$_POST['texte'];

                            $nombreLigne=count($is);

							echo "<input type='hidden' name='nombre_ligne' value=$nombreLigne>
							
									<div class='row'>

										<div class='col-md-12'>
											
											<div class='alert alert-danger'>
											
												<strong>Voulez-vous supprimer les lignes suivantes : 
								"; 

								for($i=0; $i < $nombreLigne; $i++)
									{     
										$ident = $is[$i]; 
										
										$id = $ids[$ident];
									
										echo"
												<input type='hidden' name='id_$i' value='$id'>

												$texte[$ident] 
											"; 
										
										if($i < $nombreLigne - 1) 
												{
													echo ", ";
												} 		
									}
	
							echo " 	? .</strong> <br> <a href='?page=recuperer_plusieurs'><button type='button' class='btn btn-blue'>NON</button></a>	

							<div class='col-sm-offset-1 col-sm-1'>
							
							<button type='submit' onclick='validate()' class='btn btn-success btn-block btn-login'>
						
							<i class='entypo-right-open-mini'>OUI</i>
						
						</div>
							
							";
						?>			
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>
