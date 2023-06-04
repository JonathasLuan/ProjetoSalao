<style>
    .progress-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        height: 1px;
        background-color: lightgrey;
        border-radius: 10px;
        padding: 5px;
        margin-bottom: 50px;
    }

    .step {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: grey;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .step.active {
        background-color: #2196F3;
    }
</style>

<div class="progress-bar">
    <div class="step<?php
    if ($step == 1) {
        echo " active";
    } else if ($step == 2) {
        echo " active";
    } else {
        echo " active";
    }
    ?>">1</div>
    <div class="step<?php
    if ($step == 1) {
        echo "";
    } else if ($step == 2) {
        echo " active";
    } else {
        echo " active";
    }
    ?>">2</div>
    <div class="step<?php
    if ($step == 1) {
        echo "";
    } else if ($step == 2) {
        echo "";
    } else {
        echo " active";
    }
    ?>">3</div>
</div>
<br>