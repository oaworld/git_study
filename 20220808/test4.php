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
    }

    public function get_user_list() {
        
    }
}