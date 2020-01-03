<?php


class Beranda_model extends CI_model
{
    public function getAllBeranda()
    {
        return $this->db->get('bpdberanda')->result_array();
    }


    public function tambahDataBeranda()
    {
        $data = [
            "berita" => $this->input->post('berita', true),

        ];
        $this->db->insert('bpdberanda', $data);
    }

    public function hapusDataBeranda($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('bpdberanda', ['id' => $id]);
    }

    public function getBerandaById($id)
    {
        return $this->db->get_where('bpdberanda', ['id' => $id])->row_array();
    }

    public function ubahDataBeranda()
    {
        $data = [
            "berita" => $this->input->post('berita', true),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('bpdberanda', $data);
    }
}
