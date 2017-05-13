<?php

class PixelfixInstagram_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['instagram'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_instagram');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://api.instagram.com/oembed/?url='.urlencode('http://instagr.am/p/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}