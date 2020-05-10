/*
* @Author: GeekWho
* @Date:   2018-10-27 17:21:16
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-31 20:31:33
*/
package main

// 引入reader包
import "golang.org/x/tour/reader"

// 定义MyReader结构体
type MyReader struct{}

// TODO: Add a Read([]byte) (int, error) method to MyReader.
// 为这个结构体实现Read，主要输入参数b []byte，输出为int, error
func (m MyReader) Read(b []byte) (int, error) {
    // 循环获取数组的键值对
    for i := range b {
        // 每一个输入都设置为A
        b[i] = 'A'
    }
    return len(b), nil
}

func main() {
    // 调用Validate方法
    reader.Validate(MyReader{})
}
