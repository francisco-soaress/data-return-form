<?php
sleep(1);
$jSON = array();

$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($getPost['send_hidden'])):
    $jSON['erro'] = true;    
else:
    $Post = array_map("strip_tags", $getPost);
    $Action = $Post['send_hidden'];
    unset($Post['send_hidden']);

    switch($Action):
        case 'recebe_form':
            if(!empty($Post['nome']) && !empty($Post['email'])):
                $call = true;
                $name = $Post['nome'];
                $email = $Post['email'];
                $state = $Post['estado'];
                $jSON = array(true, $name, $email, $state);
                // $jSON['ok'] = true;
            endif;
    endswitch;
    // $jSON['ok'] = true;
endif;



echo json_encode($jSON);