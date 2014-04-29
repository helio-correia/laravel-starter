<?php namespace Acme\Validation;

use Illuminate\Validation\Factory as Validator;

/**
 * Class FormValidator
 * @package Acme\Validation
 */
abstract class FormValidator
{

    /**
     * @var Validator
     */
    protected $validator;

    /**
     * @var
     */
    private $validation;

    /**
     * @param Validator $validator
     */
    function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }


    /**
     * @param array $formData
     * @throws ValidationException
     */
    public function validate(array $formData)
    {
        $this->validation = $this->validator->make($formData, $this->getValidationRules());

        if ($this->validation->fails())
        {
            throw new FormValidationException('Validation failed', $this->getValidationErrors());
        }
        else
        {
            return true;
        }
    }


    /**
     * @return mixed
     */
    protected function getValidationRules()
    {
        return $this->rules;
    }

    /**
     * @return mixed
     */
    protected function getValidationErrors()
    {
        return $this->validation->errors();
    }
}
