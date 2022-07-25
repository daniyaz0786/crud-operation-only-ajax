<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_controller{
        public function __construct() {
        parent::__construct();
         $this->load->model('user_model');
        }



    public function index()
	{
        // $pid = $this->post("id");
      $this->load->model('user_model');
      // $users = $this->user_model->all();
      $data = array();
      /*$data['stform'] = $users;*/
      $this->load->view('list',$data);
	}



    public function insertnow()
    {             
        $this->form_validation->set_rules('name','Product Name','required');
        $this->form_validation->set_rules('price', 'Product price', 'trim|required');
        $this->form_validation->set_rules('description','Product Description','required'); 
            $form_data  = $this->input->post();

            if($this->form_validation->run() == FALSE)
            { 
                $response = array(
                    'status' => 'error',
                    'message' => validation_errors()
                    ); 
                //   print_r("fgdhfdh");
                // die;
            }
            else
            {       
                 
                    $insertData = array();  
                    


                    $countfiles = count($_FILES['pimage']['name']);
                     $emptyName = array();
                        
                              for($i=0;$i<$countfiles;$i++){

                          
                                if(!empty($_FILES['pimage']['name'][$i]))
                                {
                             
                                    $f_name         =$_FILES['pimage']['name'][$i];
                                    $f_tmp          =$_FILES['pimage']['tmp_name'][$i];
                                    $f_size         =$_FILES['pimage']['size'][$i];
                                    $f_extension    =explode('.',$f_name);
                                    $f_extension    =strtolower(end($f_extension));
                                    $f_newfile      =uniqid().'.'.$f_extension;
                                    $store          ="uploads/images/".$f_newfile;
                                
                                    if(!move_uploaded_file($f_tmp,$store))
                                    {
                                       
                                        $this->session->set_flashdata('error', 'thumb Upload Failed .');
                                    }
                                    else
                                    {
                                        $emptyName[] = $f_newfile;
                                       
                                    }
 
                            }
          
                        }


                        $insertData['image'] = json_encode($emptyName);


                        $insertData['name']    = $form_data['name'];
                        $insertData['price']  = $form_data['price'];
                        $insertData['description']    = $form_data['description'];
                        $insertData['date_at'] = date("Y-m-d H:i");
                    


                        $result = $this->user_model->save($insertData);

                    

                    if($result > 0)
                    {
                         $response = array(
                            'status' => 'success',
                            'message' => "<h3>Details Added Successfully.</h3>"

                        );
                        
                    }

                    else
                    { 
                        $response = array(
                            'status' => 'error',
                            'message' => "<h3>Details Added not Successfully.</h3>"


                             
                        );




                    }
                }
                     $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));

                   

        } 


    public function ajax_list()
    {


        $list = $this->user_model->get_datatables();
        // print_r($list);
        $data = array();
        $no =(isset($_POST['start']))?$_POST['start']:'';
        foreach ($list as $currentObj) {

            // $filename = (isset($currentObj->blog_image) && $currentObj->blog_image !=='') ? ($currentObj->blog_image) : ("");

            $temp_date = $currentObj->date_at;
            $date_at = date("d-m-Y", strtotime($temp_date));
            $no++;
            $row = array();

            $row[] = $currentObj->id;
            $row[] = $currentObj->name;
            $row[] = $currentObj->price;
            $row[] = $currentObj->description;
             $row[] = $currentObj->image;
            $row[] = '<a data-userid="'.$currentObj->id.'" class="btn btn-sm btn-info updatebtn" data-toggle="modal" data-target="#exampleModal1" href="'.base_url().'user/edit/'.$currentObj->id.'" title="Edit" ><i class="mdi mdi-square-edit-outline"></i></a>';
            $row[] = '<button class="btn btn-sm btn-info deletebtn"   data-userid="'.$currentObj->id.'"><i class="delete fa fa-trash"></i></button>';
            
          
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => (isset($_POST['draw']))?$_POST['draw']:'',
                        "recordsTotal" => $this->user_model->count_all(),
                        "recordsFiltered" => $this->user_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function edit($id = NULL){

         $data = array(); 
       
        if($id == null)
        {
            redirect('user/list');
        }

        $data['edit_data'] = $this->user_model->find($id);
         
        $this->load->view('edit',$data);


    }
    public function delete()
    {
         
        $delId = $this->input->post('id'); 
        $result = $this->user_model->delete($delId);
        if ($result == 1)
        {
            echo(json_encode(array('status'=>TRUE))); 
         }else {
            json_encode(array('status'=>FALSE));
        }
    }

public function get_single_product ()
{

    $id =  $this->input->post('id');

    $data['edit_data'] = $this->user_model->find($id);
    echo json_encode($data['edit_data'] );

}


    public function update()
    {             

        
        $this->form_validation->set_rules('upname','Product Name','required');
        $this->form_validation->set_rules('upprice', 'Product price', 'trim|required');
        $this->form_validation->set_rules('updescription','Product Description','required'); 
        $this->form_validation->set_rules('id','Product ID','required'); 
            $form_data  = $this->input->post();

            if($this->form_validation->run() == FALSE)
            { 
                 $response = array(
                    'status' => 'error',
                    'message' => validation_errors()
                    ); 
                 

            }
            else
            {       
                 
                    $insertData = array();  
                    
                    $insertData['id'] = $form_data['id'];
                    
                    $emptyName = array();
                     if(!empty($_FILES['uppimage']))
                     {
                            $countfiles = count($_FILES['uppimage']['name']);
                            

                            for($i=0;$i<$countfiles;$i++){

                          
                                if(!empty($_FILES['uppimage']['name'][$i]))
                                {
                             
                                    $f_name         =$_FILES['uppimage']['name'][$i];
                                    $f_tmp          =$_FILES['uppimage']['tmp_name'][$i];
                                    $f_size         =$_FILES['uppimage']['size'][$i];
                                    $f_extension    =explode('.',$f_name);
                                    $f_extension    =strtolower(end($f_extension));
                                    $f_newfile      =uniqid().'.'.$f_extension;
                                    $store          ="uploads/images/".$f_newfile;
                                
                                    if(!move_uploaded_file($f_tmp,$store))
                                    {
                                       
                                        $this->session->set_flashdata('error', 'thumb Upload Failed .');
                                    }
                                    else
                                    {
                                        $emptyName[] = $f_newfile;
                                       
                                    }
 
                            }
          
                        } 
                     }







                        
                           $x_upimage_countfiles =  ($form_data['x_uppimage']);

                         
                         if(!empty($x_upimage_countfiles))
                         {
                            $exploded = explode(",",$x_upimage_countfiles);
                           

                            if(count($exploded) >0)
                            {
                                 for ($i=0;$i<count($exploded);$i++)
                                 {

                                    if($exploded[$i] !=='')
                                    {
                                         
                                        $emptyName[] = $exploded[$i];
                                    }

                                  
                                             
                                }

                            }
          
                        
                         }
                       

                         $insertData['image'] = json_encode($emptyName);




                        $insertData['name']    = $form_data['upname'];
                        $insertData['price']  = $form_data['upprice'];
                        $insertData['description']    = $form_data['updescription'];
                        $insertData['date_at'] = date("Y-m-d H:i");
                    


                        $result = $this->user_model->save($insertData);

                    

                    if($result > 0)
                    {
                         $response = array(
                            'status' => 'success',
                            'message' => "<h3>Details Update Successfully.</h3>"

                        );
                         
                    }

                    else
                    { 
                        $response = array(
                            'status' => 'error',
                            'message' => "<h3>Updation Failed  not Successfully.</h3>"


                             
                        );



                    }
                }
             $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
                   

        } 

}

?>



