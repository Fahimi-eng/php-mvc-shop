<?php
include_once 'app/views/admin/layouts/header.php'; ?>
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body h-100">
                <div class="row row-sm ">
                    <div class=" col-xl-5 col-lg-12 col-md-12">
                        <div class="preview-pic tab-content">
                            <?php foreach ($images as $key=>$item): ?>
                            <div style="max-width: 400px;" class="tab-pane <?php if ($key==0){echo 'active';} ?>  text-center mx-auto" id="pic-<?php echo ++$key; ?>"><img src="/<?php echo $item['image']; ?>" alt="image"></div>
                            <?php endforeach; ?>
                        </div>
                        <ul class="preview-thumbnail text-center mx-auto nav nav-tabs">
                            <?php foreach ($images as $key=>$item): ?>
                                <li <?php if ($key==0){echo 'class="active"';} ?>>
                                    <a data-bs-target="#pic-<?php echo ++$key; ?>" data-bs-toggle="tab" class=""><img src="/<?php echo $item['image'];?>" alt="image"></a>
                                </li>
                          <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                        <h4 class="product-title mb-1"><?php echo $product['name']; ?></h4>
                        <p class="text-muted tx-13 mb-1">دسته بندی :<?php echo $product['title']?></p>
<!--                        <div class="rating mb-1">-->
<!--                            <div class="stars">-->
<!--                                <span class="fa fa-star checked"></span>-->
<!--                                <span class="fa fa-star checked"></span>-->
<!--                                <span class="fa fa-star checked"></span>-->
<!--                                <span class="fa fa-star text-muted"></span>-->
<!--                                <span class="fa fa-star text-muted"></span>-->
<!--                            </div>-->
<!--                            <span class="review-no">41 بررسی</span>-->
<!--                        </div>-->
                        <h6 class="price mt-3">قیمت : <span class="h3 mx-2"><?php echo $product['price']?></span>تومان </h6>
                        <p class="product-description"><?php echo $product['description'];?></p>
<!--                        <p class="vote"><strong>91٪</strong> خریداران از این محصول لذت برده اند! <strong>(87 رأی)</strong></p>-->
<!--                        <div class="sizes d-flex">اندازه ها:-->
<!--                            <span class="size d-flex" data-toggle="tooltip" title="کم اهمیت"><label class="rdiobox mb-0"><input checked="" name="rdio" type="radio"> <span class="font-weight-bold">کوچک</span></label></span>-->
<!--                            <span class="size d-flex" data-toggle="tooltip" title="متوسط"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>متوسط</span></label></span>-->
<!--                            <span class="size d-flex" data-toggle="tooltip" title="بزرگ"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>بزرگ</span></label></span>-->
<!--                            <span class="size d-flex" data-toggle="tooltip" title="فوق العاده بزرگ"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>خیلی بزرگ</span></label></span>-->
<!--                        </div>-->
                        <div class="colors d-flex me-3 mt-2">
                            <span class="mt-2">رنگ ها:</span>
                            <div class="row gutters-xs ms-4">
                                <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="azure" class="colorinput-input" >
                                        <span class="colorinput-color bg-danger"></span>
                                    </label>
                                </div>
                                <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="indigo" class="colorinput-input">
                                        <span class="colorinput-color bg-secondary"></span>
                                    </label>
                                </div>
                                <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="purple" class="colorinput-input">
                                        <span class="colorinput-color bg-dark"></span>
                                    </label>
                                </div>
                                <div class="w-auto  ps-0 pe-0" id="m-l-c-2">
                                    <label class="colorinput">
                                        <input name="color" type="radio" value="pink" class="colorinput-input">
                                        <span class="colorinput-color bg-pink"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex  mt-2">
                            <div class="mt-2 product-title">موجودی :</div>
                            <div class="d-flex ml-2">
                                <ul class=" mb-0 qunatity-list">
                                    <li>
                                        <div class="form-group">
                                            <select name="quantity" id="select-countries17" class="form-control nice-select wd-100" >
                                                <option disabled value="1" selected=""><?php echo $product['count']; ?></option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="action">
                            <a href="/panel/editproduct?id=<?php echo $product_id;?>" class="add-to-cart btn btn-success" type="button">ویرایش</a>
                            <a href="/panel/deleteproduct?id=<?php echo $product_id;?>" class="add-to-cart btn btn-danger" type="button">حذف</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'app/views/admin/layouts/footer.php'; ?>
