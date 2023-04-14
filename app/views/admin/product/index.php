<?php include_once 'app/views/admin/layouts/header.php';  ?>



    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <!--        search       -->
            <div class="card">
                <div class="card-body p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="جستجو کردن ...">
                        <span class="input-group-append">
									<button class="btn btn-primary" type="button">جستجو کردن</button>
								</span>
                    </div>
                </div>
            </div>
        </div>
            <!--filter-->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th class="drop-down">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
                                                data-bs-toggle="dropdown" type="button">
                                            دسته بندی
                                            <i class="px-2 fas fa-caret-down ml-1"></i>
                                        </button>
                                        <div class="dropdown-menu tx-13">
                                            <h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">دسته بندی محصولات</h6>
                                            <?php foreach ($categories as $item):  ?>
                                                <a class="dropdown-item" href="#"><?php echo $item['title']; ?></a>
                                             <?php endforeach; ?>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">همه دسته بندی ها</a>
                                        </div>


                                    </th>
                                    <th>
                                        <button class="btn btn-primary btn-block">موجود</button>
                                    </th>
                                    <th>
                                        <button class="btn btn-secondary btn-block">ناموجود</button>
                                    </th>
                                    <th>
                                        <button class="btn btn-info btn-block">ارزان ترین</button>
                                    </th>
                                    <th>
                                        <button class="btn btn-danger btn-block">گرانترین</button>
                                    </th>

                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->

            <div class="row row-sm">

                <?php foreach ($products as $product) { ?>
<!--                start card              -->
                <div class="col-md-6 col-lg-3 col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="pro-img-box">
                                <div class="d-flex product-sale">

                                    <?php
                                    if ($product['count'] > 0) {
                                        echo '<div class="badge bg-success"> موجود</div>';
                                    } else{
                                        echo '<div class="badge bg-pink"> ناموجود</div>';
                                    }
                                    ?>
                                    <i class="mdi mdi-heart-outline ml-auto wishlist"></i>
                                </div>
                                <img class="w-100" src="<?php echo $product['image']; ?>" alt="تصویر محصول">
                                <a href="#" class="adtocart"> <i class="las la-eye"></i>
                                </a>
                            </div>
                            <div class="text-center pt-3">
                                <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase"><?php echo $product['title'] ; ?></h3>
                                <h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-danger"> <?php echo $product['price'] ; ?> </h4>
                                <h5 class="h6 mb-0 mt-2 text-center text-dark"> <?php
                                    foreach ($categories as $category) {
                                            if ($category['id'] == $product['category_id'])
                                            {
                                                echo $category['title'];
                                            }
                                        }
                                    ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
<!--                end card                 -->
                <?php } ?>
<!--                start pagination-->
                <ul class="pagination product-pagination mr-auto float-left">
                    <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1">قبلی</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item page-next">
                        <a class="page-link" href="#">بعدی</a>
                    </li>
                </ul>
<!--                end pagination-->
            </div>
        </div>

    </div>
    <!-- row closed -->

<?php include_once 'app/views/admin/layouts/footer.php';  ?>