<a href="<?php echo $data["rootUrl"]?>add">Añadir</a>


		
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>TEL</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($data['persona'] as $p ){ ?> 
    <tr>
        <td> <?= $p->id ?>  </td>
        <td> <?= $p->nombre ?>  </td>
        <td> <?= $p->apellido ?>  </td>
        <td> <?= $p->tel ?>  </td>
        
    </tr>
<?php } ?>
    </tbody>
</table>



