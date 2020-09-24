<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('slug', __('Slug'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'))->image();
        $grid->column('parent', __('Parent'))->display(function ($parent) {
            if ($parent !== 0) {
                return Category::findOrFail($parent)->name;
            } else {
                return "";
            }
        });
        $grid->column('status', __('Status'))->switch();
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('parent', __('Parent'));
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
        $form = new Form(new Category());

        $form->text('name', __('Name'));
        $form->hidden('slug', __('Slug'));
        $form->textarea('description', __('Description'))->default("");
        $form->cropper('image', __('Image'));
        $form->select('parent', __('Parent'))->options(function ($par_id) {
            $categories = Category::where('status', 1)->get()->pluck('name', 'id');
            return $categories;
        });
        $form->switch('status', __('Status'));
        // callback before save
        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->name, "-");
        });
        return $form;
    }
}
