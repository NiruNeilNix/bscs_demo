<?php
class Post {
    public function post_employees(){
        return array(
            "EMPLOYEE_ID" => 1,
            "FIRST_NAME" => "NEIL CARLO",
            "LAST_NAME" => "NABOR",
            "EMAIL" => "nabor.niruneilnix@gmail.com",
            "PHONE_NUMBER" => "09982683149",
            "HIRE_DATE" => "01/01/01"
        );
    }


    public function post_jobs(){
        return array(
            "SALARY" => "10000",
            "JOB_TITLE" => "WEB DEV",
            "MIN_SALARY" => "1000",
            "MAX_SALARY" => "20000"
        );
    }

    public function add_employees($data){
        $data->firstname = "Neil Carlo";
        return $data;
}
}

?>
