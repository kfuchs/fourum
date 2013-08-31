<?php namespace Fourum\Models;

use Fourum\Storage\Group\GroupInterface;

/**
 * Eloquent Group Model
 */
class Group extends Eloquent implements GroupInterface
{
    protected $table = 'groups';

    /**
     * Get Users that are a member of this Group
     *
     * @return array
     */
    public function users()
    {
        return $this->belongsToMany('User');
    }
}
