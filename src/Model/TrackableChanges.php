<?php


namespace markuszeller\CleverReach\Model;

use JsonSerializable;

class TrackableChanges implements JsonSerializable
{
    protected $trackChanges = [];

    public function jsonSerialize()
    {
        $return = [];
        foreach (array_unique($this->trackChanges) as $key) {
            $return[$key] = $this->{$key};
        }
        return $return;
    }

    public function toArray()
    {
        $reflect = new \ReflectionClass($this);
        $vars = $reflect->getProperties(\ReflectionProperty::IS_PROTECTED);

        $data = [];
        foreach ($vars as $privateVar) {
            $data[$privateVar->getName()] =  $this->{$privateVar->getName()};
            unset($data['trackChanges']);
        }

        return $data;
    }

    /**
     * @param array $data
     */
    public function exchangeArray($data)
    {
        foreach (array_keys($data) as $field) {
            $setter = null;
            $setterWords = explode('_', $field);
            foreach ($setterWords as $setterWord) {
                $setter .= ucfirst($setterWord);
            }
            $setter = 'set' . $setter;

            if (method_exists($this, $setter)) {
                $this->$setter($data[$field]);
            }
        }

        $this->trackChanges = [];
    }
}
