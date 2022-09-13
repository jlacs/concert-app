<?php

namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entities\Book;

/**
 * @ORM\Entity
 * @ORM\Table(name="attendees")
 */
class Attendee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @ORM\Column(type="string", length=13, unique=true,)
     */
    protected string $ticket;


    /**
     * @ORM\Column(type="string")
     */
    protected string $firstname;

    /**
     * @ORM\Column(type="string")
     */
    protected string $lastname;

    /**
     * @param $firstname
     * @param $lastname
     */
    public function __construct(string $firstname, string $lastname, string $ticket)
    {
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->ticket = $ticket;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of ticket
     *
     * @return string
     */
    public function getTicket(): string
    {
        return $this->ticket;
    }

    /**
     * Set the value of ticket
     *
     * @param string $ticket
     *
     * @return self
     */
    public function setTicket(string $ticket): self
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get the value of firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }
}