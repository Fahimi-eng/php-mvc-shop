<?php include_once 'app/views/admin/layouts/header.php'; ?>
<!-- row -->
<form method="post" enctype="multipart/form-data" action="/panel/updateproduct" class="row row-sm">

    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">ویرایش محصول </h4>
                <p class="mb-2">برای ویرایش محصول جدید لازم است تمامی فیلدهای مشخص شده پر شود.</p>
            </div>
            <div class="card-body pt-0">
                <div>
                    <div class="form-group">
                        <div class="form-group visually-hidden">
                            <label for="name">ID</label>
                            <input value="<?php echo $product_id;?>" name="product[id]" type="text" class="form-control" id="id">
                        </div>
                        <div class="form-group">
                            <label for="name">نام محصول</label>
                            <input value="<?php echo $product['name'];?>" name="product[name]" type="text" class="form-control" id="name" placeholder="نام محصول را وارد کنید">
                        </div>

                        <div class="form-group">
                            <label for="price">قیمت</label>
                            <input value="<?php echo $product['price'];?>" name="product[price]" type="text" class="form-control" id="price" placeholder="قیمت محصول را وارد نمایید.">
                        </div>

                        <div class="form-group">
                            <label for="count">تعداد</label>
                            <input value="<?php echo $product['count'];?>" name="product[count]" type="number" class="form-control" id="count" placeholder="رنگ محصول را وارد نمایید.">
                        </div>

                        <div class="form-group">
                            <label for="color">رنگ</label>
                            <input value="<?php echo $product['color'];?>" name="product[color]" type="text" class="form-control" id="color" placeholder="رنگ محصول را وارد نمایید.">
                        </div>

                        <div class="form-group">
                            <label for="category">انتخاب دسته بندی</label>
                            <select id="category" name="product[category_id]" class="form-control select2-no-search">
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['title']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="visible">وضعیت نمایش</label>
                            <select id="visible" name="product[is_visible]" class="form-control select2-no-search">
                                <option value="1">
                                    نمایش
                                </option>
                                <option <?php if ($product['visible']){ echo 'selected'; }  ?> value="0">
                                    مخفی
                                </option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">توضیحات</label>
                            <textarea name="product[description]" id="description" class="form-control" placeholder="توضیحات را وارد نمایید." rows="9">
                                <?php echo $product['description']; ?>
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 mb-0">ویرایش</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">بارگذاری تصاویر جدید</h6>
                    <p class="text-muted card-sub-title">برای تنظیم کردن تصاویر محصول بهتر است سایز تمامی تصاویر یکسان باشند.</p>
                </div>
                <div>
                    <input multiple id="demo" type="file" name="images[]" accept=".jpg, .png, image/jpeg, image/png">
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($images as $image): ?>
            <div class="col-12 col-md-6">
                <div class="card card-danger">
                    <div class="card-header pb-0">
                        <img src="<?php echo '/'.$image['image'];?>" alt="">
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger btn-block">حذف</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</form>
<!-- row -->

<?php include_once 'app/views/admin/layouts/footer.php'; ?>
