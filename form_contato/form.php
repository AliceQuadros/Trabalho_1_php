<section class="contato container">
    <div class="grid-16">
        <form action="form_contato/incluir_contato.php" method="POST" id="form-orcamento" class="contato-form grid-8">
            <div class="row">
                <div class="grid-4">
                    <label for="nome">Nome</label>
                    <input type="text" value='<?=@$nome?>' placeholder="Nome" name="nome">
                </div>
                <div class="grid-4">

                    <label for="sobrenome" value=''>Sobrenome</label>
                    <input type="text" value='<?=@$sobrenome?>' placeholder="sobrenome" name="sobrenome">
                </div>
            </div>

            <label for="email">E-mail</label>
            <input type="email" value='<?=@$email?>' placeholder="testando@lalala.com" name="email">
            <label for="fone">Telefone</label>
            <input type="number" name="fone" value='<?=$fone?>' placeholder="(53) 999999999">
            <label for="espec">Especificações</label>
            <textarea name="mensagem" value='<?=$mensagem?>' placeholder="Digite sua Mensagem..."></textarea>
            <button type="submit" name="botao" value="Enviar">Enviar</button>
        </form>
        </div>
 </section>
