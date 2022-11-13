 <?php if (!empty($data['prod'])) :
        $i = 0; ?>
     <div class="table-responsive">
         <table class=" table table-hover align-middle">
             <thead>
                 <tr>
                     <th scope="col" colspan="2">id</th>
                     <th scope="col">product</th>
                     <th scope="col" colspan="2">category</th>
                 </tr>
             </thead>
             <tbody class="table-group-divider">
                 <?php foreach ($data['prod'] as $prod) : extract($prod); ?>
                     <tr>
                         <th scope="row"><?= $pro_id ?></th>
                         <td><img src="<?= IMAGE ?>/<?= $data['image'][$i]['img_link'] ?>" alt="" class="product-thumbnail"></td>
                         <td><?= $pro_name ?></td>
                         <td><?= $data['category'][$i][0]['cate_name'] ?></td>
                         <td class="text-center utility">
                             <div class="d-flex justify-content-center">
                                 <form action="<?= URLROOT ?>/Manage/showEdit/<?= $pro_id ?>" method="POST">
                                     <button name="editProduct" type="submit" class="material-symbols-outlined edit border border-0 bg-white">edit</button>
                                 </form>
                                 <form action="<?= URLROOT ?>/Manage/deleteProduct/<?= $pro_id ?>" method="POST">
                                     <button name="deleteProduct" type="submit" class="material-symbols-outlined delete border border-0 bg-white">delete</button>
                                 </form>
                             </div>
                         </td>
                     </tr>
                 <?php $i++;
                    endforeach; ?>
             </tbody>
         </table>
     </div>
 <?php endif; ?>

<?php require_once APPROOT . '/views/includes/pagination.php'; ?>
