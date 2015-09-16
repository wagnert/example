<?php

/**
 * AppserverIo\Apps\Example\Actions\Assertion
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-apps/example
 * @link      http://www.appserver.io
 */
namespace AppserverIo\Apps\Example\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctrine entity that represents an abstract entity.
 *
 * @author Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link https://github.com/appserver-io-apps/example
 * @link http://www.appserver.io
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 */
class AbstractEntity
{

    /**
     *
     * @var \DateTime $createdAt
     * @ORM\Column(name="created_at", type="integer", nullable=false)
     */
    protected $createdAt;

    /**
     *
     * @var \DateTime $updatedAt
     * @ORM\Column(name="updated_at", type="integer", nullable=false)
     */
    protected $updatedAt;

    /**
     *
     * @var int $deleted
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    protected $deleted = 0;

    /**
     *
     * @return integer|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     *
     * @param integer $createdAt
     */
    protected function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     *
     * @return integer|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     *
     * @param integer $updatedAt
     */
    protected function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     *
     * @return int
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     *
     * @param int $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updateCreatedUpdatedDate()
    {

        $this->setUpdatedAt(time());

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(time());
        }
    }
}