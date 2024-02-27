<?php if(isset($hotel)): ?>
  <tr>
    <td><?= $hotel['name'] ?></td>
    <td><?= $hotel['description'] ?></td>
    <td class="text-center"><?= $hotel['parking'] ? 'Sì' : 'No' ?></td>
    <td class="text-center"><?= $hotel['vote'] ?></td>
    <td class="text-center"><?= $hotel['distance_to_center'] ?></td>
  </tr>
</tbody>
<?php endif; ?>