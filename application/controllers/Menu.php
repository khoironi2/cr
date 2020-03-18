<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['menu'] = $this->M_menu->get();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New menu added.
                    </div>');
            redirect('menu');
        }
    }


    public function delete($id)
    {

        $data['menu'] = $this->M_menu->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data successfully deleted. </div>');
        redirect('menu');
    }



    function update()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('menu/index');
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('id');
            $data = array(
                'menu'    => $this->input->post('menu')
            );
            $this->M_menu->update($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu updated successfully. </div>');
            redirect('menu');
        }
    }




    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->M_menu->get();

        $data['subMenu'] = $this->M_submenu->get();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('is_active', 'Active', 'required');;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            );
            $this->M_submenu->insert($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Add submenu successfully. </div>');
            redirect('menu/submenu');
        }
    }




    function updatesubmenu()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');;
        $this->form_validation->set_rules('is_active', 'Active', 'required');;


        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('menu/index');
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('id');
            $data = array(
                'menu_id'    => $this->input->post('menu_id'),
                'title'    => $this->input->post('title'),
                'url'    => $this->input->post('url'),
                'icon'    => $this->input->post('icon'),
                'is_active'    => $this->input->post('is_active')
            );
            $this->M_submenu->update($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu updated successfully. </div>');
            redirect('menu/submenu');
        }
    }


    public function deletesubmenu($id)
    {

        $data['menu'] = $this->M_submenu->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data successfully deleted. </div>');
        redirect('menu/submenu');
    }
}
