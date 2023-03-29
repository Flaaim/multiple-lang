<?php

namespace App\Widgets\Language;

use App\App;

class Language
{
    protected $tpl;
    protected $languages;
    protected $language;

    public function __construct()
    {
        $this->tpl = __DIR__ .'/lang_tpl.php';
        $this->run();
    }

    public function run()
    {
        $this->languages = App::$app->getProperty('languages');
        $this->language = App::$app->getProperty('language');
        $this->getHtml();
    }
    public static function getLanguages(): array
    {
        try{
            $sql = "SELECT code, title, base, id FROM language ORDER by base DESC";
            $stmt = App::$app->getProperty('db')->query($sql);
            $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            $languages = [];
            foreach($data as $key => $value){
                $languages[$value['code']] = array_slice($value, 1);
            }
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
        return $languages;
    }
    public static function getLanguage($languages)//: array
    {
        try{
            $lang = App::$app->getProperty('lang');
            if($lang && array_key_exists($lang, $languages)){
                $key = $lang;
            }elseif(!$lang){
                $key = key($languages);
            }else{
                throw new \Exception("Not found language {$lang}");
            }
            $lang_info = $languages[$key];
            $lang_info['code'] = $key;
        }catch(\Exception $e){
            echo $e->getMessage();
        }
 
        return $lang_info;
    }
    protected function getHtml()
    {

        
        require_once($this->tpl);
        
    }
}