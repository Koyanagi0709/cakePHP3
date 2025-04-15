<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController {
    public $autoRender = false;

    public function index() {
        $id = $this->request->query['id'];
        $pass = $this->request->query['pass'];
        echo $id,$pass;
        echo "<html><body><h1>Hello!</h1>";
        echo "<p>This is sample page.</p></body></html>";
    }
}