<!DOCTYPE html>
<html>
    <head>  
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>assets/css/material-dashboard.css" rel="stylesheet"/>        
        
        <style>
            .sidenav {
          height: 100%;
          width: 160px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #CCC;
          overflow-x: hidden;
          padding-top: 20px;
        }

        .sidenav a {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .main {
          margin-left: 180px; /* Same as the width of the sidenav */
          padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
    </head>
    <body>

    <div class="sidenav">
      <a href="#products">Productos</a>
      <a href="#car">Carrito</a>
      
    </div>
    
        <div class="container main">
            <div class="row">
                <div class="wrapper">                      
                    <div class="content">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                    <div class="row">
                                    <strong><div class="col-xs-6 text-danger" id="productos">Productos</div></strong>                           
                                    </div></div>

                                <div class="panel-body">
                                    <div class="row">  
                                        <div class="col-md-12">         
                                            <h3> Lista de Productos </h3>
                                            <form action="javascript:void(0);" id="controller_products">
                                                 <!--div v-if="load_products">
                                                    Cargando lista de productos...
                                                </div v-if="!load_products"-->
                                                <table class="table" >
                                                    <thead>
                                                       <tr>
                                                          <th> Nombre </th>
                                                          <th> Descripción </th>
                                                          <th> Imagen </th>
                                                          <th> </th>
                                                       </tr>
                                                    </thead>
                                                    <tbody>
                                                       <!-- Fila para modificar una tarea. -->
                                                       <tr v-for="prod in products">
                                                          <td>
                                                             <input class="form-control" type="text" v-model="prod.name" />
                                                          </td>
                                                          <td>
                                                             <input class="form-control" type="text" v-model="prod.description"/>
                                                          </td>
                                                          <td>                                                    
                                                            <img  v-bind:src="'<?php print base_url();?>assets/img/' + prod.image" height="80" width="80" /> 
                                                          </td>
                                                          <td>
                                                             <button class="btn btn-success" v-on:click="addCart(prod)"> Añadir </button>
                                                             
                                                          </td>
                                                       </tr>                                                   
                                                    </tbody>
                                                </table>
                                                <h3>Carrito de Compra</h3>
                                                <table class="table" >
                                                    <thead>
                                                       <tr>
                                                          <th> Nombre </th>
                                                          <th> Descripción </th>
                                                          <th> Imagen </th>
                                                          <th> </th>
                                                       </tr>
                                                    </thead>
                                                    <tbody>
                                                       <!-- Fila para modificar una tarea. -->
                                                       <tr v-for="item in cart">
                                                          <td>
                                                             <input class="form-control" type="text" v-model="item.name" />
                                                          </td>
                                                          <td>
                                                             <input class="form-control" type="text" v-model="item.description"/>
                                                          </td>
                                                          <td>
                                                             <input class="form-control" type="text" v-model="item.cantidad"/>
                                                          </td>
                                                          <td>                                                    
                                                            <img  v-bind:src="'<?php print base_url();?>assets/img/' + item.image" height="80" width="80" /> 
                                                          </td>
                                                          <td>
                                                             <button class="btn btn-success" v-on:click="delCart(item)"> Quitar </button>
                                                             
                                                          </td>
                                                       </tr>                                                   
                                                    </tbody>
                                                </table>
                                            </form> 
                                        </div>          
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/material.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url() ?>assets/js/vue.min.js" type="text/javascript"></script>  
    <script src="<?php echo base_url() ?>assets/js/vue-resource.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/app.js" type="text/javascript"></script>  
</html>