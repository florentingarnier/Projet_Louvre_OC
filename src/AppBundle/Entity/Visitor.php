<?php
/**
 * Created by PhpStorm.
 * User: Garnier
 * Date: 12/07/2016
 * Time: 22:10
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Visitor
 * @package AppBundle\Entity
 * @ORM\Table(name="visitor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisitorRepository")
 */
class Visitor
{
    /**
     * @var
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string", length=125)
     */
    private $firstName;

    /**
     * @var
     * @ORM\Column(type="string", length=125)
     */
    private $lastName;

    /**
     * @var
     * @ORM\Column(type="date")
     */
    private $birthday;

    /**
     * @var
     * @ORM\Column(type="boolean")
     */
    private $reduce = false;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Booking", inversedBy="visitors")
     * @ORM\JoinColumn(name="booking_id", referencedColumnName="id", nullable=false)
     */
    private $booking;

    /**
     * @var numeric
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $price;
  

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
     *
     * @return Visitor
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
     *
     * @return Visitor
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
     *
     * @return Visitor
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
     * Set reduce
     *
     * @param boolean $reduce
     *
     * @return Visitor
     */
    public function setReduce($reduce)
    {
        $this->reduce = $reduce;

        return $this;
    }

    /**
     * Get reduce
     *
     * @return boolean
     */
    public function getReduce()
    {
        return $this->reduce;
    }

    /**
     * Set booking
     *
     * @param \AppBundle\Entity\Booking $booking
     *
     * @return Visitor
     */
    public function setBooking(\AppBundle\Entity\Booking $booking = null)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \AppBundle\Entity\Booking
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * @return numeric
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param numeric $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
