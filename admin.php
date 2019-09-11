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

		if (strpos($class_name, 'PixelfixIssuu_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixInfogram_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixGiphy_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixWistia_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixVimeo_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixReddit_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixSlideshare_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixSmugmug_ShortcodeProvider')===0) {
    		include(PERCH_PATH.'/addons/apps/pixelfix_shortcodes/lib/'.$class_name.'.class.php');
    		return true;
    	}

		if (strpos($class_name, 'PixelfixFacebook_ShortcodeProvider')===0) {
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
	PerchSystem::register_shortcode_provider('PixelfixIssuu_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixInfogram_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixGiphy_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixWistia_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixVimeo_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixReddit_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixSlideshare_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixSmugmug_ShortcodeProvider');
	PerchSystem::register_shortcode_provider('PixelfixFacebook_ShortcodeProvider');
