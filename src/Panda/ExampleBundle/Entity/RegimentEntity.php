<?php
/**
 * Created by PhpStorm.
 * User: Panda
 * Date: 13.12.2016
 * Time: 7:34
 */

namespace Panda\ExampleBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class RegimentEntity
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
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $location;

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
     * @return RegimentEntity
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
     * Set location
     *
     * @param string $number
     *
     *
     */
    public function setLocation($name)
    {
        $this->location = $name;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return RegimentEntity
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