<?php

return array(
    'cid' => array(
        'not_empty' => '文章分类不能为空'
    ),
    'title' => array(
        'not_empty' => '文章标题不能为空'
    ),
    'content' => array(
        'not_empty' => '文章内容不能为空',
        'min_length' => '内容至少4个字符',
        'max_length' => '内容不能超过40个字符'
    )
);
