package main

import (
	"flag"
	"fmt"
)

type arrayFlag []string

func (f *arrayFlag) String() string {
	return "arrayFlag"
}

func (f *arrayFlag) Set(v string) error {
	*f = append(*f, v)
	return nil
}

var aFlag arrayFlag

func main() {
	flag.Var(&aFlag, "a", "")
	flag.Parse()

	fmt.Println(aFlag)
}
