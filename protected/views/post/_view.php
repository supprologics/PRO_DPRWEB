<?php
/* @var $this PostController */
/* @var $data Post */
?>


<div class="row datarow">

    <div class='col-sm-2 cells'>
	<?php echo $data['title']; ?>
</div>
<div class='col-sm-2 cells'>
	<?php echo $data['content']; ?>
</div>
<div class='col-sm-2 cells'>
	<?php echo $data['created_time']; ?>
</div>
<div class='col-sm-2 cells'>
	<?php echo $data['author_id']; ?>
</div>
    
    <div class='col-sm-1 cells btn-cog text-right'>
        <a class="Post-update" href="#" data-id="<?php echo $data['id']; ?>" model="Post" controler="PostController" data-toggle="tooltip" data-placement="top" title="Update"><span class="glyphicon glyphicon-cog"></span></a>
        <a class="Post-delete" href="#" data-id="<?php echo $data['id']; ?>" model="Post" controler="PostController" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-remove"></span></a>
    </div>

</div>
