

<br /><br />
<img src="/static/<?php echo $result['picture'];?>" ><br />
Email:<?php echo "&nbsp",$result['email'];?> <br /><br /><br /><br />
Phone number:<?php echo "&nbsp",$result['phonenum']; ?><br /><br /><br /><br />
Introduction:<?php echo "&nbsp",$result['notes']; ?><br /><br /><br /><br />

<a href="<?php echo site_url("activity/index/SFU/$view_user_id");?>">Back to your activities</a>|
<?php
if($check == "true"){
?>
<a href="<?php echo site_url("user/friend/$user_id/$view_user_id")?>">Add to friend List?</a>
<?php
}
?>

<?php
if($check == "false"){
?>
<a href="<?php echo site_url("activity/friendactivity/$user_id/$view_user_id")?>">See your friend Activities?</a>    |
<a href="<?php echo site_url("user/deletefriend/$user_id/$view_user_id")?>">Delete from friend List?</a>
<?php
}
?>
