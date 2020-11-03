<?php

class Basic_model extends CI_Model {

  // get record by id in table provided
  public function getById($tbl_name, $id) {
    return $this->db->get_where($tbl_name, array('id' => $id))->row();
  }
  public function getByemail($tbl_name, $email) {
    return $this->db->get_where($tbl_name, array('email' => $email))->row();
  }
  // Serach by a column with value provided and return result
  public function getWhere($tbl_name, $col_name, $where_val) {

    $query_obj = $this->db->get_where($tbl_name, array($col_name => $where_val));

    // check if result has multiple records
    if($query_obj->num_rows() > 1) {
      return $query_obj->result(); // return multiple records
    } else {
      return $query_obj->row(); // return single record
    }
  }

  // update single record
  public function updateRow($tbl_name, $data, $col_name, $where_val) {
    return $this->db->update($tbl_name, $data, array($col_name => $where_val));
  }

  // update multiple records
  // third parameter is index from where the where value will be taken
  public function updateRows($tbl_name, $data, $index_of_where_val) {
    return $this->db->update_batch($tbl_name, $data, $index_of_where_val);
  }

  // Delete a record / records
  public function delete($tbl_name, $col_name, $where_val) {
    return $this->db->delete($tbl_name, array($col_name => $where_val));
  }

  // insert a record
  public function insertRow($tbl_name, $data) {
    $this->db->insert($tbl_name, $data);
    return $this->db->insert_id();
  }

  // insert multiple records
  public function insertRows($tbl_name, $data) {
    $this->db->insert_batch($tbl_name, $data);
  }

  // get complete table
  public function getAll($tbl_name, $order_by_val='ASC') {
    $this->db->order_by('id', $order_by_val);
    return $this->db->get($tbl_name)->result();
  }
}
