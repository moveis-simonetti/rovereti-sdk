<?php

namespace Simonetti\Rovereti;

/**
 * Class ObjectDataUtil
 * @package Simonetti\Rovereti
 */
trait ObjectDataUtil
{
    /**
     * @param string $key
     * @param $value
     * @return mixed
     */
    protected function populateMap(string $key, $value)
    {
        return $value;
    }

    /**
     * @param \stdClass $data
     * @return $this
     */
    public function populate(\stdClass $data)
    {
        foreach ($data as $key => $value) {
            $this->{ucfirst($key)} = $this->populateMap($key, $value);
        }

        return $this;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function toArray()
    {
        $data = get_object_vars($this);

        $return = [];

        foreach ($data as $key => $value) {
            if (is_null($value)) {
                continue;
            }

            if (is_scalar($value)) {
                $return[$key] = $value;
                continue;
            }

            if (!$value instanceof ToArrayInterface) {
                throw new \Exception("Propriedade \"{$key}\" com valor inválido na classe " . get_class($this));
            }

            $return = array_merge($return, $value->toArray());
        }

        return $return;
    }
}