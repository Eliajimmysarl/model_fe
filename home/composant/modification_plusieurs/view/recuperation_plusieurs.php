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
							
					<form method="POST" action="index.php?page=modification_plusieurs"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
						
						<script type="text/javascript">

							jQuery( document ).ready( function( $ ) {
								var $table1 = jQuery( '#table-1' );
					
								// Initialize DataTable
								$table1.DataTable( {
									"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
									"bStateSave": true
								});
						
								// Initalize Select Dropdown after DataTables is created
								$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
									minimumResultsForSearch: -1
								});
							} );

						</script>
			
						<table class="table table-bordered datatable" id="table-1">
							
							<thead>
								<tr>
									<TH>#</TH>
						
									<th>Text</th>

									<th>Select</th>

									<th >Date</th>

									<th >Telephone</th>

									<th >Email</th>

									<th >Radio</th>

								</tr>

							</thead>

							<tbody>
							
								<?php
												
									for($i=0; $i < count($entites); $i++)
										{         
											echo"                         
												<tr class='odd gradeX'>
												
													<td>
													
														<input type='checkbox' name='i[]' value='$i'><input type='hidden' name='id[]' value='".$entites[$i]->id."'>
													
													</td>

													<td> 
														
														<input type='hidden' name='texte[]' value='".$entites[$i]->texte."'> " . $entites[$i]->texte ."
													
													</td>

													<td> 
													
														<input type='hidden' name='selec[]' value='".$entites[$i]->selec."'>". $entites[$i]->selec ."
													
													</td>
													
													<td> 
													
														<input type='hidden' name='dates[]' value='".$entites[$i]->dates."'>". $entites[$i]->dates ."
													
													</td>
													
													<td> 
													
														<input type='hidden' name='telephone[]' value='".$entites[$i]->telephone."'>". $entites[$i]->telephone ."
													
													</td>
													
													<td> 
													
														<input type='hidden' name='email[]' value='".$entites[$i]->email."'>". $entites[$i]->email ."
													
													</td>
													
													<td> 
													
														<input type='hidden' name='optionsRadios[]' value='".$entites[$i]->optionsRadios."'>". $entites[$i]->optionsRadios ."
													
													</td>
											
												</tr>";				
										}
								?>
							</tbody>

							<thead>
								<tr>
									<th>#</th>

									<th>text</th>

									<th>Select</th>

									<th >date</th>

									<th >Telephone</th>

									<th >Email</th>

									<th >Radio</th>
								</tr>
							</thead>

						</table>

						<div class="form-group">
							
							<div class="col-sm-offset-3 col-sm-5">
								
								<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
							
								<i class="entypo-right-open-mini">Modifier</i>
							
							</div>
						
						</div>
								
					</form>
							
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
