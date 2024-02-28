<?php

/******************************************************
 *                Composante Exercice                 *
 ******************************************************/
register_tag('exercice', function($html, $attrs, $data) {
    if(empty($attrs['href'])) return;
    if(!is_file(($file = realpath(pathinfo($this->file, PATHINFO_DIRNAME).S.$attrs['href']).S.'_index.php'))) return;
    if(!$info = php_file_info($file)) return;
    $url = !empty($info->url) ? $info->url : $attrs['href'];
    $thumb = rtrim($attrs['href'], '/').'/'.$info->icon;
    return <<<EOD
        <a class="exercice" target="_blank" href="{$url}">
            <div class="exercice-container">
                <div class="exercice-thumb" style="background-image: url({$thumb})"></div>
                <div class="exercice-abstract">
                    <em class="exercice-label">EXERCICE</em>
                    <span class="exercice-title">{$info->title}</span>
                    <span class="exercice-description">{$info->abstract}</span>
                </div>
            </div>
        </a>
EOD;
});


/******************************************************
 *                  Composante Tool                   *
 ******************************************************/
register_tag('tool', function($html, $attrs, $data) {
    if(empty($attrs['href'])) return;
    if(!is_file(($file = realpath(pathinfo($this->file, PATHINFO_DIRNAME).S.$attrs['href']).S.'_index.php'))) return;
    if(!$info = php_file_info($file)) return;
    $url = !empty($info->url) ? $info->url : $attrs['href'];
    $thumb = rtrim($attrs['href'], '/').'/'.$info->icon;
    return <<<EOD
        <a class="tool" target="_blank" href="{$url}">
            <div class="tool-container">
                <div class="tool-abstract">
                    <em class="tool-label">OUTIL</em>
                    <span class="tool-title">{$info->title}</span>
                    <span class="tool-description">{$info->abstract}</span>
                </div>
                <div class="tool-thumb" style="background-image: url({$thumb})"></div>
            </div>
        </a>
EOD;
});


/******************************************************
 *                 Composante Intlink                 *
 ******************************************************/
register_tag('intlink', function($html, $attrs, $data) {
    if(empty($attrs['href'])) return;
    $path = $attrs['href'];
    if(strpos($path, '#') !== false) list($path, $anchor) = explode('#', $path);
    $path = rtrim($path,'/\\');
    if(!is_file(($file = realpath(pathinfo($this->file, PATHINFO_DIRNAME).S.$path).S.'_index.php'))) return;
    if(!$info = php_file_info($file)) return;
    $url = !empty($info->url) ? $info->url : $path;
    $url = rtrim($url, '/').'/'.(isset($anchor) ? '#'.$anchor : '');
    $thumb = rtrim($path, '/').'/'.$info->icon;
    $thumb = getRelativePath($this->file, realpath(pathinfo($this->file, PATHINFO_DIRNAME).'/'.$thumb));
    return <<<EOD
        <div class="intlink__item">
            <div class="intlink__item__icon" style="background-image: url({$thumb});"></div>
            <div class="intlink__item__description">
                <span class="intlink__item__title"><a target="_blank" href="{$url}">{$info->title}</a></span>
                <span class="intlink__item__abstract">{$info->abstract}</span>
            </div>
        </div>
EOD;
});


/******************************************************
 *                Composante Listlink                 *
 ******************************************************/
register_tag('listlink', function($html, $attrs, $data) {
    if(empty($attrs['href'])) return;
    $path = $attrs['href'];
    $path = rtrim($path,'/\\');
    if(!is_file(($file = realpath(pathinfo($this->file, PATHINFO_DIRNAME).S.$path).S.'_index.php'))) return;
    if(!$info = php_file_info($file)) return;
    $url = !empty($info->url) ? $info->url : $attrs['href'];
    $thumb = rtrim($path, '/').'/'.$info->icon;
    $thumb = getRelativePath($this->file, realpath(pathinfo($this->file, PATHINFO_DIRNAME).'/'.$thumb));
    return <<<EOD
        <div class="list-grid__item">
            <div class="list-grid__item__icon" style="background-image: url({$thumb});"></div>
            <div class="list-grid__item__description">
                <span class="list-grid__item__title"><a href="{$url}">{$info->title}</a></span>
                <span class="list-grid__item__abstract">{$info->abstract}</span>
            </div>
        </div>
EOD;
});


/******************************************************
 *                Composante Highlight                *
 ******************************************************/
register_tag('highlight', function($html, $attrs, $data) {
    $data = html_entity_decode(trim($data), ENT_QUOTES, 'UTF-8');
    $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
    foreach($attrs as $k => $v) $props[] = $k.'="'.$v.'"';
    return '<highlight'.(!empty($props) ? ' '.join(' ', $props): '').'>'.$data.'</highlight>';
});


/******************************************************
 *                 Composante Incode                  *
 ******************************************************/
register_tag('incode', function($html, $attrs, $data) {
    $data = html_entity_decode(trim($data), ENT_QUOTES, 'UTF-8');
    $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
    return '<span class="inline-code">' . $data . '</span>';
});


/******************************************************
 *                 Composante Children                *
 ******************************************************/
register_tag('children', function($html, $attrs, $data) {
    return print_children($this->file, true);
});


/******************************************************
 *                Composante References               *
 ******************************************************/
register_tag('references', function($html, $attrs, $data) {
    $ref = str_replace(realpath($this->root.'index'), '', pathinfo($this->file, PATHINFO_DIRNAME));
    $ref = strtolower(trim(str_replace('\\', '/', $ref), '/'));
    $str = '';
    foreach(getIndexReferences($ref) as $info) {
        $url = getRelativePath($this->file, pathinfo($info->file, PATHINFO_DIRNAME));
        $thumb = getRelativePath(pathinfo($this->file, PATHINFO_DIRNAME), realpath(pathinfo($this->file, PATHINFO_DIRNAME).'/'.$url.$info->icon));
        $str .= <<<EOD
        <div class="list-grid__item">
            <div class="list-grid__item__icon" style="background-image: url({$thumb});"></div>
            <div class="list-grid__item__description">
                <span class="list-grid__item__title"><a href="{$url}">{$info->title}</a></span>
                <span class="list-grid__item__abstract">{$info->abstract}</span>
            </div>
        </div>
EOD;
    }
    return $str;
});