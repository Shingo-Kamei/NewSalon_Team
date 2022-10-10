<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Appoint extends Model
{
    protected $table = 'appoints';
    // use HasFactory;
    // protected $fillable = ['name', 'email', 'tel', 'password'];

    //モデルに関連づけるテーブル
    // protected $table = 'appoints';

    // //テーブルに関連づける主キー
    // protected $primarykey = 'master_id';

    // //登録・編集ができるカラムのリスト
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'tel',
    //     'password',
    // ];
}
