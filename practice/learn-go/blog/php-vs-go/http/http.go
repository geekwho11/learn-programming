/*
* @Author: GeekWho
* @Date:   2019-01-24 17:21:36
* @Last Modified by:   GeekWho
* @Last Modified time: 2019-01-24 21:54:36
*/
package main

import (
    "fmt"
    "net/http"
)

func main() {
    http.HandleFunc("/", func (w http.ResponseWriter, r *http.Request) {
        fmt.Fprintf(w, "hello world!")
    })

    fs := http.FileServer(http.Dir("static/"))
    http.Handle("/static/", http.StripPrefix("/static/", fs))

    http.ListenAndServe(":2019", nil)
}
