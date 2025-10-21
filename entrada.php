<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoración de tu hogar</h1>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
    </picture>
    <p class="informacion-meta">Escrito el <span>20/10/2025</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id alias excepturi, eum sint amet obcaecati
            consequuntur eligendi reprehenderit inventore accusamus aspernatur ut? Necessitatibus aliquid labore
            esse possimus quisquam deleniti nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
            consectetur, esse voluptatum illum, aut ipsam repellendus dolores tenetur ipsum nostrum laboriosam
            voluptates nam temporibus non sed, aliquid earum. Alias, dolorem!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, laborum reprehenderit molestias culpa
            officiis odit voluptatem quisquam maiores ex atque impedit voluptates vel dolores facere placeat?
            Consequuntur praesentium id veritatis.</p>
    </div>
</main>

<?php
incluirTemplate('footer');
?>