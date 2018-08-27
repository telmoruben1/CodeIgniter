<?php
  /**
   *
   */
  class Pages extends CI_Controller
  {
    public function view($page='home')

    {
      $this->load->helper('url');
      $this->load->helper('cookie');
      if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
        // whoops, we dont have a page for that!
        show_404();
      }
      $data['title'] = ucfirst($page); //capitaliza the first letter
      $data['email'] = "";
      // unset($_COOKIE["logado"]);
      set_cookie("logado",0);
      $this->load->view('templates/header',$data);
      $this->load->view('templates/carrossel',$data);
      $this->load->view('templates/footer',$data);
    }
    public function view_tabela($page)

    {
      $this->load->helper('url');
      $this->load->helper('cookie');
      if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
        // whoops, we dont have a page for that!
        show_404();
      }
      $data['email'] = $page;
      // unset($_COOKIE["logado"]);
      $this->load->view('templates/header',$data);
      $this->load->view('templates/tabela',$data);
      $this->load->view('templates/footer',$data);
    }

  }

 ?>
