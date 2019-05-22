# jingdong-league
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

