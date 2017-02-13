<?php
include('header.php');
$chapters = array(
			array("name" => "El Cónclave", "players" => 6, "sessions" => 2, "dates" => "1230-01-06", "scenelist" => array("Llegada y Presentaciones","El Consejo de Matusalenes","La Misión","Los Equipos y Capitanes","La Estrategia","La Partida")),
			array("name" => "Reino de Navarra", "players" => 6, "sessions" => 3, "dates" => "1230-01-15/1230-01-30", "scenelist" => array("El Viaje","Visita a Pamplona","Conquista de Pamplona","Consecuencias","Visitantes de Tudela","La Partida",)),
			array("name" => "Reino de Aragón", "players" => 6, "sessions" => 0, "dates" => "1230-01-31/1230-02-28", "scenelist" => array("El Viaje","Llegada a Zaragoza","Enfrentamiento en Zaragoza","De Viaje a Cataluña","Contactos en Barcelona","Reunión de Mercaderes","Los Barcos","Líos en Barcelona","Enemigos del Norte (Lleida)","Enemigos del Norte (Girona)","Los Refuerzos de las Islas","Conquista del Reino","Consecuencias", "Preparando el Gran Ataque")),
			array("name" => "Reino de Castilla y León", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array("Rumbo a Toledo", "Informantes de Compostela", "Subterfugio en Toledo", "El Visitante de Madrid", "Viaje a Madrid", "Engañando a los Espías", "Las Fuentes de Poder", "Infiltrados en la Corte", "Planificación del Gran Ataque", "Conociendo a Monçada", "Alboroto en la Villa", "Ofensiva en el Sur", "La Gran Batalla Nocturna", "Cara a Cara con Monçada", "Informes del Norte", "Apoyo desde el Oeste", "Consecuencias", "Rumbo al Norte")),
			array("name" => "El Cónclave II", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array("Reunión en Oviedo", "El Consejo II", "Problemas con los Británicos", "Reagrupación y Estrategia", "Nueva Partida")),
			array("name" => "Las Baronías de Avalón", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array("El Largo Viaje y los Lobos Marinos","Londres y Mitras","Rodear la Corte","Conquista de Saint Albans","Negociando en Winchester","Aliados en Glastonbury","Plan de Rodeo","Mensajes al Norte","Aliados en York y Canterbury","Exeter y Gloucester","El enviado de Mitras","Lincoln y Norwich","Asedio en Londres","Enfrentamiento con Mitras","Reagrupación y rumbo al oeste","El plan para Gales","Ataque a Gales","Los Reyes en el Norte","Conquista de las Highlands","Buscando a los Lobos Marinos","Asedio a las Islas","Aprovechando el viento rumbo a Irlanda","Conquista de Conmacht","Ataque combinado: Dublin y Cork","Reagrupación","Rumbo a Aquitania",)),
			array("name" => "El Ducado de Aquitania y Francia", "players" => 6, "dates" => "1230", "sessions" => 0, "scenelist" => array("Recibimiento en Cahors", "Consiguiendo Aliados", "Rumbo a Burdeos", "Enfrentados en Burdeos")),
			array("name" => "Al-Andalus y los Reinos de Taifas", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array()),
			array("name" => "El Sacro Imperio Romano", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array()),
			array("name" => "Italia y las Ciudades Estado", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array()),
			array("name" => "Europa Oriental", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array()),
			array("name" => "Los Hielos del Norte", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array()),
			array("name" => "Estados Bizantinos y Grecia", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array()),
			array("name" => "Los Enemigos del Este: Los Wan-Kuei", "players" => 6, "sessions" => 0, "dates" => "1230", "scenelist" => array()),
	);
$data = array("scenes" => 0, "sessions" => 0);
$id = $_GET["id"];
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Conquistadores</h1>
		</div>
		<div class="col-sm-12">
			<button type="button" class="btn btn-primary">Nuevo Capítulo</button>
		</div>
		<div class="col-sm-12">
			<table class="table table-hover table-sm table-striped">
			  <thead class="thead-inverse">
				<tr>
				  <th>#</th>
				  <th>Título</th>
				  <th>Escenas</th>
				  <th>Jugadores</th>
				  <th>Sesiones</th>
				  <th>Fechas</th>
				  <th>Acciones</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php 
				for($i = 0; $i < sizeof($chapters); $i++) {
			  ?>
				<tr data-toggle="collapse" data-target=".demo<?php echo $i+1; ?>" class="accordion-toggle">
				  <th scope="row"><?php echo $i+1; ?></th>
				  <td><a href="chapter<?php echo $id."-".$i+1; ?>.php"><?php echo $chapters[$i]["name"]; ?></a></td>
				  <td><?php echo sizeof($chapters[$i]["scenelist"]); $data["scenes"] += sizeof($chapters[$i]["scenelist"]); ?></td>
				  <td><?php echo $chapters[$i]["players"]; ?></td>
				  <td><?php echo $chapters[$i]["sessions"]; $data["sessions"] += $chapters[$i]["sessions"]; ?></td>
				  <td><?php echo $chapters[$i]["dates"]; ?></td>
				  <td>
						<i class="fa fa-eye" aria-hidden="true"></i>
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<i class="fa fa-print" aria-hidden="true"></i>
						<i class="fa fa-trash" aria-hidden="true"></i>
				  </td>
				</tr>
				<tr >
					<td colspan="6" class="hiddenRow"><div class="accordian-body collapse demo<?php echo $i+1; ?>" >
					<?php
						for($j = 0; $j < sizeof($chapters[$i]["scenelist"]); $j++) {
							echo ($i+1)."-".($j+1).". ";
							echo '<a href="chapter'.$id."-".($i+1)."-".($j+1).'.php">'.$chapters[$i]["scenelist"][$j].'</a>';
							echo "<br />";
						}
					?>
					</div> </td>
				</tr>
			  <?php
				}
			  ?>
			  </tbody>
			  <thead class="thead-inverse">
				<tr>
				  <th>#</th>
				  <th></th>
				  <th><?php echo $data["scenes"]; ?></th>
				  <th>6</th>
				  <th><?php echo $data["sessions"]; ?></th>
				  <th></th>
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