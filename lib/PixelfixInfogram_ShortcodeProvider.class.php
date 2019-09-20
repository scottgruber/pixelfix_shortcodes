<?php

class PixelfixInfogram_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['infogram'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_infogram');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://infogram.com/oembed?url='.urlencode('https://infogram.com/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }

        return '';
    }
}


//[cms:infogram amazon-and-the-book-market]
// added by Colorado SEO Design
