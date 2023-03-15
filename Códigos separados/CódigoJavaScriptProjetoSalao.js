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