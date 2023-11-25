<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Http\Controllers\BookController;

final class LendBook
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $bookController = new BookController();
        return $bookController->lendBook($args['user_id'], $args['book_id']);
    }
}
