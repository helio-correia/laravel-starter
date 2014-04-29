<?php namespace Acme\Validation;

class Login extends FormValidator {

    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        'username'  => 'required',
        'password'  => 'required'
    ];
} 