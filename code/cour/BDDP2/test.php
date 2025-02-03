<!-- employees.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Employés</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .btn-add { background: #28a745; color: white; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; }
        .btn-action { background: none; border: none; cursor: pointer; margin: 0 5px; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f8f9fa; }
    </style>
</head>
<body>
    <div>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Informations des Employés</h2>
            <a href="ajouter_employe.php" class="btn-add">
                <i class="fas fa-user-plus"></i> Ajouter un Employé
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $employees = [
                    ['id' => 2, 'name' => "Victoria Ashworth", 'address' => "35 King George, London"],
                    ['id' => 3, 'name' => "Martin Blank", 'address' => "25, Rue Lauriston, Paris"],
                    ['id' => 4, 'name' => "Alain Gouiri", 'address' => "3 allee du Paradis"],
                    ['id' => 8, 'name' => "Thomas Demarcy", 'address' => "9 rue du Louvre"]
                ];

                foreach($employees as $employee): ?>
                    <tr>
                        <td><?php echo $employee['id']; ?></td>
                        <td><?php echo $employee['name']; ?></td>
                        <td><?php echo $employee['address']; ?></td>
                        <td>
                            <a href="voir_employe.php?id=<?php echo $employee['id']; ?>" class="btn-action text-blue">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="modifier_employe.php?id=<?php echo $employee['id']; ?>" class="btn-action text-green">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="supprimer_employe.php?id=<?php echo $employee['id']; ?>" class="btn-action text-red" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div style="margin-top: 40px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h2>Salaires</h2>
                <a href="ajouter_salaire.php" class="btn-add">
                    <i class="fas fa-plus-circle"></i> Ajouter un Salaire
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Salaire</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $salaries = [
                        ['id' => 2, 'salary' => 6500],
                        ['id' => 3, 'salary' => 8000],
                        ['id' => 4, 'salary' => 1200],
                        ['id' => 8, 'salary' => 25000]
                    ];

                    foreach($salaries as $salary): ?>
                        <tr>
                            <td><?php echo $salary['id']; ?></td>
                            <td><?php echo $salary['salary']; ?>€</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>