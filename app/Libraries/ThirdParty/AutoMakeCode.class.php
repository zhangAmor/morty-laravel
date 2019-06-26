<?php
/**
 * Created by PhpStorm.
 * User: phpzj
 * Date: 2018/10/31
 * Time: 18:10
 */
namespace ThirdParty\AutoMakeCode;
class AutoMakeCode
{
    /**生成model文件
     * @param $model_name
     * @param $pk_id
     */
    public function makeModel($model_name,$pk_id)
    {
        $classHead = <<<CLASSHEAD
<?php
/**
 * Created by PhpStorm.
 * User: phpzj
 * Date: 2018/7/6
 * Time: 12:02
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //指定表名

CLASSHEAD;

        $classBody = " protected \$table = '".$model_name."';

    //制定表主键
    protected \$primaryKey = '".$pk_id."';";

        $classEnd = <<<CLASSEND
// 关掉自动更新时间

    public \$timestamps = false;



}
CLASSEND;

        $content = $classHead.$classBody.$classEnd;

        $filename = app_path('Model/'.ucfirst($model_name).'.php');

        file_put_contents($filename,$content);

    }
}