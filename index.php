<?php
include('header.php');
?>
 <div class="special">
    <div class="jumbotron jumbotron-art">
      <h1 style="margin-top:10%;">Diario de Crónicas</h1>

      <p>Una aplicación web para anotar tus éxitos y fracasos.</p>

      <p>
        <a class="btn btn-primary btn-lg" href="/users/sign_up" role="button">Registrarse</a>
        <a class="btn btn-primary btn-lg" href="/users/sign_in" role="button">Entrar</a>
      </p>

      <p>
        <a class="fa fa-chevron-down" href="#the-adventure-logsheet"></a>
      </p>
    </div>
  </div>
  <div class="container">
<main role="main">
        <div class="container">
          <div id="messages-block">    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <div id="flash_notice">Signed out successfully.</div>
    </div>
</div>
          <div class="row">
  <div class="col-sm-12">
  </div>
</div>

          <div id="the-adventure-logsheet">
  <div class="row">
    <h3>La Hoja de Progreso</h3>
    <a name='the-adventure-logsheet'></a>
  </div>

  <div class="row">
    <p>Además de tu hoja de personaje, deberías tener una hoja de progreso.</p>
  </div>

  <div class="row">
    <p>Esta hoja sirve como diario de cada sesión de juego. Trata tu hoja de progreso como una extensión de tu hoja de personaje; ¡es el registro oficial de los avances de tu personaje!</p>
  </div>

  <div class="row">
    <p>Rellena la parte superior de tu hoja de progreso antes de comenzar tu aventura. Al final de cada sesión de juego, rellena toda la información necesaria, incluso si tu personaje no ha obtenido nada en esos campos (rellénalos con un "0"). La mayor parte de la hoja se explica sola, pero vamos a explicar algunos detalles.</p>
  </div>

  <div class="row">
    <ul>
      <li><strong>XP.</strong> Comienzas con 0 puntos de experiencia (XP).</li>
	  <li><strong>Maduración.</strong> Comienzas con 0 puntos de Maduración.</li>
      <li><strong>Oro.</strong>  You begin play with whatever gold pieces (gp) you had after you purchased your initial gear. You can express silver pieces (sp) and copper pieces (cp) by using decimals.</li>
      <li><strong>Descanso.</strong> Al terminar cada aventura, tu personaje ganará días de descanso que puedes emplear en diferentes actividades que te permiten ganar puntos de Maduración. Tu Narrador te dirá cuánto tiempo vas acumulando según avanza la aventura.</li>
      <li><strong>Magic Items.</strong> Record the number of permanent magic items your character possess here; record the name of the item in the adventure notes area. You begin with 0 permanent magic items.</li>
      <li><strong>Adventure Notes/Downtime Activity.</strong> to record notes from the adventure. At a minimum, you should write down any magic items gained (permanent or consumable). If you’re spending downtime, note what activity you’re engaged in.</li>
    </ul>
  </div>
</div>
        </div>
      </main>
<?php
include('footer.php');