<?php
namespace markuszeller\CleverReach\Model\Group;


use markuszeller\CleverReach\Model\TrackableChanges;

class Receiver extends TrackableChanges
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var int
     */
    protected $imported;

    /**
     * @var int
     */
    protected $bounced;

    /**
     * @var int
     */
    protected $activated;

    /**
     * @var int
     */
    protected $registered;

    /**
     * @var int
     */
    protected $deactivated;

    /**
     * @var string[]
     */
    protected $global_attributes = [
    ];

    public function __construct(string $id = null)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->trackChanges[] = 'id';
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->trackChanges[] = 'email';
        $this->email = mb_strtolower($email);
        return $this;
    }

    /**
     * @return int
     */
    public function getImported(): int
    {
        return $this->imported;
    }

    /**
     * @param int $imported
     * @return $this
     */
    public function setImported(int $imported)
    {
        $this->trackChanges[] = 'imported';
        $this->imported = $imported;
        return $this;
    }

    /**
     * @return int
     */
    public function getBounced(): int
    {
        return $this->bounced;
    }

    /**
     * @param int $bounced
     * @return $this
     */
    public function setBounced(int $bounced)
    {
        $this->trackChanges[] = 'imported';
        $this->bounced = $bounced;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivated(): int
    {
        return $this->activated;
    }

    /**
     * @param int $activated
     * @return $this
     */
    public function setActivated(int $activated)
    {
        $this->trackChanges[] = 'activated';
        $this->activated = $activated;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegistered(): int
    {
        return $this->registered;
    }

    /**
     * @param int $registered
     * @return $this
     */
    public function setRegistered(int $registered)
    {
        $this->trackChanges[] = 'registered';
        $this->registered = $registered;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeactivated(): int
    {
        return $this->deactivated;
    }

    /**
     * @param int $deactivated
     * @return $this
     */
    public function setDeactivated(int $deactivated)
    {
        $this->trackChanges[] = 'deactivated';
        $this->deactivated = $deactivated;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGlobalAttributes(): array
    {
        return $this->global_attributes;
    }

    /**
     * @param string[] $global_attributes
     * @return $this
     */
    public function setGlobalAttributes(array $global_attributes)
    {
        $this->trackChanges[] = 'global_attributes';
        $this->global_attributes = $global_attributes;
        return $this;
    }


}