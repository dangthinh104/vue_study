<?php
/**
 * Created by PhpStorm.
 * User: quoc_thinh
 * Date: 6/21/2018
 * Time: 3:12 PM
 */
class Product extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_product()
    {
        $query = $this->db->get('product');
        return $query->result();
    }
}
