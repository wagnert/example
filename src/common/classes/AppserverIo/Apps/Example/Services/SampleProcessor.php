<?php

/**
 * AppserverIo\Apps\Example\Services\SampleProcessor
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Apps
 * @subpackage Example
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-apps/example
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Apps\Example\Services;

use AppserverIo\Apps\Example\Entities\Sample;

/**
 * A singleton session bean implementation that handles the
 * data by using Doctrine ORM.
 *
 * @category   Appserver
 * @package    Apps
 * @subpackage Example
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-apps/example
 * @link       http://www.appserver.io
 */
interface SampleProcessorInterface
{

    /**
     * Loads and returns the entity with the ID passed as parameter.
     *
     * @param integer $id The ID of the entity to load
     *
     * @return object The entity
     */
    public function load($id);

    /**
     * Persists the passed entity.
     *
     * @param Sample $entity The entity to persist
     *
     * @return Sample The persisted entity
     */
    public function persist(Sample $entity);

    /**
     * Deletes the entity with the passed ID.
     *
     * @param integer $id The ID of the entity to delete
     *
     * @return array An array with all existing entities
     */
    public function delete($id);

    /**
     * Returns an array with all existing entities.
     *
     * @return array An array with all existing entities
     */
    public function findAll();
}
