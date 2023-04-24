<div id="info">
    <div id="foto">
        <img id="foto-perfil" src="img/profile.webp" alt="profile">
        <button id="editar-foto"><i class="fa fa-pencil"></i></button>
    </div>
    <div id="modal-foto" class="modal">
        <div class="modal-inner">
            <span class="close">&times;</span>
            <!-- aqui vai o conteúdo da janela modal -->
            <div id="modal-content">
                <h2>Editar Foto</h2>
                <div class="arquivo">
                    <label for="profile-image">Escolha uma Imagem</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="4194304">
                    <input type="file" id="profile-image" name="profile-image">
                    <form>
                    </form>
                </div>
                <img id="profile-preview" src="img/profile.webp" alt="profile">
                <button id="salvar-foto" type="submit">Salvar</button>
            </div>
        </div>
    </div>
    <div id="tipo-user">
        <h3>cliente</h3>
    </div>
    <div id="name">
        <h2 id="nameperfil">Fulano da Silva</h2>
    </div>
    <div id="links">
        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
    </div>
    <div id="bio">
        <p id="sobre">Aqui será um pequeno texto sobre o usuário (cliente ou profissional). Poderá fornecer
            informações
            adicionais além das especificadas abaixo, como sua vida profissional e características mais pessoais de
            seu trabalho.</p>
    </div>
</div>