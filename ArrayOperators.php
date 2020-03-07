<?php 

class ArrayOperators {
    public $arr =[];
    public $sum = 0;
    public $widthArray = count($arr);;
    public $max = null;
    public $position = null;

    $f = fopen (“results.txt”, “r”) or exit (“Không mở được tệp tin này!”);
    While(!feof($f)){
   $line = fgets($f);
   echo $line. “<br>”;
}

    function averageArray(){
        foreach($arr as $value ){
           $sum += $value;
        }
        $averageValue = $sum/$widthArray;
        echo 'Gia tri trung binh :' . "$averageValue";
    }
    // end tính giá trị trung bình của các phần tử trong mảng.

    function  countEvens(){
          for($i=0; $i < $arr; $i++){
              if($i % 2 == 0) {
                 echo '$i la so chan';
              }
              else {
                  echo '$i la so le';
              }
          }
    }

    // end tim so chẵn lẻ.
        
        
    function  decreaseArray(){
        rsort($arr);
        foreach( $numbers as $arr) {
            echo "$arr <br>";
        }
    } 
    // end sắp xếp lại mảng theo thứ tự giảm dần.
        
    function  min2Array(){
        for($i=0; $i< count($arr); $i++)){
            if(($min == 0){
                $min = $arr[$i];
                $position = $i;

            }
            else if($array[$i] < $min){
                $min = $arr[$i];
                $position = $i;
            }
        }
               $min2 = $arr[$i];
            for($i =1; $i < count($arr); $i++){
               if($arr[$i] < $min2 && $arr[$i] < $min){
                $min2 = $arr[$i];
               }
            
           }
        }
        echo "Giá trị nhỏ thứ nhì trong mảng là:"."$min2";
    }   
        
        

    function max2Array(){
           for($i=0; $i< count($arr); $i++)){
            if(($max == 0){
                $max = $arr[$i];
                $position = $i;

            }
            else if($array[$i] > $max){
                $max = $arr[$i];
                $position = $i;
            }
        }
             $max2 = $arr[$i];
            for($i =1; $i < count($arr); $i++){
               if($arr[$i] > $max2 && $arr[$i] < $max){
                  $max2 = $arr[$i];
               }
            
           }
        }
        echo "Giá trị lớn thứ nhì trong mảng là:"."$max2";
//  end Giá trị lớn thứ nhì trong mảng

 

?>


<!-- Đọc dữ liệu từ tệp mẫu numbers.txt
	In kết ra tệp kết quả results.txt 
    
    
   Tạo tài và đẩy file ArrayOperators.php chứa mã nguồn và 2 tệp numbers.txt và results.txt lên repository kiemtraketthucchuong1 ở chế độ public. Sau đó gửi đường dẫn về email vietlv173@gmail.com 
    -->
