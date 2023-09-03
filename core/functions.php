<?php

function stop($code = 404)
{
    http_response_code($code);
    require "./views/{$code}.views.php"; // View page should be created for each code
    die();
}
