<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
	/**
	 * Create full name accessor
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return mixed
	 */
	public function full_name()	{
		return $this->first_name . " " . $this->last_name;
	}

    /**
     * Get the phone number of the settings
     */
    public function concat_phone()
    {
        if ($this->phone != null) {
            if (strlen($this->phone) == 10) {
                $first3 = substr($this->phone, 0, 3);
                $second3 = substr($this->phone, 3, 3);
                $last4 = substr($this->phone, 6);

                $concatPhone = $first3 . '-' . $second3 . '-' . $last4;
            } else {
                $concatPhone = $this->phone;
            }
        } else {
            $concatPhone = $this->phone;
        }

        return $concatPhone;
    }

	/**
	 * Scope a query to only include most recent consult request
	 * that hasn't been responded to yet.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeLeastRecent($query)	{
		return $query->orderBy('created_at', 'asc')
			->get();
	}
}
