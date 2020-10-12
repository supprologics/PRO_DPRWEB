


<?php /*$this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'view',
            'enablePagination' => true,
            'summaryText' => '{page}/{pages} pages',
            'id' => 'Post-list',
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
            )); ?>
            
<?php
/* @var $this CustomersController */
/* @var $data Customers */


?>

<div id="profile" style="background: url('<?php echo Yii::app()->request->baseUrl; ?>/images/post/<?php echo $model->image; ?>') no-repeat left bottom; background-size: cover; height: 220px;"></div>
  
<div style="padding: 15px 0 0;">
            <h1 style="font-weight: bold; text-transform: uppercase;"><?php echo $model->title; ?></h1>
            <p>
            <?php echo $model->content; ?>
            </p>

            
            
        </div>
