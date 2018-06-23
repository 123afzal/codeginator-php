<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['title']; ?></h3>
    <div class="bg">
        <?php echo $news_item['text']; ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View News</a></p>
    <h3>
        <a href="<?php echo site_url('news/edit/' .$news_item['slug']); ?>">Edit News</a>
    </h3>
    <h3>
        <a href="<?php echo site_url('news/delete/'.$news_item['slug']); ?>">Delete News</a>
    </h3>

<?php endforeach; ?>