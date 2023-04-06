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

// Obtém os botões do menu e o conteúdo correspondente
const botao1 = document.getElementById("botao1");
const botao2 = document.getElementById("botao2");
const botao3 = document.getElementById("botao3");
const botao4 = document.getElementById("botao4");
const conteudo1 = document.getElementById("conteudo1");
const conteudo2 = document.getElementById("conteudo2");
const conteudo3 = document.getElementById("conteudo3");
const conteudo4 = document.getElementById("conteudo4");

// Adiciona a classe "active" ao primeiro botão do menu e ao primeiro conteúdo
botao1.classList.add("active");
conteudo1.classList.add("active");

// Adiciona um ouvinte de evento de clique em cada botão
botao1.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "block";
    conteudo2.style.display = "none";
    conteudo3.style.display = "none";
    conteudo4.style.display = "none";
});

botao2.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "block";
    conteudo3.style.display = "none";
    conteudo4.style.display = "none";
});

botao3.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "none";
    conteudo3.style.display = "block";
    conteudo4.style.display = "none";
});

botao4.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "none";
    conteudo3.style.display = "none";
    conteudo4.style.display = "block";
});

// Obtém todos os botões do menu
var buttons = document.querySelectorAll('.menu-button');

// Adiciona um evento de clique para cada botão
for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function () {
        // Remove a classe "active" de todos os botões e conteúdos
        for (var j = 0; j < buttons.length; j++) {
            buttons[j].classList.remove('active');
            document.getElementById(buttons[j].getAttribute('data-target')).classList.remove('active');
        }

        // Adiciona a classe "active" no botão clicado e no conteúdo correspondente
        this.classList.add('active');
        document.getElementById(this.getAttribute('data-target')).classList.add('active');
    });
}

// Exibe o primeiro conteúdo por padrão
document.querySelector('.content.active').style.display = "block";
document.querySelector('.menu-button.active').classList.add("active");


const accordion = document.querySelectorAll('.accordion li');

accordion.forEach(item => {
    const button = item.querySelector('button');
    const content = item.querySelector('.content');

    button.addEventListener('click', () => {
        // Fecha todos os itens abertos
        accordion.forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
                otherItem.querySelector('button').setAttribute('aria-expanded', 'false');
                otherItem.querySelector('.content').style.display = 'none';
            }
        });

        // Abre ou fecha o item atual
        item.classList.toggle('active');
        const isOpen = item.classList.contains('active');
        button.setAttribute('aria-expanded', isOpen);
        content.style.display = isOpen ? 'block' : 'none';
    });
});
