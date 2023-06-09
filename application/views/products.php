<?php 
    foreach($products as $product){
		?>
            <div class="col">
                <a href="<?php echo getHref("product-details.php", ['id' => $product["product_id"]]); ?>">
                    <div class="card shadow-sm">
                        <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                        <div class="product-img-container">
                            <img src="<?php echo loadImage($product['product_image']); ?>" />
                        </div>
                        <div class="card-body">
                        <p class="card-text"><?php echo $product["product_title"]; ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-body-secondary"><?php echo $product["product_price"]; ?></small>
                        </div>
                        </div>
                    </div>
                </a>
            </div>
		<?php
    } 
?>