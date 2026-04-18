<?php
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serviceauto";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

if (isset($_POST['save'])) {
    $id = $_POST['id_reparatie'];
    $start = $_POST['data_start'];
    $final = $_POST['data_final'] ?: NULL;
    $cost = $_POST['cost'];
    $desc = $_POST['descriere'];
    $id_masina = $_POST['id_masina'];

    if (empty($id)) {
        $stmt = $conn->prepare("INSERT INTO tblReparatie (DataStart, DataFinal, Cost, Descriere, ID_Masina) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdsi", $start, $final, $cost, $desc, $id_masina);
    } else {
        $stmt = $conn->prepare("UPDATE tblReparatie SET DataStart=?, DataFinal=?, Cost=?, Descriere=?, ID_Masina=? WHERE ID_Reparatie=?");
        $stmt->bind_param("ssdsii", $start, $final, $cost, $desc, $id_masina, $id);
    }
    $stmt->execute();
    echo "<meta http-equiv='refresh' content='0'>";
}

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];

    if ($id > 0) {
        $conn->query("DELETE FROM tblReparatie_Mecanic WHERE ID_Reparatie = $id");
        $conn->query("DELETE FROM tblReparatie WHERE ID_Reparatie = $id");
    } else {
        echo "<div class='alert alert-warning'>ID invalid!</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Programări - Reparații</h2>
    <form method="POST" class="mb-5">
        <input type="hidden" name="id_reparatie" value="<?php echo $_GET['edit'] ?? ''; ?>">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Data Start</label>
                <input type="date" name="data_start" class="form-control" required>
            </div>
            <div class="form-group col-md-3">
                <label>Data Final</label>
                <input type="date" name="data_final" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label>Cost</label>
                <input type="number" step="0.01" name="cost" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label>Descriere</label>
                <input type="text" name="descriere" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label>Mașina</label>
                <select name="id_masina" class="form-control" required>
                    <?php
                    $cars = $conn->query("SELECT ID_Masina, NrInmatriculare FROM tblMasina");
                    while ($car = $cars->fetch_assoc()) {
                        echo "<option value='{$car['ID_Masina']}'>{$car['NrInmatriculare']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" name="save" class="btn btn-primary">Salvează</button>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data Start</th>
                <th>Data Final</th>
                <th>Cost</th>
                <th>Descriere</th>
                <th>Nr Înmatriculare</th>
                <th>Acțiuni</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT r.*, m.NrInmatriculare FROM tblReparatie r
                JOIN tblMasina m ON r.ID_Masina = m.ID_Masina";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['ID_Reparatie']}</td>
                <td>{$row['DataStart']}</td>
                <td>{$row['DataFinal']}</td>
                <td>{$row['Cost']}</td>
                <td>{$row['Descriere']}</td>
                <td>{$row['NrInmatriculare']}</td>
                <td>
                <a href='?edit={$row['ID_Reparatie']}' class='btn btn-sm btn-warning'>Edit</a>
                <a href='?delete={$row['ID_Reparatie']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Sigur vrei să ștergi?\");'>Șterge</a>
            </td>
        </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>

<?php $conn->close(); ?>