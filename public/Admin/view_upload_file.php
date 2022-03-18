<!DOCTYPE HTM<html>
<head>
	<?php 
		include("../db.php");
		$sql="SELECT  *  FROM file_upload";
		$result=mysqli_query($con,$sql);
	?>
<title>Admin Panel  | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Admin Account</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user nav_icon"></i>Total User</a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="activated_user.php"><i class="fa fa-user nav_icon"></i>Activated User</a>
                                </li>
                                <li>
                                     <a href="deactivated_user.php"><i class="fa fa-user nav_icon"></i>Deactivated User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="view_upload_file.php"><i class="fa fa-file nav_icon"></i>Total Upload File</a>
                            <!-- /.nav-second-level -->
                        </li>                       
                        <li>
                            <a href="#"><i class="fa fa-sign-out fa-fw nav_icon"></i>Logout</a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
			<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-body no-padding">
					<table class="table table-striped">
					<center><h2>Total Upload File</h2></center>
						<thead>
							<tr class="warning">
								<th>No.</th>
								<th>User Id</th>
								<th>File Id</th>
								<th>Name</th>
								<th>File Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$i=1;
								foreach($result as $r){ ?>
								<tr>
									<td><?=$i?></td>
									<td><?=$r['userId']?></td>
									<td><?=$r['file_id']?></td>
									<td><?=$r['name']?></td>
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
        	<div class="clearfix"> </div>
      </div>
    </div>
		<div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>&copy; 2022 | Design by Cloud9 </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<script>
	function getImageUrl(url){
		$("#ImageModal").modal('show');
		$("#show_image").attr("src","../user/phpScript/uploads/"+url);
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