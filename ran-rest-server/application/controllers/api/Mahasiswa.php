<?php

use chriskacerguis\RestServer\RestController;
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model', 'mahasiswa');

    $this->methods['index_get']['limit'] = 1000;
    $this->methods['index_delete']['limit'] = 1000;
    $this->methods['index_post']['limit'] = 1000;
    $this->methods['index_put']['limit'] = 1000;
  }

  public function index_get()
  {
    $id = $this->get('id');
    if( $id === null) {
      $mahasiswa = $this->mahasiswa->getMahasiswa();
    } else {
      $mahasiswa = $this->mahasiswa->getMahasiswa($id);
    }
    
    if($mahasiswa) {
        $this->response([
          'status' => true,
          'data' => $mahasiswa
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'message' => 'id not found'
    ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function index_delete()
  {
    $id = $this->delete('id');

    if($id === null) {
        $this->response([
          'status' => false,
          'message' => 'provide an id'
      ], REST_Controller::HTTP_BAD_REQUEST);
    } else {
      if($this->mahasiswa->deleteMahasiswa($id) > 0) {
        // ok
        $this->response([
            'status' => true,
            'id' => $id,
            'message' => 'deleted.'
        ], REST_Controller::HTTP_OK);
      } else {
        // id not found
        $this->response([
            'status' => false,
            'message' => 'id not found'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }
  }

  public function index_post()
  {
    $data = [
      'nrp' => $this->post('nrp'),
      'nama' => $this->post('nama'),
      'email' => $this->post('email'),
      'jurusan' => $this->post('jurusan')
    ];

    if($this->mahasiswa->createMahasiswa($data) > 0) {
        $this->response([
          'status' => true,
          'message' => 'new mahasiswa has been created.'
      ], REST_Controller::HTTP_CREATED);
    } else {
      // id not found
      $this->response([
          'status' => false,
          'message' => 'failed to create new data!'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }

  public function index_put()
  {
    $id = $this->put('id');
    $data = [
      'nrp' => $this->put('nrp'),
      'nama' => $this->put('nama'),
      'email' => $this->put('email'),
      'jurusan' => $this->put('jurusan')
    ];

    if($this->mahasiswa->updateMahasiswa($data, $id) > 0) {
        $this->response([
          'status' => true,
          'message' => 'data mahasiswa has been updated.'
      ], REST_Controller::HTTP_OK);
    } else {
      // id not found
        $this->response([
            'status' => false,
            'message' => 'failed to update data!'
        ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }

}

?>