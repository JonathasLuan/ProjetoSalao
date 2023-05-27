
const sliderWrapper = document.querySelector('.slider-wrapper');
const sliderItems = document.querySelectorAll('.slider-item');
const prevSlide = document.querySelector('.prev-slide');
const nextSlide = document.querySelector('.next-slide');

let currentSlide = 0;

function goToSlide(n) {
  sliderWrapper.style.transform = `translateX(-${n * 33.333}%`;
  currentSlide = n;
}

function prev() {
  if (currentSlide === 0) {
    goToSlide(sliderItems.length - 1);
  } else {
    goToSlide(currentSlide - 1);
  }
}

function next() {
  if (currentSlide === sliderItems.length - 1) {
    goToSlide(0);
  } else {
    goToSlide(currentSlide + 1);
  }
}

prevSlide.addEventListener('click', prev);
nextSlide.addEventListener('click', next);


const botaoFormulario1 = document.getElementById("botao-formulario-1");
const botaoFormulario2 = document.getElementById("botao-formulario-2");
const formulario1 = document.getElementById("formulario-1");
const formulario2 = document.getElementById("formulario-2");

botaoFormulario1.addEventListener("click", () => {
  formulario1.style.display = "block";
  formulario2.style.display = "none";
});

botaoFormulario2.addEventListener("click", () => {
  formulario1.style.display = "none";
  formulario2.style.display = "block";
});

const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  const telefone = document.getElementById('telefone').value;
  const serviço = document.getElementById('serviço').value;
  const data = document.getElementById('data').value;
  const hora = document.getElementById('hora').value;

  const mensagem = `Olá, ${nome}!\n\nSeu serviço de ${serviço} está agendado para o dia ${data}, às ${hora}.\n\nCaso precise cancelar ou reagendar, entre em contato conosco pelo telefone xxxxx-xxxxx ou pelo e-mail email@e-mail.com.`;

  alert(mensagem);
});