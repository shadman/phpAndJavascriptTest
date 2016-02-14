<?php
namespace AppBundle\Model;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class HomeCollection {
	
    private $horizontal_carousel;	
    private $vertical_carousel;
	
    public function __construct() {
    }

    public function getHorizontalCarousel() {
        return $this->horizontal_carousel;
    }

    public function setHorizontalCarousel($horizontal_carousel) {
        return $this->horizontal_carousel = $horizontal_carousel;
    }

    public function getVerticalCarousel() {
        return $this->vertical_carousel;
    }
	
    public function setVerticalCarousel($vertical_carousel) {
        return $this->vertical_carousel = $vertical_carousel;
    }

	public function toJson() {
		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);
		$data['result'] = array();
		$data['result'] = json_decode($serializer->serialize($this, 'json'),true);
		return json_encode($data);
	}
	
}
