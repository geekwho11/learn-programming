# 修复中文汉字显示为楷体

## 前言
系统字体设置为ubuntu mono后，发现在chrome展示的字体依然是楷体

其根本原因是在设置为英文系统后，ubuntu会自动安装fonts-arphic-ukai fonts-arphic-uming

直接卸载该套件，Chrome就可以正常显示ubuntu mono中文字体。
```
sudo apt-get remove fonts-arphic-ukai fonts-arphic-uming
```
将这两个软件包加入忽略
```
sudo apt-mark hold fonts-arphic-ukai
sudo apt-mark hold fonts-arphic-uming
```
