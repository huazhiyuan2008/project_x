# ΢�Ź��ڷ���ŵ���ҳ������תָ��appҳ���о�

��ǩ���ո�ָ����� ΢�� webview��Ӧ����ת

---

# �����Է���

## Webview��ת��appҳ��ķ�ʽ
* �Զ���Scheme
* ��js����
* ���͹㲥���Զ���

## ����һ���Զ���Scheme

ʵ�ֲ������£�
1. �����ܲ����Զ���scheme��app
2. ����һ�������Զ���scheme���ӵ�H5ҳ�棬��������������������< a href ='haofang://xf.pinganfang.com/sh/main/detail.id.13.html'>��app< /a>
3. ��������Ϊ��H5�ĵ�΢������
4. �����ӣ�΢��webview��������
5. ���"��app"��ť���۲���
6. �������ת��app��֤���˷�ʽ���У�������ܣ���ͨ��΢�Ÿ��࣬��ϵͳ������򿪣��ظ�����5

�����Ϲ����У����ֶ���app��ʵ�������Ĺ��ܣ�������������ľ������ǶԶ���app��������
���Բ��輰��ͼ���£�

1. �򿪶���app, ͨ��΢�ŷ�������ѣ����������Ȧ
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_1.jpg)

2. ����΢�ŵ㿪��������ӣ����"��app"�۲���
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_2.jpg)

3. ʵ�ʽ����΢����ת��ҳ�棬����δ��ת��app
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_3.jpg)

4. ���΢�����Ͻǰ�ť��ѡ��ͨ��������򿪣�����ѡ��UC�����
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_4.jpg)

5. �ڴ򿪵�UC������е��"��app"�۲���
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_5.jpg)

6. ʵ�ʽ������������Ӧ��
7. ��"��app"���ӽ��з���
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_6.jpg)

8. ��chrome������http://m.duitang.com/people/mblog/321535105/detail/?from=singlemessage&isappinstalled=1, �ɿ���"��app"��Ӧ������Ϊ<a href="duitang://www.duitang.com/blog/detail/?id=321535105" class="open-with-app">��app���</a>

![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_8.png)

## ����
ͨ��scheme��ʽ��ת��ָ��app, UC������ɴ�, ΢��webview���У�����һʧ��


## ����������js����
������Ҫ�ͻ�����ϣ�����ֻ�ܿ���H5���룬�޷�����΢�ſͻ����߼������Գ���΢��֧��������ԣ�����Ҳ���޷�ʵ��Ч����
ps: ΢�Ŷ���scheme���˵��ˣ����ַ�ʽ����������


## ��������webview������͹㲥
![step](http://git.oschina.net/fantac/pic_link/raw/master/pic/duitang/step_9.png)

shouldOverideUrlLoading return false���������ϵͳ�����൱�ڹ㲥���� ͬ����Щ������΢���ڲ�������Ƶģ���ʵ�����������ƣ�����Ҫ��Ҫ΢�ŵ�֧��

## �ܽ���
�ݲ�����

---

ref:

΢�Ź���ƽ̨�������ĵ�  http://mp.weixin.qq.com/wiki/5/131b418c04b1f4fc1752f7652b14b235.html

΢�Ź������� https://open.weixin.qq.com/cgi-bin/appdetail?t=manage/detail&type=app&lang=zh_CN&token=8f562ca421c0ed18b3c1fac8ac178ed90016a3aa&appid=wx0ffb3bcbd9fc701d

webview��js���� http://blog.csdn.net/phj_981805903/article/details/12573735
http://www.jcodecraeer.com/a/anzhuokaifa/androidkaifa/2013/0912/1542.html
http://nobugs.sinaapp.com/?p=522