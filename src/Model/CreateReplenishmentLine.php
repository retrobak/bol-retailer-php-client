<?php

namespace Picqer\BolRetailerV8\Model;

// This class is auto generated by OpenApi\ModelGenerator
class CreateReplenishmentLine extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'ean' => [ 'model' => null, 'array' => false ],
            'quantity' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The EAN number associated with this product.
     */
    public $ean;

    /**
     * @var int The number of announced items.
     */
    public $quantity;
}
