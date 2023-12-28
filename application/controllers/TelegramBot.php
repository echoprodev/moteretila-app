<?php

class TelegramBot extends CI_Controller {

    public function index() {
        $input = file_get_contents('php://input');
        $update = json_decode($input, true);

        if (isset($update['message'])) {
            $this->prosesPesan($update['message']);
        }
    }

}
