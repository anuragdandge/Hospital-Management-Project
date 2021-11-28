 <td>
     <?php
        $id = $row['srno'];
        echo $row['srno']; ?>
 </td>
 <td>
     <?php echo $row['name']; ?>
 </td>
 <td>
     <?php echo $row['contact']; ?>
 </td>
 <td>
     <?php echo $row['gender']; ?>
 </td>
 <td>
     <?php echo $row['consult']; ?>
 </td>
 <td>
     <?php echo $row['age']; ?>
 </td>
 <td>
     <?php echo $row['address']; ?>
 </td>
 <td>
     <?php echo $row['symptoms']; ?>
 </td>
 <td>
     <?php echo $row['date']; ?>
 </td>
 <td>
     <?php echo $row['patient type']; ?>
 </td>
 <td>
     <?php $id = $row['srno']; ?>
     <a href="./_delete.php?id=<?php $id ?>" class='delete-btn'>delete</a>
 </td>