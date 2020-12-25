<!DOCTYPE html>


<html lang="en">
 <?php include($css_path);  ?>
			<style>
			 img.showimg{
            width: 50px;
            height: 50px;
         }
		 		 .toast {
    position: absolute;
    z-index: 1;
    left: 35%;
    top: 90px;
    background: #8ccc8c;
}
			</style>
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!--<div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Aedigama Admin</p>
        </div>
    </div>-->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
       <?php	include($menu_path); ?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
			
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Engineer Detail List</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <!--<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                               <!-- <li class="breadcrumb-item active">Datatable</li>-->
                            </ol>
                              <a href="add_engineer"><button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                    class="fa fa-plus-circle"></i>Add Engineer Details</button></a>
								
                        </div>
                    </div> 
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
	   
                <div class="row">
                    <div class="col-12">
                    
                        <div class="card">
                            <div class="card-body">
                  
                                <!--<h6 class="card-subtitle">Data table example</h6>--->
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th> 
                                                <th>Adhar Number</th>
                                                <th>Salary</th>
												<th>Position</th>
												<th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$obj= new Engineers();
										$value=$obj->getAllData();
										foreach($value as $key=>$row){

				?>
                                            <tr id="del<?php echo $row['ID'];?>">
                                                <td><?php echo $row['NAME'];?></td>
                                                <td><?php echo $row['ADHAR_NUMBER'];?></td>
                                                <td><?php echo $row['SALARY'];?></td>
                                                
                                             
                                              
                                             <td><?php echo $row['POSITION'];?></td>
											  <td><?PHP if($row['STATUS']==1) { echo '<span style="color:green;font-weight: bold;">Active</span>'; }
                                               else {   echo '<span style="color:red;font-weight: bold;">In Active</span>';    }?></td>
                                              <td class="hidden-xs">
						<a href="edit_engineer?id=<?php echo base64_encode($row['ID']); ?>"><button class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil"></i></button></a>
                        <span onclick="return confirmDelete(<?php echo $row['ID']; ?>)">  <button class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></button> </span>            </td>
                                                
                                            </tr> 
										<?php } ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                                 
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
       <?php 
	include("includes/footer.php");
	?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
	
	<?php 
	include("includes/js.php");
	?>
	<script type="text/javascript">
 var msgDelete = '<?php echo $msgConfirmDelete; ?>';

 function confirmDelete(delete_id)
 {

	       Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
			 var postdata = {"id":delete_id,"page":"city","action":"Delete"};		
		$.ajax({
		
       type: "POST",
      url: "MODULE_Engineers",
      data: postdata,
      cache: false,
      success: function(result){
		 		
			Swal.fire({
                position: 'top-center',
                type: 'success',
                title: 'Engineer Details Deleted Successfully',
                showConfirmButton: false,
                timer: 2500
            })
      }
      });
								
                  $('#del'+delete_id).hide(); 
                }else{
					  return false;
				}
           })
 }
 
 </script>
  
    <!-- end - This is for export functionality only -->
    <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });

    </script>
	
 
</body>
</html>



