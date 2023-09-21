<hr/>
	<ol class="breadcrumb bc-3" >
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>

		<li>
			<a href="?page=recuperer_agents">texte</a>
		</li>

		<li class="active">
			<strong>Importer</strong>
		</li>
	</ol>

	<div class="row">
				
		<div class="col-md-12">
					
			<div class="panel panel-primary" data-collapsed="0">
					
				<div class="panel-heading">

					<div class="panel-title" style="text-align: center;">
										
					</div>

				</div>
						
				<div class="panel-body">
							
					<form method="POST" action="index.php?demande=import_excel"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
						
						<div class="form-group">		
							<label class="col-sm-3 control-label"></label>
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-pencil"></i></span>
											
										<input type="file" name="excel" class="form-control" required="required">
											
										<span class="input-group-addon"><i class="r"></i></span>
									</div>
								</div>
						</div>
					
						<div class="form-group">		
							<label class="col-sm-3 control-label" >Text <abbr style="color:green; font-size:15px;">**</abbr></label>
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-pencil"></i></span>
										
										<input type="text" name="text" class="form-control" placeholder="Prenom" required="required">
										
										<span class="input-group-addon"><i class="r"></i></span>
									</div>
								</div>
						</div>
					
						<div class="form-group">		
							<label class="col-sm-3 control-label">select <abbr style="color:green; font-size:15px;">**</abbr></label>			
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-pencil"></i></span>
										<select  name="select" id="select"  class="form-control" required="required">
										<option value="" selected>Select</option>
											
											<option value="select1">select1</option>
											
											<option value="select2">select2</option>
										
										</select>
										<span class="input-group-addon"><i class=""></i></span>
									</div>
								</div>
						</div>
						
					

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">

								<button type="submit" class="btn btn-success btn-block btn-login">

								<i class="entypo-right-open-mini">Importer</i>
							</div>

					</form>
						
				</div>
										
			</div>
					
		</div>
			
	</div>
