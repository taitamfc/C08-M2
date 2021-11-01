<?php

namespace app\models;

use Database\Model;
use PDO;

class Note extends Model
{
    function getAll()
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name 
        FROM note JOIN type_note ON note.type_id = type_note.id";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function getOne($id)
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name, note.type_id
        FROM note JOIN type_note ON note.type_id = type_note.id
        WHERE note.id = '$id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $item = $stmt->fetch();
        return $item;
    }

    function store($title, $content, $type_id)
    {
        $sql = "INSERT INTO note (id, title, content, type_id) VALUES (null, '$title', '$content', '$type_id')";
        $this->_db->query($sql);
    }

    function update($id, $title, $content, $type_id)
    {
        $sql = "UPDATE note SET title = '$title', content = '$content', type_id = '$type_id' WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM note WHERE id = '$id'";
        $this->_db->query($sql);
    }

    function search_type($type_id)
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name
        FROM note JOIN type_note ON note.type_id = type_note.id 
        WHERE type_id = '$type_id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function search_title($search)
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name
        FROM note JOIN type_note ON note.type_id = type_note.id 
        WHERE title LIKE '%$search%'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function search_2($search, $type_id)
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name
        FROM note JOIN type_note ON note.type_id = type_note.id 
        WHERE title LIKE '%$search%' AND type_id = '$type_id'";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function count()
    {
        $sql = "SELECT count(note.id) as total FROM note ";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $total_records = $stmt->fetchAll();
        $total_record = $total_records[0]['total'];
        return $total_record;
    }

    function paginate($offset, $limit)
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name
        FROM note JOIN type_note ON note.type_id = type_note.id 
        LIMIT $offset, $limit";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function sort_asc($offset, $limit, $column)
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name
        FROM note JOIN type_note ON note.type_id = type_note.id
        ORDER BY $column ASC
        LIMIT $offset, $limit";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }

    function sort_desc($offset, $limit, $column)
    {
        $sql = "SELECT note.id, note.title, note.content, type_note.name
        FROM note JOIN type_note ON note.type_id = type_note.id
        ORDER BY $column DESC
        LIMIT $offset, $limit";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $items = $stmt->fetchAll();
        return $items;
    }
}
