<div class="row">
    <div class="col">
        
        
        <div id="profile" style="background: url('<?php echo Yii::app()->request->baseUrl; ?>/images/investing.jpg') no-repeat left bottom; background-size: cover; height: 220px;"></div>


        <div style="padding: 15px;">
            <h1 style="font-weight: bold; text-transform: uppercase;">Investing in Sri Lanka, in a single platform </h1>
            <p>
                The impact of Corona virus on the economy and the pace of our day-to-day lives provides us some leeway to reflect on the opportunities to reconsider our investments and break into untapped markets. In the context of the ever-expanding global village, Sri Lanka the little paradise Isle, is undergoing unprecedented development, thus providing many opportunities for investment. 
            </p>
            
            <p>
                sriLankaInvestment.com is a platform which provides the services for both Entrepreneurs and Investors together, with a common goal, shared vision and grow together by adding our expertise and experience. We will be the eyes and ears of your investment creating a risk free environment for both Entrepreneur and Investor. You will be able to find comprehensive information as an investor or as a person who wish to sell the existing investment.  This platform covers the most popular opportunities available in Sri Lanka, sharing a bigger picture of the investment and broader opportunities. 
            </p>
            
            <p>
                We provide you with investment and investors with the capital, knowledge and contacts for you to succeed. 
            </p>
            
            
        </div>

    </div>
</div>

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

        <div style="padding: 15px;">
            <form class="form-horizontal" action="<?php echo Yii::app()->createUrl("Emailnitifications/Contact"); ?>" method="post" id="Customers-form">
                <div class="form-row mb-2">
                    <label for="code" class="col-sm-4 control-label">Looking For</label>
                    <div class="col-sm-4">
                        <select id="title" name="title" class="custom-select">
                            <option>INVESTMENT</option>
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