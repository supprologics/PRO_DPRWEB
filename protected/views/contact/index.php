
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

        <div id="profile" style="background: url('<?php echo Yii::app()->request->baseUrl; ?>/images/map.PNG') no-repeat left bottom; background-size: cover; height: 220px;"></div>

        <div style="padding: 15px;">
            <div class="row">
                <div class="col">
                    <h4 style="margin: 0px; padding-bottom: 8px;">Address</h4>
                    <address>
                        75, Cotta Road, Colombo 8, Sri Lanka.
                    </address>
                </div>

                <div class="col">
                    <form class="form-horizontal" action="<?php echo Yii::app()->createUrl("Emailnitifications/Contact"); ?>" method="post" id="Customers-form">
                        <div class="form-row mb-2">
                            <label for="code" class="col-sm-4 control-label">Looking For</label>
                            <div class="col-sm-4">
                                <select id="title" name="title" class="custom-select">
                                    <option>Investment</option>
                                    <option>Real Estate</option>
                                    <option>Trading</option>
                                    <option>Other</option>
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

    </div>
</div>