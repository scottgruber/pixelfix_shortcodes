<?php

class PixelfixReddit_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['reddit'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_reddit');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://www.reddit.com/oembed?url='.urlencode('https://www.reddit.com/r/'.$id));
      
        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }
       
        

        return '';
    }
}

// [cms:reddit aww/comments/4lwccv/someone_came_to_visit_woodchips_for_scale%2Fd3qol9a]
// https://www.reddit.com/r/aww/comments/4lwccv/someone_came_to_visit_woodchips_for_scale/
// added by Colorado SEO Design