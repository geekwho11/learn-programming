/*
* @Author: GeekWho
* @Date:   2018-10-27 17:18:51
* @Last Modified by:   GeekWho
* @Last Modified time: 2018-10-28 15:09:23
*/
package main

import (
    "fmt"
)

//判断在执行的次数内且差异小于0.001
func Sqrt(x float64) float64 {
     z := 1.0
     for i :=1;(z - x) < 0.001 && i < 10;i++ {
        z -= (z*z - x) / (2*z)
        fmt.Println(i,z)
     }
     return z
}

func main() {
    fmt.Println(Sqrt(2))
}
