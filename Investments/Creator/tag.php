<?php
$con=mysqli_connect("localhost","root","","investments");

$categoryid = 0;
if(isset($_POST['category'])){
   $categoryid = mysqli_real_escape_string($con,$_POST['category']);
}
$tags_arr = array();
if($categoryid > 0){
    $sql = "SELECT tag_id , tag_name FROM tags WHERE category_id=".$categoryid;
    $result = mysqli_query($con,$sql);
    while( $row = mysqli_fetch_array($result) ){
        $tag_id = $row['tag_id'];
        $tag_name = $row['tag_name'];
        $tags_arr[] = array("tag_id" => $tag_id, "tag_name" => $tag_name);
    }
}

// encoding array to json format
echo json_encode($tags_arr);