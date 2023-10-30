<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class MichelinController extends AbstractController{
        public function accueil(){
            return $this->render('accueil.html.twig');
        }
    }
?>