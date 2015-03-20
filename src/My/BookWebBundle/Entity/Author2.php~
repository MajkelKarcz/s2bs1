<?php

namespace My\BookWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Author2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Author2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="text")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="text")
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="knownNicknames", type="text", nullable=true)
     */
    private $knownNicknames;

    /**
     *
     *@ORM\OneToMany(targetEntity="Book2", mappedBy="Author2")
     *
     */
    private $books;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isDead", type="boolean")
     */
    private $isDead;

    public function __construct() {
        $this->books=new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Author2
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Author2
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Author2
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set knownNicknames
     *
     * @param string $knownNicknames
     * @return Author2
     */
    public function setKnownNicknames($knownNicknames)
    {
        $this->knownNicknames = $knownNicknames;

        return $this;
    }

    /**
     * Get knownNicknames
     *
     * @return string 
     */
    public function getKnownNicknames()
    {
        return $this->knownNicknames;
    }

    /**
     * Set books
     *
     * @param string $books
     * @return Author2
     */
    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Get books
     *
     * @return string 
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * Set isDead
     *
     * @param boolean $isDead
     * @return Author2
     */
    public function setIsDead($isDead)
    {
        $this->isDead = $isDead;

        return $this;
    }

    /**
     * Get isDead
     *
     * @return boolean 
     */
    public function getIsDead()
    {
        return $this->isDead;
    }

    /**
     * Add books
     *
     * @param \My\BookWebBundle\Entity\Book2 $books
     * @return Author2
     */
    public function addBook(\My\BookWebBundle\Entity\Book2 $books)
    {
        $this->books[] = $books;

        return $this;
    }

    /**
     * Remove books
     *
     * @param \My\BookWebBundle\Entity\Book2 $books
     */
    public function removeBook(\My\BookWebBundle\Entity\Book2 $books)
    {
        $this->books->removeElement($books);
    }
}
