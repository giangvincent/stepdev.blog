<?php

namespace App\Admin\Controllers;

use App\Models\Tag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class TagController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Tag';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tag());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('slug', __('Slug'));
        $grid->column('desc', __('Desc'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Tag::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('desc', __('Desc'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Tag());

        $form->text('name', __('Name'));
        $form->hidden('slug', __('Slug'));
        $form->textarea('desc', __('Description'))->default("");
        $form->switch('status', __('Status'))->default("1");
        // callback before save
        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->name, "-");
        });
        $form->saved(function (Form $form) {
            $tag = Tag::find($form->model()->id);
            $this->exportToJson($tag);
        });

        return $form;
    }

    public function exportToJson($tag)
    {
        $data = $tag->toArray();
        $data['posts'] = $tag->posts()->where('status', 1)->select('id', 'title', 'slug', 'summary', 'feature_image', 'updated_at')->orderBy('id', 'desc')->limit(12)->get()->toArray();
        if (!file_exists(public_path() . '/content/categories/')) {
            mkdir(public_path() . '/content/categories/', 0777);
        }
        file_put_contents(public_path() . '/content/categories/' . $category->id . '.json', json_encode($data));
    }
}
