<div class="element" id="<?php echo $element; ?>">
    <div style="<?php if ($element == 'element1') {
        echo 'display: none';
    } else {
        echo 'display: block';
    } ?>;
    width: 11%;
    font-size: 10px;">
        <a href=""><img src="img/img_avatar.png" id="profile-img" alt="profile-img"></a>
        <span class="date-time">
            <?php echo $date_time; ?>
        </span>
    </div>
    <div class="send-item">
        <div class="chat-content-box">
            <span class="chat-content">
                <?php echo "<div class=" . $classeCSS . ">" . $mensagem . "</div>"; ?>
            </span>
        </div>
    </div>
    <div style="<?php if ($element == 'element1') {
        echo 'display: block';
    } else {
        echo 'display: none';
    } ?>;
    width: 11%;
    font-size: 10px;">
        <a href=""><img src="img/img_avatar.png" id="profile-img" alt="profile-img"></a>
        <span class="date-time">
            <?php echo $date_time; ?>
        </span>
    </div>
</div>