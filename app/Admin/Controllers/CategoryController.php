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
            if ($parent !== 0 && $parent !== null) {
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

        $form->saved(function (Form $form) {
            $category = Category::find($form->model()->id);
            $this->exportToJson($category);
        });
        return $form;
    }

    public function exportToJson($category)
    {
        $data = $category->toArray();
        $data['posts'] = $category->posts()->where('status', 1)->select('id', 'title', 'slug', 'summary', 'feature_image', 'updated_at')->orderBy('id', 'desc')->limit(12)->get()->toArray();
        if (!file_exists(public_path() . '/content/categories/')) {
            mkdir(public_path() . '/content/categories/', 0777);
        }
        file_put_contents(public_path() . '/content/categories/' . $category->id . '.json', json_encode($data));

        $allCats = Category::where('status', 1)->get();
        $allCatsData = [];
        foreach ($allCats as $cat) {
            $catData = $cat->toArray();
            $catData['posts'] = $cat->posts()->count();
            array_push($allCatsData, $catData);
        }
        file_put_contents(public_path() . '/content/categories.json', json_encode($allCatsData));
    }
}
