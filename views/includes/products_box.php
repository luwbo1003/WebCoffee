<?php
if (!empty($data['prod'])) :
    $i = 0;
    foreach ($data['prod'] as $prod) : extract($prod); ?>

        <div class="card text-center col-12 col-md-6 col-lg-4" style="border-radius: 17px; width: 18rem;">
            <form action="<?= URLROOT ?>/Cart/addProductToCart/<?= $pro_id ?>" method="POST">
                <input type="hidden" name="pro_quantity" value="1">

                <div class="image">
                    <a href="<?= URLROOT ?>/Home/detail/<?= $pro_id ?>">
                        <img src="<?= IMAGE ?>/<?= $data['image'][$i]['img_link'] ?>" class="img-fluid" alt="..." style="max-height: 229px;">
                    </a>
                    <div class="icons w-100">
                        <button type="submit" name="addToCart" class="btn btn-primary align-content-md-center shop-card">Add to cart</button>
                    </div>
                </div>
                <div class="card-body ">
                    <h6 class="card-title" style="font-size: 14px;"><?= $pro_name ?></h6>
                    <p class="price">$<?= number_format($pro_price, 2, '.', ',') ?></p>
                </div>
            </form>
        </div>
<?php $i++;
    endforeach;
endif; ?>