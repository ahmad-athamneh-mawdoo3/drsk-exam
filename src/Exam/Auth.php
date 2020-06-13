<?php
namespace mawdoo3\drsk\exam;


class Auth  
{
    public static function isAuthed($user = null)
    {
        return isset($user) && !is_null($user) ? "$user logged in from exam" : 'not logged in exam';
    }
}
