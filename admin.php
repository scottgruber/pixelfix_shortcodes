<?php

    spl_autoload_register(function($class_name){
    	if (strpos($class_name, 'PixelfixShortcodes')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}
    	if (strpos($class_name, 'API_PixelfixShortcodes')>0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/api/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixInstagram_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixCodepen_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixSoundcloud_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixSpeakerdeck_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixHuffduffer_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}
    	return false;
    });

	// Fieldtypes
	PerchSystem::register_shortcode_provider('PixelfixInstagram_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixCodepen_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixSoundcloud_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixSpeakerdeck_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixHuffduffer_ShortcodeProvider');