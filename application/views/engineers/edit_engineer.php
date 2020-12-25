<!DOCTYPE html>
<?php
$id=base64_decode($_GET['id']);
$obj=new Engineers();
$obj->setId($id);
$row=$obj->getAllDataById();

?>
<html lang="en">
 <?php include($css_path);  ?>
  <link rel="stylesheet" href="assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
	<style>
	.image .card-body {
     padding: 0px;
}
.dropify-wrapper {  
    width: 80%;   
    height: 120px;
}
 		 .form-actions{
	float:right;
	position:relative;
	left:700px;
	top: 8px;
} 
 /* .form-actions{
	     position: relative;
    bottom: 285px;
    left: 830px;
 } */

.toast {
    position: absolute;
    z-index: 1;
    left: 35%;
    top: 90px;
    background: #8ccc8c;
}
label.cabinet{
	display: block;
	cursor: pointer;
}
label.cabinet input.file{
	position: relative;
	height: 100%;
	width: auto;
	opacity: 0;
	-moz-opacity: 0;
  filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
  margin-top:-30px;
}

#upload-demo{
	width: 250px;
	height: 250px;
  padding-bottom:25px;
}
figure figcaption {
    position: absolute;
    bottom: 0;
    color: #fff;
    width: 100%;
    padding-left: 9px;
    padding-bottom: 5px;
    text-shadow: 0 0 10px #000;
}
.select2-container--default .select2-selection--single {
    border: 1px solid #e6e4e4;
}
.select2-container .select2-selection--single {
    height: 39px;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #2d77dc;
    border: 1px solid #2d77dc;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 3px 6px;
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
                  <form class="" method="post" name="add_engineers" id="add_engineers"  enctype="multipart/form-data" >
				<div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Edit Engineer Details</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
						<a href="engineer"><button type="button" class="btn waves-effect waves-light btn-dark"><i class="icon-arrow-left-circle"></i>&nbsp;Back To Engineer Details List</button></a>
                          
						  <!-- <ol class="breadcrumb">
                            
                                <li class="breadcrumb-item"><a href="campaign">Campaign List</a></li>
                                <li class="breadcrumb-item active">Add Campaign</li>
                            </ol>-->
                           <!--  <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> -->
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
						<ul class="nav nav-tabs profile-tab" role="tablist">
					 
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#idea" role="tab">General</a> </li>
								
                                <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#documents" role="tab">Documents</a> </li>
								
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bottom" role="tab">Experience</a> </li>
                               
								<div class="form-actions">
									  <input type='hidden' value="update" name="action" id="action">
									    <input type='hidden' value="<?php echo $id; ?>" name="id" id="id">
                                    <button type="submit" name="submit" id="submit"  disabled="disabled" class="btn waves-effect waves-light btn btn-primary">Save</button>
									
									<button class="btn btn-primary" type="button"  id="loader" disabled="">
                                          <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                          Uploading...
                                        </button>
										
                                    <!--<a href="campaign"><button type="button" class="btn waves-effect waves-light btn-dark">Back To Campaign</button></a>-->
                                 </div>
					
                             
                            </ul>
                            <div class="tab-content">
						<div class="tab-pane active" id="idea" role="tabpanel">
                               <div class="col-12">
                        <div class="card">
                           <div class="card-body">
						   <div class="form-row">
                                 <div class="col-md-4 mb-4">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"  placeholder=" Enter Title" value="<?php echo $row['NAME'];  ?>" >
                                 </div>
								 <div class="col-md-4 mb-4">
                                    <label for="title">Adhar Number</label>
                                    <input type="text" class="form-control" id="adhar" name="adhar"  placeholder=" Enter Adhar Number" value="<?php echo $row['ADHAR_NUMBER'];  ?>">
                                 </div>
								 <div class="col-md-4 mb-4">
                                    <label for="title">Salary</label>
                                    <input type="text" class="form-control" id="salary" name="salary"  placeholder=" Enter  Salary" value="<?php echo $row['SALARY'];  ?>">
                                 </div>
								
								
										<div class="col-md-3 mb-3">
                                         
                                           <label>Position</label>
                                             <select class="form-control" data-placeholder="Position" tabindex="1" name="position" id="position" required>
                                               <option value="">Select  Position</option>
											   <?php for($i=1;$i<50;$i++): ?>
												
												<option value="<?php echo $i; ?>"<?php if($row['POSITION']==$i){ echo 'selected'; } ?>><?php echo $i; ?></option>
												<?php endfor; ?>
                                               
                                             </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										<div class="col-md-3 mb-3">
                                         
                                           <label>Status</label>
                                             <select class="form-control" data-placeholder="Status" tabindex="1" name="status" id="status" >
                                               
                                                <option value="1"<?php if($row['STATUS']==1){ echo 'selected'; }  ?>>Active</option>
                                                <option value="2"<?php if($row['STATUS']==2){ echo 'selected'; }  ?>>In-Active</option>
												
                                             </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										<div class="col-sm-6 desc-sec">
                <label >Address:</label>
                <textarea name="address" id="address" class="textarea_editor form-control"  cols="15" rows="10"><?php echo $row['ADDRESS']; ?></textarea>
              </div> 
                                 </div>
								 <div class="row">
								     
               
	  			  
              
			 
						 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
								 <div class="tab-pane" id="documents" role="tabpanel">
								   <div class="col-12">
                        <div class="card">
                           <div class="card-body">
						   <div class="form-row">
						     <div class="col-lg-6 col-md-6 ">
                                    <label >Document Upload (Mutiple Document Upload)</label>
                                    <div class="card image">
                                       <div class="card-body">
                                          <!--<label for="input-file-disable-remove">You can disable remove button</label>-->
                                            <input type="file"  id="fileToUpload" name="fileToUpload" class="dropify"   data-allowed-file-extensions="png jpg jpeg pdf" data-max-file-size="2M" multiple />
											<input type="hidden" name="image" id="image" />
														  <progress value="0" id="uploader" max="100" style="display:none" >0%</progress>
												  <div id='progressid' style="display:none"><?PHP ECHO 'Uploading';?></div> 
								 	
                                    </div>
                                    
                                 </div>
								 
               </div>
			    <div class="col-md-3 mb-3">
                                         
                                           <label>Type</label>
                                             <select class="form-control" data-placeholder="Type" tabindex="1" name="type" id="type" >
                                               
                                                <option value="1">Image</option>
                                                <option value="2">Pdf</option>
												
                                             </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
						   </div>
						    <div class="row" >
			               <?php
                          $sql5="SELECT * FROM auro_engineer_documents WHERE ENGINEER_ID='".$id."'";
                            $result5=$db->executeQuery($sql5);
                         while($row5=$db->fetchArray($result5)) { ?>
						
				<div class="col-xs-3">
				<div class="img1">  
				<div class="col-sm-4">
				 <?php if($row5['TYPE']==1) { ?>
				<img src="<?php echo $row5['DOCUMENTS'];?>" height='200' width='200'/>
				<?php } else { ?>
				<?php if(!empty($row5['DOCUMENTS'])){ ?><a href="<?php echo $row5['DOCUMENTS']; ?>" target="_blank" style="color:white;font-weight:bold"><?php } ?><img src="images/pdf.png" height='200' width='200'/></a>
				<?php } ?>
				<a  href="#" id="<?php echo $row5['ID']; ?>" class="delete"> <button class="btn btn-danger btn-xs" style="margin: 14px 0 14px 0" title="Delete"> <i class="fa fa-trash-o "></i></button></a>
				</div></div>
				</div>
						 
			 <?php } ?>
			</div>
                                 </div>
                                 </div>
                                 </div>
								 
								 
								 
								 </div>
								 <div class="tab-pane" id="bottom" role="tabpanel">
                               <div class="col-12">
                        <div class="card">
                           <div class="card-body">
						   <div class="table-responsive m-t-40">
						    <button type="button" style="float:right;" class="btn btn-info" id="show"> <i class="fa fa-plus-circle"></i>Add</button></a>
						    <button type="button" style="float:right;" class="btn btn-danger" id="btcancel"> <i class="fa fa-minus-circle"></i>Cancel</button></a>
						   <table id="myTable" class="table table-bordered table-striped">
						   <thead>
                                        <tr>
                                            <th>Organization Name</th>
                                            <th>Experience</th>
                                            <th>CTC</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
									<tbody>
									
									
                              <!-- <h4 class="card-title">Edit Category</h4-->
							  <?php
							  $sqlbtm="SELECT * FROM auro_engineer_experience WHERE  ENGINEER_ID='$id' ORDER BY ID";
							  $resbtm=$db->executeQuery($sqlbtm);
							  while($rowbtm=$db->fetchArray($resbtm)){
							  ?>
                             <tr id="del<?php echo $rowbtm[ID];?>">
							 <div class="form-row">
                                 <td><div>
                                    <div class="form-group">
                                      
                                       <input type="text" class="form-control" id="title1" name="title1[]" placeholder=" Enter Title"  value="<?php echo $rowbtm['NAME']; ?>" > 
                                    </div>
                                 </div></td>
								 <td><div>
                                    <div class="form-group">
                                      
                                       <input type="text" class="form-control" id="experience" name="experience[]" placeholder=" Enter Experience"  value="<?php echo $rowbtm['EXPERIENCE']; ?>" > 
                                    </div>
                                 </div></td>
                                 <td><div>
                                    <div class="form-group">
                                      
                                       <input type="text" class="form-control" id="ctc[]" name="ctc[]" placeholder=" Enter CTC"  value="<?php echo $rowbtm['CTC']; ?>" > 
                                    </div>
                                 </div> </td>
			  <input hidden name="conid[]" id="conid" value="<?php echo $rowbtm['ID']; ?>"></td>
			  
			   <td><span onclick="return confirmDelete(<?php echo $rowbtm['ID']; ?>);"> 
										   <button type="button" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></button></span>
										   
										   
										   
										   </td>
			  
              </div>
</tr>
							  <?php } ?>
</tbody>
						   
						   
						   </table>		
<div id="education_fields"></div>
   <div class="form-row" id="pppp" style="display:none">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Organization Name </label>
                                       <input type="text" class="form-control" id="title1[]" name="title1[]" placeholder=" Enter Organization Name"  value="" > 
                                    </div>
                                 </div> 
								 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Year Of Experience </label>
                                       <input type="text" class="form-control" id="experience[]" name="experience[]" placeholder=" Enter Year Of Experience"  value="" > 
                                    </div>
                                 </div>
                                 <div class="col-sm-4 desc-sec">
                <label >CTC </label>
				<div class="input-group">
                 <input type="text" class="form-control" id="ctc[]" name="ctc[]" placeholder=" Enter CTC"  value="" > 
				<div class="input-group-append">
                  <button class="btn btn-success" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                    </div>
                   </div>
              </div> 
			  
              </div> 						   
              </div> 						   
			  
								 
								
								
			  
               </div>
               </div>
               </div>
			   
					
                                
							
                                 </div>
								 </form>
                        </div>
                    </div>

                </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
               
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
	<?php include($firebase_path);?>
	<script>
	$("#loader").hide();
	</script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
	
  <script src="assets/node_modules/dff/dff1.js" type="text/javascript"></script>
	<script src="assets/dist/js/jquery.validate.min.js"></script>

	
	<script>

$.validator.addMethod("regx", function(value, element, regexpr) {          
return regexpr.test(value);
}, "Letters only");

(function($,W,D)
{

    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#add_engineers").validate({
                rules: {
                      title: {
                          required:true
                          
                      },
					  salary: {
                          required:true
                          
                      },
					  "title1[]": {
                          required:true
                          
                      },
					  "experience[]": {
                          required:true
                          
                      },
					  "ctc[]": {
                          required:true
                          
                      },
					  position: {
                          required:true
                          
                      }, 
					 fileToUpload: {
                          required:true
                          
                      },  
                      adhar: {
                            required:true,
                            number:true
                            
                       } 
					  
                 },
                messages: {
                      title: {
                          required:"<font color='red'>Enter Title </font>"
                          
                      }, 
					  salary: {
                          required:"<font color='red'>Enter Salary </font>"
                          
                      }, 
					  "title1[]": {
                          required:"<font color='red'>Enter Organization Name </font>"
                          
                      },
					  "experience[]": {
                          required:"<font color='red'>Enter Year Of Experience </font>"
                          
                      },
					  "ctc[]": {
                          required:"<font color='red'>Enter CTC </font>"
                          
                      },
					  position: {
                          required:"<font color='red'>Enter Position </font>"
                          
                      },
					 fileToUpload: {
                          required:"<font color='red' style='position:relative;top:10px'>Upload Documents </font>"
                          
                      },
                      adhar: {
                          required:"<font color='red'>Enter Adhar Nummber </font>",
                          number:"<font color='red'>Enter Valid Adhar Nummber </font>"
                          
                      }
					  
                },
                submitHandler: function(form) {
					var selectedFile; 
var iurls=''; 
var arr=[];
var files = document.getElementById("fileToUpload").files;
var pic = document.getElementById("fileToUpload");     
if(files.length==0){ functionsumitform(form); }else{captureimageupload();}
function captureimageupload() 
{ 
for(i=0;i<files.length;i++){
          selectedFile = pic.files[i]; 
          var rtrn=myfunction(selectedFile); 
}  
}
function myfunction(selectedFile) 
{ 
document.getElementById("progressid").style.display="";
document.getElementById("uploader").style.display="";
$( "#submit" ).prop( "disabled", true );
          var name="Admin"+Date.now()+selectedFile.name; 
          var storageRef = firebase.storage().ref('Engineers/'+name); 
          var uploadTask = storageRef.put(selectedFile); 
          uploadTask.on('state_changed', function(snapshot){ 
            var progress =  (snapshot.bytesTransferred / snapshot.totalBytes) * 100; 
              var uploader = document.getElementById('uploader'); 
              uploader.value=progress; 
          }, function(error) {console.log(error); 
          }, function() { 
               uploadTask.snapshot.ref.getDownloadURL().then( 
                function(downloadURL) { 
            arr.push(downloadURL); 
            iurls = iurls+downloadURL+','; 
			   if(files.length==arr.length){
				   document.getElementById("image").value=iurls.substring(0, iurls.length - 1);
				   functionsumitform(form);
			   }
            }); 
          }); 
}	

	
							function functionsumitform(form) 
{ 
                var formData = new FormData(form);
                             var form = $(add_engineers);
         					var url = 'MODULE_Engineers';
         
         					$.ajax({
         					type: "POST",
         					url: url,
         					data: formData, // serializes the form's elements.
         					processData:false,
                            contentType: false,
         					cache:false,
         					success: function(data)
                            {
								
									document.getElementById("progressid").style.display="none";
									document.getElementById("uploader").style.display="none";
									document.getElementById("submit").style.display="";
												$( "#submit" ).prop( "disabled", false );
													
					      if(data){ 
							    $('.dropify-clear').click();	 
							  document.getElementById("add_engineers").reset();
         	 Swal.fire({
                          text:  " Engineer Details Updated Successfully",
                         type: 'success',
                         //showCancelButton: true,
                         //confirmButtonColor: '#3085d6',
         				showConfirmButton: false,
                         cancelButtonColor: '#d33',
         				 timer: 2500
                     }).then((result) => {
                         if (result.value) {
                          
                         }else{
         					  return false;
         				}
                     })
         				  }
         				  else{
         					Swal.fire({
                          text:  data,
                         type: 'Failed to Update Engineer Details',
                         //showCancelButton: true,
                         //confirmButtonColor: '#3085d6',
         				showConfirmButton: false,
                         cancelButtonColor: '#d33',
         				 timer: 2500
                     }).then((result) => {
                         if (result.value) {
                         
                         }else{
         					  return false;
         				}
                     })  
         				  }
         			setTimeout(function(){ location.reload(); }, 1500);
                            }
							 
                               });
                }
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
		

    });
 
})(jQuery, window, document);

</script>

<script src="assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
<script src="assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
<script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();


    }); 
	$(document).ready(function() {

        $('.textarea_editor1').wysihtml5();


    });
	$(document).ready(function() {

        $('.textarea_editor2').wysihtml5();


    });
	$(document).ready(function() {

        $('.textarea_editor3').wysihtml5();


    });
    </script>

	
	
	
	<script>

$(document).ready(function(){
$( "#submit" ).prop( "disabled", false );
}) 

	</script>
	
	 <script>
$("#btcancel").hide();
$("#btcancel1").hide();
</script>
<script>
$(document).ready(function(){
  $("#show").click(function(){
    $("#pppp").show();
	$("#show").hide();
	$("#btcancel").show();
  });
 $("#show1").click(function(){
    $("#pppp1").show();
	$("#show1").hide();
	$("#btcancel1").show();
  });
 
});
</script>
<script>
$(document).ready(function(){
  $("#btcancel").click(function(){
  
   $("#btcancel").hide();
    
	$("#pppp").hide();
	<?php
	for($i=0;$i<=50;$i++){
	?>
	$("#removerow<?php echo $i; ?>").hide();
	<?php } ?>
	 $("#show").show();
  });
 $("#btcancel1").click(function(){
  
   $("#btcancel1").hide();
    
	$("#pppp1").hide();
	<?php
	for($i=0;$i<=50;$i++){
	?>
	$("#removerow1<?php echo $i; ?>").hide();
	<?php } ?>
	 $("#show1").show();
  });
 
});
</script> 

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
			 var postdata = {"id":delete_id,"page":"Services","action":"DeleteExp"};		
		$.ajax({
		
       type: "POST",
      url: "MODULE_Engineers",
      data: postdata,
      cache: false,
      success: function(result){
		 		
			Swal.fire({
                position: 'top-center',
                type: 'success',
                title: 'Engineer Experience Deleted Successfully',
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
 
 <script>
$(function() {
	
$(".delete").click(function() {

$('#load').fadeIn();
var commentContainer = $(this).parent();
var id = $(this).attr("id");
 //alert(id);
var string = {"id":id,"page":"city","action":"DeleteMore"};

$.ajax({
   type: "POST",
   url: "MODULE_Engineers",
   data: string,
   cache: false,
   success: function(){
 commentContainer.slideUp('slow', function() {$(this).remove();});
 $('#load').fadeOut();
  }
   
 });

return false;
 });
});
</script>
	
	

</body>
</html>
	
