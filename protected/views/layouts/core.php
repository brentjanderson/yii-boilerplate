<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <?php echo $content; ?>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>if (!window.jQuery) document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"><\/script>');</script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
        <script>if(!window.jQuery.bootstrapGrowl) document.write('<script src="<?PHP echo Yii::app()->request->baseUrl; ?>/js/jquery.bootstrap-growl.min.js"><\/script>');</script>
        <script>
<?PHP foreach (Yii::app()->user->getFlashes() as $key => $message): ?>
        $.bootstrapGrowl("<?PHP print $message; ?>", {
            ele: 'body', // which element to append to
            type: '<?PHP print $key; ?>', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 'auto', // (integer, or 'auto')
            delay: 4000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
<?PHP endforeach; ?>
        </script>
    </body>
</html>
