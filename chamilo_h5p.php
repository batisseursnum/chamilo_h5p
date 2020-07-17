<?php
/* For licensing terms, see /license.txt */

class chamilo_h5p extends Plugin
{
    protected function __construct()
    {
        parent::__construct(
            '1.0','Damien Renou - Batisseurs Numériques',
            array(
                'enable_plugin_chamilo_h5p' => 'boolean'
            )
        );
    }
	
    /**
     * @return chamilo_h5p|null
     */
    public static function create()
    {
        static $result = null;
        return $result ? $result : $result = new self();
    }
	
    public function install()
    {
        $sql = "CREATE TABLE IF NOT EXISTS plugin_chamilo_h5p(
            id INT NOT NULL AUTO_INCREMENT,
            id_user INT,
            typenode VARCHAR(155),
            id_url INT,
            title VARCHAR(255) NOT NULL,
            descript VARCHAR(255) NOT NULL,
            date_create VARCHAR(12) NOT NULL,
            terms_a VARCHAR(512) NOT NULL,
            terms_b VARCHAR(512) NOT NULL,
            terms_c VARCHAR(512) NOT NULL,
            terms_d VARCHAR(512) NOT NULL,
            terms_e VARCHAR(512) NOT NULL,
            terms_f VARCHAR(512) NOT NULL,
            opt_1 VARCHAR(512) NOT NULL,
            opt_2 VARCHAR(512) NOT NULL,
            opt_3 VARCHAR(512) NOT NULL,
            PRIMARY KEY (id));";
        Database::query($sql);
		
    }
	
    public function uninstall()
    {
        //$sql = "DROP TABLE IF EXISTS plugin_chamilo_h5p";
        //Database::query($sql);
    }
}
