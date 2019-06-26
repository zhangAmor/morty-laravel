<?php
/**
 * Created by PhpStorm.
 * User: phpzj
 * Date: 2018/7/6
 * Time: 12:02
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //指定表名

    protected $table = 'user';

    //制定表主键
    protected $primaryKey = 'id';

    // 关掉自动更新时间

    public $timestamps = false;




}