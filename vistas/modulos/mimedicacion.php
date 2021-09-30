<?php 
	$ruta=Ruta::ctrRuta();
?>

<h1 style="color:blue; font-size: 70px; font-style:italic;" class="pagr">Mi medicacion</h1>

<p class="relleno">Los medicamentos pueden hacer que te sientas mejor y te recuperes cuando estás enfermo. Sin embargo, si no sigues las indicaciones, también pueden hacerte daño.

Puedes reducir la probabilidad de tener efectos secundarios de los medicamentos si sigues atentamente las indicaciones de la etiqueta o las que te haya dado el farmacéutico, el doctor o la enfermera.

Los efectos secundarios pueden ser leves, como malestar de estómago, o más graves, como daño del hígado. Algunos incluso pueden ser mortales.

Toma estas medidas sencillas para evitar problemas con los medicamentos.</p>

<ul>
	<li>Sigue atentamente las indicaciones de la etiqueta del medicamento.</li>
	<li>Si no entiendes las indicaciones, pídele al doctor, a la enfermera o al farmacéutico que te las explique.</li>
	<li> Mantén una lista de todos los medicamentos, vitaminas, minerales y productos a base de hierbas que tomas.</li>
	<li>Muéstrale esa información al doctor en el siguiente chequeo.</li>
	<li>Conserva los medicamentos en un lugar fresco y seco, donde no los puedan alcanzar los niños ni las mascotas</li>
</ul>

<div id="tablitas">
	<table cellspacing="0">
			<tr>
				<th></th>
				<th>Lunes</th>
				<th>Miercoles</th>
				<th>Viernes</th>
			</tr>
			<tr>
				<td>9:00</td>
				<td>Naproxeno</td>
				<td>Naproxeno</td>
				<td>Naproxeno</td>	
			</tr>
			<tr>
				<td>14:00</td>
				<td>Panadol forte</td>
				<td>Panadol forte</td>
				<td>Panadol forte</td>			
			</tr>
			<tr>
				<td>20:00</td>
				<td>Doloneuruvion</td>
				<td>Doloneuruvion</td>
				<td>Doloneuruvion</td>			
			</tr>
	</table>
		
</div>

<img class="imgrelleno" src="vistas/imagenes/imagen9.jpg">


<div class="imgrelleno" >
            
            <a href=" <?php echo $ruta?>inicio" class="button blue medium radius">
                <span class="icon-house"></span>MENU

            </a>
    </div>