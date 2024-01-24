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
    global $PAGE;
    $root = str_replace('\\', '/', realpath($PAGE->root));
    $target = str_replace('\\', '/', pathinfo($file,PATHINFO_DIRNAME));
    if(realpath($root) == realpath(pathinfo($file, PATHINFO_DIRNAME)))  return 'shared/';
    $backwards = count(explode('/', ltrim(str_replace($root, '', $target), '/')));
    return join('/', array_fill(0, $backwards, '..')).'/shared/';
}


/**
 * Generate and print the breadcrumb
 *
 * @return void
 */
function print_breadcrumb() {
    global $PAGE;
    $root = realpath($PAGE->root);
    $parent = pathinfo(pathinfo($PAGE->file, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
    while($parent != $root) {
        if(!is_file(($file = $parent.S.'_index.php'))) break;
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
 * print_breadcrumb_index
 *
 * @return void
 */
function print_breadcrumb_index() {
    global $PAGE;
    if(!$info = php_file_info($PAGE->file)) return;
    if(empty($info->ref)) return;
    $ref = 'index/'.strtolower(trim(str_replace('\\', '/', $info->ref), '/'));
    $index = $PAGE->root;
    foreach(explode('/', $ref) as $part) {
        $index .= $part.'/';
        if(!$data = php_file_info($index.'_index.php')) continue;
        $url = getRelativePath($PAGE->file, $index);
        echo '<a href="' . $url . '">' . $data->title . '</a>&nbsp;>&nbsp;';
    }
}



function getRootCours() {
    global $PAGE;
    $path = getRelativePath($PAGE->file, $PAGE->root);
    $path = join('/', array_slice(explode('/', $path), 1));
    if(!$path) $path = './';
    return $path;
}

function getIndexPath() {
    global $PAGE;
    if(!$PAGE->ref) return;
    $index = $PAGE->root.'index/';
    return getRelativePath($PAGE->file, $index);
}



/**
 * Get children pages
 *
 * @param  string $parent (optional) Parent page
 * @return array Array of children page informations
 */
function get_children($parent = null) {
    if(!$parent) $parent = current(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1))['file'];
    $folder = pathinfo($parent, PATHINFO_DIRNAME).S;
    foreach(glob($folder.'*', GLOB_ONLYDIR) as $dir) {
        if(!is_file(($file = $dir.S.'_index.php'))) continue;
        if(!$data = php_file_info($file)) continue;
        if(empty($data)) continue;
        if($data->type == 'wiki') continue;
        if(empty($data->index)) $data->index = 0;
        $data->href = pathinfo($dir, PATHINFO_BASENAME).'/';
        $children[$data->index][] = $data;
    }
    if(!isset($children)) return [];
    ksort($children);
    while ($idx = array_pop($children))
        foreach($idx as $elm)
            $elms[] = $elm;
    return $elms;
}


/**
 * Print children page grid for list pages
 *
 * @return void
 */
function print_children($parent=null, $return=false) {
    $str = '';
    if(!$parent) $parent = current(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1))['file'];
    foreach(get_children($parent) as $child) {
        $icon = $child->href . $child->icon;
        $str .= <<<EOD
                        <div class="list-grid__item">
                            <div class="list-grid__item__icon" style="background-image: url({$icon});"></div>
                            <div class="list-grid__item__description">
                                <span class="list-grid__item__title"><a href="{$child->href}">{$child->title}</a></span>
                                <span class="list-grid__item__abstract">{$child->abstract}</span>
                            </div>
                        </div>
EOD;
    }
    if($return) return $str;
    else echo $str;
}


/**
 * Print internal link like listing
 *
 * @param  mixed $path Internal relative path
 * @return void
 */
function intlink($path=null){
    if(!$path) return;
    if(strpos($path, '#') !== false) list($path, $anchor) = explode('#', $path);
    $path = rtrim($path,'/\\');
    $parent = pathinfo(current(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1))['file'], PATHINFO_DIRNAME);
    if(!$target = realpath($parent.'/'.$path)) return;
    if(!$info = php_file_info($target.'/_index.php')) return;
        ?>
            <div class="intlink__item">
                <div class="intlink__item__icon" style="background-image: url('<?php echo $path . '/' . $info->icon; ?>');"></div>
                <div class="intlink__item__description">
                    <span class="intlink__item__title"><a target="_blank" href="<?php echo  !empty($info->url) ? $info->url : $path; ?>/<?php echo (!empty($anchor) ? '#'.$anchor : ''); ?>"><?php echo $info->title; ?></a></span>
                    <span class="intlink__item__abstract"><?php echo $info->abstract; ?></span>
                </div>
            </div>
        <?php
    return true;
}


/**
 * getIndexReferences
 *
 * @return void
 */
function getIndexReferences($name=null) {
    static $references = null;
    global $PAGE;
    if($references === null) {
        $references = [];
        foreach(dig($PAGE->root.'_index.php') as $file) {
            if(!$info = php_file_info($file)) continue;
            if(!empty($info->ref)) {
                $ref = strtolower(trim(str_replace('\\', '/', $info->ref), '/\\'));
                $info->file = $file;
                $references[$ref][] = $info;
            }
        }
        foreach($references as $k => $v) {
            usort($v, function($a, $b) { return strnatcmp($a->title, $b->title); });
            $references[$k] = $v;
        }
    }
    if(!$name) return $references;
    elseif(empty($references[$name])) return [];
    else return $references[$name];
}


/**
 * getRelativePath
 *
 * @param  mixed $from
 * @param  mixed $to
 * @return void
 */
function getRelativePath($from, $to) {
    // some compatibility fixes for Windows paths
    $from = is_dir($from) ? rtrim($from, '\/') . '/' : $from;
    $to   = is_dir($to)   ? rtrim($to, '\/') . '/'   : $to;
    $from = str_replace('\\', '/', $from);
    $to   = str_replace('\\', '/', $to);

    $from     = explode('/', $from);
    $to       = explode('/', $to);
    $relPath  = $to;

    foreach($from as $depth => $dir) {
        // find first non-matching dir
        if($dir === $to[$depth]) {
            // ignore this directory
            array_shift($relPath);
        } else {
            // get number of remaining dirs to $from
            $remaining = count($from) - $depth;
            if($remaining > 1) {
                // add traversals up to first matching dir
                $padLength = (count($relPath) + $remaining - 1) * -1;
                $relPath = array_pad($relPath, $padLength, '..');
                break;
            } else {
                $relPath[0] = './' . $relPath[0];
            }
        }
    }
    return implode('/', $relPath);
}




/**
 * Specific header printing
 *
 * @return void
 */
function print_header() {
    global $PAGE;
    $PAGE->shared = get_shared($PAGE->file);
    switch($PAGE->type) {
        case 'article':  print_article_header(); break;
        case 'exercice': print_exercice_header(); break;
        case 'tool':     print_tool_header(); break;
        case 'list':     print_list_header(); break;
        case 'wiki':     print_wiki_header(); break;
        default:         print_main_header();
    }
}


/**
 * Specific footer printing
 *
 * @return void
 */
function print_footer() {
    global $PAGE;
    switch($PAGE->type) {
        case 'article':  print_article_footer(); break;
        case 'exercice': print_exercice_footer(); break;
        case 'tool':     print_tool_footer(); break;
        case 'list':     print_list_footer(); break;
        case 'wiki':     print_wiki_footer(); break;
        default:         print_main_footer();
    }
}


/**
 * Main header printing
 *
 * @return void
 */
function print_main_header() {
    global $PAGE;
    include('main_header.php');
}


/**
 * Main footer printing
 *
 * @return void
 */
function print_main_footer() {
    global $PAGE;
    include('main_footer.php');
}


/**
 * Article header printing
 *
 * @return void
 */
function print_article_header() {
    global $PAGE;
    print_main_header(); 
    include('article_header.php');
}


/**
 * Article footer printing
 *
 * @return void
 */
function print_article_footer() {
    global $PAGE;
    include('article_footer.php');
    print_main_footer();
}


/**
 * Exercice header printing
 *
 * @return void
 */
function print_exercice_header() {
    global $PAGE;
    print_main_header(); 
    include('exercice_header.php');
}


/**
 * Exercice footer printing
 *
 * @return void
 */
function print_exercice_footer() {
    global $PAGE;
    include('exercice_footer.php');
    print_main_footer();
}


/**
 * List header printing
 *
 * @return void
 */
function print_list_header() {
    global $PAGE;
    print_main_header(); 
    include('list_header.php');
}


/**
 * List footer printing
 *
 * @return void
 */
function print_list_footer() {
    global $PAGE;
    include('list_footer.php');
    print_main_footer();
}


/**
 * Tool header printing
 *
 * @return void
 */
function print_tool_header() {
    global $PAGE;
    print_main_header(); 
    include('tool_header.php');
}


/**
 * Tool footer printing
 *
 * @return void
 */
function print_tool_footer() {
    global $PAGE;
    include('tool_footer.php');
    print_main_footer();
}


/**
 * Wiki header printing
 *
 * @return void
 */
function print_wiki_header() {
    global $PAGE;
    include('wiki_header.php');
}


/**
 * Wiki footer printing
 *
 * @return void
 */
function print_wiki_footer() {
    global $PAGE;
    include('wiki_footer.php');
}



if(!function_exists('php_file_info')) { function php_file_info($file){} }