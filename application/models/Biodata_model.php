<?php

class Biodata_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function get_bio(){

     $query = $this->db->get('pelajar');
     return $query->result_array();
   }

   public function buat(){

     $this->load->helper('url');

    $data = array(
      //sebelah kiri adalah nama kolom yg ada didatabase yg sebelah kana adalah nama pada forma
      'student_no' => $this->input->post('nomor'),
      'student_name' => $this->input->post('nama'),
      //'gender' => $this->input->post('jk'),
      'birth_date' => $this->input->post('tanggal'),
      'birth_place' => $this->input->post('tempat'),
      'address' => $this->input->post('alamat')
    );
    return $this->db->insert('pelajar', $data);

   }

  public function get_bio_id($id = FALSE){
    $query = $this->db->get_where('pelajar', array('student_no' => $id));
    return $query->row_array();
  }


    public function update_bio($id){
    $this->load->helper('url');

    
    $data = array(
      //sebelah kiri adalah nama kolom yg ada didatabase yg sebelah kana adalah nama pada forma
      'student_no' => $this->input->post('nomor'),
      'student_name' => $this->input->post('nama'),
      //'gender' => $this->input->post('jk'),
      'birth_date' => $this->input->post('tanggal'),
      'birth_place' => $this->input->post('tempat'),
      'address' => $this->input->post('alamat')
    );

    $this->db->where('student_no', $id);
    return $this->db->update('pelajar', $data);
  }




}

 ?>
