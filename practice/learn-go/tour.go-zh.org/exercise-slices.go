/*
* @Author: GeekWho
* @Date:   2018-10-27 17:19:22
* @Last Modified by:   GeekWho
* @Last Modified time: 2018-10-28 16:28:50
* @run https://play.golang.org/
*/
package main

import "golang.org/x/tour/pic"

func Pic(dx, dy int) [][]uint8 {
    //申明uint8类型的一维数组
    var x []uint8
    //申明存放uint8类型的二维数组
    var y [][]uint8
    // 循环添加元素 注意数组转换
    for i := 0; i < dx; i++ {
        x = append(x, uint8(i))
    }
    // 循环添加元素到二维数组
    for i := 0; i < dy; i++ {
        y = append(y,x)
    }
    return y
}

func main() {
    pic.Show(Pic)
}
