<?php
namespace Simonetti\Rovereti;

/**
 * Class ObjectToArray
 * @package Simonetti\Rovereti
 */
trait ObjectToArray
{
    /**
     * @return array
     * @throws \Exception
     */
    public function toArray()
    {
        $data = get_object_vars($this);

        $return = [];

        foreach ($data as $key => $value) {
            if (is_scalar($value) || $value instanceof \DateTime) {
                $return[$key] = $value;
                continue;
            }

            if (!$value instanceof ToArrayInterface) {
                throw new \Exception("Valor inválido na classe " . get_class($this));
            }

            $return = array_merge($return, $value->toArray());
        }

        return $return;
    }
}