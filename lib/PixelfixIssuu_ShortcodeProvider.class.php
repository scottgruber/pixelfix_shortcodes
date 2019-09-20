<?php

class PixelfixIssuu_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['issuu'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_issuu');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://issuu.com/oembed?url='.urlencode('https://issuu.com/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}


//[cms:issuu iscience/docs/issue23]
// added by Colorado SEO Design
