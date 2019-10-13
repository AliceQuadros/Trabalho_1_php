<!-- header -->
<header class="header">
    <div class="container">
        <div class="logo grid-2">
            <a href="?p=home">
                <img src="img/logo.png" alt="Logo ALIKA">
            </a>
        </div>
        <nav class="grid-6 header-menu">

            <a href="?p=home" class="active">Home</a>
            <a href="?p=sobre">Sobre</a>
            <?php
            if (@$_SESSION['usuario']) {
                ?>
                <a href="?p=mensagem_adm/exibe_mensa">Mensagens</a>
            <?php } else {
                ?>
                <a href="?p=form_contato/form">Contate-nos</a>
            <?php }
            ?>


            <!--<img src="img/search.png" alt="pesquisar">-->

            </ul>
        </nav>
        <?php
        session_start();
        include("pesquisa_form.php");
        include("verificalogin.php");

        ?>
    </div>
</header>