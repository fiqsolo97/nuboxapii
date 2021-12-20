<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;




class RowColumn extends RestController {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('rowcolumn/RowColumn_model');
   }

  function rowcolumn_get() {

  $rowcol = $this->RowColumn_model->rowcolumn();
  if (!empty($rowcol)) {
      $this->response([
        'status'  => 'SUCCESSFUL',
        'data'    => $rowcol,
      ], RestController::HTTP_OK);
    }
  }




}

?>
