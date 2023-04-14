<?php
require_once 'app/models/ProductModel.php';
require_once 'app/models/CategoryModel.php';

class ProductController
{
    private $ProductModel;
    private $CategoryModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->CategoryModel = new CategoryModel();
    }


    public function index($category=0, $available=0)
    {

        $breadcrumb = [
            'topic' =>[
                'title'=>'تجارت الکترونیک'
            ],
            'data' =>[
                ['title' => 'محصولات', 'url' => '/panel/product']
            ]
        ];

        $categories = $this->CategoryModel->all();
        $products = $this->ProductModel->all($category,$available);

        if ($category != 0)
        {
            $current_cat = $category;
        }
        require "app/views/admin/product/index.php";
    }

    public function create()
    {
        $breadcrumb = [
            'topic' =>[
                'title'=>'تجارت الکترونیک'
            ],
            'data' =>[
                ['title' => 'افزودن محصول جدید', 'url' => '/panel/createproduct']
            ]
        ];
        $categories = $this->CategoryModel->all();
        require 'app/views/admin/product/create.php';
    }

    public function store($product,$file)
    {
//        $result = $this->upload_image($file,'public/images');
        $result = $this->ProductModel->store($product,'/public/images/02.jpg');
        if ($result)
        {
            header('location: /panel/product');
        }

    }













private function upload_image($file, $path) {
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif'); // allowed image types
    $filename = $file['name'];
    $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); // get file extension

    if (!in_array($filetype, $allowed_types)) {
        return false;
    }

    $upload_path = $path . basename($filename);

    if (move_uploaded_file($file['tmp_name'], $upload_path)) {
        return true;
    } else {
        return false;
    }
}





































}