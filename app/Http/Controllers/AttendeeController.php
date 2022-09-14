<?php

namespace App\Http\Controllers;

use App\Entities\Attendee;
use Illuminate\Http\Request;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class AttendeeController extends Controller
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function index()
    {
        $query_builder = $this->em->getRepository(Attendee::class)->createQueryBuilder('a');
        $query_builder->where('a.id = 3');

        $query = $query_builder->getQuery();
        $attendee = $query->getResult();

        dd($attendee);
    }
}
