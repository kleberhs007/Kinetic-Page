<?php
class Site extends CI_Controller
{
   private $_view; 
    
    public function index()
        {
            $this->_view->titulo = 'Kaidou';
            $this->load->view('index_view',$this->_view);
        }
        
    public function noticias()
        {
            $this->_view->titulo = 'Notícias';
            
            $dados = array
            (
            'titulo' => $this->_view->titulo,
            'menu' => $this->load->view('menu_lateral_view'),
            'noticias' => $this->load->view('noticias_view')
            );
            
            //var_dump($dados);exit;
            $this->load->view('conteudo_view',$dados);
            
        }
}
?>