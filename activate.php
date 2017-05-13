<?php
    // Prevent running directly:
    if (!defined('PERCH_DB_PREFIX')) exit;

    // Let's go
    $sql = "
    CREATE TABLE IF NOT EXISTS `__PREFIX__pixelfix_shortcodes_things` (
      `thingID` int(11) NOT NULL AUTO_INCREMENT,
      `thingTitle` varchar(255) NOT NULL DEFAULT '',
      `thingDateTime` datetime DEFAULT NULL,
      `thingDynamicFields` text,
      PRIMARY KEY (`thingID`)
    ) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;";
    
    $sql = str_replace('__PREFIX__', PERCH_DB_PREFIX, $sql);
    
    $statements = explode(';', $sql);
    foreach($statements as $statement) {
        $statement = trim($statement);
        if ($statement!='') $this->db->execute($statement);
    }
        
    $API = new PerchAPI(1.0, 'pixelfix_shortcodes');
    $UserPrivileges = $API->get('UserPrivileges');
    $UserPrivileges->create_privilege('pixelfix_shortcodes', 'Access pixelfix shortcodes App');
    $UserPrivileges->create_privilege('pixelfix_shortcodes.thing.create', 'Create thing');
    $UserPrivileges->create_privilege('pixelfix_shortcodes.thing.delete', 'Delete thing');

    $sql = 'SHOW TABLES LIKE "'.$this->table.'"';
    $result = $this->db->get_value($sql);
    
    return $result;
