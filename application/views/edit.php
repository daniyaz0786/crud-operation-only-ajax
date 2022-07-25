 
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
 
  <div class="container" style="padding-top:10px">

    
    <div class="row mt-4 ">
        <div class="col-md-12 m-auto">
          <div class="row">
              <div class="col-md-6 text-right">
                <!-- <a class="btn btn-primary addnew"data-toggle="modal" data-target="#exampleModal" >Add New</a>  --> 
              </div> 
 
                <form method="post"  id="update_user" role="form" class="form-horizontal"  action="<?php echo base_url();?>user/update" enctype="multipart/form-data">
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                           
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <div id="detailmessage1"></div>
                          <div class="modal-body bckcolor" >

                                <input hidden="" type="text" name="id"  id="id" value=""  class="form-control">


                                 <div class="form-group">
                                    <label class="craeteform">Product Name</label>
                                    <input type="text"  name="upname"  id="upname" value=""  class="form-control">
                                    <?php echo form_error('name'); ?>
                                   
                                  </div>
                                  <div class="form-group">
                                    <label class="craeteform">Product Price</label>
                                    <input type="number" name="upprice" id="upprice" value=""  class="form-control">
                                    <?php echo form_error('price'); ?>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Description  </label>
                                    <textarea class="form-control" name="updescription" id="updescription" rows="3"></textarea>
                                    <?php echo form_error('description'); ?>
                                </div>
                                  <div class="form-group">
                                     <label for="myfile">Product Image:</label>
                                     <input type="file" class="form-control" id="uppimage" name="uppimage[]" multiple/>
                                     <?php echo form_error('image'); ?>

                                     <div id="img_element"></div>
                                     <div id="ximg_element"></div>
                                  </div>
                          </div>
                          <div class="modal-footer">
                            <button  type="submit" class="btn btn-primary" name="update" >Update</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
          </div>
        </div>
      </div> 
         
  </div>

 
 



<!-- $insertData=array();
        $this->load->library('form_validation'); 
         $form_data  = $this->input->post();
        $this->form_validation->set_rules('name','Product Name','required');
        $this->form_validation->set_rules('price', 'Product price', 'trim|required');
        $this->form_validation->set_rules('description','Product Description','required'); 
        if($this->form_validation->run() == FALSE)
        {
                $response = array(
                'status' => 'error',
                'message' => validation_errors()
                ); 
        }else{
            
        $insertData['id'] = $form_data['id'];  
        $editids = $form_data['id'];
        $insertData['name']    = $form_data['name'];
        $insertData['price']  = $form_data['price'];
        $insertData['description']    = $form_data['description'];
        $insertData['date_at'] = date("Y-m-d H:i");
         if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {

                $f_name         =$_FILES['image']['name'];
                $f_tmp          =$_FILES['image']['tmp_name'];
                $f_size         =$_FILES['image']['size'];
                $f_extension    =explode('.',$f_name);
                $f_extension    =strtolower(end($f_extension));
                $f_newfile      =uniqid().'.'.$f_extension;
                $store          ="uploads/images/".$f_newfile;
            
                if(!move_uploaded_file($f_tmp,$store))
                {
                    $this->session->set_flashdata('error', 'Image Upload Failed .');
                }
                else
                {
                   $insertData['blog_image'] = $f_newfile;
                   
                }
             }else{


                $insertData['blog_image'] =   $form_data['old_image'];

             }
       

        $result = $this->home_model->save($insertData);


          if($result > 0)
            {
                $this->session->set_flashdata('success', 'Blog Post successfully Updated');
            }
            else
            { 
                $this->session->set_flashdata('error', 'Blog Post Updation failed');
            }

            redirect('admin/home');

            
            
          }  



    }
 -->