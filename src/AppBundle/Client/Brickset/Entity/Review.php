<?php

namespace AppBundle\Client\Brickset\Entity;

class Review
{

    /**
     * @var string $author
     */
    protected $author = null;

    /**
     * @var \DateTime $datePosted
     */
    protected $datePosted = null;

    /**
     * @var int $overallRating
     */
    protected $overallRating = null;

    /**
     * @var int $parts
     */
    protected $parts = null;

    /**
     * @var int $buildingExperience
     */
    protected $buildingExperience = null;

    /**
     * @var int $playability
     */
    protected $playability = null;

    /**
     * @var int $valueForMoney
     */
    protected $valueForMoney = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $review
     */
    protected $review = null;

    /**
     * @var boolean $HTML
     */
    protected $HTML = null;

    /**
     * @param \DateTime $datePosted
     * @param int $overallRating
     * @param int $parts
     * @param int $buildingExperience
     * @param int $playability
     * @param int $valueForMoney
     * @param boolean $HTML
     */
    public function __construct(\DateTime $datePosted, $overallRating, $parts, $buildingExperience, $playability, $valueForMoney, $HTML)
    {
      $this->datePosted = $datePosted->format(\DateTime::ATOM);
      $this->overallRating = $overallRating;
      $this->parts = $parts;
      $this->buildingExperience = $buildingExperience;
      $this->playability = $playability;
      $this->valueForMoney = $valueForMoney;
      $this->HTML = $HTML;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param string $author
     * @return Review
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatePosted()
    {
      if ($this->datePosted == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->datePosted);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \DateTime $datePosted
     * @return Review
     */
    public function setDatePosted(\DateTime $datePosted)
    {
      $this->datePosted = $datePosted->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getOverallRating()
    {
      return $this->overallRating;
    }

    /**
     * @param int $overallRating
     * @return Review
     */
    public function setOverallRating($overallRating)
    {
      $this->overallRating = $overallRating;
      return $this;
    }

    /**
     * @return int
     */
    public function getParts()
    {
      return $this->parts;
    }

    /**
     * @param int $parts
     * @return Review
     */
    public function setParts($parts)
    {
      $this->parts = $parts;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuildingExperience()
    {
      return $this->buildingExperience;
    }

    /**
     * @param int $buildingExperience
     * @return Review
     */
    public function setBuildingExperience($buildingExperience)
    {
      $this->buildingExperience = $buildingExperience;
      return $this;
    }

    /**
     * @return int
     */
    public function getPlayability()
    {
      return $this->playability;
    }

    /**
     * @param int $playability
     * @return Review
     */
    public function setPlayability($playability)
    {
      $this->playability = $playability;
      return $this;
    }

    /**
     * @return int
     */
    public function getValueForMoney()
    {
      return $this->valueForMoney;
    }

    /**
     * @param int $valueForMoney
     * @return Review
     */
    public function setValueForMoney($valueForMoney)
    {
      $this->valueForMoney = $valueForMoney;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return Review
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getReview()
    {
      return $this->review;
    }

    /**
     * @param string $review
     * @return Review
     */
    public function setReview($review)
    {
      $this->review = $review;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHTML()
    {
      return $this->HTML;
    }

    /**
     * @param boolean $HTML
     * @return Review
     */
    public function setHTML($HTML)
    {
      $this->HTML = $HTML;
      return $this;
    }

}
