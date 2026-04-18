<?php include 'header.php'; ?>
<?php
session_start();
$conn = new mysqli("localhost", "root", "", "serviceauto");

if (!isset($_SESSION['proprietar'])) {
    header("Location: login.php");
    exit;
}

$proprietar_id = $_SESSION['proprietar']['ID_Proprietar'];
?>

<div class="container mt-5">
    <h2 class="mb-4">Adaugă Mașină</h2>
    <form method="POST" class="mb-5">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Număr Înmatriculare</label>
                <input type="text" name="nr_inmatriculare" class="form-control" required>
            </div>
            <div class="form-group col-md-3">
                <label>Marcă</label>
                <input type="text" name="marca" class="form-control" required>
            </div>
            <div class="form-group col-md-3">
                <label>Model</label>
                <input type="text" name="model" class="form-control" required>
            </div>
            <div class="form-group col-md-2">
                <label>An fabricație</label>
                <input type="number" name="an_fabricatie" class="form-control" required>
            </div>
        </div>
        <button type="submit" name="add_masina" class="btn btn-success">Adaugă Mașină</button>
    </form>

    <?php
    if (isset($_POST['add_masina'])) {
        $nr = $_POST['nr_inmatriculare'];
        $marca = $_POST['marca'];
        $model = $_POST['model'];
        $an = $_POST['an_fabricatie'];

        $stmt = $conn->prepare("INSERT INTO tblMasina (NrInmatriculare, Marca, Model, AnFabricatie, ProprietarID) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssii", $nr, $marca, $model, $an, $proprietar_id);
        $stmt->execute();

        echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>

    <h2 class="mb-4">Toate Mașinile</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Număr Înmatriculare</th>
                <th>Marcă</th>
                <th>Model</th>
                <th>An fabricație</th>
                <th>Proprietar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT m.NrInmatriculare, m.Marca, m.Model, m.AnFabricatie,
                           CONCAT(p.Nume, ' ', p.Prenume) as Proprietar
                    FROM tblMasina m
                    JOIN tblProprietar p ON m.ProprietarID = p.ID_Proprietar";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>'.htmlspecialchars($row["NrInmatriculare"]).'</td>
                        <td>'.htmlspecialchars($row["Marca"]).'</td>
                        <td>'.htmlspecialchars($row["Model"]).'</td>
                        <td>'.htmlspecialchars($row["AnFabricatie"]).'</td>
                        <td>'.htmlspecialchars($row["Proprietar"]).'</td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
