<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WpWpgmzaMaps
 *
 * @ORM\Table(name="wp_wpgmza_maps")
 * @ORM\Entity
 */
class WpWpgmzaMaps
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
     * @var string
     *
     * @ORM\Column(name="map_title", type="string", length=55, nullable=false)
     */
    private $mapTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="map_width", type="string", length=6, nullable=false)
     */
    private $mapWidth;

    /**
     * @var string
     *
     * @ORM\Column(name="map_height", type="string", length=6, nullable=false)
     */
    private $mapHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="map_start_lat", type="string", length=700, nullable=false)
     */
    private $mapStartLat;

    /**
     * @var string
     *
     * @ORM\Column(name="map_start_lng", type="string", length=700, nullable=false)
     */
    private $mapStartLng;

    /**
     * @var string
     *
     * @ORM\Column(name="map_start_location", type="string", length=700, nullable=false)
     */
    private $mapStartLocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="map_start_zoom", type="integer", nullable=false)
     */
    private $mapStartZoom;

    /**
     * @var string
     *
     * @ORM\Column(name="default_marker", type="string", length=700, nullable=false)
     */
    private $defaultMarker;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="alignment", type="integer", nullable=false)
     */
    private $alignment;

    /**
     * @var integer
     *
     * @ORM\Column(name="directions_enabled", type="integer", nullable=false)
     */
    private $directionsEnabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="styling_enabled", type="integer", nullable=false)
     */
    private $stylingEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="styling_json", type="text", length=16777215, nullable=false)
     */
    private $stylingJson;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="kml", type="string", length=700, nullable=false)
     */
    private $kml;

    /**
     * @var integer
     *
     * @ORM\Column(name="bicycle", type="integer", nullable=false)
     */
    private $bicycle;

    /**
     * @var integer
     *
     * @ORM\Column(name="traffic", type="integer", nullable=false)
     */
    private $traffic;

    /**
     * @var integer
     *
     * @ORM\Column(name="dbox", type="integer", nullable=false)
     */
    private $dbox;

    /**
     * @var string
     *
     * @ORM\Column(name="dbox_width", type="string", length=10, nullable=false)
     */
    private $dboxWidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="listmarkers", type="integer", nullable=false)
     */
    private $listmarkers;

    /**
     * @var integer
     *
     * @ORM\Column(name="listmarkers_advanced", type="integer", nullable=false)
     */
    private $listmarkersAdvanced;

    /**
     * @var boolean
     *
     * @ORM\Column(name="filterbycat", type="boolean", nullable=false)
     */
    private $filterbycat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ugm_enabled", type="integer", nullable=false)
     */
    private $ugmEnabled;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ugm_category_enabled", type="boolean", nullable=false)
     */
    private $ugmCategoryEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="fusion", type="string", length=100, nullable=false)
     */
    private $fusion;

    /**
     * @var string
     *
     * @ORM\Column(name="map_width_type", type="string", length=3, nullable=false)
     */
    private $mapWidthType;

    /**
     * @var string
     *
     * @ORM\Column(name="map_height_type", type="string", length=3, nullable=false)
     */
    private $mapHeightType;

    /**
     * @var integer
     *
     * @ORM\Column(name="mass_marker_support", type="integer", nullable=false)
     */
    private $massMarkerSupport;

    /**
     * @var integer
     *
     * @ORM\Column(name="ugm_access", type="integer", nullable=false)
     */
    private $ugmAccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_markers_by", type="integer", nullable=false)
     */
    private $orderMarkersBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_markers_choice", type="integer", nullable=false)
     */
    private $orderMarkersChoice;

    /**
     * @var integer
     *
     * @ORM\Column(name="show_user_location", type="integer", nullable=false)
     */
    private $showUserLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="default_to", type="string", length=700, nullable=false)
     */
    private $defaultTo;

    /**
     * @var string
     *
     * @ORM\Column(name="other_settings", type="text", nullable=false)
     */
    private $otherSettings;


}

