<?php

$route = $_GET['route'];

$somevar = explode('/', $route);

print "<pre>";
print_r($somevar);
print "</pre>";