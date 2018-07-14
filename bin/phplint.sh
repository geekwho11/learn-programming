#!/bin/bash
# Program:
#   php lint script fot gitlba ci
# History:
# 2018.07.21 GeekWho first release.
php=$(which "php")
if [ -z $php ]; then
    echo '请先安装php'
    exit
fi
root=$(cd "$(dirname "$0")";cd ..;pwd)
cd $root
ERRORS_BUFFER=""
php_dirs=(
  app/
  tests/
)
for dir in ${php_dirs[@]}; do
    for file in $(find "$dir" -name *.php); do
        if [[ "$file" == "" ]]; then
            echo "Can not found php file." && exit 0
        fi
        ERRORS=$(php -l "$root/$file" 2>&1 | grep "Parse error")
        if [ "$ERRORS" != "" ]; then
            if [ "$ERRORS_BUFFER" != "" ]; then
                ERRORS_BUFFER="$ERRORS_BUFFER\n$ERRORS"
            else
                ERRORS_BUFFER="$ERRORS"
            fi
            echo "Syntax errors found in file: $file "
        fi
    done
done

if [ "$ERRORS_BUFFER" != "" ]; then
    echo
    echo "Found PHP parse errors: "
    echo -e $ERRORS_BUFFER
    echo
    echo "PHP parse errors found. Fix errors and commit again."
    exit 1
else
    echo "No PHP parse errors found. Committed successfully."
fi
