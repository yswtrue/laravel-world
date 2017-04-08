<?php

use Illuminate\Database\Seeder;

class WorldCountriesLocaleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_countries_locale')->truncate();
        
        \DB::table('world_countries_locale')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'name' => '喀麦隆',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '喀麦隆共和国',
                'locale' => 'zh-cn',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 2,
                'name' => '贝宁',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '贝宁共和国',
                'locale' => 'zh-cn',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 3,
                'name' => '马达加斯加',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马达加斯加共和国',
                'locale' => 'zh-cn',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 4,
                'name' => '卢旺达',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '卢旺达共和国',
                'locale' => 'zh-cn',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 5,
                'name' => '塞舌尔',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '塞舌尔共和国',
                'locale' => 'zh-cn',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 6,
                'name' => '科特迪瓦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '科特迪瓦共和国',
                'locale' => 'zh-cn',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 7,
                'name' => '埃及',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿拉伯埃及共和国',
                'locale' => 'zh-cn',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 8,
                'name' => '毛里求斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '毛里求斯共和国',
                'locale' => 'zh-cn',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 9,
                'name' => '布基纳法索',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '布基纳法索',
                'locale' => 'zh-cn',
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 10,
                'name' => '厄立特里亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '厄立特里亚国',
                'locale' => 'zh-cn',
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 11,
                'name' => '圣多美和普林西比',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '圣多美和普林西比民主共和国',
                'locale' => 'zh-cn',
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 12,
                'name' => '安哥拉',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '安哥拉共和国',
                'locale' => 'zh-cn',
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 13,
                'name' => '利比亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '利比亚国',
                'locale' => 'zh-cn',
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 14,
                'name' => '津巴布韦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '津巴布韦共和国',
                'locale' => 'zh-cn',
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 15,
                'name' => '几内亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '几内亚共和国',
                'locale' => 'zh-cn',
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 16,
                'name' => '塞拉利昂',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '塞拉利昂共和国',
                'locale' => 'zh-cn',
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 17,
                'name' => '留尼汪',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '留尼汪岛',
                'locale' => 'zh-cn',
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 18,
                'name' => '加蓬',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '加蓬共和国',
                'locale' => 'zh-cn',
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 19,
                'name' => '加纳',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '加纳共和国',
                'locale' => 'zh-cn',
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 20,
                'name' => '坦桑尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '坦桑尼亚联合共和国',
                'locale' => 'zh-cn',
            ),
            20 => 
            array (
                'id' => 21,
                'country_id' => 21,
                'name' => '马里',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马里共和国',
                'locale' => 'zh-cn',
            ),
            21 => 
            array (
                'id' => 22,
                'country_id' => 22,
                'name' => '索马里',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '索马里联邦共和国',
                'locale' => 'zh-cn',
            ),
            22 => 
            array (
                'id' => 23,
                'country_id' => 23,
                'name' => '毛里塔尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '毛里塔尼亚伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            23 => 
            array (
                'id' => 24,
                'country_id' => 24,
                'name' => '乌干达',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '乌干达共和国',
                'locale' => 'zh-cn',
            ),
            24 => 
            array (
                'id' => 25,
                'country_id' => 25,
                'name' => '乍得',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '乍得共和国',
                'locale' => 'zh-cn',
            ),
            25 => 
            array (
                'id' => 26,
                'country_id' => 26,
                'name' => '马约特岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马约特岛',
                'locale' => 'zh-cn',
            ),
            26 => 
            array (
                'id' => 27,
                'country_id' => 27,
                'name' => '科摩罗',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '科摩罗联盟',
                'locale' => 'zh-cn',
            ),
            27 => 
            array (
                'id' => 28,
                'country_id' => 28,
                'name' => '博茨瓦纳',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '博茨瓦纳共和国',
                'locale' => 'zh-cn',
            ),
            28 => 
            array (
                'id' => 29,
                'country_id' => 29,
                'name' => '塞内加尔',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '塞内加尔共和国',
                'locale' => 'zh-cn',
            ),
            29 => 
            array (
                'id' => 30,
                'country_id' => 30,
                'name' => '斯威士兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '斯威士兰王国',
                'locale' => 'zh-cn',
            ),
            30 => 
            array (
                'id' => 31,
                'country_id' => 31,
                'name' => '几内亚比绍',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '几内亚比绍共和国',
                'locale' => 'zh-cn',
            ),
            31 => 
            array (
                'id' => 32,
                'country_id' => 32,
                'name' => '民主刚果',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '刚果民主共和国',
                'locale' => 'zh-cn',
            ),
            32 => 
            array (
                'id' => 33,
                'country_id' => 33,
                'name' => '中非',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '中非共和国',
                'locale' => 'zh-cn',
            ),
            33 => 
            array (
                'id' => 34,
                'country_id' => 34,
                'name' => '莱索托',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '莱索托王国',
                'locale' => 'zh-cn',
            ),
            34 => 
            array (
                'id' => 35,
                'country_id' => 35,
                'name' => '刚果',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '刚果共和国',
                'locale' => 'zh-cn',
            ),
            35 => 
            array (
                'id' => 36,
                'country_id' => 36,
                'name' => '南非',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '南非共和国',
                'locale' => 'zh-cn',
            ),
            36 => 
            array (
                'id' => 37,
                'country_id' => 37,
                'name' => '利比里亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '利比里亚共和国',
                'locale' => 'zh-cn',
            ),
            37 => 
            array (
                'id' => 38,
                'country_id' => 38,
                'name' => '突尼斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '突尼斯共和国',
                'locale' => 'zh-cn',
            ),
            38 => 
            array (
                'id' => 39,
                'country_id' => 39,
                'name' => '赞比亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '赞比亚共和国',
                'locale' => 'zh-cn',
            ),
            39 => 
            array (
                'id' => 40,
                'country_id' => 40,
                'name' => '尼日尔',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '尼日尔共和国',
                'locale' => 'zh-cn',
            ),
            40 => 
            array (
                'id' => 41,
                'country_id' => 41,
                'name' => '西撒哈拉',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿拉伯撒哈拉民主共和国',
                'locale' => 'zh-cn',
            ),
            41 => 
            array (
                'id' => 42,
                'country_id' => 42,
                'name' => '多哥',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '多哥共和国',
                'locale' => 'zh-cn',
            ),
            42 => 
            array (
                'id' => 43,
                'country_id' => 43,
                'name' => '纳米比亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '纳米比亚共和国',
                'locale' => 'zh-cn',
            ),
            43 => 
            array (
                'id' => 44,
                'country_id' => 44,
                'name' => '莫桑比克',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '莫桑比克共和国',
                'locale' => 'zh-cn',
            ),
            44 => 
            array (
                'id' => 45,
                'country_id' => 45,
                'name' => '埃塞俄比亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '埃塞俄比亚联邦民主共和国',
                'locale' => 'zh-cn',
            ),
            45 => 
            array (
                'id' => 46,
                'country_id' => 46,
                'name' => '摩洛哥',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '摩洛哥王国',
                'locale' => 'zh-cn',
            ),
            46 => 
            array (
                'id' => 47,
                'country_id' => 47,
                'name' => '马拉维',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马拉维共和国',
                'locale' => 'zh-cn',
            ),
            47 => 
            array (
                'id' => 48,
                'country_id' => 48,
                'name' => '尼日利亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '尼日利亚联邦共和国',
                'locale' => 'zh-cn',
            ),
            48 => 
            array (
                'id' => 49,
                'country_id' => 49,
                'name' => '佛得角',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '佛得角共和国',
                'locale' => 'zh-cn',
            ),
            49 => 
            array (
                'id' => 50,
                'country_id' => 50,
                'name' => '布隆迪',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '布隆迪共和国',
                'locale' => 'zh-cn',
            ),
            50 => 
            array (
                'id' => 51,
                'country_id' => 51,
                'name' => '阿尔及利亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿尔及利亚民主人民共和国',
                'locale' => 'zh-cn',
            ),
            51 => 
            array (
                'id' => 52,
                'country_id' => 52,
                'name' => '吉布提',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '吉布提共和国',
                'locale' => 'zh-cn',
            ),
            52 => 
            array (
                'id' => 53,
                'country_id' => 53,
                'name' => '冈比亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '冈比亚伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            53 => 
            array (
                'id' => 54,
                'country_id' => 54,
                'name' => '赤道几内亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '赤道几内亚共和国',
                'locale' => 'zh-cn',
            ),
            54 => 
            array (
                'id' => 55,
                'country_id' => 55,
                'name' => '苏丹',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '苏丹共和国',
                'locale' => 'zh-cn',
            ),
            55 => 
            array (
                'id' => 56,
                'country_id' => 56,
                'name' => '肯尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '肯尼亚共和国',
                'locale' => 'zh-cn',
            ),
            56 => 
            array (
                'id' => 57,
                'country_id' => 57,
                'name' => '新加坡',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '新加坡共和国',
                'locale' => 'zh-cn',
            ),
            57 => 
            array (
                'id' => 58,
                'country_id' => 58,
                'name' => '韩国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '大韩民国',
                'locale' => 'zh-cn',
            ),
            58 => 
            array (
                'id' => 59,
                'country_id' => 59,
                'name' => '叙利亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿拉伯叙利亚共和国',
                'locale' => 'zh-cn',
            ),
            59 => 
            array (
                'id' => 60,
                'country_id' => 60,
                'name' => '乌兹别克斯坦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '乌兹别克斯坦共和国',
                'locale' => 'zh-cn',
            ),
            60 => 
            array (
                'id' => 61,
                'country_id' => 61,
                'name' => '巴林',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴林王国',
                'locale' => 'zh-cn',
            ),
            61 => 
            array (
                'id' => 62,
                'country_id' => 62,
                'name' => '日本',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '日本国',
                'locale' => 'zh-cn',
            ),
            62 => 
            array (
                'id' => 63,
                'country_id' => 63,
                'name' => '约旦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '约旦哈希姆王国',
                'locale' => 'zh-cn',
            ),
            63 => 
            array (
                'id' => 64,
                'country_id' => 64,
                'name' => '越南',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '越南社会主义共和国',
                'locale' => 'zh-cn',
            ),
            64 => 
            array (
                'id' => 65,
                'country_id' => 65,
                'name' => '吉尔吉斯斯坦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '吉尔吉斯共和国',
                'locale' => 'zh-cn',
            ),
            65 => 
            array (
                'id' => 66,
                'country_id' => 66,
                'name' => '泰国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '泰王国',
                'locale' => 'zh-cn',
            ),
            66 => 
            array (
                'id' => 67,
                'country_id' => 67,
                'name' => '斯里兰卡',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '斯里兰卡民主社会主义共和国',
                'locale' => 'zh-cn',
            ),
            67 => 
            array (
                'id' => 68,
                'country_id' => 68,
                'name' => '阿联酋',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿拉伯联合酋长国',
                'locale' => 'zh-cn',
            ),
            68 => 
            array (
                'id' => 69,
                'country_id' => 69,
                'name' => '老挝',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '老挝人民民主共和国',
                'locale' => 'zh-cn',
            ),
            69 => 
            array (
                'id' => 70,
                'country_id' => 70,
                'name' => '阿富汗',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿富汗斯坦伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            70 => 
            array (
                'id' => 71,
                'country_id' => 71,
                'name' => '中国澳门',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '中华人民共和国澳门特别行政区',
                'locale' => 'zh-cn',
            ),
            71 => 
            array (
                'id' => 72,
                'country_id' => 72,
                'name' => '塔吉克斯坦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '塔吉克斯坦共和国',
                'locale' => 'zh-cn',
            ),
            72 => 
            array (
                'id' => 73,
                'country_id' => 73,
                'name' => '朝鲜',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '朝鲜民主主义人民共和国',
                'locale' => 'zh-cn',
            ),
            73 => 
            array (
                'id' => 74,
                'country_id' => 74,
                'name' => '巴勒斯坦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴勒斯坦国',
                'locale' => 'zh-cn',
            ),
            74 => 
            array (
                'id' => 75,
                'country_id' => 75,
                'name' => '中国香港',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '中华人民共和国香港特别行政区',
                'locale' => 'zh-cn',
            ),
            75 => 
            array (
                'id' => 76,
                'country_id' => 76,
                'name' => '伊拉克',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '伊拉克共和国',
                'locale' => 'zh-cn',
            ),
            76 => 
            array (
                'id' => 77,
                'country_id' => 77,
                'name' => '黎巴嫩',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '黎巴嫩共和国',
                'locale' => 'zh-cn',
            ),
            77 => 
            array (
                'id' => 78,
                'country_id' => 78,
                'name' => '科威特',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '科威特国',
                'locale' => 'zh-cn',
            ),
            78 => 
            array (
                'id' => 79,
                'country_id' => 79,
                'name' => '文莱',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '文莱达鲁萨兰国',
                'locale' => 'zh-cn',
            ),
            79 => 
            array (
                'id' => 80,
                'country_id' => 80,
                'name' => '马尔代夫',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马尔代夫共和国',
                'locale' => 'zh-cn',
            ),
            80 => 
            array (
                'id' => 81,
                'country_id' => 81,
                'name' => '印度尼西亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '印度尼西亚共和国',
                'locale' => 'zh-cn',
            ),
            81 => 
            array (
                'id' => 82,
                'country_id' => 82,
                'name' => '以色列',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '以色列国',
                'locale' => 'zh-cn',
            ),
            82 => 
            array (
                'id' => 83,
                'country_id' => 83,
                'name' => '蒙古',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '蒙古国',
                'locale' => 'zh-cn',
            ),
            83 => 
            array (
                'id' => 84,
                'country_id' => 84,
                'name' => '阿曼',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿曼苏丹国',
                'locale' => 'zh-cn',
            ),
            84 => 
            array (
                'id' => 85,
                'country_id' => 85,
                'name' => '印度',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '印度共和国',
                'locale' => 'zh-cn',
            ),
            85 => 
            array (
                'id' => 86,
                'country_id' => 86,
                'name' => '缅甸',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '缅甸联邦共和国',
                'locale' => 'zh-cn',
            ),
            86 => 
            array (
                'id' => 87,
                'country_id' => 87,
                'name' => '马来西亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马来西亚联邦',
                'locale' => 'zh-cn',
            ),
            87 => 
            array (
                'id' => 88,
                'country_id' => 88,
                'name' => '东帝汶',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '东帝汶民主共和国',
                'locale' => 'zh-cn',
            ),
            88 => 
            array (
                'id' => 89,
                'country_id' => 89,
                'name' => '也门',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '也门共和国',
                'locale' => 'zh-cn',
            ),
            89 => 
            array (
                'id' => 90,
                'country_id' => 90,
                'name' => '不丹',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '不丹王国',
                'locale' => 'zh-cn',
            ),
            90 => 
            array (
                'id' => 91,
                'country_id' => 91,
                'name' => '柬埔寨',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '柬埔寨王国',
                'locale' => 'zh-cn',
            ),
            91 => 
            array (
                'id' => 92,
                'country_id' => 92,
                'name' => '巴基斯坦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴基斯坦伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            92 => 
            array (
                'id' => 93,
                'country_id' => 93,
                'name' => '孟加拉国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '孟加拉人民共和国',
                'locale' => 'zh-cn',
            ),
            93 => 
            array (
                'id' => 94,
                'country_id' => 94,
                'name' => '沙特阿拉伯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '沙特阿拉伯王国',
                'locale' => 'zh-cn',
            ),
            94 => 
            array (
                'id' => 95,
                'country_id' => 95,
                'name' => '土库曼斯坦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '土库曼斯坦',
                'locale' => 'zh-cn',
            ),
            95 => 
            array (
                'id' => 96,
                'country_id' => 96,
                'name' => '卡塔尔',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '卡塔尔国',
                'locale' => 'zh-cn',
            ),
            96 => 
            array (
                'id' => 97,
                'country_id' => 97,
                'name' => '尼泊尔',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '尼泊尔联邦民主共和国',
                'locale' => 'zh-cn',
            ),
            97 => 
            array (
                'id' => 98,
                'country_id' => 98,
                'name' => '哈萨克斯坦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '哈萨克斯坦共和国',
                'locale' => 'zh-cn',
            ),
            98 => 
            array (
                'id' => 99,
                'country_id' => 99,
                'name' => '菲律宾',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '菲律宾共和国',
                'locale' => 'zh-cn',
            ),
            99 => 
            array (
                'id' => 100,
                'country_id' => 100,
                'name' => '中国台湾',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '中国台湾',
                'locale' => 'zh-cn',
            ),
            100 => 
            array (
                'id' => 101,
                'country_id' => 101,
                'name' => '中国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '中华人民共和国',
                'locale' => 'zh-cn',
            ),
            101 => 
            array (
                'id' => 102,
                'country_id' => 102,
                'name' => '伊朗',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '伊朗伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            102 => 
            array (
                'id' => 103,
                'country_id' => 103,
                'name' => '哥斯达黎加',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '哥斯达黎加共和国',
                'locale' => 'zh-cn',
            ),
            103 => 
            array (
                'id' => 104,
                'country_id' => 104,
                'name' => '古巴',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '古巴共和国',
                'locale' => 'zh-cn',
            ),
            104 => 
            array (
                'id' => 105,
                'country_id' => 105,
                'name' => '多米尼加',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '多米尼加共和国',
                'locale' => 'zh-cn',
            ),
            105 => 
            array (
                'id' => 106,
                'country_id' => 106,
                'name' => '墨西哥',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '墨西哥合众国',
                'locale' => 'zh-cn',
            ),
            106 => 
            array (
                'id' => 107,
                'country_id' => 107,
                'name' => '尼加拉瓜',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '尼加拉瓜共和国',
                'locale' => 'zh-cn',
            ),
            107 => 
            array (
                'id' => 108,
                'country_id' => 108,
                'name' => '巴拿马',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴拿马共和国',
                'locale' => 'zh-cn',
            ),
            108 => 
            array (
                'id' => 109,
                'country_id' => 109,
                'name' => '荷属安地列斯群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '荷属安地列斯群岛',
                'locale' => 'zh-cn',
            ),
            109 => 
            array (
                'id' => 110,
                'country_id' => 110,
                'name' => '萨尔瓦多',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '萨尔瓦多共和国',
                'locale' => 'zh-cn',
            ),
            110 => 
            array (
                'id' => 111,
                'country_id' => 111,
                'name' => '波多黎各',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '波多黎各自由邦',
                'locale' => 'zh-cn',
            ),
            111 => 
            array (
                'id' => 112,
                'country_id' => 112,
                'name' => '圣文森特和格纳丁斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '圣文森特和格林纳丁斯',
                'locale' => 'zh-cn',
            ),
            112 => 
            array (
                'id' => 113,
                'country_id' => 113,
                'name' => '洪都拉斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '洪都拉斯共和国',
                'locale' => 'zh-cn',
            ),
            113 => 
            array (
                'id' => 114,
                'country_id' => 114,
                'name' => '危地马拉',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '危地马拉共和国',
                'locale' => 'zh-cn',
            ),
            114 => 
            array (
                'id' => 115,
                'country_id' => 115,
                'name' => '格鲁吉亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '格鲁吉亚',
                'locale' => 'zh-cn',
            ),
            115 => 
            array (
                'id' => 116,
                'country_id' => 116,
                'name' => '亚美尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '亚美尼亚共和国',
                'locale' => 'zh-cn',
            ),
            116 => 
            array (
                'id' => 117,
                'country_id' => 117,
                'name' => '阿塞拜疆',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿塞拜疆共和国',
                'locale' => 'zh-cn',
            ),
            117 => 
            array (
                'id' => 118,
                'country_id' => 118,
                'name' => '白俄罗斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '白俄罗斯共和国',
                'locale' => 'zh-cn',
            ),
            118 => 
            array (
                'id' => 119,
                'country_id' => 119,
                'name' => '俄罗斯联邦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '俄罗斯联邦',
                'locale' => 'zh-cn',
            ),
            119 => 
            array (
                'id' => 120,
                'country_id' => 120,
                'name' => '乌克兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '乌克兰',
                'locale' => 'zh-cn',
            ),
            120 => 
            array (
                'id' => 121,
                'country_id' => 121,
                'name' => '匈牙利',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '匈牙利',
                'locale' => 'zh-cn',
            ),
            121 => 
            array (
                'id' => 122,
                'country_id' => 122,
                'name' => '冰岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '冰岛共和国',
                'locale' => 'zh-cn',
            ),
            122 => 
            array (
                'id' => 123,
                'country_id' => 123,
                'name' => '马耳他',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马耳他共和国',
                'locale' => 'zh-cn',
            ),
            123 => 
            array (
                'id' => 124,
                'country_id' => 124,
                'name' => '摩纳哥',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '摩纳哥公国',
                'locale' => 'zh-cn',
            ),
            124 => 
            array (
                'id' => 125,
                'country_id' => 125,
                'name' => '挪威',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '挪威王国',
                'locale' => 'zh-cn',
            ),
            125 => 
            array (
                'id' => 126,
                'country_id' => 126,
                'name' => '罗马尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '罗马尼亚',
                'locale' => 'zh-cn',
            ),
            126 => 
            array (
                'id' => 127,
                'country_id' => 127,
                'name' => '圣马力诺',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '圣马力诺共和国',
                'locale' => 'zh-cn',
            ),
            127 => 
            array (
                'id' => 128,
                'country_id' => 128,
                'name' => '瑞典',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '瑞典王国',
                'locale' => 'zh-cn',
            ),
            128 => 
            array (
                'id' => 129,
                'country_id' => 129,
                'name' => '瑞士',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '瑞士联邦',
                'locale' => 'zh-cn',
            ),
            129 => 
            array (
                'id' => 130,
                'country_id' => 130,
                'name' => '爱沙尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '爱沙尼亚共和国',
                'locale' => 'zh-cn',
            ),
            130 => 
            array (
                'id' => 131,
                'country_id' => 131,
                'name' => '拉脱维亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '拉脱维亚共和国',
                'locale' => 'zh-cn',
            ),
            131 => 
            array (
                'id' => 132,
                'country_id' => 132,
                'name' => '立陶宛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '立陶宛共和国',
                'locale' => 'zh-cn',
            ),
            132 => 
            array (
                'id' => 133,
                'country_id' => 133,
                'name' => '摩尔多瓦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '摩尔多瓦共和国',
                'locale' => 'zh-cn',
            ),
            133 => 
            array (
                'id' => 134,
                'country_id' => 134,
                'name' => '土耳其',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '土耳其共和国',
                'locale' => 'zh-cn',
            ),
            134 => 
            array (
                'id' => 135,
                'country_id' => 135,
                'name' => '斯洛文尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '斯洛文尼亚共和国',
                'locale' => 'zh-cn',
            ),
            135 => 
            array (
                'id' => 136,
                'country_id' => 136,
                'name' => '捷克',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '捷克共和国',
                'locale' => 'zh-cn',
            ),
            136 => 
            array (
                'id' => 137,
                'country_id' => 137,
                'name' => '斯洛伐克',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '斯洛伐克共和国',
                'locale' => 'zh-cn',
            ),
            137 => 
            array (
                'id' => 138,
                'country_id' => 138,
                'name' => '马其顿',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马其顿共和国',
                'locale' => 'zh-cn',
            ),
            138 => 
            array (
                'id' => 139,
                'country_id' => 139,
                'name' => '波斯尼亚和黑塞哥维那',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '波斯尼亚和黑塞哥维那',
                'locale' => 'zh-cn',
            ),
            139 => 
            array (
                'id' => 140,
                'country_id' => 140,
                'name' => '梵蒂冈城国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '梵蒂冈城国',
                'locale' => 'zh-cn',
            ),
            140 => 
            array (
                'id' => 141,
                'country_id' => 141,
                'name' => '荷兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '尼德兰王国',
                'locale' => 'zh-cn',
            ),
            141 => 
            array (
                'id' => 142,
                'country_id' => 142,
                'name' => '克罗地亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '克罗地亚共和国',
                'locale' => 'zh-cn',
            ),
            142 => 
            array (
                'id' => 143,
                'country_id' => 143,
                'name' => '希腊',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '希腊共和国',
                'locale' => 'zh-cn',
            ),
            143 => 
            array (
                'id' => 144,
                'country_id' => 144,
                'name' => '爱尔兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '爱尔兰共和国',
                'locale' => 'zh-cn',
            ),
            144 => 
            array (
                'id' => 145,
                'country_id' => 145,
                'name' => '比利时',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '比利时王国',
                'locale' => 'zh-cn',
            ),
            145 => 
            array (
                'id' => 146,
                'country_id' => 146,
                'name' => '塞浦路斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '塞浦路斯共和国',
                'locale' => 'zh-cn',
            ),
            146 => 
            array (
                'id' => 147,
                'country_id' => 147,
                'name' => '丹麦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '丹麦王国',
                'locale' => 'zh-cn',
            ),
            147 => 
            array (
                'id' => 148,
                'country_id' => 148,
                'name' => '英国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '大不列颠及北爱尔兰联合王国',
                'locale' => 'zh-cn',
            ),
            148 => 
            array (
                'id' => 149,
                'country_id' => 149,
                'name' => '德国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '德意志联邦共和国',
                'locale' => 'zh-cn',
            ),
            149 => 
            array (
                'id' => 150,
                'country_id' => 150,
                'name' => '法国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法兰西共和国',
                'locale' => 'zh-cn',
            ),
            150 => 
            array (
                'id' => 151,
                'country_id' => 151,
                'name' => '意大利',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '意大利共和国',
                'locale' => 'zh-cn',
            ),
            151 => 
            array (
                'id' => 152,
                'country_id' => 152,
                'name' => '卢森堡',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '卢森堡大公国',
                'locale' => 'zh-cn',
            ),
            152 => 
            array (
                'id' => 153,
                'country_id' => 153,
                'name' => '葡萄牙',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '葡萄牙共和国',
                'locale' => 'zh-cn',
            ),
            153 => 
            array (
                'id' => 154,
                'country_id' => 154,
                'name' => '波兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '波兰共和国',
                'locale' => 'zh-cn',
            ),
            154 => 
            array (
                'id' => 155,
                'country_id' => 155,
                'name' => '西班牙',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '西班牙王国',
                'locale' => 'zh-cn',
            ),
            155 => 
            array (
                'id' => 156,
                'country_id' => 156,
                'name' => '阿尔巴尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿尔巴尼亚共和国',
                'locale' => 'zh-cn',
            ),
            156 => 
            array (
                'id' => 157,
                'country_id' => 157,
                'name' => '安道尔',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '安道尔公国',
                'locale' => 'zh-cn',
            ),
            157 => 
            array (
                'id' => 158,
                'country_id' => 158,
                'name' => '列支敦士登',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '列支敦士登公国',
                'locale' => 'zh-cn',
            ),
            158 => 
            array (
                'id' => 159,
                'country_id' => 159,
                'name' => '塞黑',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '塞尔维亚和黑山',
                'locale' => 'zh-cn',
            ),
            159 => 
            array (
                'id' => 160,
                'country_id' => 160,
                'name' => '奥地利',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '奥地利共和国',
                'locale' => 'zh-cn',
            ),
            160 => 
            array (
                'id' => 161,
                'country_id' => 161,
                'name' => '保加利亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '保加利亚共和国',
                'locale' => 'zh-cn',
            ),
            161 => 
            array (
                'id' => 162,
                'country_id' => 162,
                'name' => '芬兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '芬兰共和国',
                'locale' => 'zh-cn',
            ),
            162 => 
            array (
                'id' => 163,
                'country_id' => 163,
                'name' => '直布罗陀',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '直布罗陀',
                'locale' => 'zh-cn',
            ),
            163 => 
            array (
                'id' => 164,
                'country_id' => 164,
                'name' => '多米尼克',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '多米尼克国',
                'locale' => 'zh-cn',
            ),
            164 => 
            array (
                'id' => 165,
                'country_id' => 165,
                'name' => '百慕大',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '百慕大群岛',
                'locale' => 'zh-cn',
            ),
            165 => 
            array (
                'id' => 166,
                'country_id' => 166,
                'name' => '加拿大',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '加拿大',
                'locale' => 'zh-cn',
            ),
            166 => 
            array (
                'id' => 167,
                'country_id' => 167,
                'name' => '美国',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '美利坚合众国',
                'locale' => 'zh-cn',
            ),
            167 => 
            array (
                'id' => 168,
                'country_id' => 168,
                'name' => '格陵兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '格陵兰',
                'locale' => 'zh-cn',
            ),
            168 => 
            array (
                'id' => 169,
                'country_id' => 169,
                'name' => '汤加',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '汤加王国',
                'locale' => 'zh-cn',
            ),
            169 => 
            array (
                'id' => 170,
                'country_id' => 170,
                'name' => '澳大利亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '澳大利亚联邦',
                'locale' => 'zh-cn',
            ),
            170 => 
            array (
                'id' => 171,
                'country_id' => 171,
                'name' => '库克群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '库克群岛',
                'locale' => 'zh-cn',
            ),
            171 => 
            array (
                'id' => 172,
                'country_id' => 172,
                'name' => '瑙鲁',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '瑙鲁共和国',
                'locale' => 'zh-cn',
            ),
            172 => 
            array (
                'id' => 173,
                'country_id' => 173,
                'name' => '新喀里多尼亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '新喀里多尼亚',
                'locale' => 'zh-cn',
            ),
            173 => 
            array (
                'id' => 174,
                'country_id' => 174,
                'name' => '瓦努阿图',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '瓦努阿图共和国',
                'locale' => 'zh-cn',
            ),
            174 => 
            array (
                'id' => 175,
                'country_id' => 175,
                'name' => '所罗门群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '所罗门群岛',
                'locale' => 'zh-cn',
            ),
            175 => 
            array (
                'id' => 176,
                'country_id' => 176,
                'name' => '萨摩亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '萨摩亚独立国',
                'locale' => 'zh-cn',
            ),
            176 => 
            array (
                'id' => 177,
                'country_id' => 177,
                'name' => '图瓦卢',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '图瓦卢',
                'locale' => 'zh-cn',
            ),
            177 => 
            array (
                'id' => 178,
                'country_id' => 178,
                'name' => '密克罗尼西亚联邦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '密克罗尼西亚联邦',
                'locale' => 'zh-cn',
            ),
            178 => 
            array (
                'id' => 179,
                'country_id' => 179,
                'name' => '马绍尔群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马绍尔群岛共和国',
                'locale' => 'zh-cn',
            ),
            179 => 
            array (
                'id' => 180,
                'country_id' => 180,
                'name' => '基里巴斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '基里巴斯共和国',
                'locale' => 'zh-cn',
            ),
            180 => 
            array (
                'id' => 181,
                'country_id' => 181,
                'name' => '法属玻利尼西亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法属波利尼西亚',
                'locale' => 'zh-cn',
            ),
            181 => 
            array (
                'id' => 182,
                'country_id' => 182,
                'name' => '新西兰',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '新西兰',
                'locale' => 'zh-cn',
            ),
            182 => 
            array (
                'id' => 183,
                'country_id' => 183,
                'name' => '斐济',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '斐济共和国',
                'locale' => 'zh-cn',
            ),
            183 => 
            array (
                'id' => 184,
                'country_id' => 184,
                'name' => '巴布亚新几内亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴布亚新几内亚独立国',
                'locale' => 'zh-cn',
            ),
            184 => 
            array (
                'id' => 185,
                'country_id' => 185,
                'name' => '帕劳',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '帕劳共和国',
                'locale' => 'zh-cn',
            ),
            185 => 
            array (
                'id' => 186,
                'country_id' => 186,
                'name' => '智利',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '智利共和国',
                'locale' => 'zh-cn',
            ),
            186 => 
            array (
                'id' => 187,
                'country_id' => 187,
                'name' => '哥伦比亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '哥伦比亚共和国',
                'locale' => 'zh-cn',
            ),
            187 => 
            array (
                'id' => 188,
                'country_id' => 188,
                'name' => '圭亚那',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '圭亚那共和国',
                'locale' => 'zh-cn',
            ),
            188 => 
            array (
                'id' => 189,
                'country_id' => 189,
                'name' => '巴拉圭',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴拉圭共和国',
                'locale' => 'zh-cn',
            ),
            189 => 
            array (
                'id' => 190,
                'country_id' => 190,
                'name' => '秘鲁',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '秘鲁共和国',
                'locale' => 'zh-cn',
            ),
            190 => 
            array (
                'id' => 191,
                'country_id' => 191,
                'name' => '苏里南',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '苏里南共和国',
                'locale' => 'zh-cn',
            ),
            191 => 
            array (
                'id' => 192,
                'country_id' => 192,
                'name' => '委内瑞拉',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '委内瑞拉玻利瓦尔共和国',
                'locale' => 'zh-cn',
            ),
            192 => 
            array (
                'id' => 193,
                'country_id' => 193,
                'name' => '乌拉圭',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '乌拉圭东岸共和国',
                'locale' => 'zh-cn',
            ),
            193 => 
            array (
                'id' => 194,
                'country_id' => 194,
                'name' => '厄瓜多尔',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '厄瓜多尔共和国',
                'locale' => 'zh-cn',
            ),
            194 => 
            array (
                'id' => 195,
                'country_id' => 195,
                'name' => '安提瓜和巴布达',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '安提瓜和巴布达',
                'locale' => 'zh-cn',
            ),
            195 => 
            array (
                'id' => 196,
                'country_id' => 196,
                'name' => '阿鲁巴岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿鲁巴',
                'locale' => 'zh-cn',
            ),
            196 => 
            array (
                'id' => 197,
                'country_id' => 197,
                'name' => '巴哈马',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴哈马国',
                'locale' => 'zh-cn',
            ),
            197 => 
            array (
                'id' => 198,
                'country_id' => 198,
                'name' => '巴巴多斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴巴多斯',
                'locale' => 'zh-cn',
            ),
            198 => 
            array (
                'id' => 199,
                'country_id' => 199,
                'name' => '开曼群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '开曼群岛',
                'locale' => 'zh-cn',
            ),
            199 => 
            array (
                'id' => 200,
                'country_id' => 200,
                'name' => '格林纳达',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '格林纳达',
                'locale' => 'zh-cn',
            ),
            200 => 
            array (
                'id' => 201,
                'country_id' => 201,
                'name' => '海地',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '海地共和国',
                'locale' => 'zh-cn',
            ),
            201 => 
            array (
                'id' => 202,
                'country_id' => 202,
                'name' => '牙买加',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '牙买加',
                'locale' => 'zh-cn',
            ),
            202 => 
            array (
                'id' => 203,
                'country_id' => 203,
                'name' => '马提尼克',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '马提尼克岛',
                'locale' => 'zh-cn',
            ),
            203 => 
            array (
                'id' => 204,
                'country_id' => 204,
                'name' => '蒙特塞拉特',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '蒙特塞拉特岛',
                'locale' => 'zh-cn',
            ),
            204 => 
            array (
                'id' => 205,
                'country_id' => 205,
                'name' => '特立尼达和多巴哥',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '特立尼达和多巴哥共和国',
                'locale' => 'zh-cn',
            ),
            205 => 
            array (
                'id' => 206,
                'country_id' => 206,
                'name' => '圣其茨-尼维斯',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '圣基茨和尼维斯联邦',
                'locale' => 'zh-cn',
            ),
            206 => 
            array (
                'id' => 207,
                'country_id' => 207,
                'name' => '圣皮埃尔和密克隆',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '圣皮埃尔和密克隆群岛',
                'locale' => 'zh-cn',
            ),
            207 => 
            array (
                'id' => 208,
                'country_id' => 208,
                'name' => '阿根廷',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '阿根廷共和国',
                'locale' => 'zh-cn',
            ),
            208 => 
            array (
                'id' => 209,
                'country_id' => 209,
                'name' => '伯利兹',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '伯利兹',
                'locale' => 'zh-cn',
            ),
            209 => 
            array (
                'id' => 210,
                'country_id' => 210,
                'name' => '玻利维亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '玻利维亚共和国',
                'locale' => 'zh-cn',
            ),
            210 => 
            array (
                'id' => 211,
                'country_id' => 211,
                'name' => '巴西',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '巴西联邦共和国',
                'locale' => 'zh-cn',
            ),
            211 => 
            array (
                'id' => 212,
                'country_id' => 212,
                'name' => '美属萨摩亚群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '美国美属萨摩亚群岛',
                'locale' => 'zh-cn',
            ),
            212 => 
            array (
                'id' => 213,
                'country_id' => 213,
                'name' => '奥兰群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '芬兰奥兰群岛',
                'locale' => 'zh-cn',
            ),
            213 => 
            array (
                'id' => 214,
                'country_id' => 214,
                'name' => '圣巴托洛缪岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法国圣巴托洛缪岛',
                'locale' => 'zh-cn',
            ),
            214 => 
            array (
                'id' => 215,
                'country_id' => 215,
                'name' => '博内尔岛、圣尤斯特歇斯岛和萨巴岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '荷兰博内尔岛、圣尤斯特歇斯岛和萨巴岛',
                'locale' => 'zh-cn',
            ),
            215 => 
            array (
                'id' => 216,
                'country_id' => 216,
                'name' => '布韦岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '挪威布韦岛',
                'locale' => 'zh-cn',
            ),
            216 => 
            array (
                'id' => 217,
                'country_id' => 217,
                'name' => '科科斯群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '澳大利亚科科斯群岛',
                'locale' => 'zh-cn',
            ),
            217 => 
            array (
                'id' => 218,
                'country_id' => 218,
                'name' => '库拉索',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '荷兰库拉索',
                'locale' => 'zh-cn',
            ),
            218 => 
            array (
                'id' => 219,
                'country_id' => 219,
                'name' => '圣诞岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '澳大利亚圣诞岛',
                'locale' => 'zh-cn',
            ),
            219 => 
            array (
                'id' => 220,
                'country_id' => 220,
            'name' => '福克兰群岛(马尔维纳斯)',
                'alias' => NULL,
                'abbr' => NULL,
            'full_name' => '英国福克兰群岛(马尔维纳斯)',
                'locale' => 'zh-cn',
            ),
            220 => 
            array (
                'id' => 221,
                'country_id' => 221,
                'name' => '法罗群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '丹麦法罗群岛',
                'locale' => 'zh-cn',
            ),
            221 => 
            array (
                'id' => 222,
                'country_id' => 222,
                'name' => '法属圭亚那',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法国法属圭亚那',
                'locale' => 'zh-cn',
            ),
            222 => 
            array (
                'id' => 223,
                'country_id' => 223,
                'name' => '根西岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国根西岛',
                'locale' => 'zh-cn',
            ),
            223 => 
            array (
                'id' => 224,
                'country_id' => 224,
                'name' => '南乔治亚岛和南桑威奇群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国南乔治亚岛和南桑威奇群岛',
                'locale' => 'zh-cn',
            ),
            224 => 
            array (
                'id' => 225,
                'country_id' => 225,
                'name' => '关岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '美国关岛',
                'locale' => 'zh-cn',
            ),
            225 => 
            array (
                'id' => 226,
                'country_id' => 226,
                'name' => '赫德岛和麦克唐纳群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '澳大利亚赫德岛和麦克唐纳群岛',
                'locale' => 'zh-cn',
            ),
            226 => 
            array (
                'id' => 227,
                'country_id' => 227,
                'name' => '英属马恩岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国英属马恩岛',
                'locale' => 'zh-cn',
            ),
            227 => 
            array (
                'id' => 228,
                'country_id' => 228,
                'name' => '英属印度洋领地',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国英属印度洋领地',
                'locale' => 'zh-cn',
            ),
            228 => 
            array (
                'id' => 229,
                'country_id' => 229,
                'name' => '泽西岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国泽西岛',
                'locale' => 'zh-cn',
            ),
            229 => 
            array (
                'id' => 230,
                'country_id' => 230,
                'name' => '圣卢西亚',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国圣卢西亚',
                'locale' => 'zh-cn',
            ),
            230 => 
            array (
                'id' => 231,
                'country_id' => 231,
                'name' => '圣马丁岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法国圣马丁岛',
                'locale' => 'zh-cn',
            ),
            231 => 
            array (
                'id' => 232,
                'country_id' => 232,
                'name' => '北马里亚纳群岛自由邦',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '美国北马里亚纳群岛自由邦',
                'locale' => 'zh-cn',
            ),
            232 => 
            array (
                'id' => 233,
                'country_id' => 233,
                'name' => '诺福克岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '美国诺福克岛',
                'locale' => 'zh-cn',
            ),
            233 => 
            array (
                'id' => 234,
                'country_id' => 234,
                'name' => '纽埃',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '新西兰纽埃',
                'locale' => 'zh-cn',
            ),
            234 => 
            array (
                'id' => 235,
                'country_id' => 235,
                'name' => '圣皮埃尔和密克隆群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法国圣皮埃尔和密克隆群岛',
                'locale' => 'zh-cn',
            ),
            235 => 
            array (
                'id' => 236,
                'country_id' => 236,
                'name' => '皮特凯恩群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国皮特凯恩群岛',
                'locale' => 'zh-cn',
            ),
            236 => 
            array (
                'id' => 237,
                'country_id' => 237,
                'name' => '圣赫勒拿岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国圣赫勒拿岛',
                'locale' => 'zh-cn',
            ),
            237 => 
            array (
                'id' => 238,
                'country_id' => 238,
                'name' => '斯瓦尔巴群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '挪威斯瓦尔巴群岛',
                'locale' => 'zh-cn',
            ),
            238 => 
            array (
                'id' => 239,
                'country_id' => 239,
                'name' => '圣马丁岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '荷兰圣马丁岛',
                'locale' => 'zh-cn',
            ),
            239 => 
            array (
                'id' => 240,
                'country_id' => 240,
                'name' => '特克斯和凯科斯群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国特克斯和凯科斯群岛',
                'locale' => 'zh-cn',
            ),
            240 => 
            array (
                'id' => 241,
                'country_id' => 241,
                'name' => '法属南部领地',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法国法属南部领地',
                'locale' => 'zh-cn',
            ),
            241 => 
            array (
                'id' => 242,
                'country_id' => 242,
                'name' => '托克劳群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '新西兰托克劳群岛',
                'locale' => 'zh-cn',
            ),
            242 => 
            array (
                'id' => 243,
                'country_id' => 243,
                'name' => '美国本土外小岛屿',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '美国本土外小岛屿',
                'locale' => 'zh-cn',
            ),
            243 => 
            array (
                'id' => 244,
                'country_id' => 244,
                'name' => '英属维尔京群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '英国英属维尔京群岛',
                'locale' => 'zh-cn',
            ),
            244 => 
            array (
                'id' => 245,
                'country_id' => 245,
                'name' => '美属维尔京群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '美国美属维尔京群岛',
                'locale' => 'zh-cn',
            ),
            245 => 
            array (
                'id' => 246,
                'country_id' => 246,
                'name' => '瓦利斯和富图纳群岛',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '法国瓦利斯和富图纳群岛',
                'locale' => 'zh-cn',
            ),
            246 => 
            array (
                'id' => 247,
                'country_id' => 247,
                'name' => '科索沃',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => '科索沃共和国',
                'locale' => 'zh-cn',
            ),
            247 => 
            array (
                'id' => 248,
                'country_id' => 1,
                'name' => 'Cameroon',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Cameroon',
                'locale' => 'en',
            ),
            248 => 
            array (
                'id' => 249,
                'country_id' => 2,
                'name' => 'Benin',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Benin ',
                'locale' => 'en',
            ),
            249 => 
            array (
                'id' => 250,
                'country_id' => 3,
                'name' => 'Madagascar',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Madagascar ',
                'locale' => 'en',
            ),
            250 => 
            array (
                'id' => 251,
                'country_id' => 4,
                'name' => 'Rwanda',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Rwanda',
                'locale' => 'en',
            ),
            251 => 
            array (
                'id' => 252,
                'country_id' => 5,
                'name' => 'Seychelles',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Seychelles',
                'locale' => 'en',
            ),
            252 => 
            array (
                'id' => 253,
                'country_id' => 6,
                'name' => 'Cote d\'lvoire',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Cote d\'ivoire',
                'locale' => 'en',
            ),
            253 => 
            array (
                'id' => 254,
                'country_id' => 7,
                'name' => 'Egypt',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Arab Republic of Egypt ',
                'locale' => 'en',
            ),
            254 => 
            array (
                'id' => 255,
                'country_id' => 8,
                'name' => 'Mauritius',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Mauritius',
                'locale' => 'en',
            ),
            255 => 
            array (
                'id' => 256,
                'country_id' => 9,
                'name' => 'Burkina Faso',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Burkina Faso',
                'locale' => 'en',
            ),
            256 => 
            array (
                'id' => 257,
                'country_id' => 10,
                'name' => 'Eritrea',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Commonwealth of Eritrea',
                'locale' => 'en',
            ),
            257 => 
            array (
                'id' => 258,
                'country_id' => 11,
                'name' => 'Sao Tome and Principe',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Democratic Republic Sao Tome and Principe',
                'locale' => 'en',
            ),
            258 => 
            array (
                'id' => 259,
                'country_id' => 12,
                'name' => 'Angola',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Angola',
                'locale' => 'en',
            ),
            259 => 
            array (
                'id' => 260,
                'country_id' => 13,
                'name' => 'Libyan Arab Jm',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'State of Libya',
                'locale' => 'en',
            ),
            260 => 
            array (
                'id' => 261,
                'country_id' => 14,
                'name' => 'Zimbabwe',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Zimbabwe',
                'locale' => 'en',
            ),
            261 => 
            array (
                'id' => 262,
                'country_id' => 15,
                'name' => 'Guinea',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Guinea',
                'locale' => 'en',
            ),
            262 => 
            array (
                'id' => 263,
                'country_id' => 16,
                'name' => 'Sierra Leone',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Sierra Leone',
                'locale' => 'en',
            ),
            263 => 
            array (
                'id' => 264,
                'country_id' => 17,
                'name' => 'Reunion',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Reunion Island',
                'locale' => 'en',
            ),
            264 => 
            array (
                'id' => 265,
                'country_id' => 18,
                'name' => 'Gabon',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Gabonese Republic',
                'locale' => 'en',
            ),
            265 => 
            array (
                'id' => 266,
                'country_id' => 19,
                'name' => 'Ghana',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Ghana',
                'locale' => 'en',
            ),
            266 => 
            array (
                'id' => 267,
                'country_id' => 20,
                'name' => 'Tanzania',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The United Republic of Tanzania',
                'locale' => 'en',
            ),
            267 => 
            array (
                'id' => 268,
                'country_id' => 21,
                'name' => 'Mali',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Mali',
                'locale' => 'en',
            ),
            268 => 
            array (
                'id' => 269,
                'country_id' => 22,
                'name' => 'Somalia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Somalia Democratic Republic',
                'locale' => 'en',
            ),
            269 => 
            array (
                'id' => 270,
                'country_id' => 23,
                'name' => 'Mauritania',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Islamic Republic of Mauritania',
                'locale' => 'en',
            ),
            270 => 
            array (
                'id' => 271,
                'country_id' => 24,
                'name' => 'Uganda',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Uganda',
                'locale' => 'en',
            ),
            271 => 
            array (
                'id' => 272,
                'country_id' => 25,
                'name' => 'Chad',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Chad',
                'locale' => 'en',
            ),
            272 => 
            array (
                'id' => 273,
                'country_id' => 26,
                'name' => 'Mayotte',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Territorial Collectivity of Mayotte',
                'locale' => 'en',
            ),
            273 => 
            array (
                'id' => 274,
                'country_id' => 27,
                'name' => 'Comoros',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Union of Comoros',
                'locale' => 'en',
            ),
            274 => 
            array (
                'id' => 275,
                'country_id' => 28,
                'name' => 'Botswana',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Botswana',
                'locale' => 'en',
            ),
            275 => 
            array (
                'id' => 276,
                'country_id' => 29,
                'name' => 'Senegal',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Senegal',
                'locale' => 'en',
            ),
            276 => 
            array (
                'id' => 277,
                'country_id' => 30,
                'name' => 'Swaziland',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Swaziland',
                'locale' => 'en',
            ),
            277 => 
            array (
                'id' => 278,
                'country_id' => 31,
                'name' => 'Guinea Bissau',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Guinea-Bissau',
                'locale' => 'en',
            ),
            278 => 
            array (
                'id' => 279,
                'country_id' => 32,
                'name' => 'DR Congo',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Democratic Republic of the Congo',
                'locale' => 'en',
            ),
            279 => 
            array (
                'id' => 280,
                'country_id' => 33,
                'name' => 'Central African',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Central African Republic',
                'locale' => 'en',
            ),
            280 => 
            array (
                'id' => 281,
                'country_id' => 34,
                'name' => 'Lesotho',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Lesotho',
                'locale' => 'en',
            ),
            281 => 
            array (
                'id' => 282,
                'country_id' => 35,
                'name' => 'Congo',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of the Congo',
                'locale' => 'en',
            ),
            282 => 
            array (
                'id' => 283,
                'country_id' => 36,
                'name' => 'South Africa',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of South Africa',
                'locale' => 'en',
            ),
            283 => 
            array (
                'id' => 284,
                'country_id' => 37,
                'name' => 'Liberia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Liberia',
                'locale' => 'en',
            ),
            284 => 
            array (
                'id' => 285,
                'country_id' => 38,
                'name' => 'Tunisia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Tunisia',
                'locale' => 'en',
            ),
            285 => 
            array (
                'id' => 286,
                'country_id' => 39,
                'name' => 'Zambia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Zambia',
                'locale' => 'en',
            ),
            286 => 
            array (
                'id' => 287,
                'country_id' => 40,
                'name' => 'Niger',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Niger',
                'locale' => 'en',
            ),
            287 => 
            array (
                'id' => 288,
                'country_id' => 41,
                'name' => 'Western Sahara',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Sahrawi Arab Democratic Republic Western Sahara',
                'locale' => 'en',
            ),
            288 => 
            array (
                'id' => 289,
                'country_id' => 42,
                'name' => 'Togo',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Togo',
                'locale' => 'en',
            ),
            289 => 
            array (
                'id' => 290,
                'country_id' => 43,
                'name' => 'Namibia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Namibia',
                'locale' => 'en',
            ),
            290 => 
            array (
                'id' => 291,
                'country_id' => 44,
                'name' => 'Mozambique',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Mozambique',
                'locale' => 'en',
            ),
            291 => 
            array (
                'id' => 292,
                'country_id' => 45,
                'name' => 'Ethiopia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Federal Democratic Republic of Ethiopia',
                'locale' => 'en',
            ),
            292 => 
            array (
                'id' => 293,
                'country_id' => 46,
                'name' => 'Morocco',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Morocco',
                'locale' => 'en',
            ),
            293 => 
            array (
                'id' => 294,
                'country_id' => 47,
                'name' => 'Malawi',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Malawi',
                'locale' => 'en',
            ),
            294 => 
            array (
                'id' => 295,
                'country_id' => 48,
                'name' => 'Nigeria',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Federal Republic of Nigeria',
                'locale' => 'en',
            ),
            295 => 
            array (
                'id' => 296,
                'country_id' => 49,
                'name' => 'Cape Verde',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Cape Verde',
                'locale' => 'en',
            ),
            296 => 
            array (
                'id' => 297,
                'country_id' => 50,
                'name' => 'Burundi',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Burundi',
                'locale' => 'en',
            ),
            297 => 
            array (
                'id' => 298,
                'country_id' => 51,
                'name' => 'Algeria',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'People\'s Democratic Republic of Algeria',
                'locale' => 'en',
            ),
            298 => 
            array (
                'id' => 299,
                'country_id' => 52,
                'name' => 'Djibouti',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Djibouti',
                'locale' => 'en',
            ),
            299 => 
            array (
                'id' => 300,
                'country_id' => 53,
                'name' => 'Gambia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Islamic Republic of Gambia',
                'locale' => 'en',
            ),
            300 => 
            array (
                'id' => 301,
                'country_id' => 54,
                'name' => 'Eq.Guinea',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Equatorial Guinea',
                'locale' => 'en',
            ),
            301 => 
            array (
                'id' => 302,
                'country_id' => 55,
                'name' => 'Sudan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Sudan',
                'locale' => 'en',
            ),
            302 => 
            array (
                'id' => 303,
                'country_id' => 56,
                'name' => 'Kenya',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Kenya',
                'locale' => 'en',
            ),
            303 => 
            array (
                'id' => 304,
                'country_id' => 57,
                'name' => 'Singapore',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Singapore',
                'locale' => 'en',
            ),
            304 => 
            array (
                'id' => 305,
                'country_id' => 58,
                'name' => 'Korea',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Korea',
                'locale' => 'en',
            ),
            305 => 
            array (
                'id' => 306,
                'country_id' => 59,
                'name' => 'Syrian',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Syrian Arab Republic',
                'locale' => 'en',
            ),
            306 => 
            array (
                'id' => 307,
                'country_id' => 60,
                'name' => 'Uzbekstan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Uzbekistan',
                'locale' => 'en',
            ),
            307 => 
            array (
                'id' => 308,
                'country_id' => 61,
                'name' => 'Bahrian',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Bahrain',
                'locale' => 'en',
            ),
            308 => 
            array (
                'id' => 309,
                'country_id' => 62,
                'name' => 'Japan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Japan',
                'locale' => 'en',
            ),
            309 => 
            array (
                'id' => 310,
                'country_id' => 63,
                'name' => 'Jordan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Hashemite Kingdom of Jordan',
                'locale' => 'en',
            ),
            310 => 
            array (
                'id' => 311,
                'country_id' => 64,
                'name' => 'Vietnam',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Socialist Republic of Vietnam',
                'locale' => 'en',
            ),
            311 => 
            array (
                'id' => 312,
                'country_id' => 65,
                'name' => 'Kirghizia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kyrgyz Republic',
                'locale' => 'en',
            ),
            312 => 
            array (
                'id' => 313,
                'country_id' => 66,
                'name' => 'Thailand',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Kingdom of Thailand',
                'locale' => 'en',
            ),
            313 => 
            array (
                'id' => 314,
                'country_id' => 67,
                'name' => 'Sri Lanka',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Democratic Socialist Republic of Sri Lanka',
                'locale' => 'en',
            ),
            314 => 
            array (
                'id' => 315,
                'country_id' => 68,
                'name' => 'United Arab Emirates',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The United Arab Emirates',
                'locale' => 'en',
            ),
            315 => 
            array (
                'id' => 316,
                'country_id' => 69,
                'name' => 'Laos',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Lao People\'s Democratic Republic',
                'locale' => 'en',
            ),
            316 => 
            array (
                'id' => 317,
                'country_id' => 70,
                'name' => 'Afghanistan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Islamic Republic of Afghanistan',
                'locale' => 'en',
            ),
            317 => 
            array (
                'id' => 318,
                'country_id' => 71,
                'name' => 'Macau',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Macau Macao',
                'locale' => 'en',
            ),
            318 => 
            array (
                'id' => 319,
                'country_id' => 72,
                'name' => 'Tajikistan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Tajikistan',
                'locale' => 'en',
            ),
            319 => 
            array (
                'id' => 320,
                'country_id' => 73,
                'name' => 'Korea,DPR',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Democratic People\'s Republic of Korea',
                'locale' => 'en',
            ),
            320 => 
            array (
                'id' => 321,
                'country_id' => 74,
                'name' => 'Palestine',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The State of Palestine',
                'locale' => 'en',
            ),
            321 => 
            array (
                'id' => 322,
                'country_id' => 75,
                'name' => 'Hong Kong',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Hong Kong',
                'locale' => 'en',
            ),
            322 => 
            array (
                'id' => 323,
                'country_id' => 76,
                'name' => 'Iraq',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic Of Iraq',
                'locale' => 'en',
            ),
            323 => 
            array (
                'id' => 324,
                'country_id' => 77,
                'name' => 'Lebanon',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Lebanon',
                'locale' => 'en',
            ),
            324 => 
            array (
                'id' => 325,
                'country_id' => 78,
                'name' => 'Kuwait',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The State of Kuwait',
                'locale' => 'en',
            ),
            325 => 
            array (
                'id' => 326,
                'country_id' => 79,
                'name' => 'Brunei',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Brunei Darussalam',
                'locale' => 'en',
            ),
            326 => 
            array (
                'id' => 327,
                'country_id' => 80,
                'name' => 'Maldives',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Maldives',
                'locale' => 'en',
            ),
            327 => 
            array (
                'id' => 328,
                'country_id' => 81,
                'name' => 'Indonesia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Indonesia',
                'locale' => 'en',
            ),
            328 => 
            array (
                'id' => 329,
                'country_id' => 82,
                'name' => 'Israel',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The State of Israel',
                'locale' => 'en',
            ),
            329 => 
            array (
                'id' => 330,
                'country_id' => 83,
                'name' => 'Mongolia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Mongolia',
                'locale' => 'en',
            ),
            330 => 
            array (
                'id' => 331,
                'country_id' => 84,
                'name' => 'Oman',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Sultanate of Oman',
                'locale' => 'en',
            ),
            331 => 
            array (
                'id' => 332,
                'country_id' => 85,
                'name' => 'India',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of India',
                'locale' => 'en',
            ),
            332 => 
            array (
                'id' => 333,
                'country_id' => 86,
                'name' => 'Myanmar',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic Of The Union Of Myanmar',
                'locale' => 'en',
            ),
            333 => 
            array (
                'id' => 334,
                'country_id' => 87,
                'name' => 'Malaysia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Malaysia',
                'locale' => 'en',
            ),
            334 => 
            array (
                'id' => 335,
                'country_id' => 88,
                'name' => 'East Timor',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Democratic Republic of East Timor',
                'locale' => 'en',
            ),
            335 => 
            array (
                'id' => 336,
                'country_id' => 89,
                'name' => 'Yemen',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Yemen',
                'locale' => 'en',
            ),
            336 => 
            array (
                'id' => 337,
                'country_id' => 90,
                'name' => 'Bhutan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Kingdom of Bhutan',
                'locale' => 'en',
            ),
            337 => 
            array (
                'id' => 338,
                'country_id' => 91,
                'name' => 'Cambodia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Kingdom of Cambodia',
                'locale' => 'en',
            ),
            338 => 
            array (
                'id' => 339,
                'country_id' => 92,
                'name' => 'Pakistan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Islamic Republic of Pakistan',
                'locale' => 'en',
            ),
            339 => 
            array (
                'id' => 340,
                'country_id' => 93,
                'name' => 'Bangladesh',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'People\'s Republic of Bangladesh',
                'locale' => 'en',
            ),
            340 => 
            array (
                'id' => 341,
                'country_id' => 94,
                'name' => 'Saudi Arabia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Kingdom of Saudi Arabia',
                'locale' => 'en',
            ),
            341 => 
            array (
                'id' => 342,
                'country_id' => 95,
                'name' => 'Turkmenistan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Turkmenistan',
                'locale' => 'en',
            ),
            342 => 
            array (
                'id' => 343,
                'country_id' => 96,
                'name' => 'Qatar',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The State of Qatar',
                'locale' => 'en',
            ),
            343 => 
            array (
                'id' => 344,
                'country_id' => 97,
                'name' => 'Nepal',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Federal Democratic Republic of Nepal',
                'locale' => 'en',
            ),
            344 => 
            array (
                'id' => 345,
                'country_id' => 98,
                'name' => 'Kazakhstan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Kazakhstan',
                'locale' => 'en',
            ),
            345 => 
            array (
                'id' => 346,
                'country_id' => 99,
                'name' => 'Philippines',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of the Philippines',
                'locale' => 'en',
            ),
            346 => 
            array (
                'id' => 347,
                'country_id' => 100,
                'name' => 'Taiwan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Taiwan',
                'locale' => 'en',
            ),
            347 => 
            array (
                'id' => 348,
                'country_id' => 101,
                'name' => 'China',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'People\'s Republic of China',
                'locale' => 'en',
            ),
            348 => 
            array (
                'id' => 349,
                'country_id' => 102,
                'name' => 'Iran',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Islamic Republic of Iran',
                'locale' => 'en',
            ),
            349 => 
            array (
                'id' => 350,
                'country_id' => 103,
                'name' => 'Costa Rica',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Costa Rica',
                'locale' => 'en',
            ),
            350 => 
            array (
                'id' => 351,
                'country_id' => 104,
                'name' => 'Cuba',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Cuba',
                'locale' => 'en',
            ),
            351 => 
            array (
                'id' => 352,
                'country_id' => 105,
                'name' => 'Dominican',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Dominican Republic',
                'locale' => 'en',
            ),
            352 => 
            array (
                'id' => 353,
                'country_id' => 106,
                'name' => 'Mexico',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The United States of Mexico',
                'locale' => 'en',
            ),
            353 => 
            array (
                'id' => 354,
                'country_id' => 107,
                'name' => 'Nicaragua',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Nicaragua',
                'locale' => 'en',
            ),
            354 => 
            array (
                'id' => 355,
                'country_id' => 108,
                'name' => 'Panama',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Panama',
                'locale' => 'en',
            ),
            355 => 
            array (
                'id' => 356,
                'country_id' => 109,
                'name' => 'Netherlands Antilles',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Netherlands Antilles',
                'locale' => 'en',
            ),
            356 => 
            array (
                'id' => 357,
                'country_id' => 110,
                'name' => 'El Salvador',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of El Salvador',
                'locale' => 'en',
            ),
            357 => 
            array (
                'id' => 358,
                'country_id' => 111,
                'name' => 'Puerto Rico',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Commonwealth of Puerto Rico',
                'locale' => 'en',
            ),
            358 => 
            array (
                'id' => 359,
                'country_id' => 112,
                'name' => 'Saint Vincent and the Grenadines',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Saint Vincent and the Grenadines',
                'locale' => 'en',
            ),
            359 => 
            array (
                'id' => 360,
                'country_id' => 113,
                'name' => 'Honduras',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Honduras',
                'locale' => 'en',
            ),
            360 => 
            array (
                'id' => 361,
                'country_id' => 114,
                'name' => 'Guatemala',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Guatemala',
                'locale' => 'en',
            ),
            361 => 
            array (
                'id' => 362,
                'country_id' => 115,
                'name' => 'Georgia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Georgia',
                'locale' => 'en',
            ),
            362 => 
            array (
                'id' => 363,
                'country_id' => 116,
                'name' => 'Armenia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Armenia',
                'locale' => 'en',
            ),
            363 => 
            array (
                'id' => 364,
                'country_id' => 117,
                'name' => 'Azerbaijan',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Azerbaijan',
                'locale' => 'en',
            ),
            364 => 
            array (
                'id' => 365,
                'country_id' => 118,
                'name' => 'Belarus',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Belarus',
                'locale' => 'en',
            ),
            365 => 
            array (
                'id' => 366,
                'country_id' => 119,
                'name' => 'Russia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Russian Federation',
                'locale' => 'en',
            ),
            366 => 
            array (
                'id' => 367,
                'country_id' => 120,
                'name' => 'Ukraine',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Ukraine',
                'locale' => 'en',
            ),
            367 => 
            array (
                'id' => 368,
                'country_id' => 121,
                'name' => 'Hungary',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Hungary',
                'locale' => 'en',
            ),
            368 => 
            array (
                'id' => 369,
                'country_id' => 122,
                'name' => 'Iceland',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Iceland',
                'locale' => 'en',
            ),
            369 => 
            array (
                'id' => 370,
                'country_id' => 123,
                'name' => 'Malta',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Malta',
                'locale' => 'en',
            ),
            370 => 
            array (
                'id' => 371,
                'country_id' => 124,
                'name' => 'Monaco',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Principality of Monaco',
                'locale' => 'en',
            ),
            371 => 
            array (
                'id' => 372,
                'country_id' => 125,
                'name' => 'Norway',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Norway',
                'locale' => 'en',
            ),
            372 => 
            array (
                'id' => 373,
                'country_id' => 126,
                'name' => 'Romania',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Romania',
                'locale' => 'en',
            ),
            373 => 
            array (
                'id' => 374,
                'country_id' => 127,
                'name' => 'San Marino',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of San Marino',
                'locale' => 'en',
            ),
            374 => 
            array (
                'id' => 375,
                'country_id' => 128,
                'name' => 'Sweden',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Sweden',
                'locale' => 'en',
            ),
            375 => 
            array (
                'id' => 376,
                'country_id' => 129,
                'name' => 'Switzerland',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Swiss Confederation',
                'locale' => 'en',
            ),
            376 => 
            array (
                'id' => 377,
                'country_id' => 130,
                'name' => 'Estonia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Estonia',
                'locale' => 'en',
            ),
            377 => 
            array (
                'id' => 378,
                'country_id' => 131,
                'name' => 'Latvia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Latvia',
                'locale' => 'en',
            ),
            378 => 
            array (
                'id' => 379,
                'country_id' => 132,
                'name' => 'Lithuania',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Lithuania',
                'locale' => 'en',
            ),
            379 => 
            array (
                'id' => 380,
                'country_id' => 133,
                'name' => 'Moldavia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Moldova',
                'locale' => 'en',
            ),
            380 => 
            array (
                'id' => 381,
                'country_id' => 134,
                'name' => 'Turkey',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Turkey',
                'locale' => 'en',
            ),
            381 => 
            array (
                'id' => 382,
                'country_id' => 135,
                'name' => 'Slovenia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Slovenia',
                'locale' => 'en',
            ),
            382 => 
            array (
                'id' => 383,
                'country_id' => 136,
                'name' => 'Czech',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Czech Republic',
                'locale' => 'en',
            ),
            383 => 
            array (
                'id' => 384,
                'country_id' => 137,
                'name' => 'Slovak',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Slovak Republic',
                'locale' => 'en',
            ),
            384 => 
            array (
                'id' => 385,
                'country_id' => 138,
                'name' => 'Macedonia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Macedonia',
                'locale' => 'en',
            ),
            385 => 
            array (
                'id' => 386,
                'country_id' => 139,
                'name' => 'Bosnia Hercegovina',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Bosnia and Herzegovina',
                'locale' => 'en',
            ),
            386 => 
            array (
                'id' => 387,
                'country_id' => 140,
                'name' => 'Vatican City State',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Vatican City State',
                'locale' => 'en',
            ),
            387 => 
            array (
                'id' => 388,
                'country_id' => 141,
                'name' => 'Netherlands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Netherlands',
                'locale' => 'en',
            ),
            388 => 
            array (
                'id' => 389,
                'country_id' => 142,
                'name' => 'Croatia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Croatia',
                'locale' => 'en',
            ),
            389 => 
            array (
                'id' => 390,
                'country_id' => 143,
                'name' => 'Greece',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Hellenic Republic',
                'locale' => 'en',
            ),
            390 => 
            array (
                'id' => 391,
                'country_id' => 144,
                'name' => 'Ireland',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Ireland',
                'locale' => 'en',
            ),
            391 => 
            array (
                'id' => 392,
                'country_id' => 145,
                'name' => 'Belgium',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom Of Belgium',
                'locale' => 'en',
            ),
            392 => 
            array (
                'id' => 393,
                'country_id' => 146,
                'name' => 'Cyprus',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'the Republic of Cyprus',
                'locale' => 'en',
            ),
            393 => 
            array (
                'id' => 394,
                'country_id' => 147,
                'name' => 'Denmark',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Denmark',
                'locale' => 'en',
            ),
            394 => 
            array (
                'id' => 395,
                'country_id' => 148,
                'name' => 'United Kingdom',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The United Kingdom of Great Britain and Northern Ireland',
                'locale' => 'en',
            ),
            395 => 
            array (
                'id' => 396,
                'country_id' => 149,
                'name' => 'Germany',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Federal Republic of Germany',
                'locale' => 'en',
            ),
            396 => 
            array (
                'id' => 397,
                'country_id' => 150,
                'name' => 'France',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The French Republic',
                'locale' => 'en',
            ),
            397 => 
            array (
                'id' => 398,
                'country_id' => 151,
                'name' => 'Italy',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Italy',
                'locale' => 'en',
            ),
            398 => 
            array (
                'id' => 399,
                'country_id' => 152,
                'name' => 'Luxembourg',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Grand Duchy of Luxembourg',
                'locale' => 'en',
            ),
            399 => 
            array (
                'id' => 400,
                'country_id' => 153,
                'name' => 'Portugal',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Portugal,the Portuguese Republic',
                'locale' => 'en',
            ),
            400 => 
            array (
                'id' => 401,
                'country_id' => 154,
                'name' => 'Poland',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Poland',
                'locale' => 'en',
            ),
            401 => 
            array (
                'id' => 402,
                'country_id' => 155,
                'name' => 'Spain',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Spain',
                'locale' => 'en',
            ),
            402 => 
            array (
                'id' => 403,
                'country_id' => 156,
                'name' => 'Albania',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Albania',
                'locale' => 'en',
            ),
            403 => 
            array (
                'id' => 404,
                'country_id' => 157,
                'name' => 'Andorra',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Principality of Andorra',
                'locale' => 'en',
            ),
            404 => 
            array (
                'id' => 405,
                'country_id' => 158,
                'name' => 'Liechtenstein',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Principality of Liechtenstein',
                'locale' => 'en',
            ),
            405 => 
            array (
                'id' => 406,
                'country_id' => 159,
                'name' => 'Serbia and Montenegro',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Serbia and Montenegro',
                'locale' => 'en',
            ),
            406 => 
            array (
                'id' => 407,
                'country_id' => 160,
                'name' => 'Austria',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic Of Austria',
                'locale' => 'en',
            ),
            407 => 
            array (
                'id' => 408,
                'country_id' => 161,
                'name' => 'Bulgaria',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Bulgaria',
                'locale' => 'en',
            ),
            408 => 
            array (
                'id' => 409,
                'country_id' => 162,
                'name' => 'Finland',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Finland',
                'locale' => 'en',
            ),
            409 => 
            array (
                'id' => 410,
                'country_id' => 163,
                'name' => 'Gibraltar',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Gibraltar',
                'locale' => 'en',
            ),
            410 => 
            array (
                'id' => 411,
                'country_id' => 164,
                'name' => 'Dominica',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Commonwealth of Dominica',
                'locale' => 'en',
            ),
            411 => 
            array (
                'id' => 412,
                'country_id' => 165,
                'name' => 'Bermuda',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Bermuda',
                'locale' => 'en',
            ),
            412 => 
            array (
                'id' => 413,
                'country_id' => 166,
                'name' => 'Canada',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Canada',
                'locale' => 'en',
            ),
            413 => 
            array (
                'id' => 414,
                'country_id' => 167,
                'name' => 'United States',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The United States of America',
                'locale' => 'en',
            ),
            414 => 
            array (
                'id' => 415,
                'country_id' => 168,
                'name' => 'Greenland',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Greenland',
                'locale' => 'en',
            ),
            415 => 
            array (
                'id' => 416,
                'country_id' => 169,
                'name' => 'Tonga',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Kingdom of Tonga',
                'locale' => 'en',
            ),
            416 => 
            array (
                'id' => 417,
                'country_id' => 170,
                'name' => 'Australia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Commonwealth of Australia',
                'locale' => 'en',
            ),
            417 => 
            array (
                'id' => 418,
                'country_id' => 171,
                'name' => 'Cook Is',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Cook Islands',
                'locale' => 'en',
            ),
            418 => 
            array (
                'id' => 419,
                'country_id' => 172,
                'name' => 'Nauru',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Nauru',
                'locale' => 'en',
            ),
            419 => 
            array (
                'id' => 420,
                'country_id' => 173,
                'name' => 'New Caledonia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'New Caledonia',
                'locale' => 'en',
            ),
            420 => 
            array (
                'id' => 421,
                'country_id' => 174,
                'name' => 'Vanuatu',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Vanuatu',
                'locale' => 'en',
            ),
            421 => 
            array (
                'id' => 422,
                'country_id' => 175,
                'name' => 'Solomon Is',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Solomon Islands',
                'locale' => 'en',
            ),
            422 => 
            array (
                'id' => 423,
                'country_id' => 176,
                'name' => 'Samoa',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Independent State of Samoa',
                'locale' => 'en',
            ),
            423 => 
            array (
                'id' => 424,
                'country_id' => 177,
                'name' => 'Tuvalu',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Tuvalu',
                'locale' => 'en',
            ),
            424 => 
            array (
                'id' => 425,
                'country_id' => 178,
                'name' => 'Micronesia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Federated States of Micronesia',
                'locale' => 'en',
            ),
            425 => 
            array (
                'id' => 426,
                'country_id' => 179,
                'name' => 'Marshall Is Rep',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Marshall Island ',
                'locale' => 'en',
            ),
            426 => 
            array (
                'id' => 427,
                'country_id' => 180,
                'name' => 'Kiribati',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Kiribati',
                'locale' => 'en',
            ),
            427 => 
            array (
                'id' => 428,
                'country_id' => 181,
                'name' => 'French Polynesia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'French Polynesia',
                'locale' => 'en',
            ),
            428 => 
            array (
                'id' => 429,
                'country_id' => 182,
                'name' => 'New Zealand',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'New Zealand',
                'locale' => 'en',
            ),
            429 => 
            array (
                'id' => 430,
                'country_id' => 183,
                'name' => 'Fiji',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Fiji',
                'locale' => 'en',
            ),
            430 => 
            array (
                'id' => 431,
                'country_id' => 184,
                'name' => 'Papua New Guinea',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Independent State of Papua New Guinea',
                'locale' => 'en',
            ),
            431 => 
            array (
                'id' => 432,
                'country_id' => 185,
                'name' => 'Palau',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Palau',
                'locale' => 'en',
            ),
            432 => 
            array (
                'id' => 433,
                'country_id' => 186,
                'name' => 'Chile',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Chile',
                'locale' => 'en',
            ),
            433 => 
            array (
                'id' => 434,
                'country_id' => 187,
                'name' => 'Colombia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Colombia',
                'locale' => 'en',
            ),
            434 => 
            array (
                'id' => 435,
                'country_id' => 188,
                'name' => 'Guyana',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Guyana',
                'locale' => 'en',
            ),
            435 => 
            array (
                'id' => 436,
                'country_id' => 189,
                'name' => 'Paraguay',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Paraguay',
                'locale' => 'en',
            ),
            436 => 
            array (
                'id' => 437,
                'country_id' => 190,
                'name' => 'Peru',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Peru',
                'locale' => 'en',
            ),
            437 => 
            array (
                'id' => 438,
                'country_id' => 191,
                'name' => 'Suriname',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Suriname',
                'locale' => 'en',
            ),
            438 => 
            array (
                'id' => 439,
                'country_id' => 192,
                'name' => 'Venezuela',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Bolivarian Republic of Venezuela',
                'locale' => 'en',
            ),
            439 => 
            array (
                'id' => 440,
                'country_id' => 193,
                'name' => 'Uruguay',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Oriental Republic of Uruguay',
                'locale' => 'en',
            ),
            440 => 
            array (
                'id' => 441,
                'country_id' => 194,
                'name' => 'Ecuador',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Ecuador',
                'locale' => 'en',
            ),
            441 => 
            array (
                'id' => 442,
                'country_id' => 195,
                'name' => 'Antigua and Barbuda',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Antigua and Barbuda',
                'locale' => 'en',
            ),
            442 => 
            array (
                'id' => 443,
                'country_id' => 196,
                'name' => 'Aruba',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Aruba',
                'locale' => 'en',
            ),
            443 => 
            array (
                'id' => 444,
                'country_id' => 197,
                'name' => 'Bahamas',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Commonwealth of The Bahamas',
                'locale' => 'en',
            ),
            444 => 
            array (
                'id' => 445,
                'country_id' => 198,
                'name' => 'Barbados',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Barbados',
                'locale' => 'en',
            ),
            445 => 
            array (
                'id' => 446,
                'country_id' => 199,
                'name' => 'Cayman Is',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Cayman Islands',
                'locale' => 'en',
            ),
            446 => 
            array (
                'id' => 447,
                'country_id' => 200,
                'name' => 'Grenada',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Grenada',
                'locale' => 'en',
            ),
            447 => 
            array (
                'id' => 448,
                'country_id' => 201,
                'name' => 'Haiti',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Haiti',
                'locale' => 'en',
            ),
            448 => 
            array (
                'id' => 449,
                'country_id' => 202,
                'name' => 'Jamaica',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Jamaica',
                'locale' => 'en',
            ),
            449 => 
            array (
                'id' => 450,
                'country_id' => 203,
                'name' => 'Martinique',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Martinique',
                'locale' => 'en',
            ),
            450 => 
            array (
                'id' => 451,
                'country_id' => 204,
                'name' => 'Montserrat',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Montserrat',
                'locale' => 'en',
            ),
            451 => 
            array (
                'id' => 452,
                'country_id' => 205,
                'name' => 'Trinidad and Tobago',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Republic of Trinidad and Tobago',
                'locale' => 'en',
            ),
            452 => 
            array (
                'id' => 453,
                'country_id' => 206,
                'name' => 'St Kitts-Nevis',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Federation of Saint Kitts and Nevis',
                'locale' => 'en',
            ),
            453 => 
            array (
                'id' => 454,
                'country_id' => 207,
                'name' => 'St.Pierre and Miquelon',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Islands of st pierre and miquelon',
                'locale' => 'en',
            ),
            454 => 
            array (
                'id' => 455,
                'country_id' => 208,
                'name' => 'Argentina',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Argentina',
                'locale' => 'en',
            ),
            455 => 
            array (
                'id' => 456,
                'country_id' => 209,
                'name' => 'Belize',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Belize',
                'locale' => 'en',
            ),
            456 => 
            array (
                'id' => 457,
                'country_id' => 210,
                'name' => 'Bolivia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Bolivia',
                'locale' => 'en',
            ),
            457 => 
            array (
                'id' => 458,
                'country_id' => 211,
                'name' => 'Brazil',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Federative Republic of Brazil',
                'locale' => 'en',
            ),
            458 => 
            array (
                'id' => 459,
                'country_id' => 212,
                'name' => 'American Samoa',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'American Samoa',
                'locale' => 'en',
            ),
            459 => 
            array (
                'id' => 460,
                'country_id' => 213,
                'name' => 'Aland Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Aland Island,Ahvenanmaa',
                'locale' => 'en',
            ),
            460 => 
            array (
                'id' => 461,
                'country_id' => 214,
                'name' => 'Saint Barthélemy',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Collectivitéde Saint-Barthélemy',
                'locale' => 'en',
            ),
            461 => 
            array (
                'id' => 462,
                'country_id' => 215,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Bonaire, Sint Eustatius and Saba',
                'locale' => 'en',
            ),
            462 => 
            array (
                'id' => 463,
                'country_id' => 216,
                'name' => 'Bouvet Island',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Bouvet Island',
                'locale' => 'en',
            ),
            463 => 
            array (
                'id' => 464,
                'country_id' => 217,
            'name' => 'Cocos (Keeling) Islands',
                'alias' => NULL,
                'abbr' => NULL,
            'full_name' => 'Cocos (Keeling) Islands',
                'locale' => 'en',
            ),
            464 => 
            array (
                'id' => 465,
                'country_id' => 218,
                'name' => 'Curaçao',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Curaçao',
                'locale' => 'en',
            ),
            465 => 
            array (
                'id' => 466,
                'country_id' => 219,
                'name' => 'Christmas Island',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Christmas Island',
                'locale' => 'en',
            ),
            466 => 
            array (
                'id' => 467,
                'country_id' => 220,
            'name' => 'Falkland Islands (Malvinas)',
                'alias' => NULL,
                'abbr' => NULL,
            'full_name' => 'Falkland Islands (Malvinas)',
                'locale' => 'en',
            ),
            467 => 
            array (
                'id' => 468,
                'country_id' => 221,
                'name' => 'Faroe Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Faroe Islands',
                'locale' => 'en',
            ),
            468 => 
            array (
                'id' => 469,
                'country_id' => 222,
                'name' => 'French Guiana',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'French Guiana',
                'locale' => 'en',
            ),
            469 => 
            array (
                'id' => 470,
                'country_id' => 223,
                'name' => 'Guernsey',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Bailiwick of Guernsey',
                'locale' => 'en',
            ),
            470 => 
            array (
                'id' => 471,
                'country_id' => 224,
                'name' => 'South Georgia and The South Sandwich Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'South Georgia and The South Sandwich Islands',
                'locale' => 'en',
            ),
            471 => 
            array (
                'id' => 472,
                'country_id' => 225,
                'name' => 'Guam',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Territory of Guahan,Guam',
                'locale' => 'en',
            ),
            472 => 
            array (
                'id' => 473,
                'country_id' => 226,
                'name' => 'Heard Island and McDonald Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Heard Island and McDonald Islands',
                'locale' => 'en',
            ),
            473 => 
            array (
                'id' => 474,
                'country_id' => 227,
                'name' => 'Isle Of Man',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Isle Of Man',
                'locale' => 'en',
            ),
            474 => 
            array (
                'id' => 475,
                'country_id' => 228,
                'name' => 'British Indian Ocean Territory',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'British Indian Ocean Territory',
                'locale' => 'en',
            ),
            475 => 
            array (
                'id' => 476,
                'country_id' => 229,
                'name' => 'Jersey',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Jersey',
                'locale' => 'en',
            ),
            476 => 
            array (
                'id' => 477,
                'country_id' => 230,
                'name' => 'Saint Lucia',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Saint Lucia , St. Lucia',
                'locale' => 'en',
            ),
            477 => 
            array (
                'id' => 478,
                'country_id' => 231,
                'name' => 'Saint Martin',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Saint Martin',
                'locale' => 'en',
            ),
            478 => 
            array (
                'id' => 479,
                'country_id' => 232,
                'name' => 'Northern Mariana Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Northern Mariana Islands',
                'locale' => 'en',
            ),
            479 => 
            array (
                'id' => 480,
                'country_id' => 233,
                'name' => 'Norfolk Island',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Norfolk Island',
                'locale' => 'en',
            ),
            480 => 
            array (
                'id' => 481,
                'country_id' => 234,
                'name' => 'Niue',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Niue',
                'locale' => 'en',
            ),
            481 => 
            array (
                'id' => 482,
                'country_id' => 235,
                'name' => 'Saint Pierre and Miquelon',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Saint Pierre and Miquelon',
                'locale' => 'en',
            ),
            482 => 
            array (
                'id' => 483,
                'country_id' => 236,
                'name' => 'Pitcairn Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Pitcairn Islands',
                'locale' => 'en',
            ),
            483 => 
            array (
                'id' => 484,
                'country_id' => 237,
                'name' => 'Saint Helena',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Saint Helena',
                'locale' => 'en',
            ),
            484 => 
            array (
                'id' => 485,
                'country_id' => 238,
                'name' => 'Svalbard and Jan Mayen Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Svalbard and Jan Mayen Islands',
                'locale' => 'en',
            ),
            485 => 
            array (
                'id' => 486,
                'country_id' => 239,
                'name' => 'Sint Maarten',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Sint Maarten',
                'locale' => 'en',
            ),
            486 => 
            array (
                'id' => 487,
                'country_id' => 240,
                'name' => 'Turks and Caicos Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Turks and Caicos Islands',
                'locale' => 'en',
            ),
            487 => 
            array (
                'id' => 488,
                'country_id' => 241,
                'name' => 'French Southern Territories',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'French Southern Territories',
                'locale' => 'en',
            ),
            488 => 
            array (
                'id' => 489,
                'country_id' => 242,
                'name' => 'Tokelau',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Tokelau',
                'locale' => 'en',
            ),
            489 => 
            array (
                'id' => 490,
                'country_id' => 243,
                'name' => 'United States Minor Outlying Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'United States Minor Outlying Islands',
                'locale' => 'en',
            ),
            490 => 
            array (
                'id' => 491,
                'country_id' => 244,
                'name' => 'The British Virgin Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The British Virgin Islands',
                'locale' => 'en',
            ),
            491 => 
            array (
                'id' => 492,
                'country_id' => 245,
                'name' => 'The United States Virgin Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The United States Virgin Islands',
                'locale' => 'en',
            ),
            492 => 
            array (
                'id' => 493,
                'country_id' => 246,
                'name' => 'Wallis and Futuna Islands',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Wallis and Futuna Islands',
                'locale' => 'en',
            ),
            493 => 
            array (
                'id' => 494,
                'country_id' => 247,
                'name' => 'Kosovo',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'The Republic of Kosovo',
                'locale' => 'en',
            ),
        ));
        
        
    }
}