<?php

function get404() {
  require header("HTTP/1.0 404 Not Found");
 require 'resources/views/errors/404.php';

}