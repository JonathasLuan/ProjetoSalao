<footer id="footer">
    <p>&copy; 2023 SalonSet</p>
    <?php
    echo $_SESSION['id'];
    echo $_SESSION['senha'];
    echo session_id();
    ?>
</footer>