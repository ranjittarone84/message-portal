<?php
require_once 'connect.php';
require_once 'session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WhatsApp</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
			  <h1 class=""><span class="badge bg-success">WhatsApp </span><a href="logout.php" class="btn btn-danger btn-lg"> LOGOUT</a></h1>
               <p class="display-5">Welcome <?php echo $_SESSION['userName']?></p>
		<form action="getdata.php" method="post">
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['userId'] ?>">
			
			<p>
				<label class="h5">Enter Message</label>
				<textarea name="message" class="form-control"></textarea>
			</p>
			
			
			<p>
				<input type="submit" name="messageSubmit" value="SEND" class="btn btn-success"><br></br>
				
			</p>
		</form>
			</div>

			<div class="col border my-3 bg-primary text-white vh-100">
				<h1 class="display-6 mb-4 my-5">Message histroy</h1>
				<?php
                $query = "SELECT * FROM message AS m
                	INNER JOIN chatbox AS u
                	ON u.id = m.user_id
                 ";
                $result = $con->query($query);
                //$data = mysqli_fetch_assoc($result);//display in array format.
                //$data = $result->fetch_object($result);//fetching by using object.
                while($data = $result->fetch_object()) {
                	
				 ?>
                <div class="msgrow">
                	<small class="fw-bold text-muted"> <?php  echo $data->name?>:</small>
                	<?php  echo "$data->message";?>
                </div>
                 <?php
                 }
                  ?>
			</div>
		</div>
	</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</body>
</html>