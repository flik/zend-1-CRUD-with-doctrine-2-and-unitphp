<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpWpgmzaCategoryMaps
 *
 * @ORM\Table(name="wp_wpgmza_category_maps")
 * @ORM\Entity
 */
class WpWpgmzaCategoryMaps
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
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId;

    /**
     * @var integer
     *
     * @ORM\Column(name="map_id", type="integer", nullable=false)
     */
    private $mapId;


}

