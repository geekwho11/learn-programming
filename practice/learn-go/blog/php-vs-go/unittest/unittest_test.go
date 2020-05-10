/*
* @Author: GeekWho
* @Date:   2019-01-24 15:48:29
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-24 16:01:46
*/
package main

import (
    "testing"

    "github.com/stretchr/testify/assert"
)

func TestRun(t *testing.T) {
    val := Sum(1, 2)
    assert.Equal(t, 3, val)
}
