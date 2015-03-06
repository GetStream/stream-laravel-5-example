<?php

use Illuminate\Database\Eloquent\SoftDeletes;

class Pin extends Eloquent {
    use GetStream\StreamLaravel\Eloquent\ActivityTrait;
    use SoftDeletes;

    protected $table = 'pins';
    protected $fillable = array('user_id', 'item_id', 'influencer_id');
    protected $dates = ['deleted_at'];

    public function item()
    {
        return $this->belongsTo('Item');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}
