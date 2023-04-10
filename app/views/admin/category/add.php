<?php include_once 'app/views/admin/layouts/header.php'; ?>
<div class="row row-sm">
    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">افزودن دسته بندی جدید</h4>
                <p class="mb-2">برای افزودن دسته بندی جدید، پس از پر کردن فیلدهای مورد نیاز، بر روی اضافه کلیک کنید.</p>
            </div>
            <div class="card-body pt-0">
                <form action="/panel/storecategory" method="post" class="form-horizontal">
                    <div class="form-group">
                        عنوان دسته بندی
                        <input name="category[title]" type="text" class="form-control" id="inputName" placeholder="عنوان دسته بندی">
                    </div>
                    زیر دسته بندی
                    <select name="category[category_id]" class="form-control select2-no-search">
                        <option value="0">
                            اصلی
                        </option>
                        <?php foreach ($categories as $item): ?>
                                <option value="<?php echo $item['id'] ?>">
                                    <?php echo $item['title'] ?>
                                </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">اضافه</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<?php include_once 'app/views/admin/layouts/footer.php'; ?>
