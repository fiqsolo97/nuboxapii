<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;




class MachineInfo extends RestController {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('machineinfo/Machineinfo_model');
       $this->load->model('product/Product_model');
       $this->load->model('rowcolumn/RowColumn_model');
       $this->load->model('adsvideo/AdsVideo_model');
       
   }

  function machineinfo_get() {

  $machineinfo = $this->Machineinfo_model->machineinfo();
  $product = $this->Product_model->product();
  $rowColumn = $this->RowColumn_model->rowcolumn();
  $adsVideo = $this->AdsVideo_model->adsvideo();
  if (!empty($machineinfo) && !empty($product)) {
      $this->response([
        'status'  => 'SUCCESSFUL',
        'setting'    => $machineinfo,
        'products' => $product,
        'rowAndColumn' => $rowColumn,
        'adsVideo' => $adsVideo,
      ], RestController::HTTP_OK);
    }
  }

  function getUpdate_get() {
    $hasUpdate = $this->Machineinfo_model->hasupdate();
    if (!empty($hasUpdate)) {
      $this->response([
        'status'  => 'SUCCESSFUL',
        'machineInfo'    => $hasUpdate,
      ], RestController::HTTP_OK);
    }
  }




}

?>
