# oneLine
## 一行一坑一经验
* isset(null) === false 如果是null,也会返回false 坑
* foreach ($arr as &$value) 循环结束后，$value留下了对$arr最后一个元素的引用  坑
* 在循环内执行查询 坑
* empty() ＜PHP5.0与≥PHP 5.0有差异 坑
* 判断字符长度：isset
* 分割字符串：split > explode
* 函数快于类方法
* file_get_contents代替file, fopen...
* 静态内存生成于程序开始，实例方法内存生成于运行，静态更快
* ++$i 快于 $i++
* 不要随意复制变量，会加大内存
* 循环里不要申明变量
* 变量初始化
* 函数里字符串参数比数组参数好
* 数组元素加引号$data['a']
* 循环foreach好于for while
* NoSQL缓存
* memcached要存储的值，字符串和数值直接存储，其他类型序列化后存储。
* memcached写入缓存的数据的失效时间:永不过期 or <= 30天
