<?php if (!Controller::$DISABLE_BANNERS_USUARIO) { ?>
<div class="row">
	<div class="col-xs-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		 
		  <ol class="carousel-indicators">
		  	<?php
		  	foreach ($banners as $key => $banner) {
		  	?>
		  	<li data-target="#carousel-example-generic" data-slide-to="<?=$key?>" <?php if ($key==0) echo 'class="active"'; ?>></li>
		  	<?php
		  	}
		  	?>
		  </ol>

		  
		  <div class="carousel-inner" role="listbox">
		  	<?php
		  	foreach ($banners as $key => $banner) {
		  	?>
		  		<div class="item <?php if ($key==0) echo 'active'; ?>">
			      <img src="<?=$banner['imagen']?>" alt="<?=$banner['nombre']?>">
			      
			    </div>
		  	<?php
		  	}
		  	?>		    
		  </div>

		 
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!--Anuncio campaña de madres-->
		<!--<div class="panel panel-default">
		<div class="panel-heading bg-danger" style="background-color: #ef7a00; color: #fff;"><h4>¡APROVECHA EL MES DE LA MADRE!</h4></div>
		  <div class="panel-body bg-warning">
		    Hemos diseñado una página para que vendas nuestros productos en el mes de las madres. Solo debes compartir el siguiente enlace con tus clientes: <span class="label label-default" id="urlmadre"><?=URL_SITIO.URL_TIENDA.'/'.URL_TIENDA_PRODUCTOS.'?d='.$_SESSION['idusuario']?></span><br><br><button class="btn btn-primary btn-sm" onclick="copyToClipboard('#urlmadre')">Copiar Enlace</button>
		  </div>
		</div>-->
		
	</div>
</div>
<?php } ?>


<div class="row">
	<div class="col-xs-12">
    <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu-interno" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">Menú</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu-interno" style="padding-left: 3px !important;padding-right: 3px !important;">
            
            <?php
				switch ($_SESSION["tipo"]) {
				case 'DISTRIBUIDOR DIRECTO':
			?>
              <ul class="nav navbar-nav">
                	<li><a href="<?=URL_USUARIO?>">Perfil</a></li>
                	
                	<!--<li><a href="<?=URL_USUARIO."/".URL_USUARIO_VENTAS_VIRTUALES?>">Ventas Virtuales</a></li>-->

                	<li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comercialización<span class="caret"></span></a>
	                  <ul class="dropdown-menu">
	                  	<li><a href="<?=URL_USUARIO.'/'.URL_USUARIO_NEGOCIO.'/VENTADIRECTA'?>">
	                  		Venta Directa	                  		
	                  	</a></li>
	                  	<li><a href="<?=URL_USUARIO.'/'.URL_USUARIO_NEGOCIO.'/DROPSHIPPING'?>">
	                  		
	                  		Dropshipping
	                  		
	                  	</a></li>
	                  	<li><a href="<?=URL_USUARIO.'/'.URL_USUARIO_VENTAS_VIRTUALES?>">
	                  		
	                  		Venta Virtual
	                  	</a></li>
	                  </ul>
	              	</li>
	              	<!--
	                <?php if (!Controller::$DISABLE_COMPRAR) { ?>

                	<li><a href="<?=URL_USUARIO."/".URL_USUARIO_COMPRAR?>">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

                	<?php } ?>
                	
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_NEGOCIO?>">Mis Compras</a></li>-->

					<?php if (!Controller::$DISABLE_REFERIDOS) { ?>					
					
						<li><a href="<?=URL_USUARIO."/".URL_USUARIO_REFERIR?>">Referir</a></li>

					<?php } ?>

					<?php if (!Controller::$DISABLE_PUNTOS) { ?>					

						<li><a href="<?=URL_USUARIO."/".URL_USUARIO_PUNTOS?>">Puntos</a></li>

					<?php } ?>

					<?php if (!Controller::$DISABLE_PREMIOS) { ?>

					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_PREMIOS?>">Premios</a></li>

					<?php } ?>

					<?php if (!Controller::$DISABLE_INCENTIVOS) { ?>
						
						<li><a href="<?=URL_USUARIO."/".URL_USUARIO_INCENTIVOS?>">Incentivos</a></li>

					<?php } ?>

					<?php if (!Controller::$DISABLE_PROMOCIONES) { ?>				

					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_PROMOCIONES?>">Promociones</a></li>

					<?php } ?>

					<?php if (!Controller::$DISABLE_CUPONES) { ?>

					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CUPONES?>">Cupones</a></li>

					<?php } ?>

					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_TICKETS?>">PQRS</a></li>

					<?php if (!Controller::$DISABLE_CAPACITACION) { ?>

					<li><a href="<?=URL_USUARIO_CAPACITACION?>">Escuela de Negocio</a></li>

					<?php }?>
                
                	

	                <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Políticas <span class="caret"></span></a>
	                  <ul class="dropdown-menu">
						      <?php

						      foreach ($paginas_menu as $pagina) {				      

						      	switch (Controller::$CANAL_DISTRIBUCION) {

						      		case 'DISTRIBUIDORES ESPECIALIZADOS':
						      			
						      			if ($pagina["posicion"]=="POLITICAS DISTRIBUIDORES ESPECIALIZADOS") {

							          	?>
								          <li><a class="open-modal" idpage="<?=$pagina["idpagina"]?>"><?=$pagina["titulo"]?></a></li>
							          	<?php
								        }

						      			break;

						      		case 'TIENDAS ESPECIALIZADAS':
						      			
						      			if ($pagina["posicion"]=="POLITICAS TIENDAS ESPECIALIZADAS") {

							          	?>
								          <li><a class="open-modal" idpage="<?=$pagina["idpagina"]?>"><?=$pagina["titulo"]?></a></li>
							          	<?php
								        }

						      			break;
						      		
						      		default:
						      			
						      			if ($pagina["posicion"]=="POLITICAS DISTRIBUIDORES" || $pagina["posicion"]=="POLITICAS DISTRIBUIDORES Y REPRESENTANTES") {

							          	?>
								          <li><a class="open-modal" idpage="<?=$pagina["idpagina"]?>"><?=$pagina["titulo"]?></a></li>
							          	<?php
								        }

						      			break;
							    }

					          }
						      ?>
	                  </ul>
	                </li>
              </ul>
              <?php
					break;
				case 'REPRESENTANTE COMERCIAL':
				?>
                <ul class="nav navbar-nav">           	
                    <li><a href="<?=URL_USUARIO?>">Perfil</a>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CLIENTES?>">Mis clientes</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_NEGOCIO?>">Mi negocio</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_INCENTIVOS?>">Incentivos</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CUENTA?>">Cuenta virtual</a></li>
					<!--<li><a href="<?=URL_USUARIO."/".URL_USUARIO_CAPACITACION."/?opcion=".URL_USUARIO_CAPACITACION_NEGOCIO?>">Escuela de Negocio</a></li>-->
					<li><a href="<?=URL_USUARIO_CAPACITACION?>">Escuela de Negocio</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_TICKETS?>">PQRS</a></li>
					<li><a href="<?=URL_USUARIO."/".URL_USUARIO_DOCUMENTOS?>">Documentos</a></li>
					<li><a href="https://piudali.com.co/crm/">Gestión de clientes</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Políticas <span class="caret"></span></a>
                  <ul class="dropdown-menu">					      
					      <?php
					      foreach ($paginas_menu as $pagina) {
				              if ($pagina["posicion"]=="POLITICAS REPRESENTANTES" || $pagina["posicion"]=="POLITICAS DISTRIBUIDORES Y REPRESENTANTES") {
				          ?>
				          <li><a class="open-modal" idpage="<?=$pagina["idpagina"]?>"><?=$pagina["titulo"]?></a></li>
				          <?php
				              }
				          }
					      ?>
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
		<div class="row">
			<div class="col-xs-12 col-md-9">
				<div class="alert alert-danger text-center" role="alert">
				¡ATENCIÓN! HAZ ACCEDIDO A LA CUENTA DE <?=$_SESSION["nombre"]?> 
				<a href="<?=URL_SALIR_REMOTO?>" class="btn btn-danger btn-sm">REGRESA A TU CUENTA COMO <?=$_SESSION["nombre_remoto"]?></a></div>
			</div>
			<div class="col-xs-12 col-md-3">
				<div class="col-xs-5 text-center" style="padding-left: 0px !important;padding-right: 0px !important;">
				<br>
				<p class="text-center" style="font-size: 11px;line-height: 15px;">Propiedad intelectual y tecnológica:</p>
				</div>
				<div class="col-xs-7">
					<img src="<?=URL_SITIO?>assets/img/logo-link-grupo-marketing.png" class="img-responsive" style="max-width: 110px;">
				</div>
			</div>
		</div>
		<?php	
		}else{
		?>
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<div class="alert alert-success text-center" role="alert">
					<h4>
						<span style="text-transform: uppercase;"><?=$_SESSION["nombre"]?></span>, TU PERFIL ES DE <?=$_SESSION['tipo']?>
					</h4>	
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="col-xs-5 text-center" style="padding-left: 0px !important;padding-right: 0px !important;">
					<br>
						<p class="text-center" style="font-size: 11px;line-height: 15px;">Propiedad intelectual y tecnológica:</p>
					</div>
					<div class="col-xs-7">
						<img src="<?=URL_SITIO?>assets/img/logo-link-grupo-marketing.png" class="img-responsive" style="max-width: 110px;">
					</div>
				</div>
			</div>
		<?php
		}
		?>
		
	</div>
</div>
</div>