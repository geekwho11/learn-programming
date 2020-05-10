/*
* @Author: GeekWho
* @Date:   2018-10-27 17:18:22
* @Last Modified by:   GeekWho
* @Last Modified time: 2018-10-28 15:08:10
*/
package main

import "fmt"

// fibonacci is a function that returns
// a function that returns an int.
// 闭包
func fibonacci() func() int {
    a, b := 0, 1
    return func() int {
        a, b = b, a+b
        return a
    }
}

//直接递归
func fibonacci_1(x int) int {
    if x == 1 {
        return 1
    }
    if x > 1 {
        return fibonacci_1(x-2) + fibonacci_1(x-1)
    }
    return 0
}

//尾部递归
func fibonacci_2(x ,a ,b int) int {
    if x == 0 {
        return a
    }
    return fibonacci_2(x-1,b,a+b)
}

//迭代
func fibonacci_3(x int) int {
    a,b := 1, 1
    for x >= 2 {
        x -= 1
        a, b = b, a+b
    }
    return a
}

func main() {
    f := fibonacci()
    for i := 1; i < 10; i++ {
        fmt.Println(f())
    }

    //计算第几个数字
    for i := 1; i < 10; i++ {
        fmt.Println(fibonacci_1(i))
    }

    for i := 1; i < 10; i++ {
        fmt.Println(fibonacci_2(i,0,1))
    }

    for i := 1; i < 10; i++ {
        fmt.Println(fibonacci_3(i))
    }
}
