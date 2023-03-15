<?php

namespace App\Traits;


use App\Models\Room;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasRoomRelations
{
    /**
     * función de relación entre Hoteles y Asiganaciones.
     */

    public function hotels(): hasMany
    {
        return $this->hasMany(Room::class, 'hotel_id');
    }
}
