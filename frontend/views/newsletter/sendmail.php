<h2>Пришел новый заказ</h2>
<div class="container">
	<div class="row">
		<div class="col-md-6">Ширина</div>
		<div class="col-md-6"><?=$width; ?></div>
	</div>
</div>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ширина</td>
      <td><?=$width; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Высота</td>
      <td><?=$height; ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Количество камер</td>
      <td><?=$chamber; ?></td>
    </tr>

        <tr>
      <th scope="row">3</th>
      <td colspan="2">Общее количество створок</td>
      <td><?=$sash; ?></td>
    </tr>

        <tr>
      <th scope="row">3</th>
      <td colspan="2">Количество поворотных створок </td>
      <td><?=$sash1; ?></td>
    </tr>


        <tr>
      <th scope="row">3</th>
      <td colspan="2">Цвет </td>
      <td><?=$color; ?></td>
    </tr>


        <tr>
      <th scope="row">3</th>
      <td colspan="2">Наличие подоконника</td>
      <td><?=$sill; ?></td>
    </tr>

            <tr>
      <th scope="row">3</th>
      <td colspan="2">email заказчика</td>
      <td><?=$email; ?></td>
    </tr>

            <tr>
      <th scope="row">3</th>
      <td colspan="2">Имя заказчика</td>
      <td><?=$name; ?></td>
    </tr>
  </tbody>
</table>