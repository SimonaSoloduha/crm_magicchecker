<?php
$url = $_SERVER['QUERY_STRING'];
$url_components = parse_url($url);

parse_str($url_components['query'], $params);

//header('Location: http://127.0.0.1:8000/checker/?&magicchecker=YES&id=' . $params['id']);

header('Location: https://damp-everglades-01529.herokuapp.com/checker/?&magicchecker=YES&id=' . $params['id']);
exit();
