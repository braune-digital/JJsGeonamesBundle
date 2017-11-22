<?php

namespace JJs\Bundle\GeonamesBundle\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping as ORM;

/**
 * State
 *
 * The first level administrative division of a country. Refered to as a
 * 'province' for some countries.
 *
 * @Entity(repositoryClass="StateRepository")
 * @Table(name="geo_state", indexes={@ORM\Index(name="geo_state_geoname_id", columns={"geoname_id"})}))
 * @author Josiah <josiah@jjs.id.au>
 */
class State extends Locality {

}
