<?php


namespace markuszeller\CleverReach\Model;


class Group extends TrackableChanges
{

    protected $id;
    protected $name;
    protected $last_mailing;
    protected $last_changed;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->trackChanges[] = 'id';
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->trackChanges[] = 'name';
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastMailing()
    {
        return $this->last_mailing;
    }

    /**
     * @param int $last_mailing
     * @return $this
     */
    public function setLastMailing($last_mailing)
    {
        $this->trackChanges[] = 'last_mailing';
        $this->last_mailing = $last_mailing;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastChanged()
    {
        return $this->last_changed;
    }

    /**
     * @param int $last_changed
     * @return $this
     */
    public function setLastChanged($last_changed)
    {
        $this->trackChanges[] = 'last_changed';
        $this->last_changed = $last_changed;
        return $this;
    }



}