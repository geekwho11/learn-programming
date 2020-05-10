/*
* @Author: GeekWho
* @Date:   2018-10-27 17:20:59
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-03-05 23:01:22
*/
package main

import (
    "fmt"
)
//定义名叫ErrNegativeSqrt的类型，返回值为float64
type ErrNegativeSqrt float64

func (e ErrNegativeSqrt) Error() string {
    return fmt.Sprintf("cannot Sqrt negative number: %v",float64(e))
}

func Sqrt(x float64) (float64, error) {
    if x < 0 {
        return -2,ErrNegativeSqrt(-2)
    }
    z := 1.0
     for i :=1;(z - x) < 0.001 && i < 10;i++ {
        z -= (z*z - x) / (2*z)
     }
     return z, nil
}
func main() {
    fmt.Println(Sqrt(2))
    fmt.Println(Sqrt(-2))
}
