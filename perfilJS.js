

// Obtém os botões do menu e o conteúdo correspondente
const botao1 = document.getElementById("botao1");
const botao2 = document.getElementById("botao2");
const botao3 = document.getElementById("botao3");
const botao4 = document.getElementById("botao4");
const botao5 = document.getElementById("botao5");
const botao6 = document.getElementById("botao6");
const conteudo1 = document.getElementById("conteudo1");
const conteudo2 = document.getElementById("conteudo2");
const conteudo3 = document.getElementById("conteudo3");
const conteudo4 = document.getElementById("conteudo4");
const conteudo5 = document.getElementById("conteudo5");
const conteudo6 = document.getElementById("conteudo6");

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
    conteudo5.style.display = "none";
    conteudo6.style.display = "none";
});

botao2.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "block";
    conteudo3.style.display = "none";
    conteudo4.style.display = "none";
    conteudo5.style.display = "none";
    conteudo6.style.display = "none";
});

botao3.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "none";
    conteudo3.style.display = "block";
    conteudo4.style.display = "none";
    conteudo5.style.display = "none";
    conteudo6.style.display = "none";
});

botao4.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "none";
    conteudo3.style.display = "none";
    conteudo4.style.display = "block";
    conteudo5.style.display = "none";
    conteudo6.style.display = "none";
});

botao5.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "none";
    conteudo3.style.display = "none";
    conteudo4.style.display = "none";
    conteudo5.style.display = "block";
    conteudo6.style.display = "none";
});

botao6.addEventListener("click", function () {
    // Altera a exibição do conteúdo correspondente
    conteudo1.style.display = "none";
    conteudo2.style.display = "none";
    conteudo3.style.display = "none";
    conteudo4.style.display = "none";
    conteudo5.style.display = "none";
    conteudo6.style.display = "block";
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

// Ações do arccordion
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

// Código do botão switch de cor de fundo
const switchBtn = document.querySelector('#dark-mode-switch');
switchBtn.addEventListener('change', () => {
    document.body.classList.toggle('dark-mode');
});
