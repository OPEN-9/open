<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	 // 静态验证
protected $patchValidate = true;
        protected $_validate = array(
 
             //为了便于模拟，我用的是验证条件是1,也就是在任何条件下都验证,其实所用的字段可能是不存在的
             //是不能够创建数据的
             //内置验证require不能为空
             //内置验证email，验证邮箱格式
             array('email','email','邮箱格式不正确',1),
             //内置验证url,验证网址
         );
}
?>