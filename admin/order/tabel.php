<?php
       $mysqli = new mysqli('localhost', 'root', '123','Database_e-commerce');
       $result = $mysqli->query(" SELECT * FROM  `orders` ");
      

 ?>




<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">customerName Code</th>
      <th scope="col">order Date</th>
      <th scope="col">delivery Addres</th>
      <th scope="col">prodouct ID</th>
      <th scope="col">num</th>
    </tr>
  </thead>

 <tbody>
  <?php while ($row = $result->fetch_assoc()): ?>
    <tr class="table-active">
      <th rowspan="<?php  globolGs(); ?>" ><?php echo $row['orderID']; ?></th>
      <td rowspan="<?php  globolGs(); ?>" ><?php echo $row['customerCode']; ?></td>
      <td rowspan="<?php  globolGs(); ?>" ><?php echo $row['orderDate']; ?></td>
      <td rowspan="<?php  globolGs(); ?>" ><?php echo $row['deliveryAddress']; ?></td>

       <?php   
   
    
     $GLOBALS['a'] = 0 ;
    
    
   
    ?> 

      <?php
       
       $i = 2;
       $id = $row['orderID'] ;
       $mysqlitow = new mysqli('localhost', 'root', '123','Database_e-commerce');
       $resulttwo = $mysqlitow->query(" SELECT `orderID`, `productID`, `orderedQuantity`
        FROM `orderdetails` WHERE orderID = '$id'");?>
      <?php while ($rowtwo = $resulttwo->fetch_assoc()): ?>
        <td><?php echo " ID " . $rowtwo['productID']; ?></td>
      <td > <?php echo $rowtwo['orderedQuantity']; ?></td>
      </tr>
       
          <?php 
            $a = $i++;
           
          ?>

       <?php endwhile ?>
   
    <?php endwhile ?>
    

   <?php   
     function globolGs(){
     echo  $GLOBALS['a'];

    }
    
   
    ?>

  </tbody>
</table>