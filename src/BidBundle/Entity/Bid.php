<?php

namespace BidBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Annotation\Notifiable;
use Mgilet\NotificationBundle\NotifiableInterface;

/**
 * Bid
 *
 * @ORM\Entity(repositoryClass="BidBundle\Repository\BidRepository")
 * @ORM\Table(name="bid")
 * @Notifiable(name="bid")
 */

class Bid implements NotifiableInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="minimalRate", type="integer")
     */
    private $minimalRate;

    /**
     * @var int
     *
     * @ORM\Column(name="deliveryTime", type="integer")
     */
    private $deliveryTime;


    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Freelancer", inversedBy="bids")
     * @ORM\JoinColumn(name="freelancer_id", referencedColumnName="id")
     */
    private $freelancer;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Project", inversedBy="projectBids")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set minimalRate
     *
     * @param integer $minimalRate
     *
     * @return Bid
     */
    public function setMinimalRate($minimalRate)
    {
        $this->minimalRate = $minimalRate;

        return $this;
    }

    /**
     * Get minimalRate
     *
     * @return int
     */
    public function getMinimalRate()
    {
        return $this->minimalRate;
    }

    /**
     * Set deliveryTime
     *
     * @param integer $deliveryTime
     *
     * @return Bid
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Get deliveryTime
     *
     * @return int
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }


    /**
     * Set freelancer
     *
     * @param \UserBundle\Entity\Freelancer $freelancer
     *
     * @return Bid
     */
    public function setFreelancer(\UserBundle\Entity\Freelancer $freelancer = null)
    {
        $this->freelancer = $freelancer;

        return $this;
    }

    /**
     * Get freelancer
     *
     * @return \UserBundle\Entity\Freelancer
     */
    public function getFreelancer()
    {
        return $this->freelancer;
    }

    /**
     * Set project
     *
     * @param \ProjectBundle\Entity\Project $project
     *
     * @return Bid
     */
    public function setProject(\ProjectBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \ProjectBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }
}
