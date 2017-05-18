<?php


    class Controller_Main extends Controller {

        function __construct()
        {
            $this->model = new \Models\Pets();
            $this->view = new View();
        }

        function action_index() {
            $data = \Models\Pets::all()->toArray();
            $this->view->generate('main_view.php', 'template_view.php', $data);
        }

    }