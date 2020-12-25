<!DOCTYPE html>

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
                        <h4 class="text-themecolor">Add Engineer Details</h4>
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
								
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bottom" role="tab">Experience</a> </li>
                               
								<div class="form-actions">
									  <input type='hidden' value="insert" name="action" id="action">
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
                                    <input type="text" class="form-control" id="title" name="title"  placeholder=" Enter Title" value="" >
                                 </div>
								 <div class="col-md-4 mb-4">
                                    <label for="title">Adhar Number</label>
                                    <input type="text" class="form-control" id="adhar" name="adhar"  placeholder=" Enter Adhar Number" value="">
                                 </div>
								 <div class="col-md-4 mb-4">
                                    <label for="title">Salary</label>
                                    <input type="text" class="form-control" id="salary" name="salary"  placeholder=" Enter  Salary" value="">
                                 </div>
								 <div class="col-md-3 mb-3">
                                         
                                           <label>Type</label>
                                             <select class="form-control" data-placeholder="Type" tabindex="1" name="type" id="type" >
                                               
                                                <option value="">Select</option>
                                                <option value="1">Image</option>
                                                <option value="2">Pdf</option>
												
                                             </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
								
										<div class="col-md-3 mb-3">
                                         
                                           <label>Position</label>
                                             <select class="form-control" data-placeholder="Position" tabindex="1" name="position" id="position" required>
                                               <option value="">Select  Position</option>
											   <?php for($i=1;$i<50;$i++): ?>
												
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php endfor; ?>
                                               
                                             </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
										<div class="col-md-3 mb-3">
                                         
                                           <label>Status</label>
                                             <select class="form-control" data-placeholder="Status" tabindex="1" name="status" id="status" >
                                               
                                                <option value="1">Active</option>
                                                <option value="2">In-Active</option>
												
                                             </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                 </div>
								 <div class="row">
								     
              <div class="col-sm-6 desc-sec">
                <label >Address:</label>
                <textarea name="address" id="address" class="textarea_editor form-control"  cols="15" rows="10"></textarea>
              </div>  
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
              
			 
						 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
								 
								
								 
									 <div class="tab-pane" id="bottom" role="tabpanel">
                               <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                               <h4 class="card-title">(Enter Multiple Details)</h4><br>
							   <div id="education_fields"></div>
                              <div class="form-row">
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
					  type: {
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
					  type: {
                          required:"<font color='red'>Select Type </font>"
                          
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
                          text:  " Engineer Details Added Successfully",
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
                         type: 'Failed to Add Engineer Details',
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
	
	

</body>
</html>
	
