<?php

// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="User")
*/
class User extends BaseUser
{

    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="user")
     * @Assert\Choice(max=1, minMessage = "You must not choose more than one option.")
     */
    private $categories;
    
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="user")
     */
    private $tasks;

    public function __construct()
    {
        parent::__construct();

        $this->tasks = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }


    /**
     * Add tasks
     *
     * @param \AppBundle\Entity\Task $tasks
     * @return User
     */
    public function addTask(\AppBundle\Entity\Task $task)
    {
        $this->tasks[] = $task;
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

    /**
     * Add categories
     *
     * @param \AppBundle\Entity\Category $categories
     * @return User
     */
    public function addCategory(\AppBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;
        $category->setUser($this);

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \AppBundle\Entity\Category $categories
     */
    public function removeCategory(\AppBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
