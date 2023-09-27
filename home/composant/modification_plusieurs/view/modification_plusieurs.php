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
						
				<form method="POST" action="index.php?demande=modification_plusieurs"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
					
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
												<label class='col-sm-3 control-label' >Text <abbr style='color:green; font-size:15px;'>*</abbr></label>
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-pencil'></i></span>
															<input type='text' name='text_$i' value='$texte[$ident]' class='form-control' placeholder='Text' required='required'>
															<span class='input-group-addon'><i class='r'></i></span>
														</div>
													</div>
											</div>
								
											<div class='form-group' >		
												<label class='col-sm-3 control-label'>Select <abbr style='color:green; font-size:15px;'>*</abbr></label>			
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-pencil'></i></span>
															<select  name='select_$i' id='select_$i'  class='form-control' required='required'>
															<option value='$selec[$ident]' selected>$selec[$ident]</option>
																<option value='select1_$i'>select1</option>
																<option value='select2_$i'>select2</option>
															</select>
															<span class='input-group-addon'><i class=''></i></span>
														</div>
													</div>
											</div>

                                            <div class='form-group'>		
                                                <label class='col-sm-3 control-label'>Date <abbr style='color:green; font-size:15px;'>**</abbr></label>			
                                                    <div class='col-sm-5'>
                                                        <div class='input-group'>
                                                            <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                                                            <input type='date' name='dates_$i' value='$dates[$ident]' class='form-control' placeholder=' date' required='required'>
                                                            <span class='input-group-addon'><i class=''></i></span>
                                                        </div>
                                                    </div>
                                            </div> 
                        
                                            <div class='form-group'>		
                                                <label class='col-sm-3 control-label'>Telephone <abbr style='color:green; font-size:15px;'>**</abbr></label>			
                                                    <div class='col-sm-5'>
                                                        <div class='input-group'>
                                                            <span class='input-group-addon'><i class='entypo-phone'></i></span>
                                                            <input type='text' name='telephone_$i' value='$telephone[$ident]' id=numero class='form-control' placeholder=' Numero de telephone' required='required'>
                                                            <span style='' id=avnum> </span>
                                                            <span class='input-group-addon'><i class=''></i></span>
                                                        </div>
                                                    </div>
                                            </div>
                                            
                                            <div class='form-group' style='border-color:#BDBDBB'>		
                                                <label class='col-sm-3 control-label'>E-mail <abbr style='color:green; font-size:15px;'>**</abbr></label>			
                                                    <div class='col-sm-5'>
                                                        <div class='input-group'>
                                                            <span class='input-group-addon'><i class='entypo-mail'></i></span>
                                                            <input type='email' name='email_$i' value='$email[$ident]' class='form-control' placeholder=' email@gmail.com' required='required'>
                                                            <span class='input-group-addon'><i class=''></i></span>
                                                        </div>
                                                    </div>
                                            </div>
											";
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