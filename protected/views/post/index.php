<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

?>



<!--- Script -->
<script>

    $(document).ready(function () {

        $("#Post-form").ajaxForm({
            beforeSend: function () {

                return $("#Post-form").validate({
                    rules: {
                        name: {
                            required: true,
                        }
                    },
                    messages: {
                        name: {
                            max: "Customize Your Error"
                        }
                    }
                }).form();

            },
            success: showResponse,
            error: showResponse,
            complete: function () {
                $("#Post-form").resetForm();
                search();
                $("#Post-addmodel").modal('hide');

            }
        });

        $('#Post-addmodel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            if (button.attr("id") === "Post-add") {
                $("#myModalLabel").html("Add a New Post");
                $("#Post-form").resetForm();
                $("#Post-form").attr("action", "<?php echo Yii::app()->createUrl('Post/create') ?>/");
       
            }else{
                $("#myModalLabel").html("Update Post");
            }
        });

    });




    $(document).on("click", "#btn-submit", function () {
        $("#Post-form").submit();
    });


    $(document).on("click", ".Post-update", function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");

        //Handle JSON DATA to Update FORM
        $.getJSON("<?php echo Yii::app()->createUrl('Post/jsondata') ?>/" + id).done(function (data) {
            $.each(data, function (i, item) {
                
              
                if($("#Post-form #" + i).is("[type='checkbox']")){
                    $("#Post-form #" + i).prop('checked', item);
                }else if($("#Post-form #" + i).is("[type='radio']")){
                    $("#Post-form #" + i).prop('checked', item);
                }else{
                    $("#Post-form #" + i).val(item);
                }
                
                
            });
            $("#Post-form").attr("action", "<?php echo Yii::app()->createUrl('Post/update') ?>/" + id);
        });

        $("#Post-addmodel").modal('show');
    });

    $(document).on("click", ".Post-delete", function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var confirmdata = confirm("Are you sure, you want to delete this record ?");
        if (confirmdata == true) {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('Post/delete') ?>/" + id,
                type: "POST",
                success: showResponse,
                error: showResponse
            }).done(function (data) {
                search();
            });
        }
    });

    $(document).on("click", "#Post-searchbtn", function () {
        search();
    });

    $(document).on("keyup", "#Post-search", function () {
        search();
    });

    $(document).on("change", "#Post-pages", function () {
        search();
    });

    function search() {
        $.fn.yiiListView.update('Post-list', {
            data: {
                val: $("#Post-search").val(),
                pages: $("#Post-pages").val()
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
    }


</script>
<!-- //END SCRIPT -->

<div id="header-sec">
    <div class="row">
        <div class="col-sm-1">
            <h1>Posts</h1>
        </div>
    </div>
</div>


<!-- Submit Form BY model -->
<div class="modal fade" id="Post-addmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add a New Posts</h4>
            </div>
            <div class="modal-body">

                <div class="cus-form">
                    <form class="form-horizontal" action="<?php echo Yii::app()->createUrl('Post/create') ?>" method="post" id="Post-form">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Post Title</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btn-submit" type="button" class="btn btn-default">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Submit Form BY model -->

<div id="title-nav">
    <div class="row">
        <div class="col-sm-1">
            <button id="Post-add" data-toggle="modal" data-target="#Post-addmodel" class="btn btn-default btn-block" id="mainsearch"><span class="glyphicon glyphicon-plus"></span> Add</span></button>

        </div>
        <div class="col-sm-3">
            <input  id="Post-search" type="text" name="search" id="search" class="form-control" placeholder="Search By code/name etc."/>
        </div>
        <div class="col-sm-1">
            <button id="Post-searchbtn" class="btn btn-default" >Search <span class="glyphicon glyphicon-search"></span></button>
        </div>
        <div class="col-sm-1 col-sm-push-6">
            <select id="Post-pages" name="pages" class="form-control">
                <option>10 Pages</option>
                <option>50 Pages</option>
                <option>100 Pages</option>
            </select>
        </div>
    </div>
</div>




<div class="table-box">

    <div class="row">
        <div class="col-sm-11 headerdiv">Your Column Name</div>
        <div class="col-sm-1 headerdiv">&nbsp;</div>
    </div>


    <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'enablePagination' => true,
    'summaryText' => '{page}/{pages} pages',
    'id' => 'Post-list',
    'emptyTagName' => 'p',
    'emptyText' => '<span class="glyphicon glyphicon-file"></span> No Records  ',
    'itemsTagName' => 'div',
    'itemsCssClass' => 'container-fluid',
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

</div>