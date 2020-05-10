## 242. 有效的字母异位词

### [题目链接](https://leetcode-cn.com/problems/valid-anagram/)

### 背景知识
1. 什么是字母异位词？简单的来讲，两个单词里，分解为26个字母的话，都是一样的。
2. 那么定义就很清晰了，所谓的字母异位词，就是用相同的字母构造程不同的单词。
3. 如果单词A有单词B没有的字母，那么就不是字母异位词。

### 实现思路

#### 方案1
1. 定义一个空数组，循环获取单词A的每一个字母，以字母为键，字母出现的次数为值。
2. 循环获取单词B的每一个字母，把当前次数减一。
3. 如果单词A和B是字母异位词的话，那么数组的hash结构的每一个值都应该是为0。否则，值应该为负值或者正整数。

### 性能分析