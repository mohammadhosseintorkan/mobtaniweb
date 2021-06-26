<section class = 'col'>
    <article class = 'card h-100'>
        <img src = '<?php echo $row['imgSrc']; ?>' class = 'card-img-top'>
        <section class = 'card-body'>
            <h4 class = 'card-title'>
                <a href = 'productDetails.php?id=<?php echo $row['id']; ?>' class = 'card-link'>
                    نام محصول: <?php echo $row['name']; ?>
                </a>
            </h4>
            <section class = 'card-text'>
                <p>
                    <span class = 'fw-bold'>قیمت:</span>
                    <?php echo number_format( $row['price'] ); ?>
					تومان<br>
                    <span class = 'fw-bold'>توضیحات:</span>
                    <?php echo $row['description']; ?>
                </p>
            </section>
        </section>
    </article>
</section>