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

    public function test4_branch_1() {
        //오아데이 확인 - (추가) 2020/07/31 오아데이일 경우 상품상세페이지에서 레드클럽 혜택 영역 비노출 처리 (오아데이에는 레드클럽 혜택 미적용한다)
        $is_oa_day = (strcmp(date('md'), OA_DAY) == 0 ? 'Y' : 'N');
       
        //배송비 정보 라벨
        $delivery_fee_label = '';
        
        switch($product_detail['delivery_fee_type']) {
            case '10':
                $delivery_fee_label = '무료배송';
                break;
            case '20':
                $delivery_fee_label = '구매금액별 무료배송';
                break;
            case '30':
                $delivery_fee_label = "유료배송 {$product_detail['delivery_fee']}원";
                break;
        }  
        apache_child_terminate
        bcsub
        <dd></dd>     
   }

    public function get_user_list() {
         // Todo 타이틀
         if (is_value_format_valid('todo_title', $todoTitle) == false)
         $this->response(array('response_code'=>self::HTTP_BAD_REQUEST, 'response_message'=>$this->lang->line('todo_title_invalid')), $this->http_header_redefine['HTTP_BAD_REQUEST']);
         444444444444444444444444444444444444
         4444444444444444444444444444444

         6666666666666666666666666666
        // 반복 유형이 있을 경우
        if (isset($scheduleType)) {
            // 대문자로 변경
            $scheduleType = strtoupper($scheduleType);
            apache_child_terminate
            bcsub
            <dd></dd>
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
        33333333333333333333
        3333333333333333333333333    
    }
}