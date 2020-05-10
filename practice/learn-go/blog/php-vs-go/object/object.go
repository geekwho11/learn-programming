/*
* @Author: GeekWho
* @Date:   2019-01-24 15:45:17
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-24 15:45:22
*/
package main

import (
    "fmt"
    "math"
)
// 申明一个结构体
type HelloWorld struct {
    X, Y float64
}
// 添加一个Run方法，首字母大写为公用方法，小写为私有方法。
func (v HelloWorld) Run() float64 {
    return math.Sqrt(v.X*v.X + v.Y*v.Y)
}

func main() {
    // 初始化类
    v := HelloWorld{3, 4}
    fmt.Println(v.Run())
}
