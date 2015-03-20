<?php

namespace My\BookWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Book2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Book2
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
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="date")
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=10, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;

    /**
     * @ORM\ManyToOne(targetEntity="Publisher2", inversedBy="books2")
     * @ORM\JoinColumn(name="Publisher2_id", referencedColumnName="id")
     * 
     */
    private $publisher;

    /**
     * @ORM\ManyToOne(targetEntity="Author2", inversedBy="books2")
     * @ORM\JoinColumn(name="Author2_id", referencedColumnName="id")
     * 
     * 
     */
    private $author;

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
     * Set title
     *
     * @param string $title
     * @return Book2
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book2
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     * @return Book2
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Book2
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Book2
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     * @return Book2
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set author
     *
     * @param \My\BookWebBundle\Entity\Author2 $author
     * @return Book2
     */
    public function setAuthor(\My\BookWebBundle\Entity\Author2 $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \My\BookWebBundle\Entity\Author2 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
