<?php
class Category
{
    public $name;
    
    public function __construct($n)
    {
        $this->name = $n;
    }
    
    public function setCatName($new_name)
    {
        $this->name = $new_name;
    }
    
    public function getCatName()
    {
        return $this->name.'<br />';
    }
    
    
}
function getCategories($database)
    {
        $database->query('SELECT learn_categories.name, learn_sub_categories.name as sub_name
                         FROM learn_categories LEFT JOIN learn_sub_categories ON learn_categories.cat_id = learn_sub_categories.cat_id');
        $rows = $database->resultset();
        foreach ($rows as $row) {
            $name = $row['name'];
            $sub_name = $row['sub_name'];
            $categories[$name][$sub_name] = $row['sub_name'];     
        }
        return $categories;
    }

?>