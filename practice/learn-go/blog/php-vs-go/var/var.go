/*
* @Author: GeekWho
* @Date:   2019-01-24 15:34:27
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-24 15:34:33
*/
package main

import (
    "fmt"
)

func main() {
    // 申明变量geekwho,并自动赋值为0，默认Go会推断为int的类型
    geeks1 := 0
    // 你也可以直接申明为int类型的变量geekwho
    var geeks2 int
    // 申明两个变量i，j为int的类型并初始化
    var i, j int = 1, 2
    // 申明3个变量并初始化
    var go_, php, java = true, false, "no!"
    // 申明了变量，请立即使用
    fmt.Println(geeks1,geeks2,i,j,go_,php,java)
}
