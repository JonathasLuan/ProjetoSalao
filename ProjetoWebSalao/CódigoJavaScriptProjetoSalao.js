<script>
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
</script>