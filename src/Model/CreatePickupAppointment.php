<?php

namespace Picqer\BolRetailerV8\Model;

// This class is auto generated by OpenApi\ModelGenerator
class CreatePickupAppointment extends AbstractModel
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
            'address' => [ 'model' => CreateAddress::class, 'array' => false ],
            'pickupTimeSlot' => [ 'model' => CreatePickupTimeSlot::class, 'array' => false ],
            'commentToTransporter' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var CreateAddress
     */
    public $address;

    /**
     * @var CreatePickupTimeSlot
     */
    public $pickupTimeSlot;

    /**
     * @var string A comment to the transporter regarding the pickup appointment.
     */
    public $commentToTransporter;
}
