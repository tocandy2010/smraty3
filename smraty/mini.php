<?php


class Mini{
    protected $template_dir='./template';
    protected $compile_dir='./compile';
    protected $var = array();

    public function assign($k,$v){
        $this->var[$k] = $v;
    }

    public function compile($template){
        $comp = $this->compile_dir."/".$template.".php";
        $temp = $this->template_dir."/".$template;
        if(file_exists($comp) && (filemtime($comp)>filemtime($temp))){
            return $comp;
        }
        $sorce = file_get_contents($temp);
        $sorce = str_replace('{$','<?php echo  $this->var["',$sorce);
        $sorce = str_replace('}','"]; ?>',$sorce);
        file_put_contents($this->compile_dir."/".$template.".php",$sorce );
        return $comp;
    }

    public function display($template){
       $com  = $this->compile($template);
       include($com);
    }
}


$mini = new Mini();
$title = "title";
$content = "content";
$mini->assign("title",$title);
$mini->assign("content",$content);
$mini->display("mini.html");

?>