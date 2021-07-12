<?php

$API_URL="https://unicom24.ru/api/universal/v1/";
//$API_URL="https://unicom24.ru/api/partners/requests/v1/create_send_all/";

$offer=2000916; // ID оффера

$login="bezkreditov@bezkreditov.com"; // Логин от Unicom24

$password="3MKuz04k"; // Пароль от Unicom24

$anketa = array(
        "offer"=>$offer,
        "surname"=>"Петров",        // Фамилия клиента
        "name"=>"Петр",        // Имя клиента
        "patronymic"=>"Иванович",        // Отчество клиента
        "passport"=>"0000000002",        // Серия и номер российского паспорта клиента без пробелов
        "mobile_phone"=>"9221231223",        // Номер мобильного телефона, 10 цифр, без +7 или 8, начиная с 9
        "email"=>"email@email.ru",        // e-mail клиента
        "credit_sum"=>"10000",        // Сумма кредита
        "locality"=>"180185",        // Код населенного пункта (id Москвы 180185)
        "fact_locality"=>"180185",        // Код населенного пункта (id Москвы 180185)
        "passport_code"=>"122332",        // Код подразделения выдавшего паспорт
        "passport_date"=>"2001-12-20",        // Дата выдача паспорта
        "birth_date"=>"1980-12-10",        // Дата рождения клиента
        "birth_place"=>"Город Москва",        // Место рождения клиента
        "job"=>"ИП Иванов",        // Наименование работодателя
        "job_address"=>"ул. Василевского, д.1, офис 23",        // Адрес организации
        "job_phone"=>"495223315",        // Телефон организации
        "job_position"=>"Менеджер",        // Должность
        "job_salary"=>"20000",        // Заработная плата
        "street"=>"ул. Ленина",        // Улица адреса регистрации
        "house"=>"10",        // Номер дома адреса регистрации&#x27;
        "fact_street"=>"ул. Ленина",        // Улица адреса проживания
        "fact_house"=>"10",        // Дом адреса проживания
        "sub_id"=>"0xff",        // id субагента отправившего анкету
        "click_id"=>"0xff",        // id перехода или транзакции
        "external_id"=>"2f2f3",        // id завки на стороне партнера
);

        $data_string = json_encode($anketa);
        $ch = curl_init($API_URL);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, $login . ":" . $password);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );

        $result = curl_exec($ch);

        if( !$result ) {

            var_dump ( curl_error($ch) );

        }
        else {

            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($http_code == 200 || $http_code==201 || $http_code==400 ) {
                var_dump ( json_decode($result, true) );
                }
            elseif ($http_code == 401 || $http_code==403) {
                echo "Login or password incorrect $login:$password\n";
                var_dump ( json_decode($result, true) );
                }
            }

?>
