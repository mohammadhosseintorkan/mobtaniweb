<section class = 'col'>
    <article class = 'card h-100'>
        <section class = 'card-body'>
            <h4 class = 'card-title'>
                <a href = 'userDetails.php?id=<?php echo $row['id']; ?>' class = 'card-link'>
                    نام کاربر: <?php echo $row['name']; ?>
                </a>
            </h4>
            <section class = 'card-text'>
                <p>
                    <span class = 'fw-bold'>نام کاربری:</span>
                    <?php echo $row['username']; ?> <br>
                    <span class = 'fw-bold'>پست الکترونیکی:</span>
                    <?php echo $row['email']; ?> <br>
                    <span class = 'fw-bold'>شماره موبایل:</span>
                    <?php echo $row['mobile']; ?> <br>
                    <span class = 'fw-bold'>تاریخ تولد:</span>
                    <?php echo $row['birthday']; ?>
                </p>
            </section>
        </section>
    </article>
</section>