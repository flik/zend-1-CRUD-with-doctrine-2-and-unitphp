<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpWpgmzaPolylines
 *
 * @ORM\Table(name="wp_wpgmza_polylines")
 * @ORM\Entity
 */
class WpWpgmzaPolylines
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
     * @ORM\Column(name="linecolor", type="string", length=7, nullable=false)
     */
    private $linecolor;

    /**
     * @var string
     *
     * @ORM\Column(name="linethickness", type="string", length=3, nullable=false)
     */
    private $linethickness;

    /**
     * @var string
     *
     * @ORM\Column(name="opacity", type="string", length=3, nullable=false)
     */
    private $opacity;

    /**
     * @var string
     *
     * @ORM\Column(name="polyname", type="string", length=100, nullable=false)
     */
    private $polyname;


}

