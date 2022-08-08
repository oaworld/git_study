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
        // Todo 타이틀
        if (is_value_format_valid('todo_title', $todoTitle) == false)
            $this->response(array('response_code'=>self::HTTP_BAD_REQUEST, 'response_message'=>$this->lang->line('todo_title_invalid')), $this->http_header_redefine['HTTP_BAD_REQUEST']);
        // 반복 유형이 있을 경우
        if (isset($scheduleType)) {
            // 대문자로 변경
            $scheduleType = strtoupper($scheduleType);
            // 스케쥴 타입 상세 정보
            $scheduleTypeList = array(
                'D'=>'day', // 매일
                'WD'=>'day', // 평일
                'W'=>'week', // 매주
                'M'=>'month', // 매월
                'Y'=>'year' // 매년
            );
            // 존재하지 않는 유형
            if (!array_key_exists($scheduleType, $scheduleTypeList))
                $this->response(array('response_code'=>self::HTTP_BAD_REQUEST, 'response_message'=>$this->lang->line('schedule_type_invalid')), $this->http_header_redefine['HTTP_BAD_REQUEST']);
        }        
    }
}