<?php $newTitle = "Testing Page"?>
<?php
    ob_start();
    include 'header.php';;
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace($title,$newTitle,$buffer);
    echo $buffer;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="slider.css">
	
	<!-- <div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        
        <div class="image-holder">
            <img src="image/slider/lib.jpg" class="slider-image" />
            <img src="image/slider/lib1.jpg" class="slider-image" />
            <img src="image/slider/lib2.jpg" class="slider-image" />
        </div>
        
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div> -->
</head>
<body>

</body>
</html>
<?php include 'footer.php'; ?>