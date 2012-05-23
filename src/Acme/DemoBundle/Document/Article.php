<?php
namespace Acme\DemoBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Article
{

    use Timestampable;

    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\String
     */
    private $title;

    /**
     * @ODM\String
     */
    private $content;
    /**
     * @var date $createdAt
     */
    protected $createdAt;
}
