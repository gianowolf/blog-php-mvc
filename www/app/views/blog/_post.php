<div class="post">
    <div class="img-div">
        <img src=<?= $post->image ?> alt="">
    </div>
    <div class="tit-div">
        <div class="title">
            <a href="show_post?post=<?= $post->id ?>"><h3><?= $post->title ?></h3></a>
        </div>
        <div class="subtitle">
            <?= $post->subtitle ?>
        </div>
        <div class="date">
    
        </div>
    </div>
</div>