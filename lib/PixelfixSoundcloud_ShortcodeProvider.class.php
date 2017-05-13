<?php

class PixelfixSoundcloud_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['soundcloud'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_soundcloud');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://soundcloud.com/oembed?url='.urlencode('https://soundcloud.com/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}

// https://soundcloud.com/oembed?url=https://soundcloud.com/scottgruber/forgive-them