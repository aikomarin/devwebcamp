<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen Devwebcamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?>  class="devwebcamp__texto">¡Bienvenidos a DevWebCamp, la conferencia tecnológica líder en Latinoamérica! Durante dos emocionantes días, sumérgete en un mundo de conocimiento y aprendizaje intensivo sobre las últimas tendencias en desarrollo web. Desde conferencias magistrales hasta talleres prácticos, explorarás una amplia gama de tecnologías que incluyen Laravel, PHP, CSS y mucho más.</p>
            <p <?php aos_animacion(); ?>  class="devwebcamp__texto">Únete a expertos de renombre internacional mientras comparten sus conocimientos y mejores prácticas en sesiones informativas y participa en workshops interactivos donde podrás poner en práctica lo aprendido. DevWebCamp es el lugar perfecto para conectarte con otros profesionales del sector, ampliar tu red de contactos y llevar tus habilidades de desarrollo web al siguiente nivel. ¡No te pierdas esta oportunidad única de crecimiento y desarrollo en el corazón de Latinoamérica!</p>
        </div>
    </div>
</main>