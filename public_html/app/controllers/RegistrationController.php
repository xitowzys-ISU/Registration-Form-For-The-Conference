<?php

namespace app\controllers;

use app\core\Controller;

class RegistrationController extends Controller
{
    private $data;

    public function indexAction()
    {
        $this->data['{TITLE}'] = 'Регистрация на конференцию';

        if (!empty($_POST)) {

            foreach ($_POST as $key => $value) {

                if ($key === 'thematics' || $key === 'payments') {
                    $this->data['{POST_SELECT_' . strtoupper($key) . '[' . $value . ']}'] = "selected";
                }

                $this->data['{POST_' . strtoupper($key) . '}'] = htmlspecialchars($value);
            }

            $this->registration();
        }

        $this->view->render($this->data);
    }

    private function registration()
    {
        $isErr = false;
        $errMsg = "";

        // Checking the first name
        if (empty($_POST['firstName'])) {
            $errMsg = 'Вы не ввели имя';
            $this->data['{ERROR_FIRST_NAME}'] = $this->model->templateErr('msg-err', $errMsg);
            $isErr = true;
        }
        if (!preg_match("/^[а-яА-ЯЁёa-zA-Z-' ]*$/u", $_POST['firstName'])) {
            $errMsg = 'Разрешены только буквы и пробелы';
            $this->data['{ERROR_FIRST_NAME}'] = $this->model->templateErr('msg-err', $errMsg);
            $isErr = true;
        }

        // Checking the last name
        if (empty($_POST['lastName'])) {
            $errMsg = 'Вы не ввели фамилию';
            $this->data['{ERROR_LAST_NAME}'] = $this->model->templateErr('msg-err', $errMsg);
            $isErr = true;
        }
        if (!preg_match("/^[а-яА-ЯЁёa-zA-Z-' ]*$/u", $_POST['lastName'])) {
            $errMsg = 'Разрешены только буквы и пробелы';
            $this->data['{ERROR_LAST_NAME}'] = $this->model->templateErr('msg-err', $errMsg);
            $isErr = true;
        }

        // Checking the email
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errMsg = 'Неверный формат электронной почты';
            $this->data['{ERROR_EMAIL}'] = $this->model->templateErr('msg-err', $errMsg);
            $isErr = true;
        }

        // Setting the checkbox value
        if (!isset($_POST['mailing'])) {
            $_POST['mailing'] = 'Нет';
        } else {
            $_POST['mailing'] = 'Да';
        }

        if ($isErr)
            return false;

        $this->model->addUser($_POST);
    }
}
