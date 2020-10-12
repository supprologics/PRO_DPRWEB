
        <div id="profile" style="background: url('<?php echo Yii::app()->request->baseUrl; ?>/images/mi.jpg') no-repeat left bottom; background-size: cover; height: 220px;"></div>
        <div style="padding: 15px 0 0;">
            <h1 style="font-weight: bold; text-transform: uppercase;">Market intelligence News Feed </h1>
            <p>
            Market intelligence is the information relevant to a company's market - trends, competitor and customer (existing, lost and targeted) monitoring, gathered and analyzed specifically for the purpose of accurate and confident decision-making in determining strategy in areas such as market opportunity, market penetration strategy, and market development.
            </p>

            
            
        </div>

<div class="row mt-3 pt-1">

<!-- Main listing -->
<div class="col-lg-12 col-12 ">

  <!-- Section: Blog v.3 -->
  <section class="pb-3 text-center text-lg-left">

            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                'enablePagination' => true,
                'summaryText' => '{page}/{pages} pages',
                'id' => 'Customers-list',
                'emptyTagName' => 'p',
                'emptyText' => '<span class="glyphicon glyphicon-file"></span> No Records  ',
                'itemsTagName' => 'div',
                'itemsCssClass' => 'ss',
                'pagerCssClass' => 'pagination-div',
                'pager' => array(
                    "header" => "",
                    "htmlOptions" => array(
                        "class" => "pagination pagination-sm"
                    ),
                    'selectedPageCssClass' => 'active',
                    'nextPageLabel' => 'Next',
                    'lastPageLabel' => 'Last',
                    'prevPageLabel' => 'Previous',
                    'firstPageLabel' => 'First',
                    'maxButtonCount' => 10
                ),
            ));
            ?>
            </section>
    </div>
</div>
