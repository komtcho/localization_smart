<?php
/*
-> name localization_smart
-> author komicho
-> version  1.0
*/
class lang{
    // var open tag
    private $tagopen = false;
    // var close tag
    private $tagclose = false;
    // var data
    private $data = false;
    /*
    # function start 
    -> set the function in header page or top str
    */
    public function __construct($tagopen,$tagclose){
        $this->tagopen = $tagopen;
        $this->tagclose = $tagclose;
        ob_start();
    }
    /*
    # function set data 
    -> ser(path,namefile = lang)
    */
    public function set($path,$langName){
        // if no use lang
		if($langName != 'notues'){
			// path file data lang
			$file = $path . '/'. $langName . '.json';
			if(file_exists($file)){
				// get file josn
				$langFile = file_get_contents($file);
				// array php to josn
				$this->data = json_decode($langFile,true);
			}else{
                // return to function __destruct
				$this->data = 'err_file';
			}
		}else{
            // return to function __destruct
			$this->data = 'notues';
		}
    }
    /*
    # function clean
    -> data array
    */
    public function __destruct(){
        // if notues = not work the system
		if($this->data != 'notues'){
            // Not found file lang
			if($this->data != 'err_file'){
				$ob = ob_get_clean();
				foreach($this->data as $kay => $value){
					if(true){
						$kay = $this->tagopen . $kay . $this->tagclose;
						$ob = str_replace($kay,$value,$ob);
					}
				}
				echo $ob;
			}else{
				echo 'Not found file lang';
			}
		}
    }
}