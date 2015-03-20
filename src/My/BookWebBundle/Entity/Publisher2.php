<?php

namespace My\BookWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publisher2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Publisher2
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * 
     *@ORM\OneToMany(targetEntity="Book2", mappedBy="Publisher2")
     * 
     */
    private $books;

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
     * Set name
     *
     * @param string $name
     * @return Publisher2
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set books
     *
     * @param string $books
     * @return Publisher2
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
     * Add books
     *
     * @param \My\BookWebBundle\Entity\Book2 $books
     * @return Publisher2
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
