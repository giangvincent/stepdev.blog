<?php

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class quill extends Field
{
    protected $view = 'admin.quill_editor';

    protected static $css = [
        "/vendor/laravel-admin-ext/quill/quill.snow.css",
    ];

    protected static $js = [
        "/vendor/laravel-admin-ext/quill/quill.min.js",
    ];

    public function render()
    {
        $this->script = <<<EOT


EOT;
        return parent::render();

    }
}
