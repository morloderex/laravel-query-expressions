<?php

declare(strict_types=1);

namespace Tpetry\QueryExpressions\Operator\Bitwise;

use Tpetry\QueryExpressions\Operator\OperatorExpression;

class BitAnd extends OperatorExpression
{
    protected function operator(): string
    {
        return '&';
    }
}
