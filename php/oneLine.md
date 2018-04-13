# oneLine
## 一行一坑一经验
* isset(null) === false 如果是null,也会返回false 坑
* foreach ($arr as &$value) 循环结束后，$value留下了对$arr最后一个元素的引用  坑
* 在循环内执行查询 坑
* empty() ＜PHP5.0与≥PHP 5.0有差异 坑
