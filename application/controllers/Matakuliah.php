<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode','kode Matakuliah','required|min_length[3]',
        [
        'required'=> 'kode Matakuliah Harus Diisi',
        'min_lenght'=>'kode terlalu pendek'
    ]);
    
        $this->form_validation->set_rules('nama','nama Matakuliah','required|min_length[3]',
        [
        'required'=> 'nama Matakuliah Harus Diisi',
        'min_lenght'=>'nama terlalu pendek'
    ]);

    if ($this->form_validation->run()!=true){
        $this->load->view('view-form-matakuliah');
    } else {
        $data = [
            'kode'=> $this ->input->post('kode'),
            'nama'=> $this ->input->post('nama'),
            'sks'=> $this ->input->post('sks')
        ];
        $this ->load->view('viewdata',$data);      
    }
    }
}