


<!-- Default form login -->
<div class="row justify-content-md-center" style="margin-top:5%">
	<div class="col-md-4 justify-content-md-center text-center">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logosc.png" class="img-fluid "
            alt="login image">
		<form class="text-center border border-light p-5" action="<?php echo Yii::app()->createUrl("site/login") ?>" method="post">

			<p class="h4 mb-4">DPR GLOBAL Login</p>

			<!-- Email -->
			<input type="text" required="true" id="name" name="LoginForm[username]" class="form-control mb-4" placeholder="Username">

			<!-- Password -->
			<input type="password" id="password" name="LoginForm[password]" required="true" class="form-control mb-4" placeholder="Password">

			<!-- Sign in button -->
			<button class="btn btn-info btn-block" type="submit">Sign in</button>



		</form>
	</div>
</div>
<div class="row">
        <div class="col text-center ">
            <small>Developed By Prologics IT Solutions</small>
        </div>
    </div>

<!-- Default form login -->