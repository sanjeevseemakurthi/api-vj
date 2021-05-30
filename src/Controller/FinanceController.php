<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\financeRepository;

class FinanceController extends AbstractController
{
    public function __construct(financeRepository $financerpo)
    {
         $this->financerpo = $financerpo;
    }
    public function peopledata():Response
    {
        $users = $this->financerpo->peopledata();
        return $this->json([
            'Data' => $users
        ]);
    }
    public function person(Request $request):Response
    {
       
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->person($data["id"]);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function bake(Request $request):Response
    {
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->bake($data["id"]);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function finance(Request $request):Response
    {
       
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->finance($data["id"]);
        return $this->json([
            'Data' => $users
        ]);
    }

    public function personallfinance(Request $request):Response
    {
       
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->personallfinance($data["id"]);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function personallbake(Request $request):Response
    {
       
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->personallbake($data["id"]);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function newperson(Request $request):Response
    {
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->newperson($data);
        return $this->json([
            'Data' => $users
        ]);
    }
   
    
    public function newbake(Request $request):Response
    {
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->newbake($data);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function newfinance(Request $request):Response
    {
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->newfinance($data);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function updateperson(Request $request):Response
    {
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->updateperson($data,$data['id']);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function updatefin(Request $request):Response
    {
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->updatefin($data,$data['id']);
        return $this->json([
            'Data' => $users
        ]);
    }
    public function updatelen(Request $request):Response
    {
        $data=json_decode($request->getContent(),TRUE);
        $users = $this->financerpo->updatelen($data,$data['id']);
        return $this->json([
            'Data' => $users
        ]);
    }
    
}
