<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 Años de experiencia
            </blockquote>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi amet, nisi impedit dolor in sed
                tempore, praesentium quasi totam a alias iure dolore? Voluptatibus sapiente aperiam ipsa eaque eum
                necessitatibus!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium autem cupiditate aspernatur
                veniam ab officia laborum, delectus eius, quaerat vero ducimus sit magni eligendi, earum nam
                incidunt suscipit esse veritatis.
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ab inventore amet suscipit perferendis
                quas expedita sit assumenda quod eum. Aspernatur suscipit culpa vitae voluptates dolore dolores
                earum, esse incidunt.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ab inventore amet suscipit perferendis
                quas expedita sit assumenda quod eum. Aspernatur suscipit culpa vitae voluptates dolore dolores
                earum, esse incidunt.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ab inventore amet suscipit perferendis
                quas expedita sit assumenda quod eum. Aspernatur suscipit culpa vitae voluptates dolore dolores
                earum, esse incidunt.</p>
        </div>
    </div>
</section> <!-- .contenedor seccion -->

<?php
incluirTemplate('footer');
?>