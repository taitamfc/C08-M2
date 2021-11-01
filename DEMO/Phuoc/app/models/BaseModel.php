<?php

namespace Model;

use PDO;

class BaseModel
{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'project_ph';
    protected $_db;

    public function __construct()
    {
        $this->_db = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name, $this->db_user, $this->db_pass);
    }
    public function renderView($page, $params = [])
    {
        include 'app/view/pages/' . $page;
    }
    public function pagination($limit, $table)
    {
        $sql = "SELECT count(id) as id FROM $table";
        $stmt = $this->_db->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $notes = $stmt->fetchAll();
        $total = $notes[0]['id'];
        $pages = ceil($total / $limit);
        return $pages;
    }

    public function redirect($url)
    {
        ob_start();
?>
        <script>
            window.location.href = '<?php echo $url; ?>';
        </script>
<?php
        echo ob_get_clean();
        die();
    }
}
