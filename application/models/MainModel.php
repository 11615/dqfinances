<?php 

class MainModel extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
        
        $this->contact_us_tbl = table_contact;
        $this->lead_tbl = table_lead;
	}

    public function contact($data)
    {
        if(!empty($data))
        {
        return $this->db->insert($this->contact_us_tbl, $data);
        }
    }

    public function lead($data)
    {
        if(!empty($data))
        {
        return $this->db->insert($this->lead_tbl, $data);
        }
        else {
            echo "something went wrong here";
        }
    }

}


?>