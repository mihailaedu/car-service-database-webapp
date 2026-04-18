<?php include 'header.php'; ?>
<div class="container mt-5">
    <h2 class="mb-4">Lista Mecanicilor</h2>

    <div class="form-group mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Caută mecanic după nume...">
    </div>

    <table class="table table-striped" id="mecanicTable">
        <thead>
            <tr>
                <th>Nume</th>
                <th>Specializare</th>
                <th>Experiență (ani)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT Nume, Specializare, AnExperienta FROM tblMecanic";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='nume'>{$row['Nume']}</td>
                        <td>{$row['Specializare']}</td>
                        <td>{$row['AnExperienta']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script>
document.getElementById('searchInput').addEventListener('keyup', function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#mecanicTable tbody tr');

    rows.forEach(row => {
        const nume = row.querySelector('.nume').textContent.toLowerCase();
        if (nume.includes(filter)) {
            row.style.display = '';
            row.classList.add('table-success'); // evidențiere
        } else {
            row.style.display = 'none';
            row.classList.remove('table-success');
        }
    });
});
</script>

<?php include 'footer.php'; ?>