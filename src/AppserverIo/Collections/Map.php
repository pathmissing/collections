<?php

/**
 * \AppserverIo\Collections\Map
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   Collections
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2014 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/collections
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Collections;

/**
 * Interface of all Map objects.
 *
 * @category  Library
 * @package   Collections
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2014 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/collections
 * @link      http://www.appserver.io
 */
interface Map extends Collection
{

    /**
     * This method returns the internal array
     * with the keys and the related values.
     *
     * @return array Holds the array with keys and values
     */
    public function toIndexedArray();
}
