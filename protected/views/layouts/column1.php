<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
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


</div><!-- content -->
<?php $this->endContent(); ?>