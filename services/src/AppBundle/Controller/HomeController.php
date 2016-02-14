<?php
namespace AppBundle\Controller;

use AppBundle\Model\HomeCollection;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\View;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Services\Utils\ServiceCall;

/**
 * Rest controller for notes
 *
 * @package AppBundle\Controller
 * @author Gordon Franke <info@nevalon.de>
 */
class HomeController extends FOSRestController {
	
    /**
     * Get carousel data.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return json
     */
    public function getCarouselAction(Request $request, ParamFetcherInterface $paramFetcher) {

		$service = new ServiceCall();
		$results = $service->getCarouselRecords();

		$data = new HomeCollection();
		$data->setHorizontalCarousel($results['horizontal_carousel']);
		$data->setVerticalCarousel($results['vertical_carousel']);
		
		return new Response($data->toJson(), 200, array('Content-Type'=>'application/json'));
    }
	
}
