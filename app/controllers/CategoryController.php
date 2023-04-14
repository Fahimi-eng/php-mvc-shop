<?php
require_once 'app/models/CategoryModel.php';

class CategoryController {
    private $CategoryModel;

    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
    }

    public function index() {
        $categories = $this->CategoryModel->all();
        $breadcrumb = [
            'topic' =>[
                'title'=>'مدیریت دسته بندی ها'
            ],
            'data' =>[
                ['title' => 'لیست دسته بندی ها', 'url' => '/panel/category']
            ]
        ];
        require 'app/views/admin/category/index.php';
    }

    public function edit($id)
    {
        $breadcrumb = [
            'topic' =>[
                'title'=>'مدیریت دسته بندی ها'
            ],
            'data' =>[
                ['title' => 'لیست دسته بندی ها', 'url' => '/panel/category'],
                ['title' => 'ویرایش دسته بندی', 'url' => '/panel/editcategory?id='.$id]
            ]
        ];
        $category = $this->CategoryModel->get($id);
        $categories = $this->CategoryModel->all();
        require 'app/views/admin/category/edit.php';
    }

    public function update($id,$category)
    {
        $result = $this->CategoryModel->update($id,$category);
        if ($result){
            $message = 1;
        }
        else{
            $message = 0;
        }
        header('location:/panel/category?message='.$message);
    }

    public function delete($id)
    {
        $result = $this->CategoryModel->delete($id);
        if ($result){
            $message = true;
        }
        else{
            $message=false;
        }
        header('location:/panel/category?message='.$message);
    }

    public function create()
    {
        $breadcrumb = [
            'topic' =>[
                'title'=>'مدیریت دسته بندی ها'
            ],
            'data' =>[
                ['title' => 'لیست دسته بندی ها', 'url' => '/panel/category'],
                ['title' => 'دسته بندی جدید', 'url' => '/panel/createcategory']
            ]
        ];
        $categories = $this->CategoryModel->all();
        require 'app/views/admin/category/add.php';
    }

    public function store($category)
    {
        var_dump( $category['category_id']);

        $result = $this->CategoryModel->store($category);
        if ($result){
            $message = 1;
        }
        else{
            $message = 0;
        }
        header('location:/panel/category?message='.$message);
    }
}
?>