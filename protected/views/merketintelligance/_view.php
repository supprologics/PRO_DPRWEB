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

        <!-- Deep-orange -->
        <a href="merketintelligance/<?php echo $data['id'] ?>"  type="button" class="btn btn-info btn-rounded btn-sm">Read more</a>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="mb-5">