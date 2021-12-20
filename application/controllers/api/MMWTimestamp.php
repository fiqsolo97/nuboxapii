<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;




class MMWTimestamp extends RestController {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('product/Product_model');
   }

  function time_get() {
    $t=time();

  if (!empty($t)) {
      $this->response([
        'status'  => 'SUCCESSFUL',
        'data'    => $t,
      ], RestController::HTTP_OK);
    }
  }




}

?>
