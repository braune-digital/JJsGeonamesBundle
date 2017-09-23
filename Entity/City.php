<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * City
 *
 * A city, town, village or other agglomeration of buildings where people work.
 *
 * @Entity(repositoryClass="CityRepository")
 * @Table(name="geo_city", indexes={
 *      @ORM\Index(name="geoname_id", columns={"geoname_id"}),
 *      @ORM\Index(name="lat_lng", columns={"latitude", "longitude"}),
 * }))
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class City extends Locality
{

    /**
     * State
     *
     * @ManyToOne(targetEntity="State")
     * @var State
     */
    protected $state;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $relation;

    public function __construct() {
		parent::__construct();
        $this->relation = new ArrayCollection();
    }

    /**
     * Returns the state
     *
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the state
     *
     * @param State $state State
     */
    public function setState(State $state)
    {
        $this->state = $state;

        return $this;
    }

    public function __toString() {
        return $this->getNameUtf8();
    }

    public function getGeopoint() {
        return $this->getLatitude() . ',' . $this->getLongitude();
    }

    /**
     * @return ArrayCollection
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param ArrayCollection $relation
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
    }
}