<?php

namespace DoctrineExtensions\Query\Oracle;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;

/**
 * @author Andréia Bohner <andreiabohner@gmail.com>
 */
class Minute extends FunctionNode
{
    private $date;

    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker): string
    {
        return sprintf(
            'EXTRACT(MINUTE FROM %s)',
            $sqlWalker->walkArithmeticPrimary($this->date)
        );
    }

    public function parse(\Doctrine\ORM\Query\Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->date = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
