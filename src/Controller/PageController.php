<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// je créé une classe avec le meme nom que le fichier
// suffixé par Controlleur

class PageController
{
    /**-----------------------------------------------------------------------------------
     * créer une route en utilisant des commentaires PHP
     * et "@Route" pour spécifier l'URL que je veux créer.
     * la route est toujours au dessus de la fonction (ou methode) a appler pour la page
     */

    /**
     *  permet de renvoyer une reponse Http en chaine de caractere quand l'URl est demandée
     *///-----------------------------------------------------------------------------------------

    /**
     * @Route ("/", name="home");
     **/
            public function home(){
                return new Response('hello World');
            }

    /**
     * @Route ("contact" , name="contact");
     */
            public function contact(){
                return new Response("contact");
            }
}
