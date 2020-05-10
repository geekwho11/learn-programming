/*
* @Author: GeekWho
* @Date:   2019-01-24 17:43:24
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-24 21:54:47
*/
package main

import (
    "testing"
    "github.com/stretchr/testify/assert"
    "fmt"
    "io/ioutil"
    "net/http"
)

func TestRun(t *testing.T) {
    req, err := http.Get("http://0.0.0.0:2019")
    if err != nil {
        fmt.Println("请求失败1")
    }

    body, err := ioutil.ReadAll(req.Body)
    req.Body.Close()
    if err != nil {
        fmt.Println("请求失败2")
    }

    assert.Equal(t, 200, req.StatusCode)
    assert.Equal(t, "text/plain; charset=utf-8", req.Header.Get("Content-Type"))
    assert.Equal(t, "hello world!", string(body))
}
