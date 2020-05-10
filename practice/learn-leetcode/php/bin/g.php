<?php

/**
 * 刷题模板生成
 *
 * @Author: GeekWho
 * @Date:   2018-12-09 23:38:14
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-21 22:55:12
 */
Class G
{
    public function __construct()
    {
        $composer = sprintf(
            '%s%svendor%sautoload.php' ,
            dirname(__DIR__),
            DIRECTORY_SEPARATOR,
            DIRECTORY_SEPARATOR
        );
        if(file_exists($composer)){
            include_once $composer;
        }
    }

    public function run()
    {
        return $this->generateByInput($this->parseUrl());
    }

    /**
     * 直接输入题目的url，解析出对应的参数
     *
     */
    public function parseUrl()
    {
        $url        = readline("Enter URL: ");
        if(!$url){
            echo "参数输入不对" . PHP_EOL;
            exit;
        }
        $parse_url = parse_url($url);
        if(!$parse_url || !isset($parse_url['path'])){
            echo "解析url失败" . PHP_EOL;
            exit;
        }
        $slug = $parse_url['path'];
        // 格式化slug
        $slug = str_replace('/problems','',$slug);
        $slug = str_replace('/','',$slug);
        $req  = [
            'operationName' => "questionData",
            'query' => 'query questionData($titleSlug: String!) {
  question(titleSlug: $titleSlug) {
    questionId
    questionFrontendId
    boundTopicId
    title
    titleSlug
    content
    translatedTitle
    translatedContent
    isPaidOnly
    difficulty
    likes
    dislikes
    isLiked
    similarQuestions
    contributors {
      username
      profileUrl
      avatarUrl
      __typename
    }
    langToValidPlayground
    topicTags {
      name
      slug
      translatedName
      __typename
    }
    companyTagStats
    codeSnippets {
      lang
      langSlug
      code
      __typename
    }
    stats
    hints
    solution {
      id
      canSeeDetail
      __typename
    }
    status
    sampleTestCase
    metaData
    judgerAvailable
    judgeType
    mysqlSchemas
    enableRunCode
    enableTestMode
    envInfo
    __typename
  }
}',
            'variables' => json_encode([
                'titleSlug' => $slug,
            ]),
        ];
        $data = $this->request($req , $url);
        $data = json_decode($data);
        if(!$data){
            echo "请求接口失败" . PHP_EOL;
            exit;
        }
        $data = [
            'number' => $data->data->question->questionId,
            'problem' => $slug,
            'title' => $data->data->question->translatedTitle,
            'link' => $url,
        ];
        return $data;
    }

    /**
     * 获取CSRF的token
     *
     * @see https://stackoverflow.com/questions/895786/how-to-get-the-cookies-from-a-php-curl-into-a-variable
     */
    public function getCsrfToken($url)
    {
        //直接发送json字符串
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_URL            => $url,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HEADER         => 1,
            CURLOPT_HTTPHEADER     => [
                "Cache-Control: no-cache",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36"
            ],
        ]);
        $return = curl_exec($ch);
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $return, $matches);
        $cookies = array();
        foreach($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        curl_close($ch);
        return isset($cookies['csrftoken'])?$cookies['csrftoken']:false;
    }

    /**
     * 请求
     */
    public function request($req, $url)
    {
        $api = "https://leetcode-cn.com/graphql";
        $req = is_array($req)?json_encode($req):$req;
        //直接发送json字符串
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_URL            => $api,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_POST           => 1,
            CURLOPT_POSTFIELDS     => $req,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json',
                "Cache-Control: no-cache",
                "Origin: https://leetcode-cn.com",
                "Referer: $url",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36",
                "X-CSRFToken: " . $this->getCsrfToken($url),
            ],
        ]);
        $return = curl_exec($ch);
        curl_close($ch);
        return $return;
    }

    /**
     * 通过输入相关参数生成leetcode题目
     * 1. 题目号码
     * 2. 链接中的后缀
     * 3. 去掉题目编号的标题
     * 4. 题目的链接
     */
    public function generateByInput($args = false)
    {
        if(!$args){
            $number      = readline("Enter Number: ");
            $problem     = readline("Enter Problem: ");
            $title       = readline("Enter Title: ");
            $link        = readline("Enter Link: ");
            if(!$number || !$problem){
                echo "参数输入不对" . PHP_EOL;
                exit;
            }
        }
        if($args){
            list($number, $problem, $title, $link) = $args;
        }
        $root        = __DIR__;
        $title   = !$title?$problem:$title;
        $dirname = $number . '.' . $problem;
        //检查目录是否存在
        $target = dirname($root) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $dirname;
        if(!file_exists($target)){
            mkdir($target,0755,true);
        }
        $name   = $number . '. ' . $title;
        $readme = $root . '/g/README.md';
        $data   = file_get_contents($readme);
        $data   = str_replace('%problem%', $name, $data);
        $data   = str_replace('%link%', $link, $data);
        file_put_contents($target . DIRECTORY_SEPARATOR . 'README.md', $data);


        $name   = $number . '. ' . $problem;
        $readme = $root . '/g/class.php.md';
        $data   = file_get_contents($readme);
        $data   = str_replace('%problem%', $name, $data);
        $array  = explode('-',$problem);
        $class  ="";
        foreach ($array as $key => $value) {
            if($key == 0){
                $class .= $value;
                continue;
            }
            $class .= ucfirst($value);
        }
        $data = str_replace('%class%', $class, $data);
        file_put_contents($target . DIRECTORY_SEPARATOR . $class . '.php', $data);


        $name   = $number . '. ' . $problem;
        $readme = $root . '/g/classTest.php.md';
        $data   = file_get_contents($readme);
        $data   = str_replace('%problem%', $name, $data);
        $array  = explode('-',$problem);
        $class  ="";
        foreach ($array as $key => $value) {
            if($key == 0){
                $class .= $value;
                continue;
            }
            $class .= ucfirst($value);
        }
        $data = str_replace('%class%', $class, $data);
        file_put_contents($target . DIRECTORY_SEPARATOR . $class . 'Test.php', $data);

        echo "generate code done." . PHP_EOL;
    }
}
(new G)->run();
