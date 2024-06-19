<?php
/**
 * Grid MovieInterface.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */

namespace Webkul\Grid\Api\Data;

//use Magenest\Movie\Api\Data\varchar;

interface MovieInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const MOVIE_ID = 'movie_id';
    const NAME = 'name';

   /**
    * Get EntityId.
    *
    * @return int
    */
    public function getMovieId();

   /**
    * Set EntityId.
    */
//    public function setEntityId($entityId);

   /**
    * Get Title.
    *
    * @return varchar
    */
    public function getName();

   /**
    * Set Title.
    */
//    public function setTitle($title);

}
