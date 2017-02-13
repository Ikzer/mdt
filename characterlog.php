<?php
include('header.php');
$characters = array(
			array("name" => "Ikzer", "clan" => "Salubri", "gen" => 7, "afiliacion" => "Sabbat"),
			array("name" => "Alex", "clan" => "Lasombra", "gen" => 7, "afiliacion" => "Ninguna"),
			array("name" => "Doroteo", "clan" => "Kyasid", "gen" => 7, "afiliacion" => "Ninguna"),
			array("name" => "Dimitry", "clan" => "Tzimisce", "gen" => 7, "afiliacion" => "Ninguna"),
			array("name" => "Samara", "clan" => "Ravnos", "gen" => 7, "afiliacion" => "Ninguna"),
			array("name" => "Mark Tarrant", "clan" => "Malkavian", "gen" => 7, "afiliacion" => "Ninguna"),
			array("name" => "Valgruf", "clan" => "Nosferatu", "gen" => 7, "afiliacion" => "Ninguna"),
	);
?>

    <div class="container" style="padding-top: 100px;">
		<div class="row">
			<div class="col-sm-12">
				<h1>Personajes</h1>
			</div>
			<div class="col-sm-12">
				<button type="button" class="btn btn-primary">Nuevo Personaje</button>
			</div>
			<?php
				for($i = 0; $i < sizeof($characters); $i++) {
					?>
					<div class="col-sm-3">
					  <div class="card">
						<img class="card-img-top" src="assets/300x180.png" alt="Card image cap">
						<div class="card-block">
						  <h4 class="card-title"><a href="character.php?id=<?php echo $i; ?>"><?php echo $characters[$i]["name"]; ?></a></h4>
						  <p class="card-text">Descripción corta del personaje.</p>
						</div>
						
						  <ul class="list-group list-group-flush">
							<li class="list-group-item"><span style="font-weight:bold; margin-right: 10px;">Clan:</span> <?php echo $characters[$i]["clan"]; ?></li>
							<li class="list-group-item"><span style="font-weight:bold; margin-right: 10px;">Generación:</span> <?php echo $characters[$i]["gen"]; ?></li>
							<li class="list-group-item"><span style="font-weight:bold; margin-right: 10px;">Afiliación:</span> <?php echo $characters[$i]["afiliacion"]; ?></li>
						  </ul>
						
						<div class="card-footer">
							<i class="fa fa-eye" aria-hidden="true"></i>
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							<i class="fa fa-print" aria-hidden="true"></i>
							<i class="fa fa-trash" aria-hidden="true"></i>
						  <small class="text-muted" style="float:right;">Last updated 3 mins ago</small>
						</div>
					  </div>
					</div>
					<?php
				}
			?>
			<div class="col-sm-12">
				<button type="button" class="btn btn-primary">Nuevo Personaje</button>
			</div>
		</div>
	</div>

<?php
include('footer.php');