<?php include_once 'app/views/admin/layouts/header.php'; ?>
<!-- row -->
<form method="post" enctype="multipart/form-data" action="/panel/storeproduct" class="row row-sm">

    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">افزودن محصول جدید</h4>
                <p class="mb-2">برای افزودن محصول جدید لازم است تمامی فیلدهای مشخص شده پر شود.</p>
            </div>
            <div class="card-body pt-0">
                <div>
                    <div class="">

                        <div class="form-group">
                            <label for="title">نام محصول</label>
                            <input name="product[title]" type="text" class="form-control" id="title" placeholder="نام محصول را وارد کنید">
                        </div>

                        <div class="form-group">
                            <label for="price">قیمت</label>
                            <input name="product[price]" type="text" class="form-control" id="price" placeholder="قیمت محصول را وارد نمایید.">
                        </div>

                        <div class="form-group">
                            <label for="count">تعداد</label>
                            <input name="product[count]" type="number" class="form-control" id="count" placeholder="رنگ محصول را وارد نمایید.">
                        </div>

                        <div class="form-group">
                            <label for="color">رنگ</label>
                            <input name="product[color]" type="text" class="form-control" id="color" placeholder="رنگ محصول را وارد نمایید.">
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
                                <option value="0">
                                    مخفی
                                </option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">توضیحات</label>
                            <textarea name="product[description]" id="description" class="form-control" placeholder="توضیحات را وارد نمایید." rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 mb-0">ثبت</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">بارگذاری تصاویر</h6>
                    <p class="text-muted card-sub-title">برای تنظیم کردن تصاویر محصول بهتر است سایز تمامی تصاویر یکسان باشند.</p>
                </div>
                <div>
                    <input id="demo" type="file" name="images[]" accept=".jpg, .png, image/jpeg, image/png">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- row -->

<?php include_once 'app/views/admin/layouts/footer.php'; ?>
