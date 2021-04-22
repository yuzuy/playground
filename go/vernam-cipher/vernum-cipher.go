package main

import (
	"crypto/rand"
	"errors"
	"flag"
	"log"
)

func main() {
	flag.Parse()

	v, key, err := Encrypt([]byte(flag.Arg(0)))
	if err != nil {
		log.Println(err)
		return
	}
	log.Println(v)

	p, err := Decrypt(v, key)
	if err != nil {
		log.Println(err)
		return
	}
	log.Println(string(p))
}

func Encrypt(v []byte) (result []byte, key []byte, err error) {
	key = make([]byte, len(v))
	_, err = rand.Read(key)
	if err != nil {
		return
	}

	result = make([]byte, len(v))
	for i := range v {
		result[i] = v[i] ^ key[i]
	}
	return
}

func Decrypt(v, key []byte) ([]byte, error) {
	if len(v) != len(key) {
		return nil, errors.New("lengths of value and key not match")
	}

	result := make([]byte, len(v))
	for i := range v {
		result[i] = v[i] ^ key[i]
	}
	return result, nil
}
