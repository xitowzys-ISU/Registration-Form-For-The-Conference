<?php

namespace app\controllers;

use app\core\Controller;

class AdminController extends Controller
{
    private $data;

    public function indexAction() 
    {
        $this->data['{TITLE}'] = 'Админ-панель';

        $this->view->template = TEMPLATE_DIR_ADMIN_PANEL;

        if (!empty($_POST)) {
            $this->model->deleteUser($_POST);
        }

        $users = $this->model->getUsers();
        $usersTable = "";

        foreach ($users as $key => $value) {
            $usersTable .= '<tr>';
            
            foreach ($value as $keys => $values) {
                $usersTable .= '<td>' . $values . '</td>';
            }

            $usersTable .= '<td><input type="checkbox" name="'. $value[0] .'" value="' . $key . '"></td></tr>';
        }

        $this->data['{USERS_TABLE}'] = $usersTable;

        $this->view->render($this->data);
    }
}
