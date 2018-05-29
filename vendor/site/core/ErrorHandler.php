<?php


namespace site;


class ErrorHandler{
    /* состояние костаны debug*/
    public function __construct(){
        if(DEBUG){
            error_reporting( -1); // вкл
        }else{
            error_reporting( 0); // выкл
        }
        set_exception_handler([$this, 'exceptionHandler']);// Обработка ошибок, исключения.
    }

    public function exceptionHandler($e){ // обрабатывает перехваченное исключения
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = ''){ // Логирование ошибок
        error_log("
" . date('Дата: d-m-Y Время: H:i:s') . " Строка: {$line}
Текст ошибки: {$message}
Файл: {$file}
\n=========================================================================================\n",
         3, ROOT . '/tmp/errors.log');
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 404){//показ ошибок
        http_response_code($responce);
        if($responce == 404 && !DEBUG){
            require WWW . '/errors/404.php';
            die;
        }
        if(DEBUG){
            require WWW . '/errors/dev.php';
        }else{
            require WWW . '/errors/prod.php';
        }
        die;
    }
}