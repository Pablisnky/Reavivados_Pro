<?php
// session_start();//se inicia sesion para llamar las variables $_SESSION creadas en otros archivos, o para crear una.

	if(!isset($_SESSION["ID_Participante"])){//sino hay nada almacenado en la variable superglobal devuelve a la pagina de inicio
    	//con esto se garantiza que el usuario entro por login

  		header("location:../../index.php");			
	}
	else{  ?>
		<div>
			<p class="pregunta">Sedequías llegó a ser rey de Judá debido a:</p>
		</div>
		<div class="Quinto">
			<div class="Quinto_2">   
				<p id="principiantes_01a" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Dios lo ungió por medio de Jeremías</p>
				<p id="principiantes_01c" class="efecto" onclick="sonidoCorrecto(); pauseAudioBiblia();llamar_sombrear(); setTimeout(llamar_puntaje,100)">El rey Nabucodonosor lo constituyó</p>
			</div>
			<div class="Quinto_2">
				<p id="principiantes_01d" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">Asesino a su hermano Joaquín</p>
				<p id="principiantes_01b" class="efecto" onclick="sonidoInCorrecto(); pauseAudioBiblia();llamar_bloqueo()">El pueblo lo proclamó</p>
			</div>
		</div
		<?php
		$_SESSION["Versiculo"] = "2 Crónicas 36:10";
	}  
	//19 de noviembre de 2019
    ?>