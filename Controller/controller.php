<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }

    function view(&$data){
        $data['student_data'] = get_data();
        // $dat['student_detail'] = m_detail();
        $data['page'] = "student/view";
    }

    
function add(&$data) {
    $data['page'] = "student/add";
}
function form_data(&$data){
    $add = add_data($_POST);
    if($add){
        $action = "view";
    } else { 
        $action = "add";
    }
    header("Location:index.php?action=$action");
}

function detail(&$data) {
    $data['student_data'] = m_detail();
    $data['page'] = "student/detail";
}

function update_profile(&$data) {
    $data['student'] = m_detail();
    $data['page'] = "student/changeProfile";
}

function change_profile(&$data) {
    $change_profile = m_change_profile($_POST);
    $id = $_GET['id'];
    if($change_profile) {
        $action = "detail&id=$id";
    }else {
        $action = "edit";
    }
    header("Location: index.php?action=$action");
}


function edit(&$data) {
    $data['student_data'] = m_detail();
    $data['page'] = "student/edit";
}

function edit_data(&$data) {
    $update_data = m_update_data($_POST);
    if($update_data) {
        $action = "view";
    }else {
        $action = "edit";
    }
    header("Location: index.php?action=$action");
}

function delete(&$data) {
    $result = m_delete();
    if($result) {
        $action = "view";
    }else {
        echo "Cannot delete this record!!!";
    }
    header("Location: index.php?action=$action");
}
?>