# Linux/Linux scripting and Docker test

## Instructions
The requirements is simple. You will have to make a Docker image that runs a linux command. The command prints the name of all files and folders that are direct children of `/` that *contains letter i* in alphabetical order, line by line. You should use the latest alpine image (`3.10.0` atm).

## Requirements
At least you will need a `Dockerfile`. We will run your solution using `docker run --rm -it $(docker build -q .)`

## Sample output
```
bin
lib
media
sbin
```