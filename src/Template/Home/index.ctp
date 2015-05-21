<ul class="list-view">
    <?php foreach($listItems as $oneItem): ?>
    <li class="item">
        <div class="image">
            <img src="<?= h($oneItem['image']); ?>" />
        </div>
        <div class="content">
            <p class="title"><?= h($oneItem['title']); ?></p>
            <p class="description"><?= h($oneItem['description']); ?></p>
        </div>
        <div class="action">
            <a href="#"><i class="fa fa-angle-right"></i> </a>
        </div>
    </li>
    <?php endforeach;  ?>
</ul>
<div class="loading"><i class="fa fa-spinner"></i> </div>