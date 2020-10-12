<?php
/* @var $this UserController */
/* @var $data User */
?>


<div class="row datarow">

    <div class='col-sm-2 cells'>
	<?php echo $data['username']; ?>
</div>
<div class='col-sm-2 cells'>
	<?php echo $data['password']; ?>
</div>
    
    <div class='col-sm-1 cells btn-cog text-right'>
        <a class="User-update" href="#" data-id="<?php echo $data['id']; ?>" model="User" controler="UserController" data-toggle="tooltip" data-placement="top" title="Update"><span class="glyphicon glyphicon-cog"></span></a>
        <a class="User-delete" href="#" data-id="<?php echo $data['id']; ?>" model="User" controler="UserController" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-remove"></span></a>
    </div>

</div>
