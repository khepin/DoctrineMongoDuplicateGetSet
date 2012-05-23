<?php
namespace Acme\DemoBundle\Document;

trait Timestampable
{
    /**
     * @ODM\Date
     */
    private $createdAt;

    public function getCreatedAt()
    {
        return $createdAt;
    }

    public function setCreatedAt($date)
    {
        $this->createdAt = $date;
    }
}