<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoiceFilter extends ApiFilter {
    protected array $safeParams = [
      'customerId' => ['eq'],
      'amount' => ['eq', 'gt', 'gte', 'lt', 'lte'],
      'status' => ['eq', 'ne'],
      'billedDate' => ['eq', 'gt', 'gte', 'lt', 'lte'],
      'paidDate' => ['eq'],
    ];

    protected array $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date',
    ];

    protected array $operatorMap = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
        'ne' => '!=',
    ];
}
