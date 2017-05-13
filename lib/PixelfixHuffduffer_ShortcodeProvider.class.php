<?php

class PixelfixHuffduffer_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['huffduffer'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_huffduffer');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://huffduffer.com/oembed?url='.urlencode('https://huffduffer.com/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}

// https://huffduffer.com/oembed?url=https://huffduffer.com/adactio/243773
