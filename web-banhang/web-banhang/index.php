<!DOCTYPE html>
<html>  
    <head>
        <title>Giải Phương Trình Bậc 2</title>
        <meta charset="UFT-8">
    </head>
    <body>
    <?php
        $result="";
        if(isset($_POST ['calulator'])){
            //Bước 1: Lấy tham số
            $a=isset($_POST['a'])?$_POST['a']:'';
            $b=isset($_POST['b'])?$_POST['b']:'';
            $c=isset($_POST['c'])?$_POST['c']:'';
            //Bước 2 tính detal
            $detal=($b*$b)-(4*$a*c);
            if($detal<0){
                $result="Phương Trình Vô Nghiệm";
            }else if($detal==0){
                $result="Phương có nghiệm kép x1 = x2 = ".($b/2*$a);
            }else{
                $result="Phương Trình có 2 nghiệm phân biệt x1 = ".( (-$b+sqrt($detal)/  (2*$a) ) );
                $result.=" ,x2 = ".(-$b-sqrt($detal))/2*$a );
            }
       }
   ?>   
      <h1>Giải Phương Trình Bậc hai</h1>
        <form method="post" action="index.php">
            <input type="text" style="width: 20px; padding: 10px" name="a" value="">x <sup>2<sup>
            +
            <input type="text" style="width: 20px; padding: 10px" name="b" value="">x 
            +
            <input type="text" style="width: 20px; padding: 10px" name="c" value="" > 
            = 0
            <br>
            <br>
            <input type="submit" name="calulate"> value="Tính" style=padding: 10px">
            <br/>
            <h3>Kết quả</h3>
            <?php echo $result ?>
        </form>
    </body>      
</html>