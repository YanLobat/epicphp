<?php 
$pdo=new PDO("mysql:host=localhost;dbname=epicphp", 'root','');
if (!empty($_POST['name'])) { ?>
<form action = "day4_1.php" method = "post">
	<label>Name</label><input type = "text" name = "name"><br/>
	<label>Date</label><input type = "text" name = "data"><br/>
	<textarea name = "text"></textarea><br/>
	<input type = "hidden" name = "MAX_FILE_SIZE" value = "4135488">
	<input type = "file" name = "logo">
	<input id="sumit" type = "submit">
</form>
<?php 
		try{
			
			$stmt1 = $pdo->query('SELECT * from table1');
			$stmt1->setFetchMode(PDO::FETCH_ASSOC);
			while($row = $stmt1->fetch()) {  
				echo $row['name'] . "\n";  
				echo $row['data'] . "\n";  
				echo $row['text'] . "\n";
				echo "<br/>";
			}
			$pdo->setAttribute(
				PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION
			);
			}
		catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
		}
		else {
		try{ ?>
		<script>
			jQuery("#sumit").click(function(){
				<?php 
				$name = isset($_POST['name']) ? $_POST['name'] : '';
				$data = isset($_POST['data']) ? $_POST['data'] : '';
				$text = isset($_POST['text']) ? $_POST['text'] : '';
				$stmt=$pdo->prepare('INSERT INTO table1 (name,data,text) VALUES(:name,:data,:text)');
				$stmt -> bindParam (':name',$name,PDO::PARAM_STR);
				$stmt -> bindParam (':data',$data,PDO::PARAM_STR);
				$stmt -> bindParam (':text',$text,PDO::PARAM_STR);
				$stmt->execute(); 
				?>
			}
		</script>
		<?php
			$pdo->setAttribute(
				PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION
			);
			}
			catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}
		}
?>