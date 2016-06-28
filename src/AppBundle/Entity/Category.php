<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="home", type="string", length=255)
     */
    private $home;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="family", type="string", length=255)
     */
    private $family;

    /**
     * @var string
     *
     * @ORM\Column(name="friends", type="string", length=255)
     */
    private $friends;

    /**
     * @var string
     *
     * @ORM\Column(name="garden", type="string", length=255)
     */
    private $garden;

    /**
     * @var string
     *
     * @ORM\Column(name="hobby", type="string", length=255)
     */
    private $hobby;

    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="categories")
     */
    private $user;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="category")
     */
    private $tasks;

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
     * Set home
     *
     * @param string $home
     * @return Category
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return Category
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set family
     *
     * @param string $family
     * @return Category
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string 
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set friends
     *
     * @param string $friends
     * @return Category
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return string 
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set garden
     *
     * @param string $garden
     * @return Category
     */
    public function setGarden($garden)
    {
        $this->garden = $garden;

        return $this;
    }

    /**
     * Get garden
     *
     * @return string 
     */
    public function getGarden()
    {
        return $this->garden;
    }

    /**
     * Set hobby
     *
     * @param string $hobby
     * @return Category
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;

        return $this;
    }

    /**
     * Get hobby
     *
     * @return string 
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Category
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tasks
     *
     * @param \AppBundle\Entity\Task $tasks
     * @return Category
     */
    public function addTask(\AppBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;
        $task->setUser($this);

        return $this;
    }

    /**
     * Remove tasks
     *
     * @param \AppBundle\Entity\Task $tasks
     */
    public function removeTask(\AppBundle\Entity\Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}
