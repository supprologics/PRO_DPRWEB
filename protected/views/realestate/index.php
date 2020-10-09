<div class="row">
    <div class="col">
        <div id="profile" style="background: url('<?php echo Yii::app()->request->baseUrl; ?>/images/rs.jpg') no-repeat left bottom; background-size: cover; height: 220px;"></div>

    </div>

</div>
<div class="row">
    <div class="col-sm-7">
        <div style="padding: 15px;">

            <h1 style="font-weight: bold; text-transform: uppercase;">We will find your gateway <br/>to fulfill real estate dream</h1>

            <p>
                Real Estate can offer a lucrative and reliable way to generate substantial returns both over the short term and the long term.  Sri Lanka’s property market, still at its early stage of development, is expected to remain strong in coming years. On becoming named as the best country to visit in 2019 by Lonely Planet, Sri Lanka’s booming tourism sector is fuelling property demand. 
            </p>

            <p>
                This real estate platform offers investors the ability to invest in individual assets or in a diversified portfolio of real estate. You can specifically focus your investment to a city, region or invest across the country. Depending on which way you choose to invest in real estate, you’ll need varying amounts of time, beginning capital, knowledge, and patience. 
                We provide you professional real estate team with a track record of strong performance who acquires and manages assets building nationally diversified portfolios of private real estate on behalf of the investors. 

            </p>

            <p>
                You will be able to view a comprehensive list of Hotels, Holiday Resorts, Guest Houses, Commercial Buildings, Houses, Luxury Apartments and Lands that will meet your criteria. 


            </p>
        </div>
    </div>
    <div class="col-sm-5">
        <div style="padding: 15px;">
            <div class="fb-page" data-href="https://www.facebook.com/dprblobalbusinessnetworks/" data-tabs="timeline" data-width="500px" data-height="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dprblobalbusinessnetworks/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dprblobalbusinessnetworks/">DPR Global Business Networks - PVT LTD</a></blockquote></div>
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
                            <option>REAL ESTATE</option>
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