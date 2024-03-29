<?php
class Site extends CI_Controller
{
   private $_view; 
    
    public function index()
        {
            $this->_view->titulo = 'Kaidou';
            
            $dados = array
            (
                'titulo' => $this->_view->titulo,
                'menu' => $this->load->view('menu_lateral_view'),
                'conteudo' => $this->load->view('index_view')
                
            );
            
            //var_dump($dados);exit;
            $this->load->view('conteudo_view',$dados);
        }
        
    public function noticias()
        {
            $this->_view->titulo = 'Notícias';
            
            $dados = array
            (
                'titulo' => $this->_view->titulo,
                'menu' => $this->load->view('menu_lateral_view'),
                'conteudo' => $this->load->view('noticias_view')
                
            );
            
            //var_dump($dados);exit;
            $this->load->view('conteudo_view',$dados);
            
        }
        
        public function sobre()
        {
            $this->_view->titulo = 'Quem somos';
            
            $dados = array
            (
                'titulo' => $this->_view->titulo,
                'menu' => $this->load->view('menu_lateral_view'),
                'conteudo' => $this->load->view('sobre_view')
                
            );
            
            //var_dump($dados);exit;
            $this->load->view('conteudo_view',$dados);
            
        }   
        
        public function contato()
        {
            $this->_view->titulo = 'Quem somos';
            
            $dados = array
            (
                'titulo' => $this->_view->titulo,
                'menu' => $this->load->view('menu_lateral_view'),
                'conteudo' => $this->load->view('contato_view')
                
            );
            
            //var_dump($dados);exit;
            $this->load->view('conteudo_view',$dados);
            
        }     
}
?>