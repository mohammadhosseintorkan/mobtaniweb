<section class = 'col'>
    <article class = 'card h-100'>
        <section class = 'card-body'>
            <h4 class = 'card-title'>
                <a href = 'messageDetails.php?id=<?php echo $row['id']; ?>' class = 'card-link'>
                    عنوان پیام: <?php echo $row['title']; ?>
                </a>
            </h4>
            <section class = 'card-text'>
                <p>
                    <span class = 'fw-bold'>متن پیام:</span>
                    <?php echo $row['body']; ?>
                </p>
            </section>
        </section>
    </article>
</section>