<?php

namespace Customize\Controller;

use Eccube\Controller\AbstractController;
use Eccube\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class testdbController extends AbstractController
{
    /**
     * @Method("GET")
     * @Route("/sample")
     */
    public function testMethod()
    {
	    /** @var Product $product */
	    //データベースプロダクトテーブルから値(id=1)を取得する。
	    $product = $this->entityManager->getRepository('Eccube\Entity\product')->find(1);
	    //データベースプロダクトテーブルのカラム値description_detailを取得している。
	return new Response($product->getDescriptionDetail());

    }
}
