<?php


namespace App\Controller;


use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/admin/article/new", name="")
     */
    public function new(EntityManagerInterface $em)
    {
        die('TODO');

        return new Response(sprintf(
            'Hiya! New article id: #%d slug: %s',
            $article->getId(),
            $article->getSlug()
        ));
    }
}