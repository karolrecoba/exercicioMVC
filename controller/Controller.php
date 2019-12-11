<?php

include_once("model/Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke($acao = 'home') {
        $reslt = $this->model->getLogin();
        // Chama a funcao getLogin() da classe Model
        // e armazena o valor de retorno dessa funcao
        // na variavel reslt.
        switch ($acao) {
            case 'home':
                $this->showConteudoInicialView();
                break;
            case 'login':
                $this->showTelaLoginView();
                break;
            case 'lindao':
                $this->showOMaisBelo();
                break;
            case 'logout':
                $this->showTelaDeLogoutView();
                break;
            case 'karolzinha':
                $this->showKarolzinha();
        }
    }
    
    private function showOMaisBelo(){
        include 'view/calebeView.php';
    }

    private function showConteudoInicialView(){
        include 'view/conteudoInicialView.php';
    }
    
    private function showTelaLoginView(){
        include 'view/telaLoginView.php';
    }
    
    private function showTelaDeLogoutView(){
        $custom = "ahahaha"; //mysql_
        include 'view/telaLogoutView.php';
    }
    
    private function showKarolzinha(){
        include 'view/karolzinha.php';
    }
}

?>
