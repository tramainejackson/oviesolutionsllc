<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;

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
     * Get the address of the settings
     */
    public function concat_address(): string
    {
        $address = '';

        if ($this->city != '') {
            $address .= $this->city . ', ';
        }

        if ($this->state != '') {
            $address .= $this->state;

            if ($this->zip != '') {
                $address .= ', ' . $this->zip;
            }
        } else {
            if ($this->zip != '') {
                $address .= $this->zip;
            }
        }

        return $address;
    }
}
