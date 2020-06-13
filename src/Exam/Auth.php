<?php
namespace Mawdoo3\Drsk\Exam;


class Auth  
{
    public static function isAuthed($user = null)
    {
        return isset($user) && !is_null($user) ? "$user logged in from exam" : 'not logged in exam';
    }
}
