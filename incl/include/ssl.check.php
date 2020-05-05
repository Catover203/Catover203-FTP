<?php
    if (empty($_SERVER['HTTPS'])) {
    echo'you need ssl to more securite';
    exit;
    }
?>