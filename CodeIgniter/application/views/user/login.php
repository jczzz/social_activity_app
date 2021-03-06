 <!-- 

  1.used global parameter: validation_errors()

  2.parameter given to this view: none

  3.form values collected for 'user/verify':
    post('email')     //type:input
    post('password')  //type:password

  4.external link: "No account? Sign up"  ->  'user/create'

  -->



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Please log in</title>
    <!--<link rel="stylesheet" type="text/css" href="/static/mystyle.css">-->
  </head>
  <body>
            <div class="row vertical-offset-100">
                <div class="text-center"><h1 style="line-height:800%">Welcome To Activity Sniper</h1></div>
              <div class="col-sm-6 col-sm-offset-3">
            		<div class="panel panel-default">
        			  	<div class="panel-heading">
        			    	<h3 class="panel-title">Please Log In</h3>
        			 	</div>
        			  	<div class="panel-body">
                    <div class="list-group-item-danger">
                      <?php echo validation_errors(); ?>
                      <?php echo form_open('user/verify'); ?>
                    </div>
        			    	<form accept-charset="UTF-8" role="form">
                        <fieldset>
                          <div class="form-group">
  							<label for="name" class="cols-sm-2 control-label">Your Email</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
  									<input type="input" class="form-control" name="email"  placeholder="Enter your Email"/>
  								</div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="email" class="cols-sm-2 control-label">Your Password</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
  									<input type="password" size="20" id="passowrd" class="form-control" name="password"  placeholder="Enter your Password"/>
  								</div>
  							</div>
  						</div>
        			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                      <div class="login-help">
        					           <p><a href="http://localhost:9000/index.php/user/create">No account? Sign up</a></p>
        				      </div>
        			    	    </fieldset>
        			      	</form>
        			    </div>
        			</div>
            </div>
        	</div>
  </body>
</html>
