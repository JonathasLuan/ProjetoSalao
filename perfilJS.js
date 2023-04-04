// Obtém a janela modal e o botão "Editar"
var modal = document.getElementById("modal-foto");
var btn = document.getElementById("editar-foto");

// Obtém o botão "Fechar" e adiciona um evento de clique
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
}

// Adiciona um evento de clique para mostrar a janela modal quando o usuário clicar no botão "Editar"
btn.onclick = function () {
    modal.style.display = "block";
}


const fileInput = document.getElementById('profile-image');

fileInput.addEventListener('change', function () {
    const file = fileInput.files[0];
    const reader = new FileReader();

    reader.addEventListener('load', function () {
        const image = new Image();
        image.src = reader.result;

        const preview = document.getElementById('profile-preview');
        preview.src = reader.result;
        preview.appendChild(image);
    });

    if (file) {
        reader.readAsDataURL(file);
    }
});


const salvarBtn = document.getElementById('salvar-foto');

salvarBtn.addEventListener('click', function () {
    const preview = document.getElementById('profile-preview');
    const imageSrc = preview.src;

    // aqui você pode enviar o conteúdo da imagem por AJAX para o servidor
    // ou salvá-lo em uma variável para exibi-lo em outra tag img
    // por exemplo:
    const outraImagem = document.getElementById('foto-perfil');
    outraImagem.src = imageSrc;

    // fecha a janela modal
    modal.style.display = 'none';
});
