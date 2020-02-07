
<div class="row">
<!-- Imagen circular -->
    <div class="col-md-2" align="center">
    </div>
    <!-- Nombre del proyecto y barra de menú -->
    <div class="col-md-9">
        <div class="row">
            <p class="Nom_Proyecto ">B25</p>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-9">
                <nav class="navbar-zz navbar-expand-sm navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Opciones del  menú -->
                    <div class="row collapse navbar-collapse" id="opciones">
                        <a href="<?php echo base_url(); ?>Usuario/Ctrl_Usuario" class=" Menu" id="Perfiles" role="button">USUARIOS</a>
                        <a href="<?php echo base_url(); ?>Perfil/Ctrl_Perfil" class=" Menu" id="Perfiles" role="button">CAMBIAR CONTRASEÑA</a>
                        <!-- Fin de Opciones del  menú -->
                    </div>
                </nav>
            </div>
            <div class="col-md-2" style="text-align: right; margin-left: 0px; margin-right: -2%;">
                <a class="Menu nav-item Active" id="salir" role="button" >SALIR</a>
            </div>
            <div class="col-md-1"></div> 
        </div>
    </div>
<!-- Termina el nombre del proyecto y barra de menú -->
</div>