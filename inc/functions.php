<?php

$data = "data/messages.txt"; //kelias iki tekstinio failo

//$validation= [];
//function validate($data){
//    global $validation;
////    jeigu laukelis yra tuscias arba neatitinka sablono
//    if(empty($_POST['name']) || !preg_match('/A-Z/',$_POST['name'])){
//        $validation[] = "Vardas turi buti is didžiosios";
//    }
//}


function storeData(){
    $data = "data/messages.txt"; //kelias iki tekstinio failo
    $content = file_get_contents($data); //failo turinys; nuskaitome duomenis is text failo
    $formData = implode(',',$_POST); //konvertuojame POST masyva i string; viska, ka gauname is formos, priskiriama kintamajam formData
    $content .= $formData."/n"; //prie formos duomenu pridedame eilutes pabaigos zenkla; taskas reiskia prideti, kad neperrasinetu duomenis message.txt, o papildytu, pridetu duomenis
    file_put_contents($data,$content); //rasome i tekstini faila formos duomenis
    //var_dump($content);
}

function showData(){
    global $messages;
    global $data;
    $messages = file_get_contents($data, true); // priskiriame failo duomenis
    $messages = explode('/n',$messages); //konvertuojam tekstinio failo duomenis i masyva
    return $messages;
}
