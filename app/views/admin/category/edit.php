<?php  include_once 'app/views/admin/layouts/header.php'; ?>
<div class="row row-sm">
    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">ویرایش دسته بندی</h4>
                <p class="mb-2">برای ویرایش دسته بندی، پس از اعمال ویرایش های مورد نیاز، بر روی ویرایش کلیک کنید.</p>
            </div>
            <div class="card-body pt-0">
                <form action="/panel/updatecategory?id=<?php echo $category['id']; ?>" method="post" class="form-horizontal">
                    <div class="form-group">
                        عنوان دسته بندی
                        <input value="<?php echo $category['title']; ?>" name="category[title]" type="text" class="form-control" id="inputName" placeholder="عنوان دسته بندی">
                    </div>
                    زیر دسته بندی
                    <select name="category[category_id]" class="form-control select2-no-search">
                        <option <?php if (!$category['category_id']){ echo "selected";} ?> value="0">
                            اصلی
                        </option>

                        <?php foreach ($categories as $item): ?>
                        <?php if ($item['id'] != $category['id']){ ?>
                        <option <?php if ($category['category_id'] == $item['id']){ echo "selected";} ?> value="<?php echo $item['id'] ?>">
                            <?php echo $item['title'] ?>
                        </option>
                        <?php  } ?>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">ویرایش</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<?php include_once 'app/views/admin/layouts/footer.php'; ?>

