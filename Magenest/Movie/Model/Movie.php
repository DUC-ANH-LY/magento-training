<?php

namespace Magenest\Movie\Model;

use Magenest\Movie\Api\Data\MovieInterface;

class Movie extends \Magento\Framework\Model\AbstractModel implements MovieInterface
{

    public function _construct()
    {
        $this->_init('Magenest\Movie\Model\ResourceModel\Movie');
    }

    public function getMovieId()
    {
        // TODO: Implement getEntityId() method.
        return $this->getData(self::MOVIE_ID);
    }
    public function getName()
    {
        // TODO: Implement getTitle() method.
        return $this->getData(self::NAME);

    }
}
