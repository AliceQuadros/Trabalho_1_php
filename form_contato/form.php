<?php
    if(isset($_GET['n']))
    {
        echo("Preencha todos os campos que são obrigatórios:<br> ");
        echo $_SESSION['erros'];

        @$nome = $_SESSION['nome'];
        $sobrenome = $_SESSION['sobrenome'] ;
        $email = $_SESSION['email'];
        $mensagem = $_SESSION['mensagem'];
    }
?>


<section class="contato container">
    <div class="grid-16">
        <form action="form_contato/incluir_contato.php" method="POST" id="form-orcamento" class="contato-form grid-8">
            <div class="row">
                <div class="grid-4">
                    <label for="nome">*Nome</label>
                    <input type="text" value='<?=@$nome?>' placeholder="Nome" name="nome">
                </div>
                <div class="grid-4">

                    <label for="sobrenome" value=''>*Sobrenome</label>
                    <input type="text" value='<?=@$sobrenome?>' placeholder="sobrenome" name="sobrenome">
                </div>
            </div>

            <label for="email">*E-mail</label>
            <input type="email" value='<?=@$email?>' placeholder="testando@lalala.com" name="email">
            <label for="fone">Telefone</label>
            <input type="number" name="fone" value='<?=$fone?>' placeholder="(53) 999999999">
            <label for="espec">*Mensagem</label>
            <textarea type='text' name="mensagem" value='' placeholder="Digite sua Mensagem..."><?=@$mensagem?></textarea>
            <button type="submit" name="botao" value="enviar" class="botao_base botao_enviar_form_contato">Enviar</button>
        <p>* Campos obrigatórios</p>

        </form>
        </div>
 </section>
