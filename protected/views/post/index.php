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
                        title: {
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
                search();
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
            },
            complete: function () {
                int();
            }
        });
    }


</script>
<!-- //END SCRIPT -->
<style>
    .btnblue{
        background-color: #1681c4; color:white
    }
</style>

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
            <div class="modal-header btnblue">
                <h4 class="modal-title" id="myModalLabel">Add a New Posts</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="cus-form">
                    <form class="form-horizontal" action="<?php echo Yii::app()->createUrl('Post/create') ?>" method="post" id="Post-form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label">Content</label>
                            <div class="col-sm-10">
                                <textarea name="content" id="content" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="image" name="image" placeholder="cover">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="online" class="col-sm-2 control-label">Visibilty</label>
                            <div class="col-sm-10">
                                <select id="online" name="online" class="form-control">
                                    <option value="1">Visible</option>
                                    <option value="0">Hidden</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btnblue btn btn-default" data-dismiss="modal">Close</button>
                <button id="btn-submit" type="button" class="btnblue btn btn-default">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Submit Form BY model -->

<div id="title-nav">
    <div class="row">
        <div class="col-sm-2">
            <button id="Post-add" data-toggle="modal" data-target="#Post-addmodel" class="btn btn-default btn-block btnblue" id="mainsearch"><span class="glyphicon glyphicon-plus"></span> Add</span></button>

        </div>
        <div class="col-sm-5">
            <input  id="Post-search" type="text" name="search" id="search" class="form-control" placeholder="Search By title"/>
        </div>
        <div class="col-sm-1">
            <button id="Post-searchbtn" class="btn btn-default btnblue" >Search <span class="glyphicon glyphicon-search"></span></button>
        </div>
        <div class="col-sm-2">
            <select id="Post-pages" name="pages" class="form-control">
                <option>10 Pages</option>
                <option>50 Pages</option>
                <option>100 Pages</option>
            </select>
        </div>
        <div class="col-sm-2  ">
            <a type="button"  class="btnblue  btn btn-default btn-block " href="<?php echo Yii::app()->createUrl("site/logout") ?>">Logout</a>
        </div>
    </div>
</div>







        <div class="row no-gutters">
            <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
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
