# 安装搜狗拼音输入法

## 前言

在升级完Ubuntu 20.04后，会提示你卸载几个不兼容的package，因为20.04只支持64 bit的系统了。那些i386相关可能会产生问题，所以升级程序会提示你卸载这些软件：

```
Remove: deepin.com.wechat:i386 deepin.com.weixin.work:i386
  mysql-workbench smtube sogoupinyin virtualbox-6.1
```

但搜狗输入法还是挺好用的。通过下面的步骤尝试重新安装搜狗输入法。

首先安装fcitx

```
sudo add-apt-repository ppa:fcitx-team/nightly
sudo apt-get update
sudo apt install fcitx fcitx-bin fcitx-config-gtk
```

然后安装deb即可。

```
wget https://github.com/laomocode/fcitx-sogouimebs/releases/download/v2.0.0.38-debian/sogouimebs.deb
sudo dpkg -i sogouimebs.deb
```

最后，在"设置--"区域与语言"--"管理已安装的语言"中，将"键盘输入法系统"设置为"fcitx"。

### 参考链接

1. [Ubuntu 20.04 LTS 下的搜狗输入法](https://wbt5.com/ubuntu-sogou-pinyin.html)
2. [fcitx-sogouimebs](https://github.com/laomocode/fcitx-sogouimebs)
