<?php
    function img_list($imageList)
    {
        foreach ($imageList as $item)
        {
            echo "<img src='images/$item'width =50px height = 50px alt ='$item'>";

        }
    }
    $items =array ('item1.jpg', 'item2.jpg', 'item3.jpg');
    img_list($items);
    ?>
    <h1>function</h1>
    <?php
    $items = array('item4.jpg','item5.jpg');
    img_list($items);
    ?>