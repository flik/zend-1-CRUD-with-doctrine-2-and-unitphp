<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="db1.users")
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="data1", type="string", length=111, nullable=false)
     */
    private $data1;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set data1
     *
     * @param string $data1
     *
     * @return Users
     */
    public function setData1($data1)
    {
        $this->data1 = $data1;

        return $this;
    }

    /**
     * Get data1
     *
     * @return string
     */
    public function getData1()
    {
        return $this->data1;
    }
}

