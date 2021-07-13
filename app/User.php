<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* TODO : add roles*/
    /* TODO : add admin seeder*/

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user){
            $user->profile()->create();
        });

        static::deleting(function ($user){
            $user->profile()->delete();
            $user->posts()->each(function($post) {
                $post->delete();
            });
            auth()->logout();
        });
    }

    public function profile() {
        return $this->hasOne(Profile::class);
    }

    public function posts() {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }
}
