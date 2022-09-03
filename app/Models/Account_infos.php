<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $account
 * @property string $name
 * @property string $gender
 * @property string $birthday
 * @property string $mail
 * @property string $note
 */
class Account_infos extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'account_info';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'account', 'name', 'gender', 'birthday', 'mail', 'note'];
}
