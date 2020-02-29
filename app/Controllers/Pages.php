<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{

  public function view($page = 'home')
  {

    if (!is_file(APPPATH . "/Views/pages/$page.php")) {
      throw new PageNotFoundException("The page $page not exists", 404);
    }

    $data['title'] = ucfirst($page);

    echo view('templates/header');
    echo view("pages/$page", $data);
    echo view("templates/footer");
  }
}
