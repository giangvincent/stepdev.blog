<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());
        $grid->model()->orderBy('id', 'desc');
        $grid->column('id', __('Id'))->sortable();
        $grid->column('cat_id', __('Category'))->display(function ($cat_id) {
            if ($cat_id !== 0) {
                return Category::findOrFail($cat_id)->name;
            } else {
                return "";
            }
        })->sortable();
        $grid->column('title', __('Title'))->filter('like');
        $grid->column('summary', __('Summary'))->filter('like');
        $grid->column('feature_image', __('Feature image'))->image();
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

        $grid->quickSearch('title', 'summary', 'content');
        $grid->filter(function ($filter) {

            // $filter->date('updated_at', 'Lọc theo ngày tháng');
            $filter->between('updated_at', 'Lọc theo ngày tháng')->datetime();

            $cats = Category::get()->pluck('name', 'id')->toArray();
            $filter->where(function ($query) {
                $query->whereHas('category', function ($query) {
                    $query->where('id', $this->input);
                });

            }, 'Category')->select($cats);
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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('cat_id', __('Cat id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('summary', __('Summary'));
        $show->field('feature_image', __('Feature image'));
        $show->field('content', __('Content'));
        $show->field('images', __('Images'));
        $show->field('navs', __('Navs'));
        $show->field('status', __('Status'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_desc', __('Seo desc'));
        $show->field('seo_keys', __('Seo keys'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('author_id', __('Author id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->select('cat_id', 'Category')->options(Category::all()->pluck('name', 'id'));
        $form->text('title', __('Title'));
        $form->hidden('slug', __('Slug'));
        $form->textarea('summary', __('Summary'));
        $form->cropper('feature_image', __('Feature image'));
        $form->simditor('content', __('Content'));
        $form->multipleSelect('tags', 'Tags')->options(Tag::all()->pluck('name', 'id'));
        $form->textarea('navs', __('Navs'));
        $form->switch('status', __('Status'));
        $form->text('seo_title', __('Seo title'));
        $form->textarea('seo_desc', __('Seo desc'));
        $form->textarea('seo_keys', __('Seo keys'));
        $form->hidden('author_id')->default(\Admin::user()->id);

        $form->saving(function (Form $form) {
            $form->slug = Str::slug($form->title, "-");
        });
        $form->saved(function (Form $form) {
            $post = Post::find($form->model()->id);
            if ($post->feature_image !== null) {
                $ext = pathinfo(public_path() . '/upload/' . $post->feature_image, PATHINFO_EXTENSION);
                $newFeatureImage = 'images/' . $post->slug . '.' . $ext;
                // dd($newFeatureImage);
                rename(public_path() . '/upload/' . $post->feature_image, public_path() . '/upload/' . $newFeatureImage);

                $post->feature_image = $newFeatureImage;
                $post->save();
            }

            $this->exportToJson($post);
        });
        return $form;
    }

    public function exportToJson($post)
    {
        $data = $post->toArray();
        $data['tags'] = $post->tags()->get()->toArray();
        if (!file_exists(public_path() . '/content/')) {
            mkdir(public_path() . '/content/', 0777);
        }
        if (!file_exists(public_path() . '/content/posts/')) {
            mkdir(public_path() . '/content/posts/', 0777);
        }
        file_put_contents(public_path() . '/content/posts/' . $post->id . '.json', json_encode($data));
    }
}
