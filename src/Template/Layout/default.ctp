<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('theme.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('plugins/font-awesome-4.3.0/css/font-awesome.min.css') ?>

    <?= $this->Html->script('jquery-1.11.3.js') ?>
    <?= $this->Html->script('script.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <?= $this->element('header'); ?>
    <?= $this->element('sub-header'); ?>

    <section id="content">
        <?= $this->fetch('content') ?>
    </section>

    <?= $this->element('footer'); ?>

</body>
</html>
