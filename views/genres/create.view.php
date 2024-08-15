<?php include_once 'partials/header.php' ?>

<main class="container my-3 d-flex flex-column flex-grow-1 vh-100">
    <h1>Dodaj novi Zanr</h1>
    <hr>

    <form class="row g-3 mt-3" action="/genres/store" method="POST">
        <div class="col-auto">
            <label for="zanr" class="mt-1">Naziv Zanra</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="zanr" name="zanr"> <!-- $_POST['zanr'] => 'Novi zanr'; !-->
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Spremi</button>
        </div>
    </form>

</main>

<?php include_once 'partials/footer.php' ?>