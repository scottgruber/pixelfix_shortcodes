<?php

class PixelfixSpeakerdeck_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['speakerdeck'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_speakerdeck');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://speakerdeck.com/oembed.json?url='.urlencode('https://speakerdeck.com/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}


//https://speakerdeck.com/oembed.json?url=https://speakerdeck.com/malarkey/art-directing-web-design
//https://speakerdeck.com/malarkey/art-directing-web-design
