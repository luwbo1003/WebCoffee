<?php if (!empty($data['cus'])) :
    $i = 0; ?>
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">first name</th>
                <th scope="col">last name</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($data['cus'] as $cus) : extract($cus); ?>
                <tr>
                    <th scope="row"><?= $cus_id ?></th>
                    <td><?= $firstname ?></td>
                    <td><?= $lastname ?></td>
                    <td class="text-center utility">
                        <div class="d-flex justify-content-center">
                            <form action="<?= URLROOT ?>/Manage/showEdit/<?= $user_id ?>" method="POST">
                                <button name="editCustomer" type="submit" class="material-symbols-outlined edit border border-0 bg-white">edit</button>
                            </form>
                            <form action="<?= URLROOT ?>/Manage/deleteCustomer/<?= $user_id ?>" method="POST">
                                <button name="deleteCustomer" type="submit" class="material-symbols-outlined delete border border-0 bg-white">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<?php require_once APPROOT . '/views/includes/pagination.php'; ?>
