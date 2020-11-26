<table id="vendas" class="table table-hover table-striped" style="border: 1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Empresa</th>
			<th>Plano</th>
			<th>Valor</th>
			<th>Data da venda</th>
			<th>Vendedor</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
				while($linha = mysqli_fetch_array($consulta_vendas)){
					echo '<td>'.$linha['nome_empresa'].'</td>';
					echo '<td>'.$linha['nome_plano'].'</td>';
					echo '<td>'.$linha['valor_plano'].'</td>';
					echo '<td>'.$linha['data_venda'].'</td>';
					echo '<td>'.$linha['usuario'].'</td>';
			?>
			<td>
				<a href="deleta_venda.php?id_venda=<?php echo $linha['id_venda']; ?>">
					<i class="fas fa-trash-alt"></i>
				</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<a class="btn btn-primary" href="?pagina=inserir_venda">Inserir nova venda</a>