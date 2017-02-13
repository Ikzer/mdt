<?php
include('header.php');
$chronicles = array(
			array("name" => "Conquistadores", "chapters" => 14, "scenes" => 79, "players" => 6, "sessions" => 5),
			array("name" => "Noches de Constantinopla", "chapters" => 5, "scenes" => 25, "players" => 6, "sessions" => 1),
	);
$data = array("chapters" => 0, "scenes" => 0, "players" => 0, "sessions" => 0);
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Crónicas</h1>
		</div>
		<div class="col-sm-12">
			<button type="button" class="btn btn-primary">Nueva Crónica</button>
		</div>
		<div class="col-sm-12">
			<table class="table table-hover table-sm table-striped">
			  <thead class="thead-inverse">
				<tr>
				  <th>#</th>
				  <th>Crónica</th>
				  <th>Capítulos</th>
				  <th>Escenas</th>
				  <th>Jugadores</th>
				  <th>Sesiones</th>
				  <th>Acciones</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php 
				for($i = 0; $i < sizeof($chronicles); $i++) {
			  ?>
				<tr>
				  <th scope="row"><?php echo $i+1; ?></th>
				  <td><a href="chronicle<?php echo $i+1; ?>.php?id=<?php echo $i+1; ?>"><?php echo $chronicles[$i]["name"]; ?></a></td>
				  <td><?php echo $chronicles[$i]["chapters"]; $data["chapters"] += $chronicles[$i]["chapters"]; ?></td>
				  <td><?php echo $chronicles[$i]["scenes"]; $data["scenes"] += $chronicles[$i]["scenes"]; ?></td>
				  <td><?php echo $chronicles[$i]["players"]; $data["players"] += $chronicles[$i]["players"]; ?></td>
				  <td><?php echo $chronicles[$i]["sessions"]; $data["sessions"] += $chronicles[$i]["sessions"]; ?></td>
				  <td>
						<i class="fa fa-eye" aria-hidden="true"></i>
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<i class="fa fa-print" aria-hidden="true"></i>
						<i class="fa fa-trash" aria-hidden="true"></i>
				  </td>
				</tr>
			  <?php
				}
			  ?>
			  </tbody>
			  <thead class="thead-inverse">
				<tr>
				  <th>#</th>
				  <th></th>
				  <th><?php echo $data["chapters"]; ?></th>
				  <th><?php echo $data["scenes"]; ?></th>
				  <th>6</th>
				  <th><?php echo $data["sessions"]; ?></th>
				  <th>Acciones</th>
				</tr>
			  </thead>
			</table>
		</div>
		<div class="col-sm-12">
			<button type="button" class="btn btn-primary">Nueva Crónica</button>
		</div>
	</div>
</div>
<?php
include('footer.php');