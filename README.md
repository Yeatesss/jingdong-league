# jingdong-league  （还在开发补充中。。。。）
##授权
#####实例化
``` 实例化
        $open = Factory::openAuthPlatForm();


```

####详参

<a name="获取分类">获取分类</a>


| 方法名|方法示例|参数|
|----|----|----|
|获取授权code链接|$open->generateCode->url($data)|<a href="#授权Code链接">详细参数</a>|
|获取授权AccessToken|$app->accessToken->request($data)|<a href="#获取授权AccessToken">详细参数</a>|
|用refresh换取token|$app->refreshAccessToken->request($data)|<a href="#用refresh换取token">详细参数</a>|
|获取推广位|$a->promotionSiteQuery->request($data)|<a href="#获取推广位">详细参数</a>|
|创建推广位|$a->promotionSiteCreate->request($data)|<a href="#创建推广位">详细参数</a>|
|工具商同步订单|$open->syncOrderWithKey->request($data)|<a href="#工具商同步订单">详细参数</a>|
|优惠券,商品二合一转接API-通过unionId获取推广链接|$open->couponCodeByUnionId->request($data)|<a href="#优惠券,商品二合一转接API-通过unionId获取推广链接">详细参数</a>|


<a name="获取授权Code链接">获取授权Code链接</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|app_key|string|是|AB297235xxxxxFE65FB2A0BFB14A|Appkey|
|redirect_uri|string|是|www.xxxx.com|回调地址|


<a name="获取授权AccessToken">获取授权AccessToken</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|app_key|string|是|AB297235xxxxxFE65FB2A0BFB14A|Appkey|
|app_secret|string|是|5ed41bwfewafwe5a4c46b1cdcbd79481cc0e|secret|
|grant_type|string|是|authorization_code|固定|
|code|string|是|xxxxxx|获取授权code链接的code|

<a name="用refresh换取token">用refresh换取token</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|app_key|string|是|AB297235xxxxxFE65FB2A0BFB14A|Appkey|
|app_secret|string|是|5ed41bwfewafwe5a4c46b1cdcbd79481cc0e|secret|
|grant_type|string|是|refresh_token|固定|
|refresh_token|string|是|xxxxxx|刷新token|

<a name="获取推广位">获取推广位</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|unionId|string|是|10111113967|站点ID|
|key|string|是|ece3b6ab1czzzzzzdb4ccf976c3d65745aa8e1481d1e0a50ec|授权Key|
|pageNo|int|是|1|页码|
|pageSize|int|是|12|显示个数|

<a name="获取推广位">获取推广位</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|unionId|string|是|10111113967|站点ID|
|key|string|是|ece3b6ab1czzzzzzdb4ccf976c3d65745aa8e1481d1e0a50ec|授权Key|
|unionType|int|是|1|常数1|
|siteId|int|是|12|对应type的ID|
|type|int|是|12|1网站推广位2.APP推广位3.社交媒体推广位4.聊天工具推广位5.二维码推广|
|spaceName|int|是|12|推广位名|

<a name="工具商同步订单">工具商同步订单</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|key|string|是|ece3b6ab1czzzzzzdb4ccf976c3d65745aa8e1481d1e0a50ec|授权Key|
|time|int|是|1|页码|
|pageSize|int|是|12|显示个数|

<a name="优惠券,商品二合一转接API-通过unionId获取推广链接">优惠券,商品二合一转接API-通过unionId获取推广链接</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|couponUrl|string|是|http://coupon.m.jd.com/coupons/show.action?key=42b0e3cb1d50489caa3fa2ba5ef1d077&roleId=20354624&to=ytfzyybj.jd.com|优惠券链接|
|materialIds|int|是|1232131321|商品skuID|
|unionId|int|是|12111111|联盟ID|
|positionId|int|是|12|推广位id|
|pid|string|是|12fea_2312321_fefef|子帐号身份标识|

```$xslt\
京东官方订单接口返回值
以JSONArray的字符串格式返回查询结果——success：接口调用是否成功（1：成功，0：失败）
 hasMore：(true：还有数据 false:已查询完毕，没有数据)
 data：返回数据
finishTime:订单完成时间
orderEmt:下单设备(1:PC,2:无线)；
orderId:订单ID；
orderTime:下单时间；
parentId:父单ID（订单拆分后,父单的订单号）；
payMonth:结算日期（yyyyMMdd）
plus:plus会员（0：不是，1：是）；
popId：商家ID；
unionId：站长ID；
validCode：有效码（-1：未知,2.无效-拆单,3.无效-取消,4.无效-京东帮帮主订单,5.无效-账号异常,6.无效-赠品类目不返佣,7.无效-校园订单,8.无效-企业订单,9.无效-团购订单,10.无效-开增值税专用发票订单,11.无效-乡村推广员下单,12.无效-自己推广自己下单,13.无效-违规订单,14.无效-来源与备案网址不符,15.待付款,16.已付款,17.已完成,18.已结算）
unionUserName:扩展信息(euId,需要联系运营开放白名单才能拿到数据)
 skuList:商品结果集；
	skuId：商品ID；
	skuName：商品名称；
	skuNum：商品数量；
	skuReturnNum：商品已退货数量；
	frozenSkuNum：商品售后中数量；
	price：商品单价；
	payPrice：实际支付金额；
	commissionRate：佣金比例；
	subSideRate：分成比例；
	subsidyRate：补贴比例；
	finalRate：最终比例 (一级分佣比例*二级分佣比例)；
	estimateCosPrice：预估计佣金额；
	estimateCommission：预估佣金；
	estimateFee：站长的预估佣金；
	actualCosPrice：实际计佣金额；
	actualCommission：实际佣金；
	actualFee：站长的实际佣金；
	validCode：有效码（-1：未知,2.无效-拆单,3.无效-取消,4.无效-京东帮帮主订单,5.无效-账号异常,6.无效-赠品类目不返佣,7.无效-校园订单,8.无效-企业订单,9.无效-团购订单,10.无效-开增值税专用发票订单,11.无效-乡村推广员下单,12.无效-自己推广自己下单,13.无效-违规订单,14.无效-来源与备案网址不符,15.待付款,16.已付款,17.已完成,18.已结算）
	traceType：2同店 3跨店
	spId：推广位ID
	siteId：网站ID
	unionAlias：第三方服务来源
	pid：格式:子站长ID_子站长网站ID_子站长推广位ID
	unionTrafficGroup：渠道组（1：1号店，其他：京东）
	firstLevel：一级类目
	secondLevel：二级类目
	thirdLevel：三级类目
	subUnionId：子联盟ID(需要联系运营开放白名单才能拿到数据)
unionTag：联盟标签数据（整型的二进制字符串(32位)，目前只返回8位：00000001。数据从右向左进行，每一位为1表示符合联盟的标签特征，第1位：优惠券，第2位：组合推广订单，第3位：拼购订单，第4位：首次购订单。例如：00000001:优惠券，00000010:组合推广订单，00000100:拼购订单，00001000:首次购，00000111：优惠券+组合推广+拼购等）

```
##京东联盟
#####实例化
``` 实例化
$app= Factory::union([
      'app_key' => '111',
      'app_secret'=>'222',
      'format' => 'json',
      'v' => '1.0',
      'sign_method' => 'md5'
]);


```


####详参

<a name="获取分类">获取分类</a>


| 方法名|方法示例|参数|
|----|----|----|
|获取分类|$app->categoryGoods->request($data)|<a href="#获取分类">详细参数</a>|
|京粉精选商品|$app->jingfenGoods->request($data)|<a href="#京粉精选商品">详细参数</a>|
|关键词商品查询接口(需申请)|$app->goods->request($data)|<a href="#关键词商品查询接口">详细参数</a>|
|获取通用推广链接|$app->common->request($data)|<a href="#获取通用推广链接">详细参数</a>|
|获取订单信息|$app->order->request($data);|<a href="#获取订单信息">详细参数</a>|
|获取推广商品详情|$app->promotionGoods->request($data);|<a href="#获取推广商品详情">详细参数</a>|
|创建推广位|$app->positionCreate->request($data)|<a href="#创建推广位">详细参数</a>|

<a name="创建推广位">创建推广位</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|unionId|string|是|10111113967|站点ID|
|key|string|是|ece3b6ab1czzzzzzdb4ccf976c3d65745aa8e1481d1e0a50ec|授权Key|
|unionType|int|是|1|常数1|
|siteId|int|是|12|对应type的ID|
|type|int|是|12|1网站推广位2.APP推广位3.社交媒体推广位4.聊天工具推广位5.二维码推广|
|spaceName|array|是|['abc','def']|推广位名|

<a name="获取分类">获取分类</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|parentId|int|是|1342|父类目id(一级父类目为0)|
|grade|int|是|2|类目级别(类目级别 0，1，2 代表一、二、三级类目)|

<a name="京粉精选商品">京粉精选商品</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|eliteId|int|是|11|频道id：1-好券商品,2-京粉APP-jingdong.大咖推荐,3-小程序-jingdong.好券商品,4-京粉APP-jingdong.主题街1-jingdong.服装运动,5-京粉APP-jingdong.主题街2-jingdong.精选家电,6-京粉APP-jingdong.主题街3-jingdong.超市,7-京粉APP-jingdong.主题街4-jingdong.居家生活,10-9.9专区,11-品牌好货-jingdong.潮流范儿,12-品牌好货-jingdong.精致生活,13-品牌好货-jingdong.数码先锋,14-品牌好货-jingdong.品质家电,15-京仓配送,16-公众号-jingdong.好券商品,17-公众号-jingdong.9.9,18-公众号-jingdong.京仓京配|
|pageIndex|int|是|1|页码|
|pageSize|int|是|20|每页数量，默认20，上限50|
|sortName|String|是|price|排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30DaysSku：sku维度30天引单量，comments：评论数，goodComments：好评数)|
|sort|String|是|desc|asc,desc升降序,默认降序|

<a name="关键词商品查询接口">关键词商品查询接口</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|cid1|long|否|737|一级类目id|
|cid2|long|否|738|二级类目id|
|cid3|long|否|739|三级类目id|
|pageIndex|int|否|1|页码|
|pageSize|int|否|20|每页数量，单页数最大30，默认20|
|skuIds|long[]|否|5225346,7275691|skuid集合(一次最多支持查询100个sku)，数组类型开发时记得加[]|
|keyword|String|否|手机|关键词，字数同京东商品名称一致，目前未限制|
|pricefrom|double|否|16.88|商品价格下限|
|priceto|double|否|19.95|商品价格上限|
|commissionShareStart|int|否|10|佣金比例区间开始|
|commissionShareEnd|int|否|50|佣金比例区间结束|
|owner|String|否|g|商品类型：自营[g]，POP[p]|
|sortName|String|否|price|排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30Days：30天引单量， inOrderComm30Days：30天支出佣金)|
|sort|String|否|desc|asc,desc升降序,默认降序|
|isCoupon|int|否|1|是否是优惠券商品，1：有优惠券，0：无优惠券|
|isPG|int|否|1|是否是拼购商品，1：拼购商品，0：非拼购商品|
|pingouPriceStart|double|否|16.88|拼购价格区间开始|
|pingouPriceEnd|double|否|19.95|拼购价格区间结束|
|isHot|int|否|1|是否是爆款，1：爆款商品，0：非爆款商品|
|brandCode|String|否|7998|品牌code|
|shopId|int|否|45619|店铺Id|

<a name="获取通用推广链接">获取通用推广链接</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|materialId|String|是|https://item.jd.com/23484023378.html|推广物料
|siteId|String|是|435676|站点id
|positionId|long|否|6|推广位id
|subUnionId|String|否|618_18_c35***e6a|子联盟ID（需要联系运营开通权限才能拿到数据）
|ext1|String|否|100_618_618|推客生成推广链接时传入的扩展字段（查看订单对应字段信息，需要联系运营开放白名单才能看到）
|pid|String|否|618_618_6018|联盟子站长身份标识，格式：子站长ID_子站长网站ID_子站长推广位ID
|shopId|int|否|45619|店铺Id|


<a name="获取订单信息">获取订单信息</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|pageNo|String|是|1|页码
|pageSize|int|是|500|最大显示500
|type|int|是|1|订单时间查询类型(1：下单时间，2：完成时间，3：更新时间)
|time|String|是|2019052111|查询时间，建议使用分钟级查询，格式：yyyyMMddHH、yyyyMMddHHmm或yyyyMMddHHmmss，如201811031212 的查询范围从12:12:00--12:12:59

<a name="获取推广商品详情">获取推广商品详情</a>

|参数名|参数类型|是否必填|参数样例|参数简介|
|----|----|----|----|----|
|skuIds|String|是|3907427,12321321|商品ID

