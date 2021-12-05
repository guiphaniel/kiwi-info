<h1>Blog</h1>
<div class="articles-wrapper">
    <?php
        $sql = 'select * from articles order by id desc limit 5';
        
        foreach ($pdo->query($sql) as $row): ?>
            <a href="blog.php?article=<?=$row["id"]?>" class="article-panel">
                <img src="./img/articles-illustrations/<?=$row["image"]?>" alt="<?=$row["titre1"]?>">
                <?php if(isset($row["titre1"]))?>
                    <h2><?= $row['titre1']?></h2>
                <p><?= $row['description']?></p>
            </a>
    <?php endforeach ?>
</div>