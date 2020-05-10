# 学习编程之美
## 前言
记录自己学习编程实践，思考文章记录在博客：[神秘极客](https://xbc.me/)。

## 项目组织
主要分为3大块基础知识(basic)、方法论(methodology)、实践(practice)。
1. 基础知识，主要涉及算法、数据结构、操作系统底层等。
2. 方法论，思考研究如何实现编程的方法，如软件架构、编程原则、设计模式等。
3. 实践是检验真理的唯一标准。知道了，想到了，并没有什么用，关键是尝试实践，甚至实现自己的想法。

## 环境搭建
搭建PHP基础开发环境，请参考[GitHub地址](https://github.com/geekwho11/public-docker-image)

### 基础知识

#### 算法

##### 排序
1. [冒泡排序](./php/src/Algorithm/Sort/BubbleSort.php)
2. [快速排序](./php/src/Algorithm/Sort/QuickSort.php)
3. [选择排序](./php/src/Algorithm/Sort/SelectSort.php)
4. [归并排序](./php/src/Algorithm/Sort/MergeSort.php)
5. [堆排序](./php/src/Algorithm/Sort/HeapSort.php)

##### 搜索
1. [二分法查找](./php/src/Algorithm/Search/Binary.php)

##### 斐波数列
1. [斐波数列](./php/src/Algorithm/Math/Fibonacci.php)

##### 字符串
1. [字符串反转](./php/src/Algorithm/String/Reverse.php)

#### 数据结构
1. [双向链表](./php/src/DataStructrue/LinkedList/DoublyLinkedList.php)

### 方法论

#### 微服务
1. [Tars PHP Demo](./micro-service/tars/tars-php-demo)

### 实践

####  单元测试
```
#run all test case
cd practice
composer install
bash tests/bin/runtest.sh
```
