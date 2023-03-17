<?php

namespace App\Models\Testprep;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PasswordResets extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
	protected $guard = 'tesprepstudents';
	
	protected $table = 'password_resets';
	
	protected $connection = 'mysql_testprep';
	
	protected $fillable = ['email', 'token'];
	
	/* protected $hidden = [
      'password', 'remember_token',
    ]; */
	
   
}
