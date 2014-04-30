<?php
class Language
{
    public $name;
    
    public function __construct($n)
    {
        $this->name = $n;
    }
    
    public function getLanguage()
    {
        return $this->name.'<br />';
    }
    
    
}

function getLanguages($database)
{
    $query = 'SELECT * FROM languages';
    $database->query($query);
    $rows = $database->resultset();
    foreach ($rows as $row) {
        $name = $row['lang_name'];
        $languages[$name]['flag_code'] = $row['flag_code'];
        $languages[$name]['lang_code'] = $row['lang_code'];  
    }
    return $languages;
}

?>