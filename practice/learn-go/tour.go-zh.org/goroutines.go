/*
* @Author: GeekWho
* @Date:   2018-10-27 22:15:38
* @Last Modified by:   GeekWho
* @Last Modified time: 2018-10-28 14:13:02
* @see http://wiki.jikexueyuan.com/project/the-way-to-go/14.1.html
*/
package main

import (
    "fmt"
    "time"
)

func say1(s string) {
    for i := 0; i < 5; i++ {
        fmt.Println("In say1()-",i,time.Now().UnixNano())
        time.Sleep(100 * time.Millisecond)
        fmt.Println(s)
        fmt.Println("end say1()",i,time.Now().UnixNano())
    }
}

func say2(s string) {
    for i := 0; i < 5; i++ {
        fmt.Println("In say2()-",i,time.Now().UnixNano())
        time.Sleep(100 * time.Millisecond)
        fmt.Println(s)
        fmt.Println("end say2()",i,time.Now().UnixNano())
    }
}

func main() {
    fmt.Println("In main()---",time.Now().UnixNano())
    go say1("world")
    say2("hello")
}
