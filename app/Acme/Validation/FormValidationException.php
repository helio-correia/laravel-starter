<?php namespace Acme\Validation;


use Illuminate\Support\MessageBag;

class FormValidationException extends \Exception{

    /**
     * @var \Illuminate\Support\MessageBag
     */
    protected $errors;

    function __construct($message, MessageBag $errors)
    {
        $this->errors = $errors;

        parent::__construct($message);
    }

    public function getErrors()
    {
        return $this->errors;
    }
} 