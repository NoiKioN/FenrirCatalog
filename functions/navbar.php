<?php
function loadNavbarElements(){
    include 'config/db.php';
    include 'config/init.php';
    $q = "SELECT * FROM pages";
    $r = mysqli_query($dbc, $q);
    $pages = mysqli_fetch_all($r, MYSQLI_ASSOC);
    $output = '';
    foreach($pages as $page){
        $output .= '<li';
        $output .= $_GET['id'] == $page['id'] ? ' class="active"' : '';
        $output .= '><a href="?id=">';
        $output .= $page['id'];
        $output .= '">';
        $output .= $page['title'];
        /*$output .= '<li>'
                . '<a href="?id=' . $page['id'] . '">' . $page['title'] . '</a></li>';*/
    }
    return $output;
}