/*
* @Author: GeekWho
* @Date:   2019-01-24 16:43:04
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-24 16:55:24
*/
package main

import (
    "fmt"
    "time"
)

func say(s string , b bool) {
    if b {
        time.Sleep(100 * time.Millisecond)
    }
    fmt.Println(s,time.Now().UnixNano())
}

func case1() {
    fmt.Println("In case1()-",time.Now().UnixNano())
    go say("case1 hello go1",false)
    say("case1 hello main",false)
    go say("case1 hello go2",false)
}

func case2() {
    fmt.Println("In case2()-",time.Now().UnixNano())
    go say("case2 hello go1" , true)
    say("case2 hello main",false)
    go say("case2 hello go2",false)
}

func case3() {
    fmt.Println("In case3()-",time.Now().UnixNano())
    go say("case3 hello go1",false)
    say("case3 hello main",false)
    go say("case3 hello go2" , true)
}

func main() {
    fmt.Println("In main()---",time.Now().UnixNano())
    case1()
    case2()
    case3()
    time.Sleep(time.Second)
}
