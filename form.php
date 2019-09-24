<section class="contato container">
        <form action="" id="form-orcamento" class="contato-form grid-8">
            <div class="row">
                <div class="grid-4">
                    <label for="nome">Nome</label>
                    <input type="text" value='<?=@$nome?>' placeholder="Nome" id="nome">
                </div>
                <div class="grid-4">

                    <label for="sobrenome" value=''>Sobrenome</label>
                    <input type="text" value='<?=@$sobrenome?>' placeholder="sobrenome" id="sobrenome">
                </div>
            </div>

            <label for="email">E-mail</label>
            <input type="email" value='<?=@$email?>' placeholder="testando@lalala.com" id="email">
            <label for="telefone">Telefone</label>
            <input type="number" value='<?=$fone?>' placeholder="(53) 69696969" id="telefone">
            <label for="espec">Especificações</label>
            <textarea id="espec" value='<?=$mensagem?>' placeholder="Digite sua Mensagem..."></textarea>
            <button type="submit" class="btn">Enviar</button>
        </form>
