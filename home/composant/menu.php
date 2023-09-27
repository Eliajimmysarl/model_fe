<!-- Active menu dans les entites -->
<?php  require_once('active_menu.php'); ?>

<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="?home">
						<img src="assets/images/logo_m.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>      
			<ul id="main-menu" class="main-menu">
							
				<li class="has-sub">
					<a href="?page=ajouter_un">
					<i class="fa fa-users"></i>
						<span class="title">Modele</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_un">
								<span class="title">Ajout un</span>
							</a>
						</li>

						<li>
							<a href="?page=nombre_ligne">
								<span class="title">Ajout plusieurs</span>
							</a>
						</li>

						<li>
							<a href="?page=ajouter_un_avec_dependance">
								<span class="title">Ajout avec dependance</span>
							</a>
						</li>

						<li>
							<a  href="?page=importer_excel">
								<span class="title">Import Excel</span>
							</a>
						</li>

						<li>
							<a  href="?page=importer_image">
								<span class="title">Import Image</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_plusieurs">
								<span class="title">Recuperer plusieurs</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_avec_dependance">
								<span class="title">Recuperer avec dependance</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_un">
								<span class="title">Recuperer un</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperer_supprimer">
								<span class="title">Supprimer un</span>
							</a>
						</li>

						<li>
							<a href="?page=modifier_plusieurs">
								<span class="title">Modifier plusieurs</span>
							</a>
						</li>

						<li>
							<a href="?page=supprimer_plusieurs">
								<span class="title">Supprimer plusieurs</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperes_modification">
								<span class="title">Modifier un</span>
							</a>
						</li>
												
					</ul>
				</li>

									
				<li>
						<a href="/smaas/kill.php">
						<i class="entypo-logout right"></i>	Log Out 
						</a>
					</li>
					



			</ul>
	</div>

	</div>
