<?php
$PAGE = '';
$PAGE_PATH = '';
$REQ_URI = $_SERVER['REQUEST_URI'];
$URI_SEG = explode('?', $REQ_URI);
$REQ_PAGES = $URI_SEG[0] == '/' ? ['index'] :  explode('/', trim(preg_replace('~/{2,}~', '/', $URI_SEG[0]), '/'));

$LOGGED_IN_ADMIN = isset($_SESSION['LOGGED_IN_ADMIN']) ?  (bool)$_SESSION['AUTH_USER'] : FALSE;

if(strtolower($REQ_PAGES[0]) === 'admin' && ! $LOGGED_IN_ADMIN) {
  header('Location: /auth/login');
}

foreach ($REQ_PAGES as $PG_SEG) {
  $PAGE_PATH .= DS . strtolower($PG_SEG);
}

$PAGE_PATH_INDEX =  PAGES_PATH  . $PAGE_PATH . DS . 'index.php';
$PAGE_PATH = PAGES_PATH . $PAGE_PATH . '.php';

if(file_exists($PAGE_PATH)) {
  $PAGE = $PAGE_PATH;
}
elseif(file_exists($PAGE_PATH_INDEX)) {
  $PAGE = $PAGE_PATH_INDEX;
} else {
  $PAGE = ERRO_PAGES_PATH . DS . '404.php';
}

include_once $PAGE;