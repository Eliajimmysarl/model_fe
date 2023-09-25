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
				
			<div class="panel-heading">

				<div class="panel-title" style="text-align: center;">
						Voulez - vous supprimer les lignes suivantes?		
				</div>
							       
			</div>
					
			<div class="panel-body">
						
				<form method="POST" action="index.php?demande=suppression_plusieurs"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
					
					<?php
							$ids=$_POST['id'];

							$is=$_POST['i'];

                            $texte=$_POST['texte'];

                            $selec=$_POST['selec'];

                            $dates=$_POST['dates'];
                        
                            $telephone=$_POST['telephone'];
    
                            $email=$_POST['email'];
                        
                            $optionsRadio=$_POST['optionsRadios'];

							$nombreLigne=count($is);

							echo "<input type='hidden' name='nombre_ligne' value=$nombreLigne>";

							for($i=0; $i < $nombreLigne; $i++)
								{     
									$ident = $is[$i]; 
									 
									$id = $ids[$ident];
								
									echo"
											<input type='hidden' name='id_$i' value='$id'>

											<div class='form-group'>		
												
												<label class='col-sm-3 control-label' >$texte[$ident]</label>
											
												</div>
								
											<div class='form-group' >		
												
												<label class='col-sm-3 control-label'>$selec[$ident]</label>			
													
											</div>

                                            <div class='form-group'>		
                                                
												<label class='col-sm-3 control-label'>$dates[$ident]</label>			
                                                   
                                            </div> 
                        
                                            <div class='form-group'>		
                                                
												<label class='col-sm-3 control-label'>$telephone[$ident]</label>

                                            </div>
                                            
                                            <div class='form-group' style='border-color:#BDBDBB'>		
                                                
												<label class='col-sm-3 control-label'>$email[$ident]</label>

                                            </div>
											";
								}
					?>

					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-5">
							
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
						
							<i class="entypo-right-open-mini">Confirmer la suppression</i>
						
						</div>
					
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>