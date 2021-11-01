<?php

namespace app\models;


use Database\Model;
use PDO;

class TypeNote extends Model
{
    function getAll()
    {
        $sql = "SELECT * FROM type_note";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM type_note WHERE id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function store($name, $description)
    {
        $sql = "INSERT INTO type_note (id, name, description) VALUES (null, '$name', '$description')";
        $this->_db->query($sql);
    }

    function update($name, $description, $id)
    {
        $sql = "UPDATE type_note SET name = '$name', description = '$description' WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function delete($id)
    {
        $sql = "UPDATE type_note SET soft_delete = '1' WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function search($search)
    {
        $sql = "SELECT * FROM type_note WHERE name LIKE '%$search%'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function count()
    {
        $sql = "SELECT count(id) as total FROM type_note WHERE soft_delete = 0";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $total_records = $stmt->fetchAll();
        $total_record = $total_records[0]['total'];
        return $total_record;
    }

    function paginate($offset, $limit)
    {
        $sql = "SELECT *
        FROM  type_note WHERE soft_delete = 0
        LIMIT $offset, $limit";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function sort_asc($offset, $limit, $column)
    {
        $sql = "SELECT *
        FROM  type_note WHERE soft_delete = 0
        ORDER BY $column ASC
        LIMIT $offset, $limit";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function sort_desc($offset, $limit, $column)
    {
        $sql = "SELECT *
        FROM type_note WHERE soft_delete = 0
        ORDER BY $column DESC
        LIMIT $offset, $limit";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }
}
