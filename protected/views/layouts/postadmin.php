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



            $(function () {

                $(".datepicker").datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true,
                    todayHighlight: true
                });

            });


            function loadSubCategory(category_id) {

                $.ajax({
                    url: "<?php echo Yii::app()->createUrl('posts/loadsubcategory') ?>/" + category_id,
                    type: "POST",
                    success: function (data) {
                        $("#sub_category_id").html(data);
                    }
                });
            }

            $(function () {                
                loadDatePicker();                
            });           

            function loadDatePicker(){
                $(".datepicker").datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true,
                    todayHighlight: true
                });                
                var dateToday = new Date(); 
                $(".datepicker_min").datepicker({
                    format: "yyyy-mm-dd",
                    startDate: '<?php echo date("Y-m-d"); ?>',
                    autoclose: true,
                    todayHighlight: true
                });                
            }   

            function showError(txt) {
                alertify.success(txt);
            }

            function showResponse(responseText, statusText, xhr, $form) {
                $("#err").html("");

                if (responseText.status != null) {
                    alertify.success(responseText.responseText);

                    if (typeof value !== "undefined") {
                        $(".modal form").resetForm();
                        $(".modal").modal('hide');
                    }

                } else {
                    if (typeof (responseText) != 'object') {
                        var responseText = JSON.parse(responseText);
                    }
                    if (responseText.sts == '1' && responseText.hide == '0' && typeof value !== "undefined" || !responseText.hide) {
                        $(".modal form").resetForm();
                        $(".modal").modal('hide');
                    }
                    alertify.success(responseText.msg);
                }
            }



        </script>


    </head>

    <body id="postbg" style="    background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/bg.jpg'); background-repeat: no-repeat; background-attachment: fixed;  background-size: cover;">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=1628133027461737" nonce="SDtx6t8t"></script>
                    
            <div>

                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-1 col-sm-1 text-center center">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logosc.png" style="width: 50px"  />
                                    </div>
                                    <div class="col-md-11 col-sm-11">
                                        <h1 class="main_text">DPR GLOBAL BUSINESS NETWORKS (PVT) LTD</h1>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </header> 

                <section class="">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <nav class="navbar navbar-expand-lg navbar-light nav_bar ">
                                    <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>">Home</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo Yii::app()->createUrl("we"); ?>">About Us <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo Yii::app()->createUrl("trading"); ?>">Trading</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo Yii::app()->createUrl("investment"); ?>">Investment</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo Yii::app()->createUrl("realestate"); ?>">Real Estate</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo Yii::app()->createUrl("contact"); ?>">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo Yii::app()->createUrl("merketintelligance"); ?>">Market Intelligence</a>
                                            </li>

                                        </ul>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="container">
                        <?php echo $content; ?>
                    </div>
                </section>

                <footer>

                    <div class="container">
                        <div class="footer_box">
                            <div class="row">
                                <div class="col">
                                    <h2 class="footer_header_text">We are the ultimate platform to fulfill the aspirations of Trading, Investment & real Estate</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">

                        <div class="row">
                            <div class="col-sm-2">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" class="img-fluid" />
                            </div>
                            <div class="col-sm-10">
                                <ul class="footer_menu">
                                    <li><a href="<?php echo Yii::app()->createUrl("site"); ?>">HOME</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("we"); ?>">About Us</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("trading"); ?>">TRADING</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("investment"); ?>">INVESTMENT</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("realestate"); ?>">REAL ESTATE</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("contact"); ?>">CONTACT</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl("merketintelligance"); ?>">Market Intelligence</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div class="footer_box_line">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="copyright">www.dpr.lk, All Rights Reserved, Developed by <a href="http://www.prologics.lk">Prologics IT</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>


            </div>
    </body>
</html>
