<?php

namespace Webkul\Grid\Model;

use Webkul\Grid\Api\Data\MovieInterface;

class Movie extends \Magento\Framework\Model\AbstractModel
//    implements MovieInterface
{
//    /**
// * CMS page cache tag.
// */
//    const CACHE_TAG = 'magenest_movie';
//
//    /**
//     * @var string
//     */
//    protected $_cacheTag = 'magenest_movie';
//
//    /**
//     * Prefix of model events names.
//     *
//     * @var string
//     */
//    protected $_eventPrefix = 'magenest_movie';

    /**
     * Initialize resource model.
     */

    public function _construct()
    {
        $this->_init('Magenest\Movie\Model\ResourceModel\Movie');
    }

//    public function getMovieId()
//    {
//        // TODO: Implement getEntityId() method.
//        return $this->getData(self::MOVIE_ID);
//    }
//    public function getName()
//    {
//        // TODO: Implement getTitle() method.
//        return $this->getData(self::NAME);
//
//    }
}
