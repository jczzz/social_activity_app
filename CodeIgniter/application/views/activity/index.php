<head><?php echo $map['js']; ?></head>

<?php
      if($success != null)
      {
         echo "&nbsp","&nbsp",$success,"<br>","<br>";
      }
 ?>
 <?php foreach ($result as $activity_item): ?>
   <a href="<?php echo site_url("activity/".$activity_item['id']);?>"><?php echo $activity_item['name']; ?></a><?php echo "&nbsp","&nbsp"; ?> <a href="<?php echo site_url('activity/'.$activity_item['id'].'/delete');?>">Remove</a><br /><br />

 <?php endforeach; ?>
 <p><a href="http://localhost:9000/index.php/activity/select">Add a new activity</a></p>

<br><br><br>
 <?php echo $map['html']; ?>
