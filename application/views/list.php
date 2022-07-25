<?php 
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Application View User</title>
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<Style>
.text-danger {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-danger-rgb),var(--bs-text-opacity))!important;
    margin-left: 100px !important;

}
.addnew {
    color: white !important;
    font-weight: 700;
}

div.dataTables_wrapper div.dataTables_filter {
    margin-top: 15px !important;
}
div.dataTables_wrapper div.dataTables_length select {
    width: 60px !important;
}
.btn-warning {
    color: #000;
    background-color: #0dcaf0 !important;
    border-color: #0dcaf0 !important;
}
.plus {
    font-weight: 900;
    margin-left: 10px !important;
}
h5#exampleModalLabel {
    color: red !important;
}
button.close {
    color: red !important;
    font-size: 30px !important;
    font-weight: 800 !important;
}
.col-md-6.productlist {
    color: red !important;
    font-size: 32px !important;
}
a.navbar-barand {
    color: white !important;
    text-decoration: none !important;
    font-size: 20px !important;
    font-weight: 700 !important;
}
.form-group {
    color: #00000094 !important;
    font-size: 20px !important;
    font-weight: 600 !important;
}
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #07c9f040 !important;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

</Style>

<body>

  <div class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-barand">Crud Task With Ajax</a>
    </div>
  </div>
  <div class="container" style="padding-top:10px">


    
    <div class="row mt-4 ">
        <div class="col-md-12 m-auto">
          <div class="row">
            <div class="col-md-6 productlist"><h4>Product List <h3></div>
              <div class="col-md-6 text-right">
                
                <!-- <a class="btn btn-primary addnew"data-toggle="modal" data-target="#exampleModal" >Add New</a>  --> 
              </div> 
                <form method="post"  id="createuser" role="form" class="form-horizontal" action=" <?php echo base_url();?>user/insertnow" enctype="multipart/form-data">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>

                           
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          
                          <div class="modal-body bckcolor" >
                              <div id="detailmessage"></div>

                                 <div class="form-group">
                                    <label class="craeteform">Product Name</label>
                                    <input type="text" name="name"  id="name" value="<?php echo set_value('name'); ?>"  class="form-control">
                                    <?php echo form_error('name'); ?>
                                   
                                  </div>
                                  <div class="form-group">
                                    <label class="craeteform">Product Price</label>
                                    <input type="number" name="price" id="price" value=""  class="form-control">
                                    <?php echo form_error('price'); ?>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description  </label>
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                    <?php echo form_error('description'); ?>
                                </div>
                                  <div class="form-group">
                                     <label for="myfile">Product Image:</label>
                                     <input type="file" required class="form-control" id="pimage" name="pimage[]" multiple/>
                                     <?php echo form_error('image'); ?>
                                  </div>
                          </div>
                          <div class="modal-footer">
                            <button  type="submit" class="btn btn-primary" name="submit" >Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                </form>

               <?php include('edit.php'); ?>
                
          </div>
        </div>
      </div> 
         
  </div>

 

<div class="container-fluid">

                <div class="row">
                    <div class="col-12 footer1">
                        <div class="card">
                            <div class="card-body">              
                       <button type="button" class="btn mb-1 btn-warning" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add New<span class="btn-icon-right"><i class="plus fa fa-plus"></i></span>
                        </button>
                                                
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="example">
                                        <thead>
                                            <tr>
                                               <th>Id</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Description</th>
                                                <th>Product Image</th> 
                                                <th width="60px";>Edit</th>
                                                <th width="60px";>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                         
                                    </table>
 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






<!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
 --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"  ></script>  


<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"  ></script>  
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"  ></script>  





 
 <script type="text/javascript">
 
var table;
 
$(document).ready(function() {

  $('#exampleModal').on('hidden.bs.modal', function () {
   $('#createuser').trigger('reset');
})
 table = $('#example').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url()?>user/ajax_list",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
     
    
 
});
 
</script>

<script type="text/javascript">
          $("#createuser").on('submit',function (e){
              e.preventDefault();

              var contactForm = $(this);


   var form_data = new FormData();

              var totalfiles = document.getElementById('pimage').files.length;
             for (var index = 0; index < totalfiles; index++) {
                form_data.append("pimage[]", document.getElementById('pimage').files[index]);
             }

             form_data.append("name", document.getElementById('name').value);
             form_data.append("price", document.getElementById('price').value);
             form_data.append("description", document.getElementById('description').value);

 
                $.ajax({

                    url: contactForm.attr('action'),
                    type: 'post',
                    processData: false,
                    contentType: false,
                    data: form_data,
                    success: function(response){
                     
                        if(response.status == 'success') 
                        {
                          $('#createuser').trigger('reset');
                          $("#detailmessage").removeClass( "text-danger" );
                          $("#detailmessage").addClass( "text-success" );
                          $('#exampleModal').modal('hide');
                          $('#example').DataTable().ajax.reload();
                          
                         
                         
                    }

                    if(response.status == 'error')
                    {

                        $("#detailmessage").removeClass( "text-success" );
                        $("#detailmessage").addClass( "text-danger" );

                         
                    }
                         $("#detailmessage").html(response.message);
                         $("#detailmessage").html(response);  
                          setInterval(function() {
                          $("#detailmessage").hide();
                          setTimeout(function() {
                          $("#detailmessage").fadeIn('normal');
                          });
                          }, 4000);
                       
                    }
                });

            });



                
</script>



           <script>$("#update_user").on('submit',function (e){

              e.preventDefault();

              var contactForm = $(this);


                var form_data = new FormData();

              var totalfiles = document.getElementById('uppimage').files.length;
             for (var index = 0; index < totalfiles; index++) {
                form_data.append("uppimage[]", document.getElementById('uppimage').files[index]);
             }

             form_data.append("upname", document.getElementById('upname').value);
             form_data.append("upprice", document.getElementById('upprice').value);
             form_data.append("updescription", document.getElementById('updescription').value);
             form_data.append("id", document.getElementById('id').value);
             form_data.append("x_uppimage", document.getElementById('x_uppimage').value);

  
                $.ajax({

                    url: contactForm.attr('action'),
                    type: 'post',
                    processData: false,
                    contentType: false,
                    data: form_data,
                    success: function(response){


                        if(response.status == 'success') {
                        $("#detailmessage1").removeClass( "text-danger" );
                        $("#detailmessage1").addClass( "text-success" );
                         $('#exampleModal1').modal('hide');
                         $('#example').DataTable().ajax.reload();
                        
                         
                         
                    }

                    if(response.status == 'error')
                    {

                        $("#detailmessage1").removeClass( "text-success" );
                        $("#detailmessage1").addClass( "text-danger" );
                         
                    }
                    $("#detailmessage1").html(response.message);
                     $("#detailmessage1").html(response);  
                        setInterval(function() {
                        $("#detailmessage1").hide();
                        setTimeout(function() {
                        $("#detailmessage1").fadeIn('normal');
                        });
                        }, 4000);
                       
                    }
                });
            });
 </script>
 <script type="text/javascript">
    $(document).ready(function(){
        //$('#example').DataTable();

         $(document).on("click", ".deletebtn", function(){

          var userId = $(this).data("userid"),
            hitURL = "<?php echo base_url()?>user/delete",
            currentRow = $(this);
          
          var confirmation = confirm("Are you sure to delete this Post ?");
          
          if(confirmation)
          {
            jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { id : userId } 
            }).done(function(data){           
              currentRow.parents('tr').remove();
              if(data.status = true) { alert("successfully deleted"); }
              else if(data.status = false) { alert("deletion failed"); }
              else { alert("Access denied..!"); }
            });
          }
    });
    });
   
</script>




<script type="text/javascript">
    $(document).ready(function(){
        //$('#example').DataTable();

         $(document).on("click", ".updatebtn", function(){
          
           
          var hitURL = "<?php echo base_url()?>user/get_single_product";
          var userId = $(this).data("userid");
          // alert ();
          
            
            jQuery.ajax({
            url: hitURL,
            type : "POST",
            dataType : "json",
            data : { id : userId } 
            }).done(function(data){ 

               

              $("#update_user #id").val(data.id);
              $("#update_user #upname").val(data.name);
              $("#update_user #upprice").val(data.price);
              $("#update_user #updescription").val(data.description);
              var all_image = data.image;
             var all_image =  JSON.parse(all_image);
             var html_content ='';
             var img_name_content ='';
             if(all_image.length > 0)
             {
                for (let x in all_image) {
                   var text = all_image[x];
                  html_content+='<img class="img-thumbnail" style="height:60px;width:60px;" src="<?php echo base_url()?>uploads/images/'+text+'"> ';
                 img_name_content+= text+',';
                   

                }

                
                $("#update_user #img_element").html(html_content);
             }
             $("#update_user #ximg_element").html('<input  hidden="" type="text"  name="x_uppimage"  id="x_uppimage" value="'+img_name_content+'"/>');


            });

           
    });
    });
   
</script>  
 
</body>

</html>