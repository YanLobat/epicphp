
<form action = "day3_1.php" method = "post">
	<label>Name</label><input type = "text" name = "name"><br/>
	<label>Date</label><input type = "text" name = "data"><br/>
	<textarea name = "text"></textarea><br/>
	<input type = "hidden" name = "MAX_FILE_SIZE" value = "4135488">
	<input type = "file" name = "logo">
	<input type = "submit">
</form>
<?php 
	if (isset($_COOKIE['count'])) {
		echo "ERROR";
	}
	else{
	$posts = array(array());
	$posts[0]['name'] = $_POST['name'];
	$posts[0]['data'] = $_POST['data'];
	$posts[0]['text'] = $_POST['text'];
	var_dump($posts);
	setcookie('count', '1', time() + 200);
	}
?>