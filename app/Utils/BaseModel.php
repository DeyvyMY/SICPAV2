<?php


namespace App\Utils;

use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class BaseModel  extends Model
{
    protected $validationRules = [];

    /**
     * Validate model against rules
     * @param array $inputArray optional array of validation rules. If not passed will validate against object's current values
     * @throws ValidationException if validation fails. Used for displaying errors in view
     */
    public function validate(array $inputArray) {
        if (empty($inputArray))
            $inputArray = $this->toArray();

        $validator = Validator::make($inputArray,$this->validationRules);
        if ($validator->fails())
            throw new ValidationException($validator);
    }

    /**
     * Attempt to validate input, if successful fill this object
     * @param array $inputArray associative array of values for this object to validate against and fill this object
     * @throws ValidationException if validation fails. Used for displaying errors in view
     */
    public function validateAndFill($inputArray) {
        // must validate input before injecting into model
        $this->validate($inputArray);
        $this->fill($inputArray);
    }
}