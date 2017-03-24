<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_news_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_news($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('Complete_Name'), 'dash', TRUE);
 
        $data = array(
            'slug' => $slug,
			'Complete_Name' => $this->input->post('Complete_Name'),
			'Nickname' => $this->input->post('Nickname'),
			'Email_Address' => $this->input->post('Email_Address'),
			'Home_Address' => $this->input->post('Home_Address'),
			'Gender' => $this->input->post('Gender'),
			'Cell_phone_number' => $this->input->post('Cell_phone_number'),
			'Comments' => $this->input->post('Comments')
        );
        
        if ($id == 0) {
            return $this->db->insert('news', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('news', $data);
        }
    }
    
    public function delete_news($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('news');
    }
}