<?php
/**
 * 
 */
class Test extends MY_Controller {

    /**
       * 메소드의 기능 정의
       * 
       * 메소드의 기능 정의에 추가 부연 설명
       * 1
       * 2
       * 3
       * 
       * @author  uno
       * @date    22.07.00
       * @param   변수유형    변수명 변수설명
       * @param   변수유형    변수명 변수설명
       * @return  리턴타입 유형
    */
    public function __construct() {
        // 부모 호출
        parent::__construct();
        // 디비 연결
        $this->load->database();
    }


    public function get_user_list() {
        
    }
}