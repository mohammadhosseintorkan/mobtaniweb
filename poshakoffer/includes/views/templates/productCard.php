<section class = 'col'>
    <article class = 'card h-100'>
        <img src = '<?php if (isset($imgSrc))echo $imgSrc ; else echo assets('images/null.jpg') ; ?>' class = 'card-img-top'>
        <section class = 'card-body'>
            <h4 class = 'card-title'>
                <a href = 'productDetails.php?id=<?php echo $id ; ?>' class = 'card-link'>
                    نام محصول: <?php echo $name; ?>
                </a>
            </h4>
            <section class = 'card-text'>
                <p>
                    <span class = 'fw-bold'>قیمت:</span>
                    <?php echo number_format( $price ); ?>
					تومان<br>
                    <span class = 'fw-bold'>توضیحات:</span>
                    <?php echo $description; ?>
                </p>
            </section>
        </section>
    </article>
</section>