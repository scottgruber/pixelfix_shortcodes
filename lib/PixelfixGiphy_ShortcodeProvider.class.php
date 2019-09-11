<?php

class PixelfixGiphy_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['giphy'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_giphy');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://giphy.com/services/oembed?url='.urlencode('https://giphy.com/gifs/'.$id));

        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['url'])) return "<img class=\"giphyImg\" src='".$data['url']."' alt='".$data['title']."'/>";
        }
        return '';
    }
}

//[cms:giphy kW8mnYSNkUYKc]
// DON'T FORGET - add css media queries to change siz of giphyImg class;
// added by Colorado SEO Design
