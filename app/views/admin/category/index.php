<?php include_once 'app/views/admin/layouts/header.php';  ?>
<!-- row opened -->
<div class="row row-sm">
    <!--div-->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">لیست دسته بندی های محصولات وبسایت</h4>
<!--                    <a href=""><i class="mdi mdi-dots-horizontal text-gray"></i></a>-->
                    <a href="/panel/createcategory"><button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-plus"></i> افزودن دسته بندی جدید</button></a>
                </div>
                <p class="tx-12 tx-gray-500 mb-2">برای مدیریت دسته بندی ها اعم از حذف و ویرایش از قسمت عملیات تلاش کنید</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php if(@$_GET['message']){ ?>
                    <div class="alert alert-info" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>عملیات موفق</strong>
                    </div>
                    <?php } ?>

                    <table class="table table-hover mb-0 text-md-nowrap">
                        <thead>
                        <tr>
                            <th>شناسه</th>
                            <th>عنوان دسته بندی</th>
                            <th>موقعیت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $key=>$item): ?>
                        <tr>
                            <th scope="row"><?php echo ++$key?></th>
                            <td><?php echo $item['title']; ?></td>
                            <td><?php if ($item['category_id'] == null || $item['category_id'] == 0){ echo 'دسته بندی اصلی';} else{ echo 'زیر دسته بندی';} ?></td>
                            <td class="btn-icon-list">
                                    <a href="/panel/deletecategory?id=<?php echo $item['id']; ?>" class="btn btn-warning-gradient btn-icon"><i class="typcn typcn-trash"></i></a>
                                    <a href="/panel/editcategory?id=<?php echo $item['id']; ?>" class="btn btn-light-gradient btn-icon"><i class="typcn typcn-pen"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
</div>
<!-- /row -->
<?php include_once 'app/views/admin/layouts/footer.php'; ?>
