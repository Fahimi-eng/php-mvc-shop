<?php
require_once 'app/models/ProductModel.php';
require_once 'app/models/CategoryModel.php';
require_once 'app/models/ImageModel.php';

class ProductController
{
    private $ProductModel;
    private $CategoryModel;
    private $ImageModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->CategoryModel = new CategoryModel();
        $this->ImageModel = new ImageModel();
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
        $model_products = $this->ProductModel->all($category,$available);
        $model_images = $this->ImageModel->all();
        //attach images to their products
        $products = $this->attach_images_to_products($model_products,$model_images);
        //get current category
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
        $images = $this->upload_image($file,'public/images/');
        $result = $this->ProductModel->store($product,$images);
        if ($result)
        {
            header('location: /panel/product');
        }
    }
    public function show($id)
    {
        $product = $this->ProductModel->get($id);
        $images = $this->ImageModel->get_images_by_product_id($id);
        $product_id = $id;
        $breadcrumb = [
            'topic' =>[
                'title'=>'تجارت الکترونیک'
            ],
            'data' =>[
                ['title' => 'محصولات', 'url' => '/panel/product'],
                ['title' => 'مشخصات محصول', 'url' => '']
            ]
        ];
        require 'app/views/admin/product/show.php';
    }
    public function delete($id)
    {
        $result = $this->ProductModel->delete($id);
        if ($result){
            $message = true;
        }
        else{
            $message=false;
        }
        header('location:/panel/product?message='.$message);
    }
    public function edit($id)
    {
        $breadcrumb = [
            'topic' =>[
                'title'=>'تجارت الکترونیک'
            ],
            'data' =>[
                ['title' => 'محصولات', 'url' => '/panel/product'],
                ['title' => 'ویرایش محصول', 'url' => '']
            ]
        ];
        $categories = $this->CategoryModel->all();
        $product = $this->ProductModel->get($id);
        $images = $this->ImageModel->get_images_by_product_id($id);
        $product_id = $id;
        require 'app/views/admin/product/edit.php';
    }

    public function update($id , $product, $images)
    {
        $result = $this->ProductModel->update($id, $product, $images);
        if ($result){
            $message = true;
        }
        else{
            $message=false;
        }
        header('location:/panel/product?message='.$message);
    }


    
//internal functions
private function upload_image($file, $path) 
{
    $errors= array();
    $file_paths = array();
    $total_files = count($file['name']);
    for($i=0;$i<$total_files;$i++){
        $file_name = $file['name'][$i];
        $file_tmp = $file['tmp_name'][$i];
        $file_type = $file['type'][$i];
        $file_size = $file['size'][$i];
        $file_ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

        $extensions= array("jpeg","jpg","png");

        if(in_array($file_ext,$extensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if($file_size > 2097152){
            $errors[]='File size must be less than 2 MB';
        }

        if(empty($errors)==true){
            $new_file_name = uniqid('', true) . "." . $file_ext;
            $upload_path = $path . $new_file_name;
            move_uploaded_file($file_tmp, $upload_path);
            $file_paths[] = $upload_path;
        }else{
            print_r($errors);
        }
    }
    return $file_paths;
}

private function attach_images_to_products($products, $images)
{
    if ($products)
    {
        foreach ($products as $i=>$product) {
            $product_images = array(); // create an empty array to hold the images for this product
            foreach ($images as $j=>$image){
                if ($product['id'] == $image['product_id']){
                    $product_images[] = $image; // add the image to the product's image array
                }
            }
            $product['images'] = $product_images; // assign the product's image array to $product['images']
            $products[$i] = $product; // replace the original product with the updated product in the $products array
        }
    }
    return $products;
}





































}