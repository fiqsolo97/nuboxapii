<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;




class Product extends RestController {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('product/Product_model');
   }

  function product_get() {

  $product = $this->Product_model->product();
  if (!empty($product)) {
      $this->response([
        'status'  => 'SUCCESSFUL',
        'data'    => $product,
      ], RestController::HTTP_OK);
    }
  }

  


}

?>
