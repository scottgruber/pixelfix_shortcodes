<?php

class PixelfixSlideshare_ShortcodeProvider extends PerchShortcode_Provider
{
    public $shortcodes = ['slideshare'];

    public function get_shortcode_replacement($Sortcode, $Tag)
    {
        $id = $Sortcode->arg(0);

        $API = new PerchAPI(1.0, 'pixelfix_slideshare');
        $HTTP = $API->get('HTTPClient');

        $response = $HTTP->get('https://www.slideshare.net/api/oembed/2?url='.urlencode('https://www.slideshare.net/'.$id));
      
        if ($response) {            
            $data = json_decode($response, true);
            if (isset($data['html'])) return $data['html'];
        }
       
        

        return '';
    }
}

// [cms:slideshare haraldf/business-quotes-for-2011]
// http://www.slideshare.net/haraldf/business-quotes-for-2011
// added by Colorado SEO Design