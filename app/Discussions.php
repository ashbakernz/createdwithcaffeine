<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussions extends Model
{
    protected $table = 'discussion';

    public function discussionReplies()
    {
        return $this->hasMany(DiscussionReplies::class);
    }
}
