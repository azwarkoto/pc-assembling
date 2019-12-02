<?php
class M_processor extends CI_Model
{
    // BRAND PROCESSOR

    public function tampil_brand_processor()
    {
        return $this->db->get('m_brand_processor');
    }

    public function brand_processor()
    {
        return $this->db->get_where('m_brand_processor', array('brand_processor'));
    }

    public function ubah_brand_processor($where)
    {
        return $this->db->get_where('m_brand_processor', $where);
    }

    public function get_keyword_brand_processor($keyword)
    {
        $this->db->select('*');
        $this->db->from('m_brand_processor');
        $this->db->like('brand_processor', $keyword);
        return $this->db->get()->result();
    }

    // PROCESSOR

    public function tampil_processor()
    {
        return $this->db->get_where('m_processor', array('nama_processor'));
    }

    public function ubah_processor($where)
    {
        return $this->db->get_where('m_processor', $where);
    }

    public function get_keyword_processor($keyword)
    {
        $this->db->select('*');
        $this->db->from('m_processor');
        $this->db->like('nama_processor', $keyword);
        $this->db->or_like('brand_processor', $keyword);
        return $this->db->get()->result();
    }

    // HAPUS

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}