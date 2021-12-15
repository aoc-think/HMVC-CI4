<?php

namespace App\Modules\Contoh\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Bcon extends Controller{

  protected $request;
  protected $helpers = [];

  public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
    // Do Not Edit This Line
    parent::initController($request, $response, $logger);

    // Preload any models, libraries, etc, here.

    // E.g.: $this->session = \Config\Services::session();
  }
}
