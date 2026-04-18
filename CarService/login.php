<?php include 'header.php'; ?>
<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
$conn = new mysqli("localhost", "root", "", "serviceauto");

if ($conn->connect_error) {
    die("Eroare conexiune DB: " . $conn->connect_error);
}

$mesaj = "";

if (isset($_POST['register'])) {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $parola = password_hash($_POST['parola'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO tblProprietar (Nume, Prenume, Email, Telefon, Parola) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nume, $prenume, $email, $telefon, $parola);

    if ($stmt->execute()) {
        $mesaj = "<div class='alert alert-success'>Înregistrare cu succes! Acum te poți loga.</div>";
    } else {
        $mesaj = "<div class='alert alert-danger'>Eroare la înregistrare: Email posibil deja folosit.</div>";
    }

    $stmt->close();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    $stmt = $conn->prepare("SELECT * FROM tblProprietar WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $rez = $stmt->get_result();

    if ($rez->num_rows === 1) {
        $user = $rez->fetch_assoc();
        if (password_verify($parola, $user['Parola'])) {
            $_SESSION['proprietar'] = $user;
        } else {
            $mesaj = "<div class='alert alert-danger'>Parolă incorectă.</div>";
        }
    } else {
        $mesaj = "<div class='alert alert-danger'>Email invalid.</div>";
    }
}
?>

<div class="container mt-5">
    <?= $mesaj ?>

    <?php if (!isset($_SESSION['proprietar'])): ?>
    <div class="row">
        <div class="col-md-6">
            <h4>Autentificare</h4>
            <form method="POST">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Parolă:</label>
                    <input type="password" name="parola" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary mt-2">Login</button>
            </form>
        </div>

        <div class="col-md-6">
            <h4>Înregistrare</h4>
            <form method="POST">
                <div class="form-group">
                    <label>Nume:</label>
                    <input type="text" name="nume" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Prenume:</label>
                    <input type="text" name="prenume" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Telefon:</label>
                    <input type="text" name="telefon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Parolă:</label>
                    <input type="password" name="parola" class="form-control" required>
                </div>
                <button type="submit" name="register" class="btn btn-success mt-2">Înregistrare</button>
            </form>
        </div>
    </div>
    <?php else: ?>
        <div class="card mb-4">
            <div class="card-body">
                <h5>Bine ai venit, <?= htmlspecialchars($_SESSION['proprietar']['Prenume'] . ' ' . $_SESSION['proprietar']['Nume']) ?>!</h5>
                <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['proprietar']['Email']) ?></p>
                <p><strong>Telefon:</strong> <?= htmlspecialchars($_SESSION['proprietar']['Telefon']) ?></p>
                <a href="?logout=1" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <?php
        
        $id = $_SESSION['proprietar']['ID_Proprietar'];
        $masini = $conn->prepare("SELECT NrInmatriculare, Marca, Model, AnFabricatie FROM tblMasina WHERE ProprietarID = ?");
        $masini->bind_param("i", $id);
        $masini->execute();
        $rez_masini = $masini->get_result();
        ?>

        <h4>Mașinile tale:</h4>
        <?php if ($rez_masini->num_rows > 0): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Număr Înmatriculare</th>
                        <th>Marcă</th>
                        <th>Model</th>
                        <th>An fabricație</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $rez_masini->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['NrInmatriculare']) ?></td>
                            <td><?= htmlspecialchars($row['Marca']) ?></td>
                            <td><?= htmlspecialchars($row['Model']) ?></td>
                            <td><?= htmlspecialchars($row['AnFabricatie']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nu ai nicio mașină înregistrată.</p>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<?php include 'footer.php'; ?>
