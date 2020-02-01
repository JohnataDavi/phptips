<?php $v->layout("_theme"); ?>

    <div class="contact">
        <h2>Fale Conosco!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, vel.</p>

        <form action="<?= url("contact"); ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Seu nome"/>
            <input type="email" name="email" placeholder="Seu email"/>
            <textarea name="message" placeholder="Menssagem:" rows="3"></textarea>
            <button>Enviar Menssagem!</button>
        </form>
    </div>

<?php $v->start("scripts"); ?>
    <script>
        $(function () {
            $("button").after('<button type="reset">Limpar</button>');
        });
    </script>
<?php $v->end(); ?>