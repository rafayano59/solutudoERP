<table id="empresas" class="table table-hover table-striped" style="border: 1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Nome empresa</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th>E-mail</th>
			<th>Estado</th>
			<th>Cidade</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
				while($linha = mysqli_fetch_array($consulta_empresas)){
					echo '<td>'.$linha['nome_empresa'].'</td>';
					echo '<td>'.$linha['telefone_empresa'].'</td>';
					echo '<td>'.$linha['endereco_empresa'].'</td>';
					echo '<td>'.$linha['email_empresa'].'</td>';
					echo '<td>'.$linha['estado_empresa'].'</td>';
					echo '<td>'.$linha['cidade_empresa'].'</td>';
			?>
			<td>
				<a href="?pagina=inserir_empresa&editar=<?php echo $linha['id_empresa']; ?>">
					<i class="fas fa-user-edit"></i>
				</a>
			</td>
			<td>
				<a href="deleta_empresa.php?id_empresa=<?php echo $linha['id_empresa']; ?>">
					<i class="fas fa-user-times"></i>
				</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<a class="btn btn-primary" href="?pagina=inserir_empresa">Inserir nova empresa</a>