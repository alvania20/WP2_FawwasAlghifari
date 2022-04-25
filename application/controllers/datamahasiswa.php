<?php
class datamahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('input_datamahasiswa');
    }

    public function cetak()
    {
        // $this->form_validation->set_rules('nama', 'Nama Mahasiswa','required|min_lenght[3]',
        // [
        //     'required' => 'Nama Mahasiswa Harus Diisi']);
        // $this->form_validation->set_rules('nim', 'Nim Mahasiswa','required|min_lenght[3]',
        // [
        //     'required' => 'Nim Mahasiswa Harus Diisi']);
        // $this->form_validation->set_rules('kelas', 'Kelas Mahasiswa','required|min_lenght[3]',
        // [
        //     'required' => 'Kelas Mahasiswa Harus Diisi']);
        // $this->form_validation->set_rules('tgllahir', 'Tanggal lahir','required|min_lenght[3]',
        // [
        //     'required' => 'Tanggal lahir Harus Diisi']);
        // $this->form_validation->set_rules('tmptlahir', 'Tempat lahir','required|min_lenght[3]',
        // [
        //     'required' => 'Tempat lahir Harus Diisi']);
        // $this->form_validation->set_rules('alamat', 'Alamat','required|min_lenght[3]',
        // [
        //     'required' => 'Alamat Harus Diisi']);

        // if ($this->form_validation->run()!=true){
        //     $this-load->view('input_datamahasiswa');
        // }else{

        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'tmptlahir' => $this->input->post('tmptlahir'),
            'alamat' => $this->input->post('alamat'),
            'jnskelamin' => $this->input->post('jnskelamin'),
            'agama' => $this->input->post('agama'),
        ];

        $this->load->view('output_datamahasiswa', $data);
        
    }
}