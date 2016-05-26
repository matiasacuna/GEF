<?php 
	include 'connection.php';
	
	$query = "SELECT * FROM chatindex ORDER BY idci DESC";
	$run = $db->query($query);
	$i=0;
			while($row = $run->fetch_array()) :
			if($i<=5){	
			?>
			
			<div id="chat_data">
				<span style="color:blue;"><?php echo $row['name']; ?></span> :
				<span style="color:black;"><?php echo $row['msg']; ?></span>
				<span style="float:right;"><?php echo formatDate($row['date']); ?></span>
			</div>
			<?php 
			$i++;
			}
			endwhile;?>