<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Category extends \Entities\Category implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getTranslations()
    {
        $this->__load();
        return parent::getTranslations();
    }

    public function getTranslation($locale)
    {
        $this->__load();
        return parent::getTranslation($locale);
    }

    public function addTranslation(\Entities\CategoryTranslation $t)
    {
        $this->__load();
        return parent::addTranslation($t);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setSubtitle($subtitle)
    {
        $this->__load();
        return parent::setSubtitle($subtitle);
    }

    public function getSubtitle()
    {
        $this->__load();
        return parent::getSubtitle();
    }

    public function setParent($parent)
    {
        $this->__load();
        return parent::setParent($parent);
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function getRoot()
    {
        $this->__load();
        return parent::getRoot();
    }

    public function getLevel()
    {
        $this->__load();
        return parent::getLevel();
    }

    public function getChildren()
    {
        $this->__load();
        return parent::getChildren();
    }

    public function getLeft()
    {
        $this->__load();
        return parent::getLeft();
    }

    public function getRight()
    {
        $this->__load();
        return parent::getRight();
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function getCreatedBy()
    {
        $this->__load();
        return parent::getCreatedBy();
    }

    public function getUpdatedBy()
    {
        $this->__load();
        return parent::getUpdatedBy();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function addElement(\Entities\CategoryElement $elements)
    {
        $this->__load();
        return parent::addElement($elements);
    }

    public function removeElement(\Entities\CategoryElement $elements)
    {
        $this->__load();
        return parent::removeElement($elements);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'title', 'subtitle', 'lft', 'rgt', 'root', 'level', 'parent', 'children', 'translations', 'elements');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}