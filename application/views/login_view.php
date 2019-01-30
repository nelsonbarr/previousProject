<!DOCTYPE html>
<html>
    <head>         
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>assets/css/material-dashboard.css" rel="stylesheet"/>       
          
    </head>
    <body>
        <form method="POST" action="<?php print base_url();?>login/login"
            id="formulario" name="formulario" enctype="multipart/form-data" >
        <div class="container">
            <div class="content">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="letras">
                            <div class="row">
                            <div class="col-xs-6 text-danger"><strong>Inicio de Sesion</strong></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group row col-xs-12">                                
                                <div class="col-md-12 col-lg-12">
                                    <label class="control-label">Usuario</label>
                                    <input class="form-control" type="email" value="" id="login" name="login"  >
                                </div>            
                                <div class="col-md-12 col-lg-12">
                                    <label class="control-label">Contraseña</label>  
                                    <input class="form-control" type="password" value="" id="password" name="password" >
                                </div>                         
                            </div>  
                            <div class="form-group row col-xs-12">
                                <input class=" btn btn-login" type="submit" value="Iniciar Sesion"/> 
                            </div> 
                            <div class="col-md-12 banner-sec">
                                <div class="col-sm-12">
                                    <?php if ($this->session->flashdata('error')) { ?>
                                        <div class="alert alert-danger text-center"> <?php echo $this->session->flashdata('error') ?> </div>
                                    <?php } ?>
                                    <?php if ($this->session->flashdata('success')) { ?>
                                        <div class="alert alert-success text-center"> <?php echo $this->session->flashdata('success') ?> </div>
                                    <?php } ?>
                                </div> 
                            </div>       
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>   
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/material.min.js" type="text/javascript"></script>     
    
</html>
