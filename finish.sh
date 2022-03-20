#!/bin/bash
num=1
nom="sorti"
mkdir out
for fic in *.txt
do
    nomsort="$nom$num"
    espeak -v fr -f $fic -w out/${nomsort}.wav
    num=$(($num + 1))
done
tar czf archive.tgz out