<?php 
    use App\Models\CpuModel;

    $cpu = new CpuModel('cpu_intel');
?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Famille</th>
            <th>Modèle</th>
            <th>Fréquence de base</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($cpu->getCPU() as $key => $value) : ?>
                <td><?= $value->cpu_id ?></td>
            <?php endforeach ?>
        </tr>
    </tbody>
</table>