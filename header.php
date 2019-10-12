<!-- header -->
<header class="header">
<div class="container">
            <div class="logo">
                <a href="?p=home" class="grid-4 ">
                    <img src="img/logo.png" alt="Logo ALIKA">
                </a>
            </div>
            <nav class="grid-12 header-menu">
                
                    <a href="?p=home" class="active">Home</a>
                    <a href="?p=sobre">Sobre</a>
                    <?php
                    if (@$_SESSION['usuario']) {
                    ?>
                    <a href="?p=mensagem_adm/exibe_mensa">Mensagens</a>
                    <?php }
                    else{
                    ?>
                    <a href="?p=form_contato/form">Contate-nos</a>
                    <?php }
                    ?>


                    <!--<img src="img/search.png" alt="pesquisar">-->

                </ul>
            </nav>
        </div>
    </header>