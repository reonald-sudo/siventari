<?php

if (!session_id()) {
    session_start();
}

require_once '../app/core/App.php';
require_once '../app/init.php';

$coba = new App();
