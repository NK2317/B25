<div >
    <div class="row contenido" style="padding-bottom: 50px;">
        <div class="col-md-10">
            <form action="" method="post">
                <div class="card grey-card">
                    <div class="card-body col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Consultar usuario</h5> 
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Datos de usuario</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                     <div class="col-md-4 content">
                        Puesto: <br>
                        <input id="Inp_Puesto" name="Inp_Puesto" class="Solo_Lectura" disabled value>
                        </div>
                    <div class="col-md-8 content">
                        Dirección:
                        <input id="Inp_Direccion" name="Inp_Direccion" class="Solo_Lectura" disabled value>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 content">
                        Tipo de usuario:
                        <input id="Inp_Tipo_Usuario" name="Inp_Tipo_Usuario" class="Solo_Lectura" disabled value>
                    </div>
                    <div class="col-md-4 content">
                        Usuario:
                        <input id="Inp_Usuario" name="Inp_Usuario" class="Solo_Lectura" disabled value>
                    </div>
                    <div class="col-md-4 content">
                        Contraseña:
                        <input id="Inp_Contraseña" name="Inp_COntraseña" class="Solo_Lectura" disabled value>
                    </div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-md-8 content">
                        Nombre:
                        <input id="Inp_Nombre_Completo" name="Inp_Nombre_Completo" class="Solo_Lectura" disabled value>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Datos de contacto</h4>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 content">
                        Correo electrónico: <br>
                        <input id="Inp_Correo_Electronico" name="Inp_Correo_Electronico" class="Solo_Lectura" disabled value>
                        </div>
                        <div class="col-md-2 content">
                        Teléfono: <br>
                        <input id="Inp_Telefono" name="Inp_Telefono" class="Solo_Lectura" disabled value>
                        </div>
                        <div class="col-md-2 content">
                        Extensión: <br>
                        <input id="Inp_Extension" name="Inp_Extension" class="Solo_Lectura" disabled value>  
                        </div>
                        <div class="col-md-2 content">
                        Celular: <br>
                        <input id="Inp_Celular" name="Celular" class="Solo_Lectura" disabled value>
                        </div>
                    </div>
                <br><!-- Botones -->
                <br>
             

            </form>

            <div class="row">
                <div class="col-md-9">
                    <a href="<?php echo base_url(); ?>Usuario/Ctrl_Usuario" id="Btn_Regresar" name="Pro_Det_Btn_Regresar" class="btn btn-light btn-border">Regresar</a>
                </div>
                <div class="col-md-1" style="align-content: center;">
                    <a>
                        <img value="" name="Activar" class="Activar"onmouseover="mouseOverActivar(this)"onmouseout="MouseoutActivar(this)" src="<?php echo base_url(); ?>img/Iconos/Activar_01.png" alt="Activar">
                    </a>
                </div>
                <div class="col-md-1" style="align-content: center;">
                    <a href="<?php echo base_url(); ?>Usuario/Ctrl_Usuario/Modificar">
                        <img id="" value="" class="Editar " onmouseover="mouseOverEditar(this)" onmouseout="MouseoutEditar(this)"  src="<?php echo base_url(); ?>img/Iconos/Editar_01.png"alt="Editar">
                    </a>
                </div>
                <div class="col-md-1" style="align-content: center;">
                    <a>
                        <img value="" class="Papelera" onmouseover="mouseOverPapelera(this)" onmouseout="MouseoutPapelera(this)" src="<?php echo base_url(); ?>img/Iconos/Papelera_01.png"alt="Papelera" data-toggle="modal">
                    </a>
                </div>
            </div>                          
        </div>
    </div>
</div>    
  </div>
     </div> 