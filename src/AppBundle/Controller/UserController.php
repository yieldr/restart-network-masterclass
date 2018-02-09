<?php
// src/AppBundle/Controller/BookController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function allAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $users = $em->getRepository('AppBundle\Entity\User');

        $users = $users->findAll();
        foreach($users as $user) {
            var_dump($user->getName());
        }
    }

    public function bestAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $users = $em->getRepository('AppBundle\Entity\User');

//        $users = $users->findAll();
//        foreach($users as $user) {
//            var_dump($user->getName());
//        }

        $users = $users->findBy([
           'name' => 'UserName 0'
        ]);
        foreach($users as $user) {
            var_dump($user->getName());
        }
        die;
    }
}

