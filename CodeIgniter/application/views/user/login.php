<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Please log in</title>
  </head>
  <body>
    <h1>Please log in</h1>

    <?php echo validation_errors(); ?>
    <?php echo form_open('user/verify'); ?>
        <lable for="Email">Email: </lable>
        <input type="input" name="email" /><br />
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="passowrd" name="password"/>
      <br/>
      <input type="submit" value="Login"/>
    </form>

    <p><a href="http://localhost:9000/index.php/user/create">Register</a></p>
  </body>
</html>
