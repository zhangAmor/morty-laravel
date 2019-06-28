<p align="center"><img src="http://blog.zhujunwei.top/wp-content/uploads/2018/07/timg.gif"></p>

# About Morty&Laravel

**这是一次改造尝试，是一次自我锻炼**

### 说明

Laravel 是最有名的 PHP 框架，Github 上两万多 star，比第二第三多出两倍；
1. 它的语法优雅，很多方法都不用看文档直接就能推算出来；
2. 全栈，该有的都有了，方便快速构建原型；
3. 扩展齐全，大量的扩展包，有 WordPress 的感觉；
4. 文档齐全；
5. 最有名绝对是选择的关键点，要用就用第一的，遇到问题，随便 Google 下也是一堆答案，因为用的人多。

通过不断的学习laravel框架，也偶尔有些心得，现在就把心得融入到这个项目中去，也算是一种学习吧

### version 1.0.1

众所周知，laravel的Model类文件是直接建立在app文件夹下的，文件少了还好，后期文件多了以后，会显得异常杂乱。
因此建立Model层，从而将项目结构规划的更加清晰，当然原来的生成Model文件的命令还是会生成到app下，但是这版laravel
中使用新添命令行也能实现Model添加。

1. 新增Model分层
2. 使用命令`php artisan laravel:makeModel {tabelName} {pk}`来添加新Model，其中`tabelName`是表名称，`pk`是表主键，都为必填
3. 新增`function.php`里面涵盖一些还比较使用的全局函数。直接调用不用任何引入
4. 新增`Libraries`第三方类文件夹，该文件夹已经处理过自动加载，可以直接使用命名空间进行引入，该文件夹适合放自己封装的类和`composer`下载不了的类。如果`composer`能下载还是推荐用`composer`
5. `predis`已默认集成

