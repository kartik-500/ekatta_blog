<?php
session_start(); 
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><!-- Insert into database -->
<form method="post" action="" enctype="multipart/form-data">
<div class="outline">
<div class="r1">
  <h4><i class="fa fa-id-badge" style="font-size:24px">  </i> Personal Details</h4>
  <div class="r2">Author Name :-
   <input type="text" name="name2" placeholder="Enter your name" class="form-control">
	<br><br>
  </div> 
  <div>Blog Title :- 
    <input type="text" name="blog2" placeholder="Enter your Blog Name" class="form-control">
	<br><br>
  </div>
  Category :-<select name="category">
  <option value="Restaurant Food">Restaurant Food</option>
  <option value="Travel News">Travel News</option>
  <option value="Modern Technology">Modern Technology</option>
  <option value="Product">Product</option>
  <option value="Inspiration">Inspiration</option>
  <option value="Healthcare">Healthcare</option>
</select><br><br>
    <div class="form-group">Description :-
  <textarea class="form-control" name="des2" placeholder="Enter your Description"></textarea>
  <br><br> 
</div>
    <input type="file" name="image" id="image">
    <br>
    <input type="submit" name="submit" value="INSERT">
  </div>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php 
  if(isset($_POST['submit'])){
    @$name=$_POST['name2'];
    @$blog=$_POST['blog2'];
    @$description=$_POST['des2'];
    @$category=$_POST['category'];
    $image = $_FILES['image']['name'];
    $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $target = "images/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    @$add=$_POST['add2'];//Taking required inputs from user & applying insert query
    $sql = "INSERT INTO `blog`(`author_name`, `blog_title`, `description`, `image`,`category`) VALUES ('".$name."','".$blog."','".$description."','".$file."','".$category."')";
    @$res1=mysqli_query($db,$sql);
    header('location:insert.php');//refreshing the page
  }
  ?>
<hr>
</div><!-- Displaying all database information -->
  <div class="row">
									<div class="col-xs-12">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
        <th class="center">Author Name</th>
        <th class="center">Blog Title</th>
        <th class="center">Description</th>
        <th class="center">Date</th>
        <th class="center">Image</th>
        <th class="center">Category</th>
      </tr>
    </thead>
    <tbody>
      <?php
$name = $add = $mobile = $email = "";
$query="SELECT * FROM `blog` WHERE 1 ";//taking out all enteries from db
@$res=mysqli_query($db,$query);
  $a=1;
  if(mysqli_num_rows($res)>0)
  {
        while($row=mysqli_fetch_row($res))//showing result sequentially
    {
      @$name=$row[1];
      @$email=$row[2];   
      @$mobile=$row[3]; 
      @$add=$row[5];
      @$category=$row[6];
      $i=1;
    ?>
            <tr>	<!-- Displaying information in tabular format -->
            <td class="center" ><?php echo $name; ?></td>  
            <td class="center" ><?php echo $email; ?></td> 
            <td class="center" ><?php echo $mobile; ?></td> 
            <td class="center" ><?php echo $add; ?></td>
            <td class="center"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row[4] ).'" height="200" width="200" class="img-thumnail" />  ' ?></td>
            <td class="center" ><?php echo $category; ?></td>
								</div>
			</td>
		    <td hidden="true"></td>
		    </tr>
        <?php
    $a++;
    $i++;
    }
  }
    ?>
    </tbody>
  </table>  
</form>
</body>
</html>