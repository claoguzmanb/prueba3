
<?php


	if(strcmp($_REQUEST['accion'],'contacto')==0){
		print("<h1>Hola, en esta sección me podrás contactar para cualquier duda o comentario!</h1>");
		?>
			<article id="main-col">
				<h3>Contacto</h3>
        <br>
				<form action="enviar.php" id='contactame' onsubmit="return false;" method="POST">
					<label>Nombre:</label>
					<input type="text" name="nombre" placeholder="  Ej. Nombre Apellidos" required="">
					<br>
					<label>Asunto:</label>
					<input type="text" name="asunto" placeholder="  Ingresa el asunto" required="">
					<br>
					<label>Grupo:</label>
					<input type="text" name="grupo" placeholder="  Ej. 4701" required="">
					<br>
					<label>Correo:</label>
					<input type="email" name="correo" placeholder="  Ej. micorreo@gmail.com" required="">
					<br>
					<label>Mensaje:</label>
					<textarea name='mensaje'></textarea>
					<br>
					<input type="submit" name="Enviar" onclick="confirmarmsg();">

				</form>
			</article>
			<aside id="lateral">
				<div class="oscuro">
					<h3>Dudas</h3>
					<p>Si tienes alguna duda o quieres que anexe algún documento o video, mándame un correo con tu solicitud.</p>
				</div>
			</aside>
		<?php
	}
	if(strcmp($_REQUEST['accion'],'acercade')==0){
    ?>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap.min.css">
      <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <article id="main-col">
      <h1>Bienvenidos!!!</h1>
      <br>
      <br>
      <h2>Hola Chic@s</h2>
      <br>
      <br>
      <p><h3>En este sitio encontrarás información correspondiente a las materias que imparto regularmente en el TESCHA, para ello entra a la materia de tu interés.</h3></p>
      <br>
      <br>
      <h2>Aquí te dejo mi Curriculum para que conozcas más acerca de mi</h2>
      <br>
      <br>
      <div class="container" align="center">
      <button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Curriculum Vitae</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>        
                <div class="modal-body">
                        <embed src="pdfs/Curriculum.pdf#toolbar="0""  width="100%" height="500">
                </div>
              </div>
          </div>
        </div>
      </div>
      
    </article>  
    <aside id="lateral">
        <div class="oscuro">
          <h3>Música</h3>
          <embed src="Coldplay-Paradise.wav" autostart=false true loop=true> 
        </div>
      </aside>
    
    <?php
		
	}
	if(strcmp($_REQUEST['accion'],'videos')==0){
		?>
    <script src="js/jquery.min.js"></script>
    <script src="js/stacktable.js"></script>
		<h1>En esta sección encontrarás algunos videos que espero te sean de utilidad, proximamente agregaré más</h1><br><br>
    <div style="text-align: center;">
			<TABLE id="tabla" style="margin: 0 auto">
				<TR>
					<TH><h3>Ponchado de Cable de Red Directo</h3><br></TH>
          <th><h3>Ponchado de Cable de Red Cruzado</h3><br></th>
				</TR>	
        <TR>
          <TD>
            <video controls width="500" height="300">
              <source src="videos/cabledirecto.mp4" type="video/mp4">
            </video>
            <br>
          </TD>
          <TD>
            <video controls width="500" height="300">
              <source src="videos/cablecruzado.mp4" type="video/mp4">
            </video>
            <br>
          </TD>
        </TR>
				<tr>
          <th><h3>Instalar y Configurar DHCP</h3><br></th>
          <th><h3>Crear Controlador de Dominio</h3><br></th>
        </tr>
        <tr>
          <TD>
            <video controls width="500" height="300">
              <source src="videos/dhcp.mp4" type="video/mp4">
            </video>
            </TD>
          <TD>
            <video controls width="500" height="300">
              <source src="videos/dominio.mp4" type="video/mp4">
            </video>
          </TD>
        </tr>
			 </TABLE>
    </div>  
		<?php
	}
	if(strcmp($_REQUEST['accion'],'redes')==0){
		?>
			<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
 			<link rel="stylesheet" href="bootstrap.min.css">
 			<script src="js/jquery.min.js"></script>
  			<script src="js/bootstrap.min.js"></script>
  			<h3>En esta sección encontrarás los documentos necesarios para la materia de Redes de Computadoras</h3>
		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Instrumentación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/instru_redes.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" >Planeación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal2" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
        					<p><a href="pdfs/PLAN_REDES.pdf" download="Planeacion_Redes.pdf">Descargar Archivo</a></p>
          	        		<embed src="pdfs/PLAN_REDES.pdf#toolbar="0""  width="100%" height="500">

        				</div> 
      				</div>
    			</div>
  			</div>
  		</div>
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" >Rúbrica de Evaluación</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal3" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/rubrica_redes.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<h3>Anexo a los archivos de la materia, aquí te dejo otros archivos que espero sean de tu interés.</h3>
  		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Admón y Gestión LAN</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal4" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/Admon_LAN.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
		<?php
	}

	if(strcmp($_REQUEST['accion'],'admon')==0){
		?>
			<<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
 			<link rel="stylesheet" href="bootstrap.min.css">
 			<script src="js/jquery.min.js"></script>
  			<script src="js/bootstrap.min.js"></script>
  			<h3>En esta sección encontrarás los documentos necesarios para la materia de Administración de Redes</h3>
		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Instrumentación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/INSTR_ADMIN_REDES.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" >Planeación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal2" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
        					<p><a href="pdfs/PLAN_ADMON_REDES.pdf" download="Planeacion_Admon_Redes.pdf">Descargar Archivo</a></p>
          	        		<embed src="pdfs/PLAN_ADMON_REDES.pdf#toolbar="0"" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" >Rúbrica de Evaluación</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal3" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/RÚBRICA_ADMIN_REDES.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<h3>Anexo a los archivos de la materia, aquí te dejo otros archivos que espero sean de tu interés.</h3>
  		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Introducción a Traceroute</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal4" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/Introducción a Traceroute.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
		<?php
	}
	if(strcmp($_REQUEST['accion'],'conmutacion')==0){
		?>
			<<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
 			<link rel="stylesheet" href="bootstrap.min.css">
 			<script src="js/jquery.min.js"></script>
  			<script src="js/bootstrap.min.js"></script>
  			<h3>En esta sección encontrarás los documentos necesarios para la materia de Conmutación y Enrutamiento de Redes de Datos</h3>
		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Instrumentación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/INSTRU_CONMUTACION.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" >Planeación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal2" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
        					<p><a href="pdfs/PLAN_CONMUT_GPO A.pdf" download="Planeacion_Conmutacion.pdf">Descargar Archivo</a></p>
          	        		<embed src="pdfs/PLAN_CONMUT_GPO A.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" >Rúbrica de Evaluación</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal3" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/rubrica_conmut.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<h3>Anexo a los archivos de la materia, aquí te dejo otros archivos que espero sean de tu interés.</h3>
  		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Práctica sobre VLAN</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal4" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/VLAN.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
		<?php
	}
	if(strcmp($_REQUEST['accion'],'telecom')==0){
		?>
			<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
 			<link rel="stylesheet" href="bootstrap.min.css">
 			<script src="js/jquery.min.js"></script>
  			<script src="js/bootstrap.min.js"></script>
  			<h3>En esta sección encontrarás los documentos necesarios para la materia de Fundamentos de Telecomunicaciones</h3>
		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Instrumentación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/INSTRU_TELECOM.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" >Planeación Didáctica</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal2" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
        					<p><a href="pdfs/PLAN_TELECOM.pdf" download="Planeacion_Fund_Telecom.pdf">Descargar Archivo</a></p>
          	        		<embed src="pdfs/PLAN_TELECOM.pdf#toolbar="0"" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		
  		<div class="container" align="center">
  			<br><button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" >Rúbrica de Evaluación</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal3" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/RÚBRICA_TELECOM.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
  		<h3>Anexo a los archivos de la materia, aquí te dejo otros archivos que espero sean de tu interés.</h3>
  		<div class="container" align="center">
			<button type="button" href="A - Cover Page.pdf" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Resumen 1ra Unidad</button>
  			<!-- Modal -->
  			<div class="modal fade" id="myModal4" role="dialog">
    			<div class="modal-dialog modal-lg">
          		<!-- Modal content-->
      				<div class="modal-content">
        				<div class="modal-header">
          					<button type="button" class="close" data-dismiss="modal">&times;</button>
    					</div>        
        				<div class="modal-body">
          	        		<embed src="pdfs/fund telecom1ra unidad.pdf" width="100%" height="500">
        				</div>
      				</div>
    			</div>
  			</div>
  		</div>
		<?php
	}
	
?>