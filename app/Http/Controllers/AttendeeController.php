<?php

namespace App\Http\Controllers;

use App\Entities\Attendee;
use Illuminate\Http\Request;
use Doctrine\ORM\EntityManagerInterface;

class AttendeeController extends Controller
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function index()
    {
        $attendee = $this->em->getRepository(Attendee::class)->findAll();

        dd($attendee);
    }
}
