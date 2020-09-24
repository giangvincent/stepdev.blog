<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

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

            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg'] = "Upload successfully!";
                $data['success'] = true;
            }
        }
        return $data;
    }
}
