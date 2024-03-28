<?php
namespace App\Controllers;
use App\Models\User;
class Controller{



    public function controllerTest(){



        $model = new User();
        $model->test();

        return $this;
    }

}

?>
