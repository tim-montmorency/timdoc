<?php


// Static exercice
$this->registerHook('post_render', function($contents) {
    $contents = replace_tags('exercice', $contents, function($html, $attrs, $data) {
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
    return $contents;
});


// Static tool
$this->registerHook('post_render', function($contents) {
    $contents = replace_tags('tool', $contents, function($html, $attrs, $data) {
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
    return $contents;
});
