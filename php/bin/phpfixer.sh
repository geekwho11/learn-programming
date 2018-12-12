#!/bin/bash
# Program:
#   use php-cs-fixer2
# History:
# 2018.09.17 geekwho first release.

### 自动修正 php 编码格式 ###
bin=/usr/local/bin/php-cs-fixer2

# install php-cs-fixer
if [ ! -f $bin ]; then
    echo "Preparing to install php-cs-fixer ..."
    sudo curl -fSL http://cs.sensiolabs.org/download/php-cs-fixer-v2.phar -o ${bin};
    sudo chmod a+x $bin
    echo "php-cs-fixer has been successfully installed."
fi

root=$(cd "$(dirname "$0")"; cd ..; pwd)

function fixer()
{
  ERRORS=$($bin fix --rules=-psr0,@PSR2,encoding,elseif,function_declaration,indentation_type,blank_line_after_namespace,method_argument_space --rules='{"binary_operator_spaces":{"align_double_arrow": true,"align_equals": true}}' $root/$1 2>&1 | grep ")")
}

#单个文件的格式化
if [[ "$1" != "" ]]; then
  fixer $1
  if [ "$ERRORS" != "" ]; then
      echo
      echo "Found PHP Code Style errors: "
      echo -e $ERRORS_BUFFER
      echo
      echo "PHP Code Style errors found. Fix code style and commit again."
      exit 1
  else
      echo "No PHP Code Style errors found. Committed successfully."
  fi
  exit
fi


ERRORS_BUFFER=""
# 需要检查的php程序目录
php_dirs=(
  tests/
  src/
  bin/
)

cd $root

for dir in ${php_dirs[@]}; do
    if [[ ! -d "$root/$dir" ]];then
      continue
    fi
    for file in $(find "$dir" -name '*.php'); do
        if [[ "$file" == "" ]]; then
            echo "Can not found php file." && exit 0
        fi
        fixer $file
        if [ "$ERRORS" != "" ]; then
            if [ "$ERRORS_BUFFER" != "" ]; then
                ERRORS_BUFFER="$ERRORS_BUFFER\n$ERRORS"
            else
                ERRORS_BUFFER="$ERRORS"
            fi
            echo "PHP Code Style errors found in file: $file "
        fi
    done
done

if [ "$ERRORS_BUFFER" != "" ]; then
    echo
    echo "Found PHP Code Style errors: "
    echo -e $ERRORS_BUFFER
    echo
    echo "PHP Code Style errors found. Fix code style and commit again."
    exit 1
else
    echo "No PHP Code Style errors found. Committed successfully."
fi
