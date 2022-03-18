<?php
	include("../db.php");
	$id=$_SESSION["id"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Cloud Storage || Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<div class="header" id="ban">
		<div class="container">
			<div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			</div>
			<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="upload_file.php">Upload File</a></li>
							<li class="active act"><a href="view_file.php">View Uploaded File</a></li>
							<li><a href="view_request_key.php">View Request Key</a></li>
							<li><a href="download_file.php">Downloaded File</a></li>
							<li><a href="phpScript/logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h1><a href="index.php">Secure File Storage on Cloud Using Hybrid Crytography</a></h1>
				<h3><p style="font-size:20px;"><label class="of"></label>Uploaded File<label class="on"></label></p><h3>
			</div>
		</div>
	</div>
<!-- banner -->
<?php
	$sql="SELECT * FROM file_upload WHERE userId='$id'";
	$result=mysqli_query($con,$sql);
?>
		<div class="">
			<div class="container">	
				<table class="table table-dark table-striped">
					<thead>
						<tr>
						  <th scope="col">NO.</th>
						  <th scope="col">File Id</th>
						  <th scope="col">File Name</th>
						  <th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						foreach($result as $r){ ?>
						<tr>
							<td><?=$i?></td>
							<td><?=$r['file_id']?></td>
							<td><?=$r['file_name']?></td>
							<td>
								<button class="btn btn-info" name="non_approval" onclick="getImageUrl('<?= $r['file_name']?>')">View</button>
								
							</td>
						 </tr>
						 <?php $i++;} ?>
					</tbody>
				</table>
			</div>
		</div>
	<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="container">
					<p>© 2022 All rights reserved | Design by Cloud9</p>
				</div>
			</div>
</body>
</html>

<script>
	function getImageUrl(url){
		$("#ImageModal").modal('show');
		$("#show_image").attr("src","phpScript/uploads/"+url);
	}	
</script>

<!-- Modal -->
<div class="modal fade" id="ImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
		  <div class="col-sm-12 show_image">
		      <img src="" id="show_image" class="img-fluid" height="330px" width="560px"> 
		  </div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>