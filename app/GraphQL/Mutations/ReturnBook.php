<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Http\Controllers\BookController;

final class ReturnBook
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $bookController = new BookController();
        return $bookController->returnBook($args['book_id']);
    }
}
