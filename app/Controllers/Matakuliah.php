<?php

namespace App\Controllers;

use App\Models\ModelMatakuliah;

class Matakuliah extends BaseController
{
    public function index()
    {
        $matakuliah_model = new ModelMatakuliah();
        $all_data_matakuliah = $matakuliah_model->findAll(); // Mengambil semua data matakuliah dari model
    
        return view('matakuliah_view', ['all_data_matakuliah'=> $all_data_matakuliah]); // Mengirimkan data ke view
    }
    
    public function add_data_matakuliah(){
        return view('add_data_matakuliah');
    }

    public function proses_add_matakuliah(){
        $matakuliah_model = new ModelMatakuliah();
        $matakuliah_model->insert($this->request->getPost());
        return redirect()->to (base_url('Matakuliah'));
    }

    public function edit_data_matakuliah($id = false) {
        $matakuliah_model = new ModelMatakuliah();
        $data_matakuliah = $matakuliah_model->find($id);
        return view('edit_data_matakuliah' , ['data_matakuliah' => $data_matakuliah]);
    }

    public function proses_edit_matakuliah(){
        $matakuliah_model = new ModelMatakuliah();
        $matakuliah_model->update($this->request->getPost('id_matakuliah'), $this->request->getPost());
        return redirect()->to (base_url('Matakuliah')); 
    }

    public function delete_data_matakuliah($id = false) {
        $matakuliah_model = new ModelMatakuliah();
        $matakuliah_model->delete($id);
        return redirect()->to (base_url('Matakuliah')); 
    }
}
