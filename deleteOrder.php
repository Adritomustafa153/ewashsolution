<style>
        input:hover
{
    border: 1px solid black;
    margin-right: 2px;
    transition: margin 0.2s ease-in-out;
    background-color: gray;
}
   input[type=text],
    input[type=date] {
        width: 100%;
        height: 20px;
        padding: 20px 10px;
        background-color: rgb(215, 215, 215);
        line-height: 20px;
        font-size: 20px;
        color: rgb(136, 136, 136);
        border-radius: 2px 2px 2px 2px;
        border: 1px solid rgb(114, 114, 114);
        box-shadow: 0 1px 0 rgba(24, 24, 24,0.1);
        color:rgb(50, 62, 168);
    }
    .third{
        padding_top:20px;
        margin_left:50%;
    }
    h3{
        font-weight: bold;
        color: rgb(66, 58, 79);
    }

</style>


<?php
$id = $_GET["id"];


$f0 = $_GET["f0"];
$d_date=$_GET['d_date'];
        // $d_date = date('Y-m-d', strtotime($_GET["d_date"]));


// echo $d_date


?>



<h1>Update Record</h1>


<div class="second">



        <form method=get action=update_result.php>
        
        
        <input type=hidden name=id value='<?php echo $id; ?>'> <br>
        
        <h3> progress:</h3> <input type=text name=f0 value='<?php echo $f0; ?>'>
        <input type=hidden name=id value='<?php echo $id; ?>'> <br>
        
        <h3>Order date:</h3> <input type=date name=d_date value='<?php echo $d_date; ?>'>
        
        
        <input  class="third" type=submit value=Update link="o_info.php">
        
        </form>
</div>
