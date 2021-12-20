<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;




class MachineOperation extends RestController {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('machineoperation/Machineoperation_model');
   }

   function update_machine_mode_post(){

         // $id = $this->input->post('id');
         $mode = $this->input->post('mode');

         if($this->Machineoperation_model->update_machine($mode))
         {
             $this->response([
                 'status' => 'SUCCESSFUL',
                 'message' => 'MACHINE MODE UPDATED',
                 // 'id' => $id,
                 'mode' => $mode,
             ], RestController::HTTP_OK);
         }else{
             $this->response(['status' => false,'message' => 'FAILED TO UPDATE MACHINE MODE'], RestController::HTTP_BAD_REQUEST);
         }
     }







}

?>
