<?php
$url = $_SERVER['QUERY_STRING'];
$url_components = parse_url($url);

parse_str($url_components['query'], $params);
header('Location: https://damp-everglades-01529.herokuapp.com/checker/?&filter2=MAIN?&id=' . $params['id']);
exit();
