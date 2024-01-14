<?php


// Static exercice
$this->registerHook('post_render', function($contents) {
    $contents = replace_tags('exercice', $contents, function($html, $attrs, $data) {
        if(empty($attrs['href'])) return;
        if(!is_file(($file = realpath(pathinfo($this->file, PATHINFO_DIRNAME).S.$attrs['href']).S.'_index.php'))) return;
        if(!$info = php_file_info($file)) return;
        $thumb = rtrim($attrs['href'], '/').'/'.$info->icon;
		$str = <<<EOD
        <a class="exercice" target="_blank" href="{$attrs['href']}">
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
        return $str;
    });
    return $contents;
});

