<?php


namespace App\Utils;


use Exception;

abstract  class BaseResourceService
{
    protected $dataService;
    protected $modelClassName;

    /**
     * Create a resource
     * @param array $inputArray of key value pairs of this object to create
     * @returns $object
     * @return object
     */
    public function create($inputArray) {
        try {
            $arr = $inputArray;
            $object = new $this->modelClassName();
            $object->validateAndFill($arr);
            $this->dataService->create($object);
            return $object;
        }
        catch (Exception $exception) {
            $this->handleError($exception);
        }
    }
}