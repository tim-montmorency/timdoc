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
    $url = !empty($info->url) ? $info->url : $attrs['href'];
    $thumb = rtrim($path, '/').'/'.$info->icon;
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
 *                 Composante Children                *
 ******************************************************/

register_tag('children', function($html, $attrs, $data) {
    global $PAGE;
    return print_children($PAGE->file, true);
});