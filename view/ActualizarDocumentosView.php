<?php include("view/modulos/head.php"); ?>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Actualizar Documentos - aDocument 2015</title>
   
   
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		  <link rel="stylesheet" href="/resources/demos/style.css">
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 
 		
		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
         
         
        
          
          
         
         
    </head>
    <body   style="background-color: #F6FADE">
    
       
       
       <?php include("view/modulos/menu.php"); ?>
  
  
  		 <?php
   
		   $sel_id_documentos_legal = "";
		   
		   if($_SERVER['REQUEST_METHOD']=='POST' )
		   {
		      $sel_id_documentos_legal = $_POST['id_documentos_legal'];
		   
		   }
		   
		?>
    
       
        <div class="container">
  
  	  <div class="row" style="background-color: #FAFAFA;">
       
      <form onsubmit="return formulario(this)"  action="<?php echo $helper->url("Documentos","ActualizarDocumentos"); ?>" method="post" class="col-lg-5">
            <h4 style="color:#ec971f;">Actualizar Documentos</h4>
            <hr/>
            
            <table class="table">
    	    	<tr>
            		<th style="width: 50%">Id del Documento </th>
            		<th style="width: 50%"> </th>
            		
            	</tr>
        		<tr>
				
		           <td>	<input type="text" id="id_documentos_legal"  name="id_documentos_legal"  value="<?php echo $sel_id_documentos_legal?> " class="form-control"/> 
		           </td>
		         
		           
		           <?php if (!empty($resultSet))  { ?>
		          
		           		<td> <button type="submit"name="btnBorrar" class="btn btn-danger">Borrar</button></td>
		           <?php    } else {?>
		           		<td> <button type="submit"name="btnComprobar" class="btn btn-success">Comprobar</button></td>
		           
		           <?php }?> 
		           	
		           
		           
	            </tr>
           	
		    </table>        
            <table class="table">
    	    	<tr>
            		<th style="width: 30%">Cliente/Proveedor  </th>
            		<th style="width: 70%">  </th>
            	</tr>
    	    	<tr>
            		<th style="width: 30%">RUC/CI  </th>
            		<th style="width: 70%">Nombres </th>
            		
            	</tr>
        		<tr>
				   <td>	<input type="text" name="ruc_cliente_proveedor" value="" class="form-control"/> </td>
		           <td>	<input type="text" name="nombre_cliente_proveedor" value="" class="form-control"/> </td>
	            </tr>
           	
		    </table>        
             <table class="table">
    	    	<tr>
            		<th style="width: 30%">Carpeta  </th>
            		<th style="width: 70%">  </th>
            	</tr>
    	    	<tr>
            		<th style="width: 30%">Número  </th>
            		<th style="width: 70%"> </th>
            		
            	</tr>
        		<tr>
				   <td>	<input type="text" name="numero_carton_documentos" value="" class="form-control"/> </td>
		           <td>	 </td>
	            </tr>
           	
		    </table>    
		    <table class="table">
    	    	<tr>
            		<th style="width: 30%">Comprobante  </th>
            		<th style="width: 70%">  </th>
            	</tr>
    	    	<tr>
            		<th style="width: 30%">Número  </th>
            		<th style="width: 70%"> </th>
            		
            	</tr>
        		<tr>
				   <td>	<input type="text" name="numero_comprobante" value="" class="form-control"/> </td>
		           <td>	 </td>
	            </tr>
           	
		    </table>  
			<table class="table">
    	    	<tr>
            		<th style="width: 50%">Fecha Documento  </th>
            		<th style="width: 50%">Cambiar Estado  </th>
            	</tr>
    	    	
        		<tr>
				   <td>	<input type="text" name="fecha_documentos_legal" value="" class="form-control" placeholder="aaaa-MM-dd"   /> </td>
		           <td>	 
						<select name="estado_lecturas" id="estado_lecturas"  class="form-control" >
	                  <option value="TRUE"  > LEIDO</option>
	                  <option value="FALSE"  > NO LEIDO</option>
			   	    </select>
				   


				   </td>
	            </tr>
           	
		    </table> 
		    

              <table class="col-sm-12">
      
      
            <tr>
           	<th class="col-sm-2">Agéncias</th>
	    		<th class="col-sm-2">Sucursales</th>
	    		<th class="col-sm-2">Regionales</th>
	    		
	  		</tr>
            
               <tr>
           
            
            	<td>
	            <select name="id_agencias" id="id_agencias"  class="form-control"   >
	                <option value="0"  > --TODOS--</option>
			    	 <?php foreach($resultAgen as $res) {?>
					 		<?php if ($sel_agencias > 0){?>
					 			<option value="<?php echo $res->id_agencias; ?>"  <?php if ($res->id_agencias == $sel_agencias) {echo "selected"; }  ?>     > <?php echo $res->nombre_agencias; ?> </option>
					 		
					 		<?php  } else { ?>
					 			
					 			<option value="<?php echo $res->id_agencias; ?>"  > <?php echo $res->nombre_agencias; ?> </option>
					 		
					 		<?php }  ?>
	 		
				 	 <?php } ?>
				</select>
				</td>
            	
            	
            	<td>
	            <select name="id_sucursales" id="id_sucursales"  class="form-control"   >
	                <option value="0"  > --TODOS--</option>
			    	 <?php foreach($resultSuc as $res) {?>
					 		<?php if ($sel_sucursales > 0){?>
					 			<option value="<?php echo $res->id_sucursales; ?>"  <?php if ($res->id_sucursales == $sel_sucursales) {echo "selected"; }  ?>     > <?php echo $res->nombre_sucursales; ?> </option>
					 		
					 		<?php  } else { ?>
					 			
					 			<option value="<?php echo $res->id_sucursales; ?>"  > <?php echo $res->nombre_sucursales; ?> </option>
					 		
					 		<?php }  ?>
	 		
				 	 <?php } ?>
				</select>
				</td>
				
				
				
				<td>
	            <select name="id_regionales" id="id_regionales"  class="form-control"   >
	                <option value="0"  > --TODOS--</option>
			    	 <?php foreach($resultReg as $res) {?>
					 		<?php if ($sel_regionales > 0){?>
					 			<option value="<?php echo $res->id_regionales; ?>"  <?php if ($res->id_regionales == $sel_regionales) {echo "selected"; }  ?>     > <?php echo $res->nombre_regionales; ?> </option>
					 		
					 		<?php  } else { ?>
					 			
					 			<option value="<?php echo $res->id_regionales; ?>"  > <?php echo $res->nombre_regionales; ?> </option>
					 		
					 		<?php }  ?>
	 		
				 	 <?php } ?>
				</select>
				</td>
      
		    
		    </tr>
           
		     </table>
		     
			<br>
			<br>
			<br>
			<br>
            <div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center;">
		    <div class="form-group">
                                  <input type="submit" name="btnGuardar" value="Guardar"  class="btn btn-success"/>
            </div>
		    </div>
		    </div>
                                     
			<hr>	
      
      
      
          </form>
       
	   
	   
        <?php if (!empty($resultSet)) {  foreach($resultSet as $res) {?>
        <div class="col-lg-7">
            <h4 style="color:#ec971f;">Detalle del Documentos</h4>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:600px;overflow-y:scroll;">
        <table class="table table-hover">
	         <tr>
	    		<th>Id</th>
	    		<th>Agéncia</th>
	    		<th>Sucursal</th>
	    		<th>Regional</th>
	    		<th>Subcategoría</th>
	    		<th>Tipo de Documentos</th>
	    		<th>RUC/CI</th>
	    		<th>Nombre</th>
	    		<th>Fecha</th>
	    		
	  		  </tr>
            
	          <tr>
	              <td> <?php echo $res->id_documentos_legal; ?>  </td>
	               <td> <?php echo $res->nombre_agencias; ?>  </td>
	                <td> <?php echo $res->nombre_sucursales; ?>  </td>
	                 <td> <?php echo $res->nombre_regionales; ?>  </td>
	              <td> <?php echo $res->nombre_subcategorias; ?>  </td>
		          <td> <?php echo $res->nombre_tipo_documentos; ?>     </td> 
		          <td> <?php echo $res->ruc_cliente_proveedor; ?>  </td>
		          <td> <?php echo $res->nombre_cliente_proveedor; ?>  </td>
		          
		          <td> <?php echo $res->fecha_documentos_legal; ?>  </td>
		          
		   		</tr>
	      
            
       	  </table>     
        </section>
	      
	      <?php } } ?>
           </br>
           </br>
           </br> 
            
      </div>
       </div>
       
        <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
     </body>  
    </html>   