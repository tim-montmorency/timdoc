<?php
const BR = '<br>';


/**
 * Dump element contents for HTML
 *
 * @param  mixed $elm
 * @return void
 */
function __print_r($elm) {
    echo '<pre>'.print_r($elm, true).'</pre>';
}


/**
 * Get relative shared path
 *
 * @param  string $file The current project file
 * @return string The relative shared path
 */
function get_shared($file){
    $backwards = count(explode('\\',str_replace($PAGE->root, '', pathinfo($file,PATHINFO_DIRNAME))));
    return join('/', array_fill(0, $backwards, '..')).'/shared/';
}


/**
 * Generate and print the breadcrumb
 *
 * @return void
 */
function print_breadcrumb() {
    $root = realpath($PAGE->root);
    $parent = pathinfo(pathinfo($PAGE->file, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
    while($parent != $root) {
        if(!is_file(($file = $parent.'\_index.php'))) break;
        if(!$data = php_file_info($file)) break;
        if($data->type != 'list') break;
        $link = str_replace([$root, '\\'], ['', '/'], $parent)."/";
        $page = str_replace([$root, '\\'], ['', '/'], pathinfo($PAGE->file, PATHINFO_DIRNAME));
        $backwards = count(explode('/',str_replace($link, '', $page)));
        $href = join('/', array_fill(0, $backwards, '..')).'/';
        $nodes[] = '<a href="'.$href.'">'.$data->title.'</a>';
        $parent = pathinfo($parent, PATHINFO_DIRNAME);
    }
    if(!empty($nodes)) echo join(' > ', array_reverse($nodes)).' >';
}


/**
 * Specific header printing
 *
 * @return void
 */
function print_header() {
    $PAGE->shared = get_shared($PAGE->file);
    switch($PAGE->type) {
        case 'article':  print_article_header(); break;
        case 'exercice': print_exercice_header(); break;
        case 'list':     print_list_header(); break;
        default:         print_main_header();
    }
}


/**
 * Specific footer printing
 *
 * @return void
 */
function print_footer() {
    switch($PAGE->type) {
        case 'article':  print_article_footer(); break;
        case 'exercice': print_exercice_footer(); break;
        case 'list':     print_list_footer(); break;
        default:         print_main_footer();
    }
}


/**
 * Main header printing
 *
 * @return void
 */
function print_main_header() {
    include('main_header.php');
}


/**
 * Main footer printing
 *
 * @return void
 */
function print_main_footer() {
    include('main_footer.php');
}


/**
 * Article header printing
 *
 * @return void
 */
function print_article_header() {
    print_main_header(); 
    include('article_header.php');
}


/**
 * Article footer printing
 *
 * @return void
 */
function print_article_footer() {
    include('article_footer.php');
    print_main_footer();
}


/**
 * Exercice header printing
 *
 * @return void
 */
function print_exercice_header() {
    print_main_header(); 
    include('exercice_header.php');
}


/**
 * Exercice footer printing
 *
 * @return void
 */
function print_exercice_footer() {
    include('exercice_footer.php');
    print_main_footer();
}


/**
 * List header printing
 *
 * @return void
 */
function print_list_header() {
    print_main_header(); 
    include('list_header.php');
}


/**
 * List footer printing
 *
 * @return void
 */
function print_list_footer() {
    include('list_footer.php');
    print_main_footer();
}


/**
 * Get children pages
 *
 * @param  string $parent (optional) Parent page
 * @return array Array of children page informations
 */
function get_children($parent = null) {
    if(!$parent) $parent = current(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1))['file'];
    $folder = pathinfo($parent, PATHINFO_DIRNAME).'\\';
    foreach(glob($folder.'*', GLOB_ONLYDIR) as $dir) {
        if(!is_file(($file = $dir.'\_index.php'))) continue;
        if(!$data = php_file_info($file)) continue;
        if(empty($data)) continue;
        $data->href = pathinfo($dir, PATHINFO_BASENAME).'/';
        $children[] = $data;
    }
    return isset($children) ? $children : [];
}


/**
 * Print children page grid for list pages
 *
 * @return void
 */
function print_children() {
    $parent = current(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1))['file'];
    foreach(get_children($parent) as $child) {
        ?>
                        <div class="list-grid__item">
                            <div class="list-grid__item__icon" style="background-image: url('<?php echo $child->href . $child->icon; ?>');"></div>
                            <div class="list-grid__item__description">
                                <span class="list-grid__item__title"><a href="<?php echo $child->href; ?>"><?php echo $child->title; ?></a></span>
                                <span class="list-grid__item__abstract"><?php echo $child->abstract; ?></span>
                            </div>
                        </div>
        <?php
    }
}



if(!function_exists('php_file_info')) { function php_file_info($file){} }