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
        $grid->model()->orderBy('id', 'desc');
        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Name'))->filter('like');
        $grid->column('desc', __('Desc'))->filter('like');
        $states = [
            'on' => ['value' => 1, 'text' => 'Publish', 'color' => 'primary'],
            'off' => ['value' => 2, 'text' => 'Pending', 'color' => 'default'],
        ];
        $grid->column('status', __('Status'))->switch($states)->filter([
            0 => 'Pending',
            1 => 'Publish',
        ]);
        $grid->column('created_at', __('Created at'))->display(function ($created_at) {
            return date("Y-m-d H:i:s", strtotime($created_at));
        });
        $grid->column('updated_at', __('Updated at'))->display(function ($created_at) {
            return date("Y-m-d H:i:s", strtotime($created_at));
        });
        $grid->quickSearch('name', 'description');

        $grid->filter(function ($filter) {

            // $filter->date('updated_at', 'Lọc theo ngày tháng');
            $filter->between('updated_at', 'Lọc theo ngày tháng')->datetime();
        });

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
        if (!file_exists(public_path() . '/content/')) {
            mkdir(public_path() . '/content/', 0777);
        }
        if (!file_exists(public_path() . '/content/categories/')) {
            mkdir(public_path() . '/content/categories/', 0777);
        }
        file_put_contents(public_path() . '/content/categories/' . $category->id . '.json', json_encode($data));
    }
}
