# 微信公众服务号的网页链接跳转指定app页面研究

标签（空格分隔）： 微信 webview跨应用跳转

---

# 可行性分析

## Webview跳转到app页面的方式
* 自定义Scheme
* 与js交互
* 发送广播（脑洞）

## 方案一：自定义Scheme

实现步骤如下：
1. 制作能捕获自定义scheme的app
2. 制作一个包含自定义scheme链接的H5页面，并把它发布到公网，如< a href ='haofang://xf.pinganfang.com/sh/main/detail.id.13.html'>打开app< /a>
3. 分享链接为此H5的到微信朋友
4. 打开链接，微信webview加载链接
5. 点击"打开app"按钮，观察结果
6. 如果能跳转到app，证明此方式可行，如果不能，可通过微信更多，用系统浏览器打开，重复步骤5

搜资料过程中，发现堆糖app已实现这样的功能，本着拿来主义的精神，我们对堆糖app做个测试
测试步骤及截图如下：

1. 打开堆糖app, 通过微信分享给朋友，或分享到朋友圈
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_1.jpg)

2. 进入微信点开分享的链接，点击"打开app"观察结果
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_2.jpg)

3. 实际结果：微信跳转到页面，但是未跳转到app
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_3.jpg)

4. 点击微信右上角按钮，选择通过浏览器打开，这里选择UC浏览器
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_4.jpg)

5. 在打开的UC浏览器中点击"打开app"观察结果
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_5.jpg)

6. 实际结果：启动堆糖应用
7. 对"打开app"链接进行分析
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_6.jpg)

8. 用chrome打开链接http://m.duitang.com/people/mblog/321535105/detail/?from=singlemessage&isappinstalled=1, 可看到"打开app"对应的链接为<a href="duitang://www.duitang.com/blog/detail/?id=321535105" class="open-with-app">在app里打开</a>

![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_8.png)

## 结论
通过scheme方式跳转到指定app, UC浏览器可打开, 微信webview不行，方案一失败


## 方案二：与js交互
交互需要客户端配合，我们只能控制H5代码，无法控制微信客户端逻辑，所以除非微信支持这个特性，否者也是无法实现效果。
ps: 微信都把scheme过滤掉了，这种方式几乎不可能


## 方案三：webview点击发送广播
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_9.png)

shouldOverideUrlLoading return false情况，交给系统处理（相当于广播）， 同样这些都是有微信内部代码控制的，其实跟方案二类似，都是要需要微信的支持

## 总结论
暂不可行

---

ref:

微信公众平台开发者文档  http://mp.weixin.qq.com/wiki/5/131b418c04b1f4fc1752f7652b14b235.html

微信管理中心 https://open.weixin.qq.com/cgi-bin/appdetail?t=manage/detail&type=app&lang=zh_CN&token=8f562ca421c0ed18b3c1fac8ac178ed90016a3aa&appid=wx0ffb3bcbd9fc701d

webview与js交互 http://blog.csdn.net/phj_981805903/article/details/12573735
http://www.jcodecraeer.com/a/anzhuokaifa/androidkaifa/2013/0912/1542.html
http://nobugs.sinaapp.com/?p=522