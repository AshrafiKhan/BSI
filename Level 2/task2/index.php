<?php
require_once('db/db_conn.php');
require_once('components/header.php');

include("components/navbar.php");

include("components/message.php");
?>
<div class="container d-flex justify-content-center flex-column text-center align-items-center my-5">
    <h3 class="my-2 text-capitalize">
        Please login first to access secure page.
    </h3>
    <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero debitis, dicta culpa quibusdam mollitia perferendis ducimus. Earum nam libero soluta omnis odio atque cumque deserunt nihil, sunt placeat iure doloremque dolor error consectetur distinctio ducimus quod eos nemo hic rerum eaque voluptate. Voluptatum illo amet officiis eius veniam assumenda non.</p>
</div>
<?php
require_once('components/footer.php');
?>