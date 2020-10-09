<script>

    $ (document).ready (function () {

       $ ("#Customers-form").ajaxForm ({          
          beforeSubmit: function () {

             return $ ("#Customers-form").validate ({
                rules: {
                   name: {
                      required: true,
                   }
                },
                messages: {
                   name: {
                      max: "Customize Your Error"
                   }
                },
             }).form ();

          },
          beforeSend: function () {
             $ ("#btn-submit").html ("Loading....");
             $ ("#btn-submit").attr ("disabled", true);
          },
          success: showResponse,
          error: showResponse,
          complete: function () {
             $ ("#btn-submit").attr ("disabled", false);
             $ ("#btn-submit").html ("Submit");
          }
       });

    });

</script>

<div class="row">
    <div class="col">


        <div id="profile" style="background: url('<?php echo Yii::app()->request->baseUrl; ?>/images/trading.jpg') no-repeat left bottom; background-size: cover; height: 220px;"></div>


        <div style="padding: 15px;">

            <h1 style="font-weight: bold; text-transform: uppercase;">Get more ROI, we know the art of trading </h1>

            <p>
                Sri Lanka is strategically located next to the fast growing Indian sub-continent with close proximity to Southeast Asia and the Middle East. Which makes Sri Lanka a perfect trading hub in the world. This makes buying and selling in the country more flexible. Essential goods have becoming blooming industries in the world market.  
            </p>

            <p>
                With the current pandemic the Sri Lankan government has reduce the imports and encouraged the export market. Its an ideal opportunity if you are Importer from Sri Lanka as well ideal for if you are an Exporter from Sri Lanka. 
            </p>

            <p>
                This platform carries an in-depth idea of opportunities, how and what should you do when importing/exporting goods to Sri Lanka. This platform includes information on trade partners to market to any part of the world. If you are an importer/exporter this platform provides you with the connectivity and the link to a new partnership or an expansion. While aspiring importers/ exporters this platform shows how to systematically work towards your dream. 
            </p>

            <p>
                If you are looking for opportunities in imports/exports this is the right platform for you. 
                We are at your service equipped with professional team. 

            </p>
        </div>

    </div>


</div>
<div class="row">
    <div class="col">

        <div style="padding: 15px;">
            <form class="form-horizontal" action="<?php echo Yii::app()->createUrl("Emailnitifications/Contact"); ?>" method="post" id="Customers-form">
                <div class="form-row mb-2">
                    <label for="code" class="col-sm-4 control-label">Looking For</label>
                    <div class="col-sm-4">
                        <select id="title" name="title" class="custom-select">
                            <option>IMPORT</option>
                            <option>EXPORT</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mb-2">
                    <label for="code" class="col-sm-4 control-label">Your Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control required" id="name" name="name"  placeholder="Name">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <label for="code" class="col-sm-4 control-label">Your Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control required" id="email" name="email"  placeholder="Your Email">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <label for="code" class="col-sm-4 control-label">Contact Number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="contact" name="contact"  placeholder="Contact Number">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <label for="fax" class="col-sm-4 control-label">Inquiry</label>
                    <div class="col-sm-8">
                        <textarea class='form-control' id='remarks' name='remarks'></textarea>
                    </div>
                </div>

                <div class="form-row mb-2">
                    <label for="code" class="col-sm-4 control-label"></label>
                    <div class="col-sm-6">
                        <button class="btn btn-info" id="btn-submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>