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
    <!-- start header -->
    <header>
        <div class="header-icon left text-left">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                <li><a href="#"><i class="fa fa-pinterest"></i> </a> </li>
            </ul>
        </div>
        <div class="logo">Header</div>
        <div class="header-icon right text-right">
            <ul>
                <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                <li><a href="#"><i class="fa fa-cog"></i> </a> </li>
            </ul>
        </div>
    </header>
    <div class="sub-header">
        <?php $point = $this->request->session()->read('point');
        $strPoint = sprintf($point,0x03);
        $strLenPoint = strlen($point);
        for($i = 10; $i > 0; $i--) {
            if($i > $strLenPoint) {
                echo 0;
            } else {
                if(isset($strPoint[$strLenPoint-$i])) {
                    echo $strPoint[$strLenPoint-$i];
                } else {
                    echo 0;
                }
            }
        }
        ?>
    </div>
    <!-- end header -->

    <!-- start content -->
    <section id="content">
        <?= $this->fetch('content') ?>
    </section>
    <!-- end content -->

    <!--start footer -->
    <footer>
        <ul>
            <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
            <li><a href="#"><i class="fa fa-star"></i></a></li>
            <li><a href="#" class="active"><i class="fa fa-list"></i></a></li>
            <li><a href="#"><i class="fa fa-cog"></i></a></li>
        </ul>
    </footer>
    <!-- end footer -->
</body>
</html>
