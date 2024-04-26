<?php
$current_page = '/profile/client';
require base_path("app/views/partials/head.php");
?>

<!-- navingation -->
<div class="go-back position-absolute">
    <a href="/profile">
        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="none">
            <path d="M5 12H19M5 12L11 6M5 12L11 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>
</div>

<!-- add a new project for client -->
<section class="container pt-5 pb-5">
    <div class="border border-3 border-secondary p-3 rounded-3 mb-4 mb-md-0">
        <div class="card-body mb-3">
            <p class="mb-4">
                <span class="text-primary font-italic me-1">Create a project</span>
            </p>
            <form method="POST" action="/profile/client">
                <input type="hidden" name="add_project">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="<?= htmlentities('') ?>">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="price" value="<?= htmlentities('') ?>">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select type="text" class="form-control" name="category" id="category">
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select type="text" class="form-control" name="status" id="status">
                        <option value="Active">Active</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        <div class="card-footer px-3 py-1 rounded-3 border border-secondary border-3">
            <div class="overflow-auto" style="height: 170px;">
                <div class="d-flex flex-column gap-4 py-2 rounded-3">
                    <?php foreach ($projects as $project) : ?>
                        <div>
                            <span class="badge bg-warning my-2"><?= $project['category_name'] ?></span>
                            <span class="badge bg-success my-2">$<?= $project['price'] ?></span>
                            <div class="text-light bg-secondary p-2 rounded-2"><?= $project['description'] ?></div>
                            <span class="badge <?= $project['status'] == 'Active' ? "bg-success" : "bg-secondary"  ?> my-2"><?= $project['status'] ?></span>
                            <span class="badge bg-primary my-2"><?= $project['date'] ?></span>
                            <div class="form-actions d-flex gap-2">
                                <form method="POST" action="/profile/client">
                                    <input type="hidden" name="remove_project" value="<?= htmlentities($project['project_id']) ?>">
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                                <form method="GET" action="/profile/client/edit">
                                    <input type="hidden" name="edit_project" value="<?= htmlentities($project['project_id']) ?>">
                                    <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach;  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require base_path("app/views/partials/foot.php"); ?>