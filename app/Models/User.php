<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use Notifiable, MustVerifyEmailTrait; //加载使用 MustVerifyEmail 可以看到以下三个方法 
                                          //hasVerifiedEmail() 檢測用戶Email是否已認證
                                          //markEmailAsVerified() 將用戶標示為已認證
                                          //sendEmailVerificationNotification()發送Email認證的消息通知，觸發郵件的發送

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
