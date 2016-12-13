<?php
/**
 * Created by PhpStorm.
 * User: Panda
 * Date: 12.12.2016
 * Time: 22:00
 */

namespace Panda\ExampleBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class DivisionEntity
{
/**
 * CategoryGroup
 *
 * @ORM\Table(name="division_entity")
 *
 */
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * 
     */
    private $number;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DivisionEntity
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
      * Set number
      *
      * @param string $number
      *
      * @return DivisionEntity
      */
    public function setNumber($name)
    {
        $this->number = $name;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
}