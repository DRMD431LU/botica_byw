<?php $__env->startSection('content'); ?>

<section id="four" class="wrapper style1 special fade-up">

					<div class="container">

						

			<div id="productos" class="container">

		<header class="major">
			<img src="<?php echo e(asset('/img/sky.png')); ?>">
			<br>
			<br>
      <br>

			<h2 class="grey satisfic-font font1">Aqui podras darle seguimiento a tu Pedido</h2>

		</header>

	</div>				

			

			<div class="10u$ 12u$(medium) important(medium) faq">

	<section id="content">

		

		

 <?php if(Auth::guest()): ?>

                   <h3 class="center">Para poder darle seguimiento es necesario que inicies session.</h3>

                <?php else: ?>



 <h3 class="center">Consulta el status de tu paquete.</h3>

<?php endif; ?>
<div class="row jumbotron">
    <div class="title">
      <h4 class="col-xs-12" style="color: black;">
        <strong>Rastrear pedido no. 234131562</strong>
        <p class="pipe">Comprado el: 03/01/18 <span class="pipe">Total: $93.90</span></p>
      </h4>
    </div>

          <div class="item row">
        <div class="col-lg-7 col-md-6">
			<div class="product col-xs-12">
              <div class="image-container col-lg-3 col-md-4 col-xs-2">
                <img src="<?php echo e(asset('/img/12.jpg')); ?>" height="100" width="auto">
              </div>
              <div class="detail-container col-lg-9 col-md-8 col-xs-10">
                <h4 class="col-xs-12" style="color:black;">Receta #234131562</h4>
                <p class="col-lg-5 col-md-7">Número de Bultos: 1</p>
                <br>
                <p class="col-lg-5 col-md-7">Peso: 1,46 Kg.</p>
              </div>
            </div>
        </div>
        <div class="tracking col-lg-5 col-md-6 col-xs-12">
                      <p class="row">Paquetería: Sky Conexión vía Copa Airlines</p>
            <p class="row tracking-number">Número de guía (HAWB): RZ014175470MH</p>
              <ul id="tracking-events" class="tracking-events-container in">
                                  <li>
                    <span>09/01/2018 | 04:44:17</span>
                    <span>RECIBIDO EN PUNTO DE TRÁNSITO - CUB</span>
                  </li>
                                  <li>
                    <span>05/01/2018 | 00:14:37</span>
                    <span>PARTIENDO DE ORIGEN O PUNTO DE TRANSITO - MEX</span>
                  </li>
                                  <li>
                    <span>04/01/2018 | 23:26:02</span>
                    <span>AVISO DE RECOGIDA RECIBIDO - MEX</span>
                  </li>
                                  <li>
                    <span>03/01/2018 | 02:30:30</span>
                    <span>ORDEN PROCESADA POR TUFARMACIALATINA.COM</span>
                  </li>
                              </ul>
                           
                                </div>
      </div>
      </div>

<br><br><br><br>
    


				</section>

		</div>







			</div>

						

					</div>

				</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>