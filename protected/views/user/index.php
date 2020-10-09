<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

?>



<!--- Script -->
<script>

    $(document).ready(function () {

        $("#User-form").ajaxForm({
            beforeSend: function () {

                return $("#User-form").validate({
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
                $("#User-form").resetForm();
                search();
                $("#User-addmodel").modal('hide');

            }
        });

        $('#User-addmodel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            if (button.attr("id") === "User-add") {
                $("#myModalLabel").html("Add a New User");
                $("#User-form").resetForm();
                $("#User-form").attr("action", "<?php echo Yii::app()->createUrl('User/create') ?>/");
       
            }else{
                $("#myModalLabel").html("Update User");
            }
        });

    });




    $(document).on("click", "#btn-submit", function () {
        $("#User-form").submit();
    });


    $(document).on("click", ".User-update", function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");

        //Handle JSON DATA to Update FORM
        $.getJSON("<?php echo Yii::app()->createUrl('User/jsondata') ?>/" + id).done(function (data) {
            $.each(data, function (i, item) {
                
              
                if($("#User-form #" + i).is("[type='checkbox']")){
                    $("#User-form #" + i).prop('checked', item);
                }else if($("#User-form #" + i).is("[type='radio']")){
                    $("#User-form #" + i).prop('checked', item);
                }else{
                    $("#User-form #" + i).val(item);
                }
                
                
            });
            $("#User-form").attr("action", "<?php echo Yii::app()->createUrl('User/update') ?>/" + id);
        });

        $("#User-addmodel").modal('show');
    });

    $(document).on("click", ".User-delete", function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var confirmdata = confirm("Are you sure, you want to delete this record ?");
        if (confirmdata == true) {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('User/delete') ?>/" + id,
                type: "POST",
                success: showResponse,
                error: showResponse
            }).done(function (data) {
                search();
            });
        }
    });

    $(document).on("click", "#User-searchbtn", function () {
        search();
    });

    $(document).on("keyup", "#User-search", function () {
        search();
    });

    $(document).on("change", "#User-pages", function () {
        search();
    });

    function search() {
        $.fn.yiiListView.update('User-list', {
            data: {
                val: $("#User-search").val(),
                pages: $("#User-pages").val()
            }
        });
        $('[data-toggle="tooltip"]').tooltip();
    }


</script>
<!-- //END SCRIPT -->

<div id="header-sec">
    <div class="row">
        <div class="col-sm-1">
            <h1>Users</h1>
        </div>
    </div>
</div>


<!-- Submit Form BY model -->
<div class="modal fade" id="User-addmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add a New Users</h4>
            </div>
            <div class="modal-body">

                <div class="cus-form">
                    <form class="form-horizontal" action="<?php echo Yii::app()->createUrl('User/create') ?>" method="post" id="User-form">

                        <div class="form-group">
                            <label for="code" class="col-sm-2 control-label">Code</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="code" name="code" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-sm-2 control-label">Types</label>
                            <div class="col-sm-4">
                                <select id="select" name="select" class="form-control">
                                    <option>Select the Value</option>
                                </select>
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
            <button id="User-add" data-toggle="modal" data-target="#User-addmodel" class="btn btn-default btn-block" id="mainsearch"><span class="glyphicon glyphicon-plus"></span> Add</span></button>

        </div>
        <div class="col-sm-3">
            <input  id="User-search" type="text" name="search" id="search" class="form-control" placeholder="Search By code/name etc."/>
        </div>
        <div class="col-sm-1">
            <button id="User-searchbtn" class="btn btn-default" >Search <span class="glyphicon glyphicon-search"></span></button>
        </div>
        <div class="col-sm-1 col-sm-push-6">
            <select id="User-pages" name="pages" class="form-control">
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
    'id' => 'User-list',
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
