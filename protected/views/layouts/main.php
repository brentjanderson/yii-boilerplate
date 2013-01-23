<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/core'); ?>

<div class="navbar navbar-fixed-top noPrint">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/"><?PHP print Yii::app()->name; ?></a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <?php echo $content; ?>
</div>


<div class="container-fluid">
    <footer>
        <p><small>Site Copyright &copy; <?PHP print date('Y'); ?> <?PHP print Yii::app()->name; ?> - All Rights Reserved</small></p>
    </footer>
</div>

<?php $this->endContent(); ?>