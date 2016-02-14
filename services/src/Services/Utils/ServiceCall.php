<?php
namespace Services\Utils;

use Services\Utils\CurlRequest;

class ServiceCall {

	public function __construct(){
		$this->url = 'https://peg-dev-public-api.eu.cloudhub.io/api/v0.2/mediaCatalog/layout/?byScheme=urn:peg:layoutDskMoviesPage&lang=en';
	}

    public function getCarouselRecords() {
		$request = new CurlRequest();
		$url = $this->url;
		
		$response = $request->getRequest($url);
		$result = $this->parseCarouselData($response);
		
		return $result;
    }
	
	public function parseCarouselData($data){
		
		$h_co = 0;
		$v_co = 0;
		
		$data = json_decode($data);
		$result['horizontal_carousel'] = array();
		$result['vertical_carousel'] = array();
		
		if (!isset($data)) return $result;
		
		foreach($data->titles as $item){
			if (!isset($item->layoutTitles)) continue;
			
			if ($item->pegImageType=="DMHE"){

				foreach ($item->layoutTitles->titles as $items){
					
					$hc[$h_co]['title'] = $items->title;
					$hc[$h_co]['title_id'] = $items->titleId;
					$hc[$h_co]['year'] = $items->year;
					
					if (isset($items->shortDescription)){
						$hc[$h_co]['description'] = $items->shortDescription;
					}
					
					if (isset($items->thumbnails->{'thumb-613x1536'})){
						if ($this->isImageExists($items->thumbnails->{'thumb-613x1536'}->url))
							$hc[$h_co]['url'] = $items->thumbnails->{'thumb-613x1536'}->url;
						else
							$hc[$h_co]['url'] = "img/no-image-large.jpg";
							
						$hc[$h_co]['height'] = $items->thumbnails->{'thumb-613x1536'}->height;
						$hc[$h_co]['width'] = $items->thumbnails->{'thumb-613x1536'}->width;
					}
					
					$result['horizontal_carousel'] = $hc;
					$h_co++;
				}
				
			} else if ($item->pegImageType=="PST") {

				foreach ($item->layoutTitles->titles as $items){
					
					$vc[$v_co]['title'] = $items->title;
					$vc[$v_co]['title_id'] = $items->titleId;
					$vc[$v_co]['year'] = $items->year;
					
					if (isset($items->shortDescription)){
						$vc[$v_co]['description'] = $items->shortDescription;
					}
					
					if (isset($items->thumbnails->{'thumb-677x474'})){

						if ($this->isImageExists($items->thumbnails->{'thumb-677x474'}->url))
							$vc[$v_co]['url'] = $items->thumbnails->{'thumb-677x474'}->url;
						else 
							$vc[$v_co]['url'] = "img/no-image-small.jpg";

						$vc[$v_co]['height'] = $items->thumbnails->{'thumb-677x474'}->height;
						$vc[$v_co]['width'] = $items->thumbnails->{'thumb-677x474'}->width;
					}
					
					$result['vertical_carousel'] = $vc;
					$v_co++;
				}
				
			}
		}
		return $result;
	}
	
	public function isImageExists($image_url){
		if (@getimagesize($image_url)) {
			return true;
		} else {
			return false;
		}
	}
	
}
