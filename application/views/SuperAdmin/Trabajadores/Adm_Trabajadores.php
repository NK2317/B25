<!-- change the id  -->
<div class="row contenido">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12">
                <strong><h5>Trabajadores</h5></strong> <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url(); ?>Usuario/Ctrl_Usuario/Registrar" id="Btn_Registrar_Trabajador" name="Reu_Admin_Btn_Registrar" class="btn btn-light btn-border"> Registrar Trabajador</a>
            </div>
        </div>
    </div>
</div><br>
<div class="row contenido" style="padding-bottom: 50px;">
    <div class="col-md-10">
        <form action="">
        <table id="Tab_Trabajador" name="Reu_Admin_Tab_Usuario" class=" table table-striped table-bordered">
            <thead class="Tabla">
                <tr>
                    <th width="30%">Nombre del trabajador</th>
                    <th>Fecha de ingreso</th>
                    <th>Área</th>
                    <th>Puesto</th>
                    <th>Estatus</th> 
                    <th width="15%">Acciones</th>
                </tr>
            </thead>
            <tbody id="data_row">
                <tr>
                    <td>Vladimir</td>
                    <td>01/10/2002</td>
                    <td>Arquitectura</td>
                    <td>Desarrollador</td>
                    <td>Habilitado</td>
                    <td>
                        <div class="row">
                            <div class="col-md-4" style="align-content: center;">
                                <a href="'+base_url+'Proyectos/Ctrl_Proyectos/Ver">
                                    <img value="" name="ver" class="ver"onmouseover="mouseOverVer(this)"onmouseout="MouseoutVer(this)" src="<?php echo base_url(); ?>img/Iconos/Ver_01.png" alt="Ver">
                                </a>
                            </div>
                            <div class="col-md-4" style="align-content: center;">
                                <a href="'+base_url+'Proyectos/Ctrl_Proyectos/Modificar">
                                    <img id="" value="" class="Editar " onmouseover="mouseOverEditar(this)" onmouseout="MouseoutEditar(this)"  src="<?php echo base_url(); ?>img/Iconos/Editar_01.png"alt="Editar">
                                </a>
                            </div>
                            <div class="col-md-4" style="align-content: center;">
                                <a>
                                    <img value="" class="Papelera" onmouseover="mouseOverPapelera(this)" onmouseout="MouseoutPapelera(this)" src="<?php echo base_url(); ?>img/Iconos/Papelera_01.png"alt="Papelera" data-toggle="modal">
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
</div>
<div class="row contenido" style="padding-bottom: 50px;">
    <div class="col-md-9">
        <a href="<?php echo base_url();?>Ctrl_Inicio/SuperAdmin" class="btn btn-light btn-border">
            Regresar
        </a>
    </div>
</div>