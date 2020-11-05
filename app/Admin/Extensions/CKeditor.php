<?php

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class CKeditor extends Field
{
    protected static $js = [
        '/vendor/laravel-admin-ext/ckeditor/ckeditor.js',
        '/vendor/laravel-admin-ext/ckeditor/config.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        // I do this on document ready because of laravel-admin weird render/loading issue
        $this->script = "$(function () { CKEDITOR.replace('{$this->column}'); });";
        return parent::render();
    }
}
