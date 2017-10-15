<?php

namespace AdminerForShopware\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Shopware\Storefront\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class Adminer extends Controller {

    /**
     * @Route(path="/admin/adminer")
     */
    public function formAction()
    {
        require dirname(__DIR__) . '/setupAdminer.php';
        return new Response();
    }
}