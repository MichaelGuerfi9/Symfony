<?php
namespace LeaderboardBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzon_cloverAction($type)
    {
        $video="";
        if($type== "type1"){
            $video = "https://www.youtube.com/embed/bmTHw9vL3Vs";
        }elseif($type == "type3"){
            $video = "https://www.youtube.com/embed/foDTJceKio8";
        }elseif($type == "typeZ"){
            $video = "https://www.youtube.com/embed/dFgb1vrF-F8";
        }
        return $this->render('LeaderboardBundle:Default:crimzon_clover.html.twig',array("Type" => $video));
    }

    public function ikarugaAction()
    {
        return $this->render('LeaderboardBundle:Default:ikaruga.html.twig');
    }
}