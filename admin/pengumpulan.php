<?php

include "../koneksi.php";
include "../template/header.php";
$jumlahData=count(query("SELECT * FROM kumpul GROUP BY tgl"));
$mulai=$jumlahData-10;
$tanggal = '2021-09-26';
$pesawat=query("SELECT tgl, SUM(sampah) AS pesawat  FROM kumpul WHERE tgl = '2021/09/29' AND sumber = 'pesawat'  GROUP BY tgl ");
$terminal=query("SELECT tgl, SUM(sampah) AS terminal FROM kumpul WHERE tgl = '2021/09/29'  AND sumber = 'Terminal'  GROUP BY tgl ");
$gudang=query("SELECT tgl, SUM(sampah) AS gudang FROM kumpul WHERE tgl = '2021/09/29' AND sumber = 'Gudang'  GROUP BY tgl ");
?>


    <h1>Pengumpulan</h1>
    <div class="container">
  <div class="row" style="text-align:center;">
    <div class="col-md-auto">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>      
      <th scope="col">Pesawat</th>
    </tr>
  </thead>
  <tbody>  
     <?php $i = 1 ;?>
      <?php foreach($pesawat as $row): ?>     
        <tr>
            <td><?= $i; ?></td>          
            <td><?= $row['tgl']; ?></td>           
            <td><?= $row['pesawat']; ?></td>            
            <?php $i++ ;?>
        </tr>
      <?php endforeach ; ?>         
  </tbody>
</table>
    </div>
<div class="col-md-auto">
    <table class="table">
  <thead>
    <tr>
        
     
      <th scope="col">Terminal</th>
    </tr>
  </thead>
  <tbody>  
 
      <?php foreach($terminal as $row): ?>     
        <tr>
                
                     
            <td><?php echo $row['terminal']; ?></td>            
         
      <?php endforeach ; ?>         
  </tbody>
</table>
</div>
<div class="col-md-auto">
    <table class="table">
        <thead>
            <tr>
                
           
            <th scope="col">Tgl</th>
            <th scope="col">Terminal</th>
             
            </tr>
        </thead>
        <tbody>  
            
            <?php foreach($gudang as $row): ?>     
                <tr>
                            
                    <td><?= $row['id']; ?></td>            
                    <td><?php if($row['gudang']!==''){
                     echo "kosong";
                    }else {echo "ada" ; } ?></td>            
                    
                </tr>
            <?php endforeach ; ?>         
        </tbody>
    </table>
    </div>
  </div>
</div> 

<?php
include "../template/footer.php";
?>
