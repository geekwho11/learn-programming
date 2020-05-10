/*
* @Author: GeekWho
* @Date:   2018-10-27 17:19:39
* @Last Modified by:   GeekWho
* @Last Modified time: 2018-10-28 16:52:06
* @see https://github.com/golang/tour/blob/master/wc/wc.go
*/
package main

import (
    "golang.org/x/tour/wc"
    "strings"
)

/**
 * "I am learning Go!"
 * "The quick brown fox jumped over the lazy dog."
 * "I ate a donut. Then I ate another donut."
 * "A man a plan a canal panama."
 */
func WordCount(s string) map[string]int {
    str := strings.Fields(s)
    m := make(map[string]int)
    for i := 0; i < len(str); i++ {
        k := str[i]
        //检查当前key是否存在
        v,ok := m[k]
        if ok {
            m[k] = v + 1
        } else {
            m[k] = 1
        }
    }
    return m
}

func main() {
    wc.Test(WordCount)
}
