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

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }

    public function update_news($array)
    {
        $this->load->helper('url');

        $title = url_title($this->input->post('title'), 'dash',TRUE);

        $data = array(
            'title' => $title
        );

        $this->db->where('id', $array['id']);
        $this->db->update('news', $data);


    }

    public function delete_new($array)
    {
        $this->db->where('id', $array['id']);
        $this->db->delete('news');
    }
}