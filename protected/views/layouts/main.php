<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="language" content="en">

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/open-iconic-bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/template.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pace.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>  

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.bundle.min.js" ></script>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->clientScript->getCoreScriptUrl() . '/jui/css/base/jquery-ui.css'); ?>

        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.form.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.validate.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/alertify.min.js'); ?>


        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-datepicker.css">
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/bootstrap-datepicker.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/pacenew.js'); ?>

        <script type="text/javascript">

            $ (function () {
               $ (".datepicker").datepicker ({
                  format: "yyyy-mm-dd",
                  autoclose: true,
                  todayHighlight: true
               });
            });

            function showResponse (responseText, statusText, xhr, $form) {
               $ ("#err").html ("");

               if (responseText.status != null) {
                  alertify.success (responseText.responseText);
                  $ (".modal form").resetForm ();
                  $ (".modal").modal ('hide');

               } else {

                  if (typeof (responseText) != 'object') {
                     var responseText = JSON.parse (responseText);
                  }

                  if (responseText.sts == '1' && responseText.hide == '0' || !responseText.hide) {
                     $ (".modal form").resetForm ();
                     $ (".modal").modal ('hide');
                  }
                  alertify.success (responseText.msg);
               }
            }


        </script>


    </head>

    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=1628133027461737" nonce="SDtx6t8t"></script>
        <?php echo $content; ?>
    </body>
</html>
