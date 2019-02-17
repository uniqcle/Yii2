<?php 

foreach($list as $item):
	if($item['status'] > 0){
		echo '<h3>'.$item['title'].'</h3>'; 
		echo '<p>'.$item['content'].'</p>'; 
	}

endforeach; 