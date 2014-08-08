<?php
namespace Test\GridBundle\Controller;

use APY\DataGridBundle\Grid\Source\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DataGridController extends Controller{

	function firstGridAction(){
		$source = new Entity('TestGridBundle:DatagridTest');

		$grid = $this->get('grid');

		$grid->setSource($source);
		$grid->setLimits(array(10,5) );
		$grid->setDefaultLimit(10);
		$grid->setMaxResults(10);

//		return $this->render('TestGridBundle::grid.html.twig', $grid->getGridResponse());
		return $grid->getGridResponse('TestGridBundle::grid_view.html.twig');
	}

	function displayImageAction($image){
		
	//	$response = new Response($image);
	//	$response->set->headers('Content-Type', 'image/jpeg');
		$file = stream_get_contents($image);
//		return $file;
		//$response = new Response($file);
		$response = new Response(base64_encode($file));
		//$response->headers->set('Content-Type', 'application/octet-stream');
		//:w
		//$response->headers->set('Content-Type', 'text/plain');
	//	$response->headers->set('Content-Length',sizeof($file) );
		//$response->set->headers('Content-Type', 'application/octet-stream');
		
		return $response;


	}


}
?>
