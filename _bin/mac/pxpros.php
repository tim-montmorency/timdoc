<?php
/**
 * PXPros
 *
 * MacOS / Linux port of PXPros pre-processor.
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @author     Maxime Larrivée-Roy <maxime.lroy@cmontmorency.qc.ca>
 * @copyright  2023 Collège Montmorency
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link       https://github.com/tim-montmorency/timdoc/tree/main/_bin/mac
 */


 /**
 * Declare constants & globals
 */
const S  = "/";
const RN = "\n";
$PAGE = null;


/**
 * PXPros Class
 */
final class PXPros
{

    private $root;
    private $file;
    private $page;
    private $config;
    private $vars = [];


    /**
     * __construct
     *
     * @param  mixed $prjfile Project configuration file (_pxprox.json)
     * @return void
     */
    public function __construct($prjfile)
    {
        if (!is_file($prjfile)) return false; //throw error
        if (!$json = file_get_contents($prjfile)) return false; //throw error
        if (!$this->config = json_decode($json)) return false; //throw error
        $this->root = pathinfo($prjfile, PATHINFO_DIRNAME) . S;
        $PAGE = $this;
        $this->includes();
    }


    /**
     * Project and page data getter
     *
     * @param  mixed $name Variable name
     * @return void
     */
    public function __get($name)
    {
        switch ($name) {
            case 'root': return $this->root;
            case 'file': return $this->file;
            default:
                if (!empty($this->vars[$name])) return $this->vars[$name];
                elseif (!empty($this->page->{$name})) return $this->page->{$name};
                elseif (!empty($this->config->{$name})) return $this->config->{$name};
                elseif (!empty($this->config->data->{$name})) return $this->config->data->{$name};
        }
    }

    
    /**
     * Project and page data setter
     *
     * @param  mixed $name
     * @param  mixed $val
     * @return void
     */
    public function __set($name, $val)
    {
        $this->vars[$name] = $val;
    }


    /**
     * Includes base .php files
     *
     * @return void
     */
    private function includes()
    {
        if (!empty($this->config->includes)) foreach ($this->config->includes as $path) {
            if (!is_file(realpath($this->root . $path))) continue;
            else include_once(realpath($this->root . $path));
        }
    }


    /**
     * Render a page
     *
     * @param  mixed $file File to render
     * @return void
     */
    public function render($file)
    {
        global $PAGE;
        $PAGE = $this;
        $dir = pathinfo($file, PATHINFO_DIRNAME) . S;
        $this->page = php_file_info($file);
        $target = $dir . ltrim(pathinfo($file, PATHINFO_FILENAME), '_') . '.html';
        $this->file = realpath($file);
        ob_start();
        if($this->before) include(realpath($this->root.$this->before));
        include($file);
        if($this->after) include(realpath($this->root.$this->after));
        file_put_contents($target, ob_get_clean());
    }


    /**
     * Find the currect project configuration file
     *
     * @param  mixed $path Current path
     * @return mixed Returns the project configuration file if exists, otherwise false.
     */
    public static function findRoot($path)
    {
        if (is_file($path)) $path = pathinfo(realpath($path), PATHINFO_DIRNAME);
        elseif (!$path = realpath($path)) return false;
        do {
            $file = $path . S . '_pxpros.json';
            if (is_file($file)) return $file;
            $path = pathinfo($path, PATHINFO_DIRNAME);
        } while ($path != pathinfo($path, PATHINFO_DIRNAME));
        return false;
    }
}


/**
 * Parse the first DOCKBLOCK of a file and return attributes as an object
 *
 * @param  mixed $file PHP File to be parse
 * @return void
 */
function php_file_info($file) {
    if(!$file = realpath($file)) return false;
    $tokens = token_get_all(file_get_contents($file));
    foreach($tokens as $tok) {
        if(!is_array($tok)) continue;
        if($tok[0] == T_DOC_COMMENT) {
            $block = $tok[1];
            break;
        }
    }
    if(empty($block)) return new stdClass;
	if(!preg_match_all('#@([a-z0-9]+)[\s\t]+([^\n]+)#msi', $block, $m)) return new stdClass;
	foreach($m[1] as $k => $v)
		$info[trim($v)] = trim($m[2][$k]);
	return (object)$info;
}


/**
 * Recursevly walk a folder and yield files corresponding to the pattern
 *
 * @param  mixed $path Path and pattern to walk through
 * @return void
 */
function dig($path){
    $patt = pathinfo($path,PATHINFO_BASENAME);
    $path = pathinfo($path,PATHINFO_DIRNAME);
    if(!$path = realpath($path)) return;
    else $path .= S;
    $dirs	= [];
    foreach(glob($path.$patt) as $file){
        if(is_dir($file)) continue;
        else yield $file;
    }
    foreach(glob($path.'*',GLOB_ONLYDIR) as $dir){
        foreach(call_user_func(__FUNCTION__,$dir.S.$patt) as $file) yield $file;
    }
}


/**
 * Display error message and Quit
 *
 * @param  mixed $str Error message
 * @return void
 */
function err($str) {
    echo 'Error: '.$str.RN;
    exit(1);
}


/**
 * Parse arguments and render the specified templates
 */
if(!isset($argv[1])) err("Invalid argument.");
if (!$target = realpath($argv[1])) err("Invalid target.");

if (is_dir($target)) {
    if (!$root = PXPros::findRoot($target)) err("No project configuration found.");
    $prj = new PXPros($root);
    foreach (dig($target . '/*.php') as $file) {
        $parent = pathinfo(pathinfo($file, PATHINFO_DIRNAME), PATHINFO_BASENAME);
        if (strpos($parent, '_') === 0) continue;
        if (strpos(pathinfo($file, PATHINFO_FILENAME), '_') !== 0) continue;
        echo 'Render: ';
        echo str_replace([pathinfo($root, PATHINFO_DIRNAME), S, '\\'], ['', '/', '/'], $file) . RN;
        $prj->render($file);
    }
} elseif (preg_match('#^_(.*)\.php$#i', pathinfo($target, PATHINFO_BASENAME), $m)) {
    if (!$root = PXPros::findRoot($target)) err("No project configuration found.");
    echo 'Render: ';
    echo str_replace([pathinfo($root, PATHINFO_DIRNAME), S, '\\'], ['', '/', '/'], $target) . RN;
    (new PXPros($root))->render($target);
} else {
    err("Invalid target.");
}

exit(0);