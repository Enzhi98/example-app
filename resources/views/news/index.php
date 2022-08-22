<?php foreach($newsList as $key => $news):?>
    <div style="border: 1px solid green">
        <h2><a href="/news/<?=$key?>"><?=$news['title'] ?></a></h2>
        <p><?=$news['author'] ?>- <?=$news['created_at']->format('d-m-Y H:i')?></p>
        <p><?=$news['description'] ?></p>
        <p><?=$news['category']?></p>
    </div><br><hr>
<?php endforeach; ?>
