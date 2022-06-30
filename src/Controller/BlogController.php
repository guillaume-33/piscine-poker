<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * creation d'une nouvelle classe pour la section blog
 */
// pour un debug simple :
// se placer dans le projet en cours via Cmder;
//taper la commande "php bin/console debug:router"

class BlogController{
    // recuperer l'id d'ubn article dans l'URL (parametre GET)
//trouver dans la liste des article l'article qui correspond a l'id récuprée.


    /**
     * @Route("articles",name="articles")
     */
        public function voirArticle(Request $request){

            $articles=[
                1=>[
                    'title' => 'il fait beau',
                    'contenu'=> 'y a du soleil et pas de nuages'
                ],
                2=>[
                    'title'=> 'il est 14h40',
                    'contenu'=>'et c\'est bientot la pause'
                ],
                3=>[
                    'title'=> 'faire une resquest',
                    'contenu'=> 'request->query->get($id)'
                ],
            ];
            $id=$request-> query-> GET('id');

            $article =$articles[$id]; // on recupère l'id d'UN article dans la table DES articles!!!
            return new Response ($article['title'].": ".$article['contenu']);

        }

    /**
     * @Route("news/{id}" , name ="news")
     */


        public function wilCard($id){ // on defini la variable a récuperer entre les parentheses

           $shows=[
                1=>[
                    'title' => 'il fait beau',
                    'contenu'=> 'y a du soleil et pas de nuages'
                ],
                2=>[
                    'title'=> 'il est 14h40',
                    'contenu'=>'et c\'est bientot la pause'
                ],
                3=>[
                    'title'=> 'faire une resquest',
                    'contenu'=> 'request->query->get($id)'
                ],
            ];

           $show =$shows[$id]; //on recupere dans le tableau DES  articleS l'ID de L'article voulu via l'url
           return new Response($show['title']); // on fait un retour sur l'article " selectionné"

        }
}




