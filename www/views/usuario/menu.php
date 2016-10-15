<div class="row">
	<div class="col-xs-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		  	<?php
		  	foreach ($banners as $key => $banner) {
		  	?>
		  	<li data-target="#carousel-example-generic" data-slide-to="<?=$key?>" <?php if ($key==0) echo 'class="active"'; ?>></li>
		  	<?php
		  	}
		  	?>	    
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<?php
		  	foreach ($banners as $key => $banner) {
		  	?>
		  		<div class="item <?php if ($key==0) echo 'active'; ?>">
			      <img src="<?=$banner['imagen']?>" alt="<?=$banner['nombre']?>">
			      <!--<div class="carousel-caption">
			        ...
			      </div>-->
			    </div>
		  	<?php
		  	}
		  	?>		    
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>	
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
    <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">Menú</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <?php
				switch ($_SESSION["tipo"]) {
				case 'DISTRIBUIDOR':
			?>
              <ul class="nav navbar-nav">
                	<li><a href="<?=URL_USUARIO?>">Perfil</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_NEGOCIO?>">Mis Compras</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_PUNTOS?>">Puntos</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_PREMIOS?>">Premios</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_INCENTIVOS?>">Incentivos</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_PROMOCIONES?>">Promociones</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CUPONES?>">Cupones de Descuento</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CAPACITACION?>">Capacitación</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Políticas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    	  <li><a class="open-modal" idpage="15">Condiciones Comerciales</a></li>
					      <li><a class="open-modal" idpage="14">Políticas de Datos</a></li>
					      <li><a class="open-modal" idpage="16">Como Realizar Pedidos</a></li>
                  </ul>
                </li>
              </ul>
              <?php
					break;
				case 'LIDER':
				?>
                <ul class="nav navbar-nav">           	
                    <li><a href="<?=URL_USUARIO?>">Perfil</a>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CLIENTES?>">Mis clientes</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_NEGOCIO?>">Mi negocio</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_INCENTIVOS?>">Incentivos</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CUENTA?>">Cuenta virtual</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CAPACITACION?>">Capacitación</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_DOCUMENTOS?>">Documentos</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Políticas <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    	  <li><a class="open-modal" idpage="15">Condiciones Comerciales</a></li>
					      <li><a class="open-modal" idpage="14">Políticas de Datos</a></li>
					      <li><a class="open-modal" idpage="16">Como Realizar Pedidos</a></li>
                  </ul>
                </li>
              </ul>
              <?php
					break;
				case 'DIRECTOR':
					# code...
					break;
				
				default:
					# code...
					break;
				}
			?>
              
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
    
    
   
		<?php /*?><ul class="nav nav-pills pull-right">

		<?php
			switch ($_SESSION["tipo"]) {
				case 'DISTRIBUIDOR':
		?>
				<div class="btn-group" role="group" aria-label="...">
					<a href="<?=URL_USUARIO?>" class="btn btn-success">Perfil</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_NEGOCIO?>" class="btn btn-success">Mis Compras</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_PUNTOS?>" class="btn btn-success">Puntos</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_PREMIOS?>" class="btn btn-success">Premios</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_INCENTIVOS?>" class="btn btn-success">Incentivos</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_PROMOCIONES?>" class="btn btn-success">Promociones</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_CUPONES?>" class="btn btn-success">Cupones de Descuento</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_CAPACITACION?>" class="btn btn-success">Capacitación</a>

					<div class="btn-group" role="group">
					    <a type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					      Políticas
					      <span class="caret"></span>
					    </a>
					    <ul class="dropdown-menu">
					      <li><a class="open-modal" idpage="15">Condiciones Comerciales</a></li>
					      <li><a class="open-modal" idpage="14">Políticas de Datos</a></li>
					      <li><a class="open-modal" idpage="16">Como Realizar Pedidos</a></li>
					    </ul>
					</div>				
				</div>
		<?php
					break;
				case 'LIDER':
		?>
				<div class="btn-group" role="group" aria-label="...">
					<a href="<?=URL_USUARIO?>" class="btn btn-success">Perfil</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_CLIENTES?>" class="btn btn-success">Mis clientes</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_NEGOCIO?>" class="btn btn-success">Mi negocio</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_INCENTIVOS?>" class="btn btn-success">Incentivos</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_CUENTA?>" class="btn btn-success">Cuenta virtual</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_CAPACITACION?>" class="btn btn-success">Capacitación</a>
					<a href="<?=URL_USUARIO."/".URL_USUARIO_DOCUMENTOS?>" class="btn btn-success">Documentos</a>

					<div class="btn-group" role="group">
					    <a type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					      Políticas
					      <span class="caret"></span>
					    </a>
					    <ul class="dropdown-menu">
					      <li><a class="open-modal" idpage="18">Políticas Comerciales</a></li>
					      <li><a class="open-modal" idpage="19">Proceso Comercial</a></li>
					      <li><a class="open-modal" idpage="20">Gestión de Clientes</a></li>
					    </ul>
					</div>		
				</div>			
		<?php
					break;
				case 'DIRECTOR':
					# code...
					break;
				
				default:
					# code...
					break;
			}
		?>		  
		</ul><?php */?>
	</div>
    <div class="">
	<div class="col-xs-12">
		<?php 
		if (isset($_SESSION["idusuario_remoto"]) && !empty($_SESSION["idusuario_remoto"])) {
		?>
			<div class="alert alert-danger text-center" role="alert">
				¡ATENCIÓN! HAZ ACCEDIDO A LA CUENTA DE <?=$_SESSION["nombre"]?><br><br>
				<a href="<?=URL_SALIR_REMOTO?>" class="btn btn-danger btn-sm">REGRESA A TU CUENTA COMO <?=$_SESSION["nombre_remoto"]?></a></div>
		<?php	
		}else{
		?>
			<div class="alert alert-success text-center" role="alert">TU PERFIL ES DE <?=$_SESSION['tipo']?></div>	
		<?php
		}
		?>
		
	</div>
</div>
</div>