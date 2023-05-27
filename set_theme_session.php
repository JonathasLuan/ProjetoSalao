<?php
if (isset($_GET['darkMode'])) {
    $_SESSION['darkMode'] = $_GET['darkMode'];
}
?>

<script>
    // Função para alternar o tema
    function toggleTheme() {
        document.body.classList.toggle('dark-mode');

        // Verifica se o tema atual é "dark mode" e salva a informação em um cookie
        var isDarkMode = document.body.classList.contains('dark-mode');
        document.cookie = "darkMode=" + isDarkMode;
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "set_theme_session.php?darkMode=" + isDarkMode, true);
        xhr.send();
    }

    // Verifica se o cookie existe e aplica o tema correspondente
    function checkTheme() {
        var darkModeCookie = document.cookie.replace(/(?:(?:^|.*;\s*)darkMode\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        if (darkModeCookie === "true") {
            document.body.classList.add('dark-mode');
        }
    }

    // Adiciona o evento de clique ao botão de alternar tema
    var themeToggleBtn = document.getElementById('theme-toggle-btn');
    themeToggleBtn.addEventListener('click', toggleTheme);

    // Verifica o tema ao carregar a página
    checkTheme();
</script>