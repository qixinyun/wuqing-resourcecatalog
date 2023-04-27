<?php

namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['QIYEJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['HRBXX'] => '好人榜信息',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业税务行政处罚信息',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['HSZYZGZXX'] => '护士执业资格证信息',
        IResourceCatalog::TYPE['JGJCDXZJL'] => '价格监测的行政奖励',
        IResourceCatalog::TYPE['JXSZLJDW'] => '专利奖（单位）',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => '二手车鉴定评估机构核准证书',
        IResourceCatalog::TYPE['ZYJNZSXX'] => '职业技能证书信息',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
        IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
        IResourceCatalog::TYPE['SXBZXJGXX'] => '失信被执行机构信息',
        IResourceCatalog::TYPE['SXBZXRMD'] => '失信被执行人名单',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => '严重拖欠社保信息黑名单',
        IResourceCatalog::TYPE['JGRYXX'] => '机构荣誉信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => '食品药品投诉举报奖励（个人）',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => '食品药品投诉举报奖励（单位）',
        IResourceCatalog::TYPE['JXMPCPXX'] => '名牌产品信息',
        IResourceCatalog::TYPE['ZYZXX'] => '志愿者信息',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['ZLJCQYXX'] => '质量检测企业信息',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => '企业技术中心认定信息',
        IResourceCatalog::TYPE['XSPJXX'] => '刑事判决信息',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业税务注销信息',
        IResourceCatalog::TYPE['QYRYXX'] => '企业荣誉信息',
        IResourceCatalog::TYPE['SHZZNJXX'] => '社会组织年检信息',
        IResourceCatalog::TYPE['YLBXXX'] => '医疗保险信息',
        IResourceCatalog::TYPE['SYBXXX'] => '失业保险信息',
        IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['SJYXXS'] => '区级三好学生、区级优秀学生干部',
        IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
        IResourceCatalog::TYPE['SJJXMXX'] => '社会事业领域中央预算内和省基建项目信息',
        IResourceCatalog::TYPE['TJQYFRGGXYZHPJJG'] => '天津企业法人公共信用综合评价结果',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['QYHYSJ'] => '企业行业数据',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录',
        IResourceCatalog::TYPE['ZDJGQYMD'] => '重点监管企业名单',
        IResourceCatalog::TYPE['XZCJXX'] => '行政裁决信息',
        IResourceCatalog::TYPE['XZJDJCXX'] => '行政监督检查信息',
        IResourceCatalog::TYPE['XZJLXX'] => '行政奖励信息',
        IResourceCatalog::TYPE['XZQRXX'] => '行政确认信息',
        IResourceCatalog::TYPE['XZQZXX'] => '行政强制信息',
        IResourceCatalog::TYPE['XZJFXX'] => '行政给付信息',
        IResourceCatalog::TYPE['T_NP_BLACKLIST'] => '黑名单',
        IResourceCatalog::TYPE['T_NP_REDLIST'] => '红名单',
        //@position
    );
}
