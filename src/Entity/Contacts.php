<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactsRepository::class)
 */
class Contacts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstNameContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastNameContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subjectContact;

    /**
     * @ORM\Column(type="text")
     */
    private $contentContact;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstNameContact(): ?string
    {
        return $this->firstNameContact;
    }

    public function setFirstNameContact(string $firstNameContact): self
    {
        $this->firstNameContact = $firstNameContact;

        return $this;
    }

    public function getLastNameContact(): ?string
    {
        return $this->lastNameContact;
    }

    public function setLastNameContact(string $lastNameContact): self
    {
        $this->lastNameContact = $lastNameContact;

        return $this;
    }

    public function getSubjectContact(): ?string
    {
        return $this->subjectContact;
    }

    public function setSubjectContact(string $subjectContact): self
    {
        $this->subjectContact = $subjectContact;

        return $this;
    }

    public function getContentContact(): ?string
    {
        return $this->contentContact;
    }

    public function setContentContact(string $contentContact): self
    {
        $this->contentContact = $contentContact;

        return $this;
    }
}
