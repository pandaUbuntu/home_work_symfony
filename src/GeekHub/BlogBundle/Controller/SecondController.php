<?php

namespace Panda\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SecondController extends Controller
{
    /**
     * @return Response
     */
    public function homepageAction()
    {
        $url = $this->generateUrl('geek_hub_blog_second_homepage', [
            'foo' => 5,
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        return new Response($url);
    }

    /**
     * @return JsonResponse
     */
    public function jsonAction()
    {
        return new JsonResponse([
            'url' => $this->generateUrl('geek_hub_blog_second_homepage', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
    }

    /**
     * @return StreamedResponse
     */
    public function streamAction()
    {
        return new StreamedResponse(function () {
            for ($i = 0; $i < 10; $i++) {
                echo $i . "\n";
                ob_flush();
                flush();
                sleep(2);
            }
        });
    }

    public function redirectAction()
    {
        return $this->redirectToRoute('geek_hub_blog_homepage');
    }
}
