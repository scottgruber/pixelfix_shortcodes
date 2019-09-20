<?php

class PixelfixWistia_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['wistia'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_wistia');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://fast.wistia.com/oembed/?url='.urlencode('https://home.wistia.com/medias/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}

//[cms:wistia e4a27b971d]
// added by Colorado SEO Design