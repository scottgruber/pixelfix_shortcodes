<?php

class PixelfixFacebook_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['facebookPost'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_facebook');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://www.facebook.com/plugins/post/oembed.json/?url=https%3A%2F%2Fwww.facebook.com%2Fethindiaco%2Fposts%2F743464362652316');
        
        return json_decode('https://www.facebook.com/plugins/post/oembed.json/?url=https%3A%2F%2Fwww.facebook.com%2Fethindiaco%2Fposts%2F743464362652316');
        
        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }
        return '';
    }
}

//THIS IS BROKEN AND DOESN'T WORK I'M STILL PLAYING WITH IT SORRY