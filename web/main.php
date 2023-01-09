<?php
$url = $_SERVER['QUERY_STRING'];
$url_components = parse_url($url);

parse_str($url_components['query'], $params);
header('Location: http://127.0.0.1:8000/checker/?&magicchecker=MAIN&id=' . $params['id']);
exit();
