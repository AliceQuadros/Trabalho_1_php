<section class="contato container">
    <div class="grid-14">
        <form action="post" id="form-orcamento" class="contato-form grid-8">
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
            <label for="telefone">Telefone</label>
            <input type="number" value='<?=$fone?>' placeholder="(53) 999999999" name="telefone">
            <label for="espec">Especificações</label>
            <label for="imagem">Enviar Imagem</label>
            <input type="file" name="upload">
            <textarea name="mensagem" value='<?=$mensagem?>' placeholder="Digite sua Mensagem..."></textarea>
            <button type="submit" class="btn">Enviar</button>
        </form>
 </section>
