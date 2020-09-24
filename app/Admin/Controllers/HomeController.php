<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }

    public function uploadImage(Request $request)
    {
        $data = [
            'success' => false,
            'msg' => 'Upload failed!',
            'file_path' => '',
        ];

        if ($file = $request->upload_file) {
            $image_url = 'content/';
            $image_name = uniqid(rand()) . '.' . $file->getClientOriginalExtension();
            $result = $file->storeAs($image_url, $image_name, 'public');
            if ($result) {
                $data['file_path'] = env('STATIC_URL') . '/upload/' . $image_url . '/' . $image_name;
                $data['msg'] = "Upload successfully!";
                $data['success'] = true;
            }
        }
        return $data;
    }
}
