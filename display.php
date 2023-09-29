<table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>movie title</th>
         <th>length</th>
         <th>trailer</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){ 
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['title']??''; ?></td>
      <td><?php echo $data['length']??''; ?></td>
      <td><?php echo $data['trailer']??''; ?></td>
       
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>