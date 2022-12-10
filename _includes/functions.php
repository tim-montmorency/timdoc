<?php


function print_breadcrumb() {
    $root = realpath($PAGE->root);
    $parent = pathinfo(pathinfo($PAGE->file, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
    while($parent != $root) {
        if(!is_file(($jsonfile = $parent.'\\'.'_index.json'))) break;
        if(!$data = json_decode(file_get_contents($jsonfile))) break;
        $link = str_replace([$root, '\\'], ['', '/'], $parent)."/";
        $nodes[] = '<a href="'.$link.'">'.$data->title.'</a>';
        $parent = pathinfo($parent, PATHINFO_DIRNAME);
    }
    if(!empty($nodes)) echo join(' > ', array_reverse($nodes)).' >';
}


function print_header() {
    switch($PAGE->type) {
        case 'article': print_article_header(); break;
        case 'exercice': print_exercice_header(); break;
        default: print_main_header();
    }
}


function print_footer() {
    switch($PAGE->type) {
        case 'article': print_article_footer(); break;
        case 'exercice': print_exercice_footer(); break;
        default: print_main_footer();
    }
}


function print_main_header() {
    include('main_header.php');
}


function print_main_footer() {
    include('main_footer.php');
}


function print_article_header() {
    print_main_header(); 
    include('article_header.php');
}


function print_article_footer() {
    include('article_footer.php');
    print_main_footer();
}


function print_exercice_header() {
    print_main_header(); 
    include('exercice_header.php');
}


function print_exercice_footer() {
    include('exercice_footer.php');
    print_main_footer();
}