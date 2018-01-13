<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpWpgmzaPolygon
 *
 * @ORM\Table(name="wp_wpgmza_polygon")
 * @ORM\Entity
 */
class WpWpgmzaPolygon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="map_id", type="integer", nullable=false)
     */
    private $mapId;

    /**
     * @var string
     *
     * @ORM\Column(name="polydata", type="text", nullable=false)
     */
    private $polydata;

    /**
     * @var string
     *
     * @ORM\Column(name="innerpolydata", type="text", nullable=false)
     */
    private $innerpolydata;

    /**
     * @var string
     *
     * @ORM\Column(name="linecolor", type="string", length=7, nullable=false)
     */
    private $linecolor;

    /**
     * @var string
     *
     * @ORM\Column(name="lineopacity", type="string", length=7, nullable=false)
     */
    private $lineopacity;

    /**
     * @var string
     *
     * @ORM\Column(name="fillcolor", type="string", length=7, nullable=false)
     */
    private $fillcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="opacity", type="string", length=3, nullable=false)
     */
    private $opacity;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=700, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="ohfillcolor", type="string", length=7, nullable=false)
     */
    private $ohfillcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="ohlinecolor", type="string", length=7, nullable=false)
     */
    private $ohlinecolor;

    /**
     * @var string
     *
     * @ORM\Column(name="ohopacity", type="string", length=3, nullable=false)
     */
    private $ohopacity;

    /**
     * @var string
     *
     * @ORM\Column(name="polyname", type="string", length=100, nullable=false)
     */
    private $polyname;


}

