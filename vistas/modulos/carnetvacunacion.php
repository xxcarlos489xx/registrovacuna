<?php 
	$ruta=Ruta::ctrRuta();
	$misvacunas=ControladorVacunas::ctrMisVacunas($_SESSION['id']);
?>

<?php 
	echo 	'<fieldset>
				<legend>Datos de usuario</legend>
				<h3><strong>Nombres: </strong> '.$_SESSION["nom_completos"].'</h3>
				<h3><strong>Dni: </strong> '.$_SESSION["nro_documento"].'</h3>
			</fieldset> <br><br>';
		if(count($misvacunas)>0){
			foreach($misvacunas as $v){
				$falta = intval($v["dosistotal"]) - intval($v["dosis"]);
				echo '	<fieldset>
							<h4>Nro. dosis actual: '.$v["dosis"].'</h4>
							<h4>Por completar: '.$falta.'</h4>
							<h4>Nombre de vacuna: '.$v["nombrevacuna"].'</h4>
							<h4>Siglas: '.$v["siglas"].'</h4>
							<h4>Nro. dosis recomendado: '.$v["dosistotal"].'</h4>
							
						</fieldset>';
			}
		}else{
			echo '<div class="restringed">
				Aun no tiene vacunas registradas
			</div>';
		}
		
	
?>