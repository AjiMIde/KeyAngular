<?php
/**
 * User        : Aij
 * DateTime    : 2016/8/19-16:44
 * Modified    : 2016/8/19-16:44
 * Description :
 */
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

if($action == 'getData'){
    $array = array(
        array(
            'name'=>'26 Development',
            'count'=>20,
            'square'=>'400m'
        ),
        array(
            'name'=>'25 Test',
            'count'=>11,
            'square'=>'100m'
        ),
        array(
            'name'=>'25 Caiwu',
            'count'=>6,
            'square'=>'50m'
        )
    );
    echo json_encode($array);
}elseif($action == 'postData'){
    $params = json_decode(file_get_contents('php://input'),true);
    echo json_encode($params);
}elseif($action == 'postData_ajax'){
    echo $_REQUEST['name'] . $_REQUEST['count'] . $_REQUEST['square'];
}else{
    echo 'no data';
}