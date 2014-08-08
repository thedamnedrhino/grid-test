<?php

namespace Test\GridBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as Grid;

/**
 * DatagridTest
 *
 * @ORM\Table(name="datagrid_test", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 */
class DatagridTest
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
     * @ORM\Column(name="username", type="string", length=100, nullable=true)
     */
	private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="blob", nullable=false)
	 *
	 * @GRID\Column(type="picture")
     */
    private $picture;

	function __construct(){
		//date = new \DateTime("0000-01-01 00:00:00");
	}
}
