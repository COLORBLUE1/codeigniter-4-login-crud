<?= $this->extend('Views/Dashboard/plantilla'); ?>
<?= $this->section('menu');?>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
            <li class="nav-item">
            <a href="<?php echo base_url().'listado' ?>" class="nav-link">
              <i class="fas fa-sing-out alt text-danger"></i>
              <p>Usuarios</p>
            </a>
             </li>
         
          <li class="nav-item">
            <a href="<?php echo base_url().'/' ?>" class="nav-link">
              <i class="fas fa-sing-out alt text-danger"></i>
              <p>Salir</p>
            </a>
          </li>
        </ul>
      </nav>
      <?= $this->endSection(); ?>


      <?= $this->section('contenido');?>
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Acentamiento</h1>
          </div>
       
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Escritorio</li>
            </ol>
          </div>
          <br>
          <br>
          <br>
          <p class="text_print">Me digo en mis cansancios ansiosos que soy lo que soy.
Más allá del ser y de lo que aparento.

Las interpretaciones de los demás nunca serán mi argumento.
La tarea de conocerme me concierne a mi.
Es un desafío porque vivo en movimiento.

Cuando tengo que estar y ser, estoy y soy.

Pienso, siento y actúo con mis
dos razones o corazones.
Lo que en mi pecho vive y lo que en mi mente se expande.
Y todo le da razones a mis razonamientos.

Confío en que todo es mente, solo yo puedo definirme realmente.</p>
        </div>
 

<p>Carrusel de imagenes representativas</p>

<section class="carousel" aria-label="Gallery">
  <ol class="carousel__viewport">
    <li id="carousel__slide1"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper">
        <a href="#carousel__slide4"
           class="carousel__prev">Go to last slide</a>
        <a href="#carousel__slide2"
           class="carousel__next">Go to next slide</a>
      </div>
    </li>
    <li id="carousel__slide2"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide1"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide3"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide3"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide2"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide4"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide4"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide3"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
    </li>
  </ol>
  <aside class="carousel__navigation">
    <ol class="carousel__navigation-list">
      <li class="carousel__navigation-item">
        <a href="#carousel__slide1"
           class="carousel__navigation-button">Go to slide 1</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide2"
           class="carousel__navigation-button">Go to slide 2</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide3"
           class="carousel__navigation-button">Go to slide 3</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide4"
           class="carousel__navigation-button">Go to slide 4</a>
      </li>
    </ol>
  </aside>
</section>
<h1 >5 citas muy populares explicadas por 10 filósofos</h1>
<br>
<br>
<br>
<p>
«La religión es el opio del pueblo», Karl Marx.
Por Javier Sádaba, filósofo
La interpretación que se ha hecho de esta cita del joven Marx (1818-1883) es tan amplia y coincidente que difícil será añadir otra más. Bien es verdad que acostumbra a recordarse que inmediatamente a lo del opio del pueblo añade que es el corazón de un mundo sin corazón. En esa misma línea yo añadiría, antes de nada, que no sabemos a qué religión se refiere Marx, ya que no es lo mismo la cristiana que la budista o la jainista. Es de suponer que señala a la que nos ha tocado culturalmente y, en consecuencia, a la cristiana. Por mi parte, me parece que, tomada en términos muy generales, la religión ha sido y es un refugio al sufrimiento que acumulamos en el mundo.
</p>

<br>
<br>

<p>
<b>«La religión es el opio del pueblo»</b>, Karl Marx.
Por Javier Sádaba, filósofo
La interpretación que se ha hecho de esta cita del joven Marx (1818-1883) es tan amplia y coincidente que difícil será añadir otra más. Bien es verdad que acostumbra a recordarse que inmediatamente a lo del opio del pueblo añade que es el corazón de un mundo sin corazón. En esa misma línea yo añadiría, antes de nada, que no sabemos a qué religión se refiere Marx, ya que no es lo mismo la cristiana que la budista o la jainista. Es de suponer que señala a la que nos ha tocado culturalmente y, en consecuencia, a la cristiana. Por mi parte, me parece que, tomada en términos muy generales, la religión ha sido y es un refugio al sufrimiento que acumulamos en el mundo.
</p>
<br>
<br>

<p>
<b>«La religión es el opio del pueblo»</b>, Karl Marx.
Por Javier Sádaba, filósofo
La interpretación que se ha hecho de esta cita del joven Marx (1818-1883) es tan amplia y coincidente que difícil será añadir otra más. Bien es verdad que acostumbra a recordarse que inmediatamente a lo del opio del pueblo añade que es el corazón de un mundo sin corazón. En esa misma línea yo añadiría, antes de nada, que no sabemos a qué religión se refiere Marx, ya que no es lo mismo la cristiana que la budista o la jainista. Es de suponer que señala a la que nos ha tocado culturalmente y, en consecuencia, a la cristiana. Por mi parte, me parece que, tomada en términos muy generales, la religión ha sido y es un refugio al sufrimiento que acumulamos en el mundo.
</p>
<br>
<br>

<p>
<b>«La religión es el opio del pueblo»</b>, Karl Marx.
Por Javier Sádaba, filósofo
La interpretación que se ha hecho de esta cita del joven Marx (1818-1883) es tan amplia y coincidente que difícil será añadir otra más. Bien es verdad que acostumbra a recordarse que inmediatamente a lo del opio del pueblo añade que es el corazón de un mundo sin corazón. En esa misma línea yo añadiría, antes de nada, que no sabemos a qué religión se refiere Marx, ya que no es lo mismo la cristiana que la budista o la jainista. Es de suponer que señala a la que nos ha tocado culturalmente y, en consecuencia, a la cristiana. Por mi parte, me parece que, tomada en términos muy generales, la religión ha sido y es un refugio al sufrimiento que acumulamos en el mundo.
</p>
<br>
<br>

<p>
<b>«La religión es el opio del pueblo»</b>, Karl Marx.
Por Javier Sádaba, filósofo
La interpretación que se ha hecho de esta cita del joven Marx (1818-1883) es tan amplia y coincidente que difícil será añadir otra más. Bien es verdad que acostumbra a recordarse que inmediatamente a lo del opio del pueblo añade que es el corazón de un mundo sin corazón. En esa misma línea yo añadiría, antes de nada, que no sabemos a qué religión se refiere Marx, ya que no es lo mismo la cristiana que la budista o la jainista. Es de suponer que señala a la que nos ha tocado culturalmente y, en consecuencia, a la cristiana. Por mi parte, me parece que, tomada en términos muy generales, la religión ha sido y es un refugio al sufrimiento que acumulamos en el mundo.
</p>
      </div><!-- /.container-fluid -->
    </section>
    <?= $this->endSection(); ?>