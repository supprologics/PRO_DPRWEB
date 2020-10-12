<?php
/* @var $this PostController */
/* @var $data Post */
?>


<div class="row ">

    <div class='col-sm-11 '>
     <!-- Grid row -->
     <div class="row">
            
        <!-- Grid column -->
        <div class="col-lg-5 mb-4">
        <!-- Featured image -->
        <div class="view overlay z-depth-1">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/post/<?php echo $data['image']; ?>" class="img-fluid"
            alt="First sample image" style="height:250px; width:100%">
            <a>
            <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6 ml-xl-4 mb-4">
        <!-- Grid row -->
        <div class="row">


            <!-- Grid column -->
            <div class="col-xl-5 col-md-6 text-sm-center text-md-left">
            <p class="font-small grey-text">
                <em><?php echo $data['created']; ?></em>
            </p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <h4 class="mb-3 dark-grey-text mt-0">
            <strong>
            <a><?php echo $data['title']; ?></a>
            </strong>
        </h4>
        <p class="dark-grey-text"><?php echo  substr($data['content'],0,400)."...."; ?>
        </p>

        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="mb-5">
    


    </div>

    
    <div class='col-sm-1 cells btn-cog text-right'>
        <a class="Post-update" href="#" data-id="<?php echo $data['id']; ?>" model="Post" controler="PostController" data-toggle="tooltip" data-placement="top" title="Update"><span class="oi oi-cog"></span></a>
        <a class="Post-delete" href="#" data-id="<?php echo $data['id']; ?>" model="Post" controler="PostController" data-toggle="tooltip" data-placement="top" title="Delete"><span class="oi oi-x"></span></a>
    </div>

</div>
