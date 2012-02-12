<table>


<thead>
<tr>
<th>Nombre</th>
<th>Ciudad</th>

</tr>
</thead>
<tbody>
<?php foreach ($raeList as $row): ?>


<tr>
<td><?php echo $row['Rae']['name'];?></td>
<td><?php echo $row['Rae']['city'];?></td>
</tr>

<?php endforeach; ?>





</tbody>
</table>


