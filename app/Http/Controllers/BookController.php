<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function lendBook($user_id, $book_id)
    {
        $user = User::find($user_id);
        $book = Book::find($book_id);

        if (!$user || !$book || $book->user_id !== null) {
            return false;
        }

        
        $book->user_id = $user->id;
        $book->copies = 0;
        $book->save();

        return true; 
    }
    public function returnBook($book_id)
    {
        $book = Book::find($book_id);

        if (!$book || $book->user_id === null) {
            return false;
        }

        
        $book->user_id = null;
        $book->copies = 1;
        $book->save();

        return true;
    }
}
