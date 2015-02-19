<?php namespace Stanley\Geocodio;

class Data
{
    /**
     * Response Body
     * @var object
     */
    public $response = array();

    /**
     * Class Constructor
     *
     * @param obj $data Response data
     */
    public function __construct($data)
    {
        $this->response = json_decode($data);
    }
}
