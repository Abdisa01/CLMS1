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
                    <h2 class="p-title">View Laboratory information Lists</h2>
                </header>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example">
                        <thead>
                             <tr>
						<th>Lababoratory name </th> 
                        <th>Laboratory number </th>
						<th>Laboratory type </th>
						<th>laboratory location </th>
						<th>Target user </th>
						<th>Laboratory Status </th>
						<th>Accomendation</th>
                      </tr>
                        </thead>
                        <tbody>
                             <?php include("dbcon.php");?>
					           <?php 
					
					$user_query=mysql_query("select * from laboratory ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['lab_id']; ?>		
							<td><?php echo $row['lab_name']; ?> </td>
						   <td><?php echo $row['lab_number']; ?></td>
						   <td><?php echo $row['lab_type']; ?></td>
						    <td><?php echo $row['lab_location']; ?></td>
						   <td><?php echo $row['target_user']; ?></td>
						   <td><?php echo $row['lab_status']; ?></td>
						   <td><?php echo $row['accomendation']; ?></td>

                     </td>
                      </tr>
					  	<?php } ?>

					  	
                      
                        </tbody>
                    </table>
                </div>
				<!-- Modal -->
                    <div class="modal fade" id="form-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                          
						  
						  
						  </div> 
                        </div>
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