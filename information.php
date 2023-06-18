<?php

include_once 'inc/config.inc.php';
include_once 'inc/Conexion.inc.php';
include_once 'inc/Redireccion.inc.php';
include_once 'inc/ControlSesion.inc.php';
include_once 'inc/Usuario.inc.php';

if (!ControlSesion::sesion_iniciada()) {
  Redireccion::redirigir(SERVIDOR);
}



include_once 'plantillas/inicio.inc.php';
include_once 'plantillas/navbar.inc.php';
?>





<!-- Carousel-->


<div class="row justify-content-center py-4">
<div id="carouselExampleCaptions"  class="carousel slide mb-3" data-bs-ride="carousel" style="width: 82em;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/logo.png" class="d-block w-100" style=" height: 400px;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" style=" height: 400px; ">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" class="d-block w-100" style=" height: 400px;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<nav>
  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-acerca-tab" data-bs-toggle="tab" data-bs-target="#nav-acerca" type="button" role="tab" aria-controls="nav-acerca" aria-selected="true">Acerca de</button>
    <button class="nav-link" id="nav-equipo-tab" data-bs-toggle="tab" data-bs-target="#nav-equipo" type="button" role="tab" aria-controls="nav-equipo" aria-selected="false">Modulo de Gestion de Equipos</button>
    <button class="nav-link" id="nav-man-tab" data-bs-toggle="tab" data-bs-target="#nav-man" type="button" role="tab" aria-controls="nav-man" aria-selected="false">Modulo de Mantenimiento</button>
    <button class="nav-link" id="nav-repor-tab" data-bs-toggle="tab" data-bs-target="#nav-repor" type="button" role="tab" aria-controls="nav-repor" aria-selected="false">Modulo de Reportes</button>
    <button class="nav-link" id="nav-usuario-tab" data-bs-toggle="tab" data-bs-target="#nav-usuario" type="button" role="tab" aria-controls="nav-usuario" aria-selected="false">Modulo de Gestion de Usuarios</button>
  </div>
</nav>




<!-- textó-->

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-acerca" role="tabpanel" aria-labelledby="nav-acerca-tab"> 


  <div class="container mt-4 mb-8 py-2">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background: #F0EDED;">
                <div class="row">
                    <div class="col-md">
   <p align="left"> HidroSIEC, es un sistema de información, que permite el apoyo a la toma de decisiones,y el control de una organización, esto mediante un conjunto de componentes o funciones que ayudan a administrar, recolectar, procesar, almacenar y distribuir información relevante para los procesos fundamentales y las particularidades de cada organización. De acuerdo a esto, HidroSIEC es pensado para resolver una problemática, la cual es brindar una mejor gestión de los procesos de información de manera eficaz y efectiva, para así poder disfrutar de los beneficios que brinda, el uso de la tecnología, entre los cuales tenemos el generar mejores formas de recolección, almacenamiento y acceso a la información de los equipos computacionales de C.A HIDROLLANOS donde se podrá identificar de manera efectiva la ubicación, usuarios funcionales y algunas características importantes del equipo, además el registro y  control de los mantenimientos que son programados y realizados. El método utilizado en el sistema consiste en una serie de procedimientos o módulos que permiten la gestión de equipos computacionales.</p>
                    </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="tab-pane fade" id="nav-equipo" role="tabpanel" aria-labelledby="nav-equipo-tab">

    <div class="container mt-4 mb-8 py-2">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background: #F0EDED;">
                <div class="row">
                    <div class="col-md">

    
    
                <p align="left">  HidroSIEC, cuenta con un primer módulo denominado “Gestión de Equipos”, las funciones que este contempla son las de Registrar, Visualizar, Actualizar y borrar la información almacenada en la base de datos. Este módulo está dividido en dos partes “CPU” y “Periféricos”.  </p>
              
                <ul class="i-list medium">
               <li class="i-list-item">
                <p>La función del módulo CPU, es la de registrar y llevar un control de todos los CPU, que se encuentran operativos e inoperativos dentro de la C.A HIDROLLANOS, asi como tambien la de conocer desde el usuario funcional que lo opera, como la ubicación a donde fue asignado, hasta algunas características importantes que se deben tener a la mano para cualquier mantenimiento que a este se le deba realizar como lo son, fabricante, procesador, memoria, placa del equipo etc. Además de un código personalizado por CPU, que depende de la sede y oficina donde se encuentre ubicado dicho equipo.</p>
                </li>
            </ul>
<ul class="i-list medium">
<li class="i-list-item">
<p>La función del módulo Periférico, es la de registrar y llevar un control de todos los periféricos a los cuales esta asociado dicho CPU, que se encuentren operativos e inoperativos dentro de la C.A HIDROLLANOS, asi como tambien la de conocer desde el usuario funcional que lo opera, como la ubicación a donde fue asignado, hasta algunas características importantes como lo son, fabricante y modelo. Además de un código personalizado por periférico, que depende de la sede y oficina donde se encuentre ubicado dicho equipo.</p>
</li>
</ul>
                 </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






  <div class="tab-pane fade" id="nav-man" role="tabpanel" aria-labelledby="nav-man-tab">
    <div class="container mt-4 mb-8 py-2">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background: #F0EDED;">
                <div class="row">
                    <div class="col-md">
                       <p align="center">HidroSIEC,cuenta con un segundo módulo denominado "Mantenimiento", las funciones que este contempla son son las de registrar, visualizar, actualizar y borrar la información almacenada en la base de datos. </p>
                <ul class="i-list medium">
               <li class="i-list-item">Este módulo es pensado para el registro y control de todos los mantenimientos que se programan en una fecha preestablecida, los cuales quedan en estatus de “pendiente” y una vez realizados cambian a un estatus de “realizado”, así como la generación de un PDF que sirve para informar a la presidencia que dicho mantenimiento se hará en un determinado equipo, además de todo muestra una tabla que permite conocer todas las características importantes del mantenimiento como: la sede, oficina, descripción, fecha programada, estatus y nombre del técnico. Además de un código personalizado por mantenimiento, que depende de la sede y oficina donde se encuentre ubicado dicho equipo.
               </li>
             </ul>
             
  </div>
  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="tab-pane fade" id="nav-repor" role="tabpanel" aria-labelledby="nav-repor-tab">


 <div class="container mt-4 mb-8 py-2">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background: #F0EDED;">
                <div class="row">
                    <div class="col-md">

                <p align="center">HidroSIEC, cuenta con un tercer módulo denominado “Reportes”, las funciones que este contempla son dos: </p>
              <ul class="i-list medium">
               <li class="i-list-item">
Generar reportes de forma general, donde se pueda visualizar toda la información completa y detalla de los módulos de “Mantenimiento” y “Gestión de Equipos” sin omitir ningún tipo de dato.
              </li>
            </ul>
            <ul class="i-list medium">
               <li class="i-list-item">
Generar reportes personalizados por módulo para así conocer una lista de los equipos que se encuentren en estatus activo e inactivos, una lista de equipos por sedes y oficinas, al igual que los mantenimientos por sedes y oficinas, así como por estatus de pendiente o realizados.

              </li>
            </ul>


          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>






  <div class="tab-pane fade" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
<div class="container mt-4 mb-8 py-2">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background: #F0EDED;">
                <div class="row">
                    <div class="col-md">
                <p align="left">HidroSIEC, cuenta con un cuarto módulo denominado “Gestión de Usuarios” las funciones que este contempla son las asignar permisos para poder visualizar, actualizar, registrar y eliminar  información, así como también la asignación de roles para poder acceder al sistema como usuario normal, hasta llegar a ser promovido a un administrador por un superusuario. </p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


</div>


<?php 
include_once 'plantillas/cierre.inc.php';
?>
