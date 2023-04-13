<?php

namespace App\Filters\V1;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter{
    
    protected $allowedParms= [
        'name'=>['eq'],
        'type'=>['eq'],
        'email'=>['eq'],
        'address'=>['eq'],
        'city'=>['eq'],
        'state'=>['eq'],
        'phone'=>['eq'],
        'postalCode'=>['eq','gt','lt']
    ];

    protected $columnMap = [
        'postalCode'=>'postal_code'
    ];

    protected $operaterMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'ne' => '!=',
        'lte' => '<=',
        'gte' => '>=',
    ];
} 