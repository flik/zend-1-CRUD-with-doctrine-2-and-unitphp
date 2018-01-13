<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpWpgmza
 *
 * @ORM\Table(name="wp_wpgmza")
 * @ORM\Entity
 */
class WpWpgmza
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
     * @ORM\Column(name="address", type="string", length=700, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=700, nullable=false)
     */
    private $pic;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=700, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=700, nullable=false)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=100, nullable=false)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=100, nullable=false)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="anim", type="string", length=3, nullable=false)
     */
    private $anim;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=700, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="infoopen", type="string", length=3, nullable=false)
     */
    private $infoopen;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=500, nullable=false)
     */
    private $category;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    private $approved = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="retina", type="boolean", nullable=true)
     */
    private $retina = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="did", type="string", length=500, nullable=false)
     */
    private $did;

    /**
     * @var string
     *
     * @ORM\Column(name="other_data", type="text", nullable=false)
     */
    private $otherData;


}

