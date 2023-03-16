<?php

declare(strict_types=1);

use Illuminate\Database\Query\Expression;
use Tpetry\QueryExpressions\Language\Alias;

it('can alias a column')
    ->expect(new Alias('val', 'value'))
    ->toBeExecutable(['val int'])
    ->toBeMysql('`val` as `value`')
    ->toBePgsql('"val" as "value"')
    ->toBeSqlite('"val" as "value"')
    ->toBeSqlsrv('[val] as [value]');

it('can alias an expression')
    ->expect(new Alias(new Expression(1), 'num'))
    ->toBeExecutable(['val int'])
    ->toBeMysql('1 as `num`')
    ->toBePgsql('1 as "num"')
    ->toBeSqlite('1 as "num"')
    ->toBeSqlsrv('1 as [num]');
