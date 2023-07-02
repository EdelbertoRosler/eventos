<?php
    $session = session();
?>
<div class="container">
    <p>
        Olá <?=$session->get('user_name');?>
    </p>
    <p>
        <a href="<?=base_url().'logout'?>">Sair</a>
    </p>
</div>