<?
function getNameFull($linha){
    $parts = explode(",",$linha);
    if(isset($parts[2])==null){
        return "vazio";
    }
    else{
        return $parts[2];
    }
}
function getFirstName ($name_full){
    $parts = explode(" ",$name_full);
    return $parts[0];
}

function getLastName($name_full){
    $parts = explode(" ",$name_full);
    $n_arr = count($parts);
    $lastname = "";
    for ($i=1; $i <$n_arr ; $i++) { 
        $lastname = $lastname ." ". $parts[$i];
    }
    return $lastname;    
}
function getLogin($linha){
$parts = explode(",",$linha);
    if(isset($parts[0])==null){
        return "vazio";
    }
    else{
        return $parts[0];
    }
}
function getEmail($linha){
$parts = explode(",",$linha);
    if(isset($parts[1])==null){
        return "vazio";
    }
    else{
        return $parts[1];
    }
}
$arquivo = fopen('testeTaeCA2023','r');
//echo $arquivo;
echo "username,firstname,lastname,email<br/>";
while(!feof($arquivo)){
    $linha = fgets($arquivo);
    $name = getNameFull($linha);
    if ($name != "vazio"){
        echo trim(getLogin($linha)).",".trim( getFirstName($name)).",".trim(getLastName($name)).",".trim(getEmail($linha));
        echo "<br/>"; 
    }
}
fclose($arquivo);

