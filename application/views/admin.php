<?php include('Admin_Header.php') ?>
<div class="container">
    
    <table class="table table-striped table-hover" style="background-color:white;">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Father's Name</th>
      <th>Seat Number</th>
      <th>Program</th>
      <th>Time</th>
      <th>Year</th>
    </tr>
  </thead>
  <tbody>
  <?php if( count($student_data) ){
        foreach($student_data as $data){?>
    <tr>
      <td><?= $data['ID'] ;?></td>
      <td><?= $data['Name'] ;?></td>
      <td><?= $data['FatherName'] ;?></td>
      <td><?= $data['SeatNumber'] ;?></td>
      <td><?= $data['Program'] ;?></td>
      <td><?= $data['Time'] ;?></td>
      <td><?= $data['Year'] ;?></td>
    </tr>
    <?php }}?>
    </tbody>
</table> 
</div>
</body>
</html>
