<?php

class PixelfixCodePen_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['codepen'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_codepen');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://codepen.io/api/oembed?url='.urlencode('https://codepen.io/'.$id));
      
        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }
       
        

        return '';
    }
}

// Example: https://codepen.io/api/oembed?url=https://codepen.io/rachelandrew/pen/RGwyAb&format=json