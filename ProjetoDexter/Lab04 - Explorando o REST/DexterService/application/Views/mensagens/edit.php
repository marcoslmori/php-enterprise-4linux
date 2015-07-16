<h1 class="title_page">Editar Mensagem</h1>
<form method="post" class="form_model">
    <fieldset>
        <input type="hidden" value="<?= $this->mensagem->getId() ?>" id="id" name="id" />
        <div class="line_form">
            <label for="nome" class="label_form">Nome</label>
            <input 
                type="text"
                class="input_text_form"
                id="nome"
                name="nome"
                value="<?= $this->mensagem->getNome() ?>"/>
        </div>
        <div class="line_form">
            <label for="email" class="label_form">Email</label>
            <input 
                type="text"
                class="input_text_form"
                id="email"
                name="email"
                value="<?= $this->mensagem->getEmail() ?>"/>
        </div>
        <div class="line_form">
            <label for="assunto" class="label_form">Assunto</label>
            <input 
                type="text"
                class="input_text_form"
                id="assunto"
                name="assunto"
                value="<?= $this->mensagem->getAssunto() ?>"/>
        </div>
        <div class="line_form">
            <label for="mensagem" class="label_form">Mensagem</label>
            <textarea 
                class="input_text_form"
                id="mensagem"
                style="height: 100px"
                name="mensagem"><?= $this->mensagem->getMensagem() ?></textarea>
        </div>
        <div class="line_form">
            <input type="submit" class="button_model input_submit_form" value="Salvar" />
        </div>
        <span><?= $this->msg ?></span>
   </fieldset>
</form>
