<?php

class PixelfixSmugmug_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['smugmug'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_smugmug');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://api.smugmug.com/services/oembed/?url=https://'.($id).'&format=json');
      
        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['url'])) return "<img class=\"smugImg\" src='".$data['url']."' alt='".$data['title']."'/>";
        }

        return '';
    }
}

// [cms:smugmug eos-muller.smugmug.com/Portfolio/Nature/Butterflies/i-W2LC2N3]
// DON'T FORGET:  add css media queries to change siz of smugImg class;
// added by Colorado SEO Design
