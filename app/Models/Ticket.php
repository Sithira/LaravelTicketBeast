<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ticket
 *
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Event $event
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ticket whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ticket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ticket whereUserId($value)
 * @mixin \Eloquent
 */
class Ticket extends Model
{
    protected $fillable = [
    	'user_id',
	    'event_id'
    ];
	
	public function event()
	{
		return $this->belongsTo(Event::class);
    }
	
	public function user()
	{
		return $this->belongsTo(User::class);
    }
}
