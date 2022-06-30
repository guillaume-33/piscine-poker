<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// je fais hériter PokerController de la classe de Symfony 'AbstractController'
// ce qui nous permet d'utiliser presque toutes les fonctions presentes dans la classe AbstractController.
// on peut aussi créer des classes dans le dossier scr/controller pour utiliser les 'fonctions' dont on pourrait avoir besoin.
// D'une maniere générale, toujours faire hériter de la classe AbstractController pour chaque classe crée.
class PokerController extends AbstractController
{
//    un site pour jouer au Poker.
//    les gens de moins de 18 ans seront redirigés vers une page disant qu'il ne peuvent pas jouer.
//    les gens de + de 18 ans seront dirigés vers une page disant qu'ils peuvent jouer
//     via un get parametre symfony


    // Je passe en parametre de la methode poker, la classe
    // Request suivie d'une variable $request
    // en faisant ça, je demande à Symfony de me récupérer
    // l'objet Request et de le stocker dans la variable
//-------------------------------------------------------------------------------------------------
    /**
     * @route("enfant" , name="enfant")
     *
     */
    public function enfant(){
        return new Response('dehors les mioches');
    }
//-------------------------------------------------------------------------------------------------
    /**
     * @Route("poker",name="poker")
     */
    public function poker(Request $request){
        // j'utilise l'objet Request et la propriété query
        // pour récupérer le parametre GET d'âge
        // je le stocke dans une variable
        $age=$request -> query -> get('age');

        // on verifie si je joueur a plus de 18 ans
        if($age >= 18){
            //si oui, il peut jouer
            return new Response('Bienvenue sur notre site');
        }else{
            //sinon, il degage.
            return $this->redirectToRoute('enfant');
        }
    }
//---------------------------------------------------------------------------------------------------------
}