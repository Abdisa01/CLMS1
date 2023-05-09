<!DOCTYPE html>

<?php include('dbcon.php');?>

<html>
    
<head>
        <title>clms.amu.edu.et</title>
		 <link rel="shortcut icon" HREF="../images/log.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Black Pearl Responsive Admin Template">
        <meta name="keywords" content="Black Pearl, Admin, Template, Bootstrap">
        <meta charset="UTF-8">
       
        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/calendar.min.css" rel="stylesheet">
        <link href="css/icomoon.min.css" rel="stylesheet">
        <link href="css/media-player.min.css" rel="stylesheet">
        <link href="css/file-manager.min.css" rel="stylesheet">
        <link href="css/form.min.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">
            
        <!--
            Following CSS codes are used only in this page in order to demonstrate the
            Sidebar widget properly. You can remove these codes anytime and this will
            not make any changes in your template's style and design other than this page. 
        -->
        <style type="text/css">
            .c-block { display: inline-block; width: 100%; }
            .validation-clear { margin-left: 2px; }
        </style>
    </head>
    
    <body>
        <!-- Header -->
        <?php include("header.php");?>
          
        <section id="main" role="main">
            <!-- Left Sidebar -->
             <?php include("leftside.php");?>
            <!-- Right Sidebar -->
           
        
            <!-- Content -->
            <section  style="width:84.5%;"id="content" class="container">
                <header class="p-header">
                    <h2 class="p-title">View Service Request Lists</h2>
                </header>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example">
                        <thead>
                             <tr>
						<th>Department</th> 
                        <th>Batch</th>
						<th>Course</th>
						<th>Number user</th>
						<th>Software</th>
						<th>Company</th>
						<th>Purpose</th>
                        <th>Duration</th>
                      </tr>
                        </thead>
                        <tbody>
                             <?php include("dbcon.php");?>
					           <?php 
					$count = "SELECT * FROM user WHERE username='$session_id'";
								         $answer = mysql_query($count)or die(mysql_error());
								         $num = mysql_num_rows($answer);
									     $data=mysql_fetch_array($answer);
									        // $to =$data["bn"];
					$user_query=mysql_query("select * from service")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['s_number']; ?>		
							<td><?php echo $row['department']; ?> </td>
						   <td><?php echo $row['batch']; ?></td>
						   <td><?php echo $row['course']; ?></td>
						    <td> <?php echo $row['user_number']; ?></td>
							<td><?php echo $row['software']; ?></td>
						   <td><?php echo $row['campany']; ?></td>
						   <td><?php echo $row['purpuse']; ?></td>
	                        <td><?php echo $row['duration']; ?></td>
							?>
				 </td>
                      </tr>
					  	<?php } ?>

                     
					  	
                      
                     
					 
                        </tbody>
                    </table>
                </div>
               
            </section>
        </section>
       
       <?php include("footer.php");?>
        <!-- Javascipt -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src='js/jquery-ui-1.10.3.min.js'></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/feeds.js"></script>
        <script src="js/chosen.js"></script>
        <script src="js/shadowbox.js"></script>
        <script src="js/sparkline.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/enscroll.min.js"></script>
        <script src='js/calendar.min.js'></script>
        <script src='js/datatables.min.js'></script>
        <script src='js/autosize.min.js'></script>
        <script src='js/select.min.js'></script>
        <script src="js/toggler.min.js"></script>
        <script src="js/datetimepicker.min.js"></script>
        <script src="js/colorpicker.min.js"></script>
        <script src="js/fileupload.min.js"></script>
        <script src="js/media-player.js"></script>
        <script src="js/validation/validate.min.js"></script>
        <script src="js/validation/validationEngine.min.js"></script>
        <script src='js/datatables.min.js'></script>
        <script src="js/functions.js"></script>
        
        <!-- Initiate Data Table -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').dataTable( {
                    "aoColumnDefs": [ 
                        {
                            // `data` refers to the data for the cell (defined by `mData`, which
                            // defaults to the column being worked with, in this case is the first
                            // Using `row[0]` is equivalent.
                            "mRender": function ( data, type, row ) {
                                    return data +' '+ row[3];
                            },
                            "aTargets": [ 0 ]
                        },
                        { "bVisible": false,  "aTargets": [ 3 ] },
                        { "sClass": "center", "aTargets": [ 4 ] }
                    ],            
                    "sPaginationType": "full_numbers"
                });
                //Modify Data Table
                $('.dataTables_wrapper .sOption').wrapAll('<div class="sOption_wrapper"></div>');
                $('.dataTables_wrapper .pagin').wrapAll('<div class="sOption_wrapper"></div>');
            });
        </script>
    </body>


</html>
        