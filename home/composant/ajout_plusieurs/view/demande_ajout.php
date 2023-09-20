<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
			<a href="?page=recuperer_modeles">Ajouter modele</a>
		</li>
	
		<li class="active">
			<strong>Ajouter</strong>
		</li>
	</ol>

<div class="row">
			
	<div class="col-md-12">
				
		<div class="panel panel-primary" data-collapsed="0">
				
			<div class="panel-heading">

				<div class="panel-title" style="text-align: center;v">
									
				</div>
							       

			</div>
					
			<div class="panel-body">
						
				<form method="POST" action="index.php?demande=ajouter_un"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
					
					<?php
							$nombreLigne=$_POST['nombre_ligne'];

							for($i=0; $i < count($nombreLigne); $i++)
								{         
									echo"
											<div class='form-group'>		
												<label class='col-sm-3 control-label' >Text <abbr style='color:green; font-size:15px;'>**</abbr></label>
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-user'></i></span>
															<input type='text' name='text_$i' class='form-control' placeholder='Text' required='required'>
															<span class='input-group-addon'><i class='r'></i></span>
														</div>
													</div>
											</div>";
								}
					?>

					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-5">
							
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
						
							<i class="entypo-right-open-mini">Ajouter</i>
						
						</div>
					
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>	