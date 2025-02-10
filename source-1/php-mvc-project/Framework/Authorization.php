<?php

namespace Framework;

use Framework\Session;

class Authorization
{

    /**
     * Check if current logged in user owns a resource
     * 
     * @param int $resourceId
     * @return bool
     */

    public static function isOwner($resourceId)
    {
        //resource id ni dari session user->id boleh tengok dia implememnt kat lisitng controller function destroy
        // inspectAndDie($resourceId);
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int) $sessionUser['id'];
            return $sessionUserId === $resourceId;
        }

        return false;
    }
}
?>