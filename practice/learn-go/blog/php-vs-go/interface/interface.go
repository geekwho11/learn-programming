/*
* @Author: GeekWho
* @Date:   2019-01-24 15:46:29
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-24 22:27:17
*/
package main

import (
    "fmt"
)
// 申明接口有2个方法
type Switchs interface {
    On() string
    Off() string
}

// 申明一个结构体，类似PHP的Light类
type Light struct {
    Status string
}
//添加一个On方法
func (l Light) On() string {
    l.Status = "light is on"
    return l.Status
}
//添加一个Off方法
func (l Light) Off() string {
    l.Status = "light is off"
    return l.Status
}

func main() {
    // 初始化类
    l := Light{}
    fmt.Println(l.On())
    fmt.Println(l.Off())
}
