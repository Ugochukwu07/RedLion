<?php 
$datas = array(
    /* logo */
    'LOGO-DARK' => ROOT_PATH . '/assets/open/images/',
    'LOGO-WHITE' => ROOT_PATH . '/assets/open/images/',
    'FAV' => ROOT_PATH . '/assets/open/images/',
    /* themes */
    'P-COLOR' => '#7851a9',
    'S-COLOR' => 'rgba(247, 198, 5, 0.9)',
    'T-COLOR' => 'rgba(247, 198, 5, 0.9)',
    /* details */
    'NAME' => 'Sync',
    /* files */
    'XIMAGE' => array('jpg', 'png', 'jpeg', 'gif', 'webp'),
    'XVIDEO' => array('mp4', '3gp', 'mkv', 'avi', 'webp'),
    'XDOC' => array('txt', 'docx', 'pdf', 'ptx', 'xml'),
    'LCHARTS' => ROOT_PATH . '/app/includes/links/js/charts.php',
    'LTABLES' => ROOT_PATH . '/app/includes/links/js/tables.php',
    'LPHOTOS' => ROOT_PATH . '/app/includes/links/js/photos.php',
    'LMAPS' => ROOT_PATH . '/app/includes/links/js/maps.php',
    'LPROJECT' => ROOT_PATH . '/app/includes/links/js/project.php'
);

foreach ($datas as $data => $info) {
    define($data, $info);
}
$links = array();

?>