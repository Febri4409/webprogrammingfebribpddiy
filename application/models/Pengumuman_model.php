<?php


class Pengumuman_model extends CI_model
{
    public function getAllHalpengumuman()
    {
        return $this->db->get('bpdberanda')->result_array();
    }


    public function tambahDataHalpengumuman()
    {
        $data = [

            "pengumuman" => $this->input->post('pengumuman', true)

        ];
        $this->db->insert('bpdberanda', $data);
    }

    public function hapusDataHalpengumuman($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('bpdberanda', ['id' => $id]);
    }

    public function getHalpengumumanById($id)
    {
        return $this->db->get_where('bpdberanda', ['id' => $id])->row_array();
    }

    public function ubahDataHalpengumuman()
    {
        $data = [

            "pengumuman" => $this->input->post('pengumuman', true)

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('bpdberanda', $data);
    }
}
