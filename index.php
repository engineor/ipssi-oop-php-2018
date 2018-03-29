<?php

declare(strict_types=1);

use App\Collection\LecturerCollection;
use App\Entity\Lecturer;
use App\Exception\InvalidFirstnameException;
use App\Exception\InvalidSurnameException;
use App\ValueObject\Surname;

require __DIR__.'/vendor/autoload.php';

$lecturers = [];
try {
    $lecturers = [
        new Lecturer(new Surname('Cumming'), 'Andrew', 'c49', '2753'),
        new Lecturer(new Surname('Cumming'), 'Andrew', 'c49', '2753'),
    ];
} catch(InvalidFirstnameException $exception) {
    echo "Cas 1 : {$exception->getMessage()}\n";
} catch(InvalidSurnameException $exception) {
    echo "Cas 2 : {$exception->getMessage()}\n";
}

$lecturers = new LecturerCollection(...$lecturers);
?>
<table>
  <tr>
    <th>Name</th>
    <th>Office</th>
    <th>Phone</th>
  </tr>
<?php var_dump($lecturers) ?>
  <?php foreach ($lecturers as $lecturer): /* @var $lecturer Lecturer */ ?>
  <tr>
    <td><?php echo $lecturer->getName(); ?></td>
    <td><?php echo $lecturer->getOffice(); ?></td>
    <td><?php echo $lecturer->getPhone(); ?></td>
  </tr>
  <?php endforeach; ?>
</table>
