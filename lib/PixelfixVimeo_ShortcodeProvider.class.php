<?php

class PixelfixVimeo_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['vimeo'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_vimeo');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://vimeo.com/api/oembed.json/?url='.urlencode('https://vimeo.com/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}

//[cms:vimeo 76979871]
// added by Colorado SEO Design