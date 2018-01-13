<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpWpgmzaCategories
 *
 * @ORM\Table(name="wp_wpgmza_categories")
 * @ORM\Entity
 */
class WpWpgmzaCategories
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
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=50, nullable=false)
     */
    private $categoryName;

    /**
     * @var string
     *
     * @ORM\Column(name="category_icon", type="string", length=700, nullable=false)
     */
    private $categoryIcon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="retina", type="boolean", nullable=true)
     */
    private $retina = '0';


}

