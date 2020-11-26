

<table id="planos" class="table table-hover table-striped" style="border: 1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Nome plano</th>
			<th>Valor</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<?php
				while($linha = mysqli_fetch_array($consulta_planos)){
					echo '<td>'.$linha['nome_plano'].'</td>';
					echo '<td>'.$linha['valor_plano'].'</td>';
			?>
			<td>
				<a href="?pagina=inserir_plano&editar=<?php echo $linha['id_plano']; ?>">
					<i class="fas fa-edit"></i>
				</a>
			</td>
			<td>
				<a href="deleta_plano.php?id_plano=<?php echo $linha['id_plano']; ?>">
					<i class="fas fa-trash-alt"></i>
				</a>
			</td>
		</tr>
			<?php
				}
			?>
	</tbody>
</table>
<a class="btn btn-primary" href="?pagina=inserir_plano">Inserir novo plano</a>
